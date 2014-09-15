APF.Namespace.register("kfstouch.map"); (function($, M, C) {
	M.Search = function(params) {
		this.initParams(params);
		this.initMap();
		this.initEvents();
		this.initHeader();
		this.resetScrollTo()
	};
	M.Search.prototype = {
		constructor: M.Search,
		initHeader: function() {
			var _this = this;
			this.sheader = new C.SingleHeader();
			this.kwSearch = new C.Search({
				url: window.location.href,
				suggesturl: this.suggestUrl,
				redirectEvent: function(kw) {
					_this.searchKw(kw);
					this.hideSearch()
				},
				hideSearch: function() {
					_this.resetScrollTo()
				}
			});
			this.sheader.on("gDoSearch", "click",
			function() {
				_this.kwSearch.showSearch()
			});
			$(window).on("load",
			function() {
				var h = $(window).height() - 47;
				$("#" + _this.ops.domId).height(h)
			})
		},
		resetScrollTo: function() {
			var scrollTop = document.body.scrollTop;
			document.body.scrollTop = scrollTop - 100;
			document.body.scrollTop = scrollTop;
			setTimeout(function() {
				window.scrollTo(0, 0)
			},
			500)
		},
		initParams: function(p) {
			this.ops = {
				domId: p.mapId,
				gpsId: $("#" + p.gpsId),
				gps: p.gps,
				noLoupanId: $("#" + p.noLoupanId),
				loadingId: $("#" + p.loadingId),
				mapPopuId: $("#" + p.mapPopuId),
				cityList: p.cityList,
				noGPS: $("#noGPS")
			};
			this.cityInfo = {
				lat: p.cityInfo.lat || "",
				lng: p.cityInfo.lng || "",
				cityId: p.cityInfo.cityId || 0,
				cityName: p.cityInfo.cityName || "",
				zoom: p.cityInfo.zoom || 10
			};
			this.runSwitch = null;
			this.gatherAll = [];
			this.cityAll = [];
			this.simpleAll = [];
			this.simpleMap = {};
			this.complexAll = [];
			this.complexMap = {};
			this.persionAll = [];
			this.buildLoupanUrl = p.buildLoupanUrl;
			this.searchAjaxUrl = p.searchAjaxUrl;
			this.searchKeyWordsUrl = p.searchKeyWordsUrl;
			this.suggestUrl = p.suggestUrl;
			this.myGeo = new BMap.Geocoder();
			this.searchData = {};
			this.searchAll = [];
			this.moveStartX = 0;
			this.moveStartY = 0;
			this.moveX = 0;
			this.moveY = 0;
			this.pageName = $("head").data("page")
		},
		resetMove: function() {
			this.moveStartX = 0;
			this.moveStartY = 0;
			this.moveX = 0;
			this.moveY = 0
		},
		initMap: function() {
			this.map = new BMap.Map(this.ops.domId, {
				enableMapClick: false
			});
			var point = new BMap.Point(this.cityInfo.lng, this.cityInfo.lat);
			this.map.centerAndZoom(point, this.cityInfo.zoom)
		},
		initEvents: function() {
			var _this = this;
			this.map.addEventListener("moveend", $.proxy(this.runEvent, this));
			this.map.addEventListener("zoomend", $.proxy(this.runEvent, this));
			this.ops.gpsId.on("click",
			function() {
				_this.gpsClick.apply(_this)
			});
			this.ops.loadingId.on("touchmove",
			function(e) {
				e.preventDefault()
			});
			this.ops.gpsId.on("touchmove",
			function(e) {
				e.preventDefault()
			});
			this.ops.noLoupanId.on("touchmove",
			function(e) {
				e.preventDefault()
			});
			this.ops.noGPS.on("touchmove",
			function(e) {
				e.preventDefault()
			});
			$(document).on("touchmove",
			function(e) {
				_this.viewLabel(0)
			});
			this.ops.noGPS.find("div").eq(1).on("click",
			function() {
				console.log($(this));
				_this.ops.noGPS.hide();
				_this.ops.loadingId.hide()
			});
			this.runEvent();
			if (this.ops.gps == "true") {
				this.ops.gpsId.click()
			}
		},
		searchKw: function(kw) {
			var _this = this;
			if (kw != "" && kw != "undifend") {
				$.ajax({
					url: this.searchKeyWordsUrl,
					type: "get",
					data: {
						q: kw
					},
					dataType: "json",
					success: function(data) {
						if (data.type == 1 || data.type == 2) {
							var lng = data.data.baidu_lng;
							var lat = data.data.baidu_lat;
							var isLoupan = data.type == 1 ? 1 : 0;
							T.trackEvent(_this.pageName + "_Search_Tools", "{'key':'search-tools','keyword':'" + kw + "','result':'success', 'isLoupan':'" + isLoupan + "'}");
							if (lng && lat) {
								if (typeof data.data.loupan_id == "undifend") {
									_this.cleanSearchKw(1)
								} else {
									_this.cleanSearchKw(data.data.loupan_id)
								}
								_this.searchData = data.data;
								_this.map.setZoom(16);
								_this.map.panTo(new BMap.Point(lng, lat))
							}
						} else {
							_this.cleanSearchKw(1);
							_this.viewLabel(3);
							T.trackEvent(_this.pageName + "_Search_Tools", "{'key':'search-tools',keyword:'" + kw + "',result:'fail'}")
						}
						_this.resetScrollTo()
					},
					error: function(xhr, type) {
						console.log("ajax失败");
						T.trackEvent(_this.pageName + "_Search_Tools", "{'key':'search-tools',keyword:'" + kw + "',result:'fail'}")
					}
				})
			}
		},
		cleanSearchKw: function(loupanId) {
			if (loupanId < 1) {
				return
			}
			var p = this.getAjaxParams(),
			zoom = p.zoom,
			lMap = null,
			lAll = null;
			if (zoom <= 15) {
				lMap = this.simpleMap;
				lAll = this.simpleAll
			} else {
				lMap = this.complexMap;
				lAll = this.complexAll
			}
			if (loupanId == 1) {
				if (lMap[this.searchData.loupan_id] >= 0 && lAll[lMap[this.searchData.loupan_id]]) {
					lAll[lMap[this.searchData.loupan_id]].change(function() {
						$(this).removeClass("label3")
					})
				}
				this.searchData.loupan_id = 0
			} else {
				if (lMap[loupanId] >= 0) {
					if (typeof this.searchData.loupan_id == "undifend" || loupanId != this.searchData.loupan_id) {
						if (lAll[lMap[this.searchData.loupan_id]]) {
							lAll[lMap[this.searchData.loupan_id]].change(function() {
								$(this).removeClass("label3")
							})
						}
					}
				}
			}
		},
		getAjaxParams: function() {
			bounds = this.map.getBounds();
			var ne = bounds.getNorthEast();
			var sw = bounds.getSouthWest();
			var zoom = this.map.getZoom();
			return {
				swlat: sw.lat,
				swlng: sw.lng,
				nelat: ne.lat,
				nelng: ne.lng,
				zoom: zoom
			}
		},
		getCenter: function() {
			var center = this.map.getCenter();
			return {
				lng: center.lng,
				lat: center.lat
			}
		},
		runEvent: function() {
			var _this = this;
			if (this.runSwitch != null) {
				clearTimeout(this.runSwitch)
			}
			this.runSwitch = setTimeout(function() {
				_this.nearLoupan();
				this.runSwitch = null
			},
			500)
		},
		nearLoupan: function() {
			var _this = this;
			var url = this.searchAjaxUrl;
			var params = _this.getAjaxParams();
			if (params.zoom <= 13) {
				this.overlayView(0, this.simpleAll);
				this.overlayView(0, this.complexAll)
			} else {
				this.overlayView(0, this.cityAll);
				this.overlayView(0, this.gatherAll)
			}
			if (params.zoom <= 9) {
				this.overlayView(0, this.gatherAll);
				if (this.cityAll.length > 0) {
					this.overlayView(1, this.cityAll);
					return
				}
			} else {
				if (params.zoom <= 13) {
					this.overlayView(0, this.cityAll);
					if (this.gatherAll.length > 0) {
						this.overlayView(1, this.gatherAll);
						return
					}
				} else {
					if (params.zoom <= 15) {
						this.overlayView(0, this.complexAll)
					} else {
						if (params.zoom <= 18) {
							this.overlayView(0, this.simpleAll)
						} else {
							return
						}
					}
				}
			}
			this.viewLabel(1);
			$.ajax({
				type: "GET",
				url: url,
				data: params,
				dataType: "json",
				success: function(data) {
					_this.viewLabel(0);
					_this.drawMap.apply(_this, [data, params])
				},
				error: function(xhr, type) {
					console.log("Ajax error!")
				}
			})
		},
		drawMap: function(data, params) {
			if (params.zoom <= 13) {
				this.drawGather.call(this, data, params.zoom)
			} else {
				if (params.zoom <= 18) {
					this.drawLoupan.call(this, data, params.zoom)
				} else {
					return
				}
			}
		},
		drawGather: function(data, zoom) {
			var html = "";
			if (Array.isArray(data.gather)) {
				return
			}
			for (var k in data.gather) {
				if (data.gather[k].loupan_count < 1) {
					continue
				}
				var le = zoom <= 9 ? this.cityAll.length: this.gatherAll.length;
				html = "<div class='circlebox' data-lat='" + data.gather[k].baidu_lat + "' data-lng='" + data.gather[k].baidu_lng + "'";
				html += "data-typeId='" + data.gather[k].TypeId + "'><em>" + data.gather[k].TypeName + "</em>" + data.gather[k].loupan_count + "个新盘</div>";
				var ga = new M.MyOverlay({
					lat: data.gather[k].baidu_lat,
					lng: data.gather[k].baidu_lng
				},
				html, "");
				if (zoom <= 9) {
					this.cityAll[le] = ga
				} else {
					this.gatherAll[le] = ga
				}
				this.map.addOverlay(ga);
				var _this = this;
				ga.on("touchstart",
				function(e) {
					_this.resetMove();
					var touch = event.touches[0];
					_this.moveStartX = touch.pageX;
					_this.moveStartY = touch.pageY
				});
				ga.on("touchmove",
				function(e) {
					var touch = e.touches[0];
					_this.moveX = Math.abs(_this.moveStartX - touch.pageX);
					_this.moveY = Math.abs(_this.moveStartY - touch.pageY);
					console.log(_this.moveX, _this.moveY)
				});
				ga.on("touchend",
				function(e) {
					if (_this.moveX < 5 && _this.moveY < 5) {
						_this.map.setZoom(zoom <= 9 ? 10 : 14);
						_this.map.panTo(new BMap.Point($(this).data("lng"), $(this).data("lat")))
					}
				})
			}
		},
		drawLoupan: function(data, zoom) {
			var html = "",
			lMap = null,
			lAll = null;
			if (data.total < 1) {
				this.viewLabel(2);
				return
			}
			if (zoom <= 15) {
				lMap = this.simpleMap;
				lAll = this.simpleAll
			} else {
				lMap = this.complexMap;
				lAll = this.complexAll
			}
			for (var k in data.rows) {
				var loupanId = data.rows[k].loupan_id;
				if (lMap[loupanId] >= 0) {
					if (typeof this.searchData.loupan_id != "undifend" && loupanId == this.searchData.loupan_id) {
						lAll[lMap[loupanId]].change(function() {
							$(this).addClass("label3")
						})
					} else {
						lAll[lMap[loupanId]].change(function() {
							$(this).removeClass("label3")
						})
					}
					lAll[lMap[loupanId]].show();
					continue
				}
				var le = zoom <= 15 ? this.simpleAll.length: this.complexAll.length;
				html = this.buildLoupanHtml(data.rows[k], zoom, le);
				var lp = new M.MyOverlay({
					lat: data.rows[k].baidu_lat,
					lng: data.rows[k].baidu_lng
				},
				html, "");
				if (zoom <= 15) {
					this.simpleAll[le] = lp;
					this.simpleMap[data.rows[k].loupan_id] = le
				} else {
					this.complexAll[le] = lp;
					this.complexMap[data.rows[k].loupan_id] = le
				}
				this.map.addOverlay(lp);
				var _this = this;
				lp.on("touchstart",
				function(e) {
					_this.resetMove();
					var touch = event.touches[0];
					_this.moveStartX = touch.pageX;
					_this.moveStartY = touch.pageY
				});
				lp.on("touchmove",
				function(e) {
					var touch = e.touches[0];
					_this.moveX = Math.abs(_this.moveStartX - touch.pageX);
					_this.moveY = Math.abs(_this.moveStartY - touch.pageY)
				});
				lp.on("touchend",
				function(e) {
					if (_this.moveX < 5 && _this.moveY < 5) {
						var loupanId = $(this).data("loupanid");
						window.location.href = _this.buildLoupanUrl(loupanId);
						return
					}
				});
				lp.setInfo(data.rows[k]);
				if (typeof this.searchData.loupan_id != "undifend" && loupanId == this.searchData.loupan_id) {
					lp.change(function() {
						$(this).addClass("label3")
					})
				} else {
					lp.change(function() {
						$(this).removeClass("label3")
					})
				}
			}
		},
		buildLoupanHtml: function(data, zoom, le) {
			var html = "",
			color = "label1",
			name = "",
			price = "",
			unit_price = parseInt(data.unit_price);
			price = unit_price == 0 ? "售价待定": (unit_price > 0 && unit_price < 10000 ? unit_price + "元/平": parseFloat((unit_price / 10000).toFixed(1)) + "万元/平");
			if (data.is_pay == true) {
				color = "label2";
				name = data.loupan_name
			}
			if (zoom <= 15) {
				html = "<div class='lb loupanfix bn " + color + "' data-loupanid='" + data.loupan_id + "'>" + price + "&nbsp;" + name + "<b></b></div>"
			} else {
				name = data.loupan_name;
				html = "<div class='lb loupanfix bn " + color + "' data-loupanid='" + data.loupan_id + "'>" + name + "<br />" + price + "<b></b></div>"
			}
			return html
		},
		overlayView: function(type, obj) {
			if (Array.isArray(obj)) {
				for (var k in obj) {
					if (type == 0) {
						obj[k].hide()
					} else {
						obj[k].show()
					}
				}
			}
			return
		},
		viewLabel: function(type) {
			var html = "";
			if (type == 0) {
				this.ops.loadingId.hide();
				this.ops.noLoupanId.hide()
			} else {
				if (type == 1) {
					this.ops.loadingId.show();
					this.ops.noLoupanId.hide()
				} else {
					if (type == 2 || type == 3) {
						html = type == 2 ? "当前可视范围<br />没有楼盘": "没有找到<br />该楼盘";
						this.ops.loadingId.hide();
						this.ops.noLoupanId.empty().html("<div class='ll'>" + html + "</div>");
						this.ops.noLoupanId.show()
					} else {
						html = type;
						this.ops.loadingId.hide();
						this.ops.noLoupanId.empty().html("<div class='ll'>" + html + "</div>");
						this.ops.noLoupanId.show();
						return
					}
				}
			}
		},
		showPerson: function(lat, lng) {
			if (this.persionAll.length > 0) {
				for (var k in this.persionAll) {
					this.map.removeOverlay(this.persionAll[k])
				}
			}
			var html = "<div class='p-icon'></div>";
			var ps = new M.MyOverlay({
				lat: lat,
				lng: lng
			},
			html, "");
			this.persionAll.push(ps);
			this.map.addOverlay(ps)
		},
		checkCity: function(lng, lat) {
			var _this = this;
			this.myGeo.getLocation(new BMap.Point(lng, lat),
			function(result) {
				if (result) {
					var cityName = result.addressComponents.city.replace("市", "");
					var curName = _this.cityInfo.cityName.replace("市", "");
					if (cityName != "" && cityName != curName) {
						var cityAlias = "";
						var curAlias = "";
						for (var k in _this.ops.cityList) {
							if (cityName == _this.ops.cityList[k]) {
								cityAlias = k
							}
							if (_this.cityInfo.cityName == _this.ops.cityList[k]) {
								curAlias = k
							}
						}
						if (cityAlias) {
							var html = "当前选择城市是" + curName;
							var change = "切换到" + cityName;
							var dp = _this.ops.mapPopuId.find("p").eq(0);
							var da = _this.ops.mapPopuId.find("a").eq(1);
							da.data("href", window.location.href.replace("/" + curAlias + "/", "/" + cityAlias + "/"));
							da.html(change);
							dp.html(html);
							_this.ops.mapPopuId.css({
								display: "-webkit-box"
							})
						} else {
							_this.viewLabel("<div>您所在城市</div><div>正在建设中!</div>")
						}
					} else {
						_this.showPerson(lat, lng);
						_this.map.setZoom(16);
						_this.map.panTo(new BMap.Point(lng, lat))
					}
				}
			})
		},
		noGPSView: function(string) {
			if (!string) {
				return
			}
			this.ops.noGPS.find("p").eq(0).html(string);
			this.ops.noGPS.css({
				display: "-webkit-box"
			})
		},
		gpsClick: function() {
			T.trackEvent(this.pageName + "_GPS_Location_System", "{'key':'GPS-Location-System','click':'1'}");
			var _this = this;
			var map = this.map;
			var point;
			this.viewLabel(1);
			var dvclean = _this.ops.mapPopuId.find("a").eq(0);
			var daLink = _this.ops.mapPopuId.find("a").eq(1);
			dvclean.one("click",
			function() {
				_this.ops.mapPopuId.hide()
			});
			daLink.one("click",
			function() {
				_this.ops.mapPopuId.hide();
				window.location.href = $(this).data("href")
			});
			if (navigator.geolocation) {
				if (typeof navigator.geolocation.getCurrentPosition === "function") {
					navigator.geolocation.getCurrentPosition(function(position) {
						var lat = position.coords.latitude;
						var lng = position.coords.longitude;
						_this.viewLabel(0);
						_this.checkCity(lng, lat)
					},
					function(error) {
						if (error.code === 1) {
							T.trackEvent(_this.pageName + "_GPS_Location_Fail", "{'key':'GPS-Location-System','fail':'1'}");
							_this.noGPSView("您已禁用浏览器定位");
							return
						}
						$.ajax({
							url: "http://api.map.baidu.com/location/ip?ak=AB8715ae10c67feb78fea33787b1f974&coor=bd09ll",
							type: "get",
							dataType: "jsonp",
							success: function(data) {
								if (data.status === 0) {
									var lat = data.content.point.y;
									var lng = data.content.point.x;
									_this.viewLabel(0);
									_this.checkCity(lng, lat)
								} else {
									_this.viewLabel("获取定位失败<br />请重新操作！")
								}
							},
							error: function(xhr, type) {
								T.trackEvent("xinfang_map_baiduip_fail");
								_this.viewLabel("获取定位失败<br />请重新操作！")
							}
						})
					},
					{
						enableHighAccuracy: true,
						timeout: 2000
					})
				} else {
					_this.viewLabel("您的手机<br />不支持定位！")
				}
			} else {
				_this.viewLabel("您的手机<br />不支持定位！")
			}
		}
	};
	M.MyOverlay = function(point, dom, type) {
		this._point = point || {
			lat: 0,
			lng: 0
		};
		this._dom = typeof(dom) != "object" ? $(dom).get(0) : dom;
		var typeList = ["floatPane", "floatShadow", "labelPane", "mapPane", "markerMouseTarget", "markerPane", "markerShadow"];
		for (var k in typeList) {
			if (typeList[k] == type) {
				this._type = typeList[k];
				continue
			}
		}
		this._type = this.type || "markerPane";
		this._info = {}
	};
	M.MyOverlay.prototype = new BMap.Overlay();
	M.MyOverlay.prototype.initialize = function(map) {
		this._map = map;
		eval("this._map.getPanes()." + this._type + ".appendChild(this._dom)");
		this._offset = {
			width: $(this._dom).width(),
			height: $(this._dom).height()
		};
		return this._dom
	};
	M.MyOverlay.prototype.draw = function() {
		var position = this._map.pointToOverlayPixel(new BMap.Point(this._point.lng, this._point.lat));
		this._dom.style.position = "absolute";
		this._dom.style.left = position.x - this._offset.width / 2 + "px";
		this._dom.style.top = position.y - this._offset.height + "px"
	};
	M.MyOverlay.prototype.on = function(type, fun) {
		if (typeof fun != "function") {
			return
		}
		var _this = this;
		$(this._dom).on(type,
		function(e) {
			fun.apply(_this._dom, [e, _this])
		})
	};
	M.MyOverlay.prototype.change = function(fun) {
		var _this = this;
		if (typeof fun != "function") {
			return
		}
		fun.apply(_this._dom, [_this])
	};
	M.MyOverlay.prototype.setInfo = function(info) {
		this._info = info
	};
	M.MyOverlay.prototype.getInfo = function() {
		return this._info
	}
})(Zepto, kfstouch.map, kfstouch.global.component);