<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link href="__TMPL__/Public/css/main.css" rel="stylesheet" />
<link href="__TMPL__/Public/css/uploadify.css" rel="stylesheet" />
<title>有乐</title>
</head>
<body>
	<nav class="uolor_nav">
		<div class="u_c_nav">
			<a href="__URL__/index?d=<?php echo ($outinfo_userid); ?>"><img src="__TMPL__/Public/images/nav_logo.jpg" class="logo"></a>
			<div class="fr">
				<ul class="fl">
					<li><a href="#1">展示</a></li>
					<li><a href="#2">人才库</a></li>
					<li>个人服务</li>
					<li>机构服务</li>
					<li><a href="__URL__/upload?d=<?php echo ($sm["userid"]); ?>">相册库</a></li>
				</ul>
				<div class="serach fr">
					<div><input type="text" /><div class="serach_icon"></div></div>
					<a href="__URL__/login">注册</a>
					<a href="__URL__/login"><?php echo ($outinfo_name?$outinfo_name:'登录'); ?></a>
				</div>
			</div>
			
		</div>
	</nav>

<!-- 正文 -->
<div class="uolor_content">
<!-- 更多展示 -->
	<div class="moretoshow">
		<div class="mts_title fl">更多展示</div>
		<div class="mts_nav fr">
			<a href="#"><span>全部 > </span></a>
			<ul class="fr">
				<li><a href="#">摄影</a></li>
				<li><a href="#">模特儿</a></li>
				<li><a href="#">化妆造型</a></li>
				<li><a href="#">设计插画</a></li>
				<li><a href="#">艺术</a></li>
				<li><a href="#">广告传媒</a></li>
				<li><a href="#">演艺</a></li>
				<li><a href="#">游戏动漫</a></li>
				<li><a href="#">更多行业</a></li>
			</ul>
		</div>
		<div class="cb"></div>
	</div>
	<div class="mts_c fl">
	<!-- 小的整体 -->
	<?php if(is_array($show_more)): $i = 0; $__LIST__ = array_slice($show_more,0,12,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sm): $mod = ($i % 2 );++$i;?><div class="mts_posts">
			<div class="mts_post uc_post">
				<a href="__URL__/album?d=<?php echo ($sm["userid"]); ?>">
					<img src="__TMPL__/Public/images/moretoshow/<?php echo ($sm["imgurl"]); ?>">
					<div class="mts_post_title"><?php echo ($sm["describe"]); ?></div>
				</a>
			</div>
			<ul>
				<li>发布人/<span><a href="__URL__/album?d=<?php echo ($sm["userid"]); ?>"><?php echo ($sm["name"]); ?></a></span></li>
				<li>职业/<span><?php echo ($sm["type"]); ?></span></li>
				<li>点击量/<span><?php echo ($sm["amount"]); ?></span></li>
			</ul>
		</div><?php endforeach; endif; else: echo "" ;endif; ?>
		<!--<div class="mts_posts">
			<div class="mts_post uc_post">
				<a href="__URL__/album?id=1">
					<img src="__TMPL__/Public/images/moretoshow/img2_cover_10071531.jpg">
					<div class="mts_post_title">梁洛施</div>
				</a>
			</div>
			<ul>
				<li>发布人/<span><a href="__URL__/album?id=1">GinoLee</a></span></li>
				<li>职业/<span>图片后期</span></li>
				<li>点击量/<span>663</span></li>
			</ul>
		</div>
		<div class="mts_posts">
			<div class="mts_post uc_post">
				<a href="__URL__/album?id=1">
					<img src="__TMPL__/Public/images/moretoshow/img2_cover_10071531.jpg">
					<div class="mts_post_title">梁洛施</div>
				</a>
			</div>
			<ul>
				<li>发布人/<span><a href="__URL__/album?id=1">GinoLee</a></span></li>
				<li>职业/<span>图片后期</span></li>
				<li>点击量/<span>663</span></li>
			</ul>
		</div>
		<div class="mts_posts">
			<div class="mts_post uc_post">
				<a href="__URL__/album?id=1">
					<img src="__TMPL__/Public/images/moretoshow/img2_cover_10071531.jpg">
					<div class="mts_post_title">梁洛施</div>
				</a>
			</div>
			<ul>
				<li>发布人/<span><a href="__URL__/album?id=1">GinoLee</a></span></li>
				<li>职业/<span>图片后期</span></li>
				<li>点击量/<span>663</span></li>
			</ul>
		</div>
		<div class="mts_posts">
			<div class="mts_post uc_post">
				<a href="__URL__/album?id=1">
					<img src="__TMPL__/Public/images/moretoshow/img2_cover_10071531.jpg">
					<div class="mts_post_title">梁洛施</div>
				</a>
			</div>
			<ul>
				<li>发布人/<span><a href="__URL__/album?id=1">GinoLee</a></span></li>
				<li>职业/<span>图片后期</span></li>
				<li>点击量/<span>663</span></li>
			</ul>
		</div>
		<div class="mts_posts">
			<div class="mts_post uc_post">
				<a href="__URL__/album?id=1">
					<img src="__TMPL__/Public/images/moretoshow/img2_cover_10071531.jpg">
					<div class="mts_post_title">梁洛施</div>
				</a>
			</div>
			<ul>
				<li>发布人/<span><a href="__URL__/album?id=1">GinoLee</a></span></li>
				<li>职业/<span>图片后期</span></li>
				<li>点击量/<span>663</span></li>
			</ul>
		</div>
		<div class="mts_posts">
			<div class="mts_post uc_post">
				<a href="__URL__/album?id=1">
					<img src="__TMPL__/Public/images/moretoshow/img2_cover_10071531.jpg">
					<div class="mts_post_title">梁洛施</div>
				</a>
			</div>
			<ul>
				<li>发布人/<span><a href="__URL__/album?id=1">GinoLee</a></span></li>
				<li>职业/<span>图片后期</span></li>
				<li>点击量/<span>663</span></li>
			</ul>
		</div>
		<div class="mts_posts">
			<div class="mts_post uc_post">
				<a href="__URL__/album?id=1">
					<img src="__TMPL__/Public/images/moretoshow/img2_cover_10071531.jpg">
					<div class="mts_post_title">梁洛施</div>
				</a>
			</div>
			<ul>
				<li>发布人/<span><a href="__URL__/album?id=1">GinoLee</a></span></li>
				<li>职业/<span>图片后期</span></li>
				<li>点击量/<span>663</span></li>
			</ul>
		</div>
		<div class="mts_posts">
			<div class="mts_post uc_post">
				<a href="__URL__/album?id=1">
					<img src="__TMPL__/Public/images/moretoshow/img2_cover_10071531.jpg">
					<div class="mts_post_title">梁洛施</div>
				</a>
			</div>
			<ul>
				<li>发布人/<span><a href="__URL__/album?id=1">GinoLee</a></span></li>
				<li>职业/<span>图片后期</span></li>
				<li>点击量/<span>663</span></li>
			</ul>
		</div>
		<div class="mts_posts">
			<div class="mts_post uc_post">
				<a href="__URL__/album?id=1">
					<img src="__TMPL__/Public/images/moretoshow/img2_cover_10071531.jpg">
					<div class="mts_post_title">梁洛施</div>
				</a>
			</div>
			<ul>
				<li>发布人/<span><a href="__URL__/album?id=1">GinoLee</a></span></li>
				<li>职业/<span>图片后期</span></li>
				<li>点击量/<span>663</span></li>
			</ul>
		</div>
		<div class="mts_posts">
			<div class="mts_post uc_post">
				<a href="__URL__/album?id=1">
					<img src="__TMPL__/Public/images/moretoshow/img2_cover_10071531.jpg">
					<div class="mts_post_title">梁洛施</div>
				</a>
			</div>
			<ul>
				<li>发布人/<span><a href="__URL__/album?id=1">GinoLee</a></span></li>
				<li>职业/<span>图片后期</span></li>
				<li>点击量/<span>663</span></li>
			</ul>
		</div>
		<div class="mts_posts">
			<div class="mts_post uc_post">
				<a href="__URL__/album?id=1">
					<img src="__TMPL__/Public/images/moretoshow/img2_cover_10071531.jpg">
					<div class="mts_post_title">梁洛施</div>
				</a>
			</div>
			<ul>
				<li>发布人/<span><a href="__URL__/album?id=1">GinoLee</a></span></li>
				<li>职业/<span>图片后期</span></li>
				<li>点击量/<span>663</span></li>
			</ul>
		</div>
		<div class="mts_posts">
			<div class="mts_post uc_post">
				<a href="__URL__/album?id=1">
					<img src="__TMPL__/Public/images/moretoshow/img2_cover_10071531.jpg">
					<div class="mts_post_title">梁洛施</div>
				</a>
			</div>
			<ul>
				<li>发布人/<span><a href="__URL__/album?id=1">GinoLee</a></span></li>
				<li>职业/<span>图片后期</span></li>
				<li>点击量/<span>663</span></li>
			</ul>
		</div>-->
	</div>
<!-- 第一个广告 -->
	<div class="u_ad">
		<a href="#">
			<img src="__TMPL__/Public/images/ad/mtbbanner02.jpg">
		</a>
	</div>
<!-- 明星拍摄计划 -->
	<div class="msp_nav">
		<div class="msp_title fl">
			MOKO!明星拍摄计划 MOKO STAR PROJECT
		</div>
		<div class="msp_places fr">
			<ul>
				<li><a href="#">北京</a></li>
				<li><a href="#">上海</a></li>
				<li><a href="#">深圳</a></li>
				<li><a href="#">杭州</a></li>
				<li><a href="#">重庆</a></li>
				<li><a href="#">武汉</a></li>
				<li><a href="#">更多…</a></li>
			</ul>
		</div>
		<div class="cb"></div>
	</div>
	<div class="msp_c">
		<?php if(is_array($msp)): $i = 0; $__LIST__ = array_slice($msp,0,6,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="msp_posts">
				<div class="msp_post uc_post">
					<img src="__TMPL__/Public/images/msp/<?php echo ($vo["imgurl"]); ?>">
					<div class="msp_post_title"><?php echo ($vo["describe"]); ?></div>
				</div>
				<ul>
					<li>发布人/<span><a href="#"><?php echo ($vo["name"]); ?></a></span></li>
					<li>职业/<span><?php echo ($vo["type"]); ?></span></li>
					<li>点击量/<span><?php echo ($vo["amount"]); ?></span></li>
				</ul>
			</div><?php endforeach; endif; else: echo "" ;endif; ?>
		<!--<div class="msp_posts">
			<div class="msp_post uc_post">
				<img src="__TMPL__/Public/images/msp/img2_mokoshow_9423735.jpg">
				<div class="msp_post_title">MSP邓琳颖</div>
			</div>
			<ul>
				<li>发布人/<span><a href="#">邓琳颖</a></span></li>
				<li>职业/<span>演员</span></li>
				<li>点击量/<span>156801</span></li>
			</ul>
		</div>
		<div class="msp_posts">
			<div class="msp_post uc_post">
				<img src="__TMPL__/Public/images/msp/img2_mokoshow_9423735.jpg">
				<div class="msp_post_title">MSP邓琳颖</div>
			</div>
			<ul>
				<li>发布人/<span><a href="#">邓琳颖</a></span></li>
				<li>职业/<span>演员</span></li>
				<li>点击量/<span>156801</span></li>
			</ul>
		</div>
		<div class="msp_posts">
			<div class="msp_post uc_post">
				<img src="__TMPL__/Public/images/msp/img2_mokoshow_9423735.jpg">
				<div class="msp_post_title">MSP邓琳颖</div>
			</div>
			<ul>
				<li>发布人/<span><a href="#">邓琳颖</a></span></li>
				<li>职业/<span>演员</span></li>
				<li>点击量/<span>156801</span></li>
			</ul>
		</div>
		<div class="msp_posts">
			<div class="msp_post uc_post">
				<img src="__TMPL__/Public/images/msp/img2_mokoshow_9423735.jpg">
				<div class="msp_post_title">MSP邓琳颖</div>
			</div>
			<ul>
				<li>发布人/<span><a href="#">邓琳颖</a></span></li>
				<li>职业/<span>演员</span></li>
				<li>点击量/<span>156801</span></li>
			</ul>
		</div>
		<div class="msp_posts">
			<div class="msp_post uc_post">
				<img src="__TMPL__/Public/images/msp/img2_mokoshow_9423735.jpg">
				<div class="msp_post_title">MSP邓琳颖</div>
			</div>
			<ul>
				<li>发布人/<span><a href="#">邓琳颖</a></span></li>
				<li>职业/<span>演员</span></li>
				<li>点击量/<span>156801</span></li>
			</ul>
		</div>
		<div class="msp_posts">
			<div class="msp_post uc_post">
				<img src="__TMPL__/Public/images/msp/img2_mokoshow_9423735.jpg">
				<div class="msp_post_title">MSP邓琳颖</div>
			</div>
			<ul>
				<li>发布人/<span><a href="#">邓琳颖</a></span></li>
				<li>职业/<span>演员</span></li>
				<li>点击量/<span>156801</span></li>
			</ul>
		</div>-->
	</div>
	<div class="u_ad">
		<a href="#">
			<img src="__TMPL__/Public/images/ad/msp_banner.jpg">
		</a>
	</div>
	<div class="ad_big">
		<a href="#">
			<img src="__TMPL__/Public/images/ad/footballbaby2014index.jpg">
		</a>
	</div>
	<div class="u_ad">
		<a href="#">
			<img src="__TMPL__/Public/images/ad/r20120314.jpg">
		</a>
	</div>
	<div class="recruitment">
		<div class="recruit_title fl">机构招募</div>
		<div class="recruit_nav fr"><a href="#">>更多 机构招募</a></div>
		<div class="cb"></div>
	</div>
	<div class="recruit_cb">
		<div class="recruit_c">
			<?php if(is_array($recruit)): $i = 0; $__LIST__ = array_slice($recruit,0,6,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="recruit_posts">
					<div class="recruit_post">
						<img src="__TMPL__/Public/images/recruit/<?php echo ($vo["imgurl"]); ?>">
						<p> > <a href="#"><?php echo ($vo["describe"]); ?></a></p>
					</div>
				</div><?php endforeach; endif; else: echo "" ;endif; ?>
			<!--<div class="recruit_posts">
				<div class="recruit_post">
					<img src="__TMPL__/Public/images/recruit/img2_mokoshow_9174923.jpg">
					<p> > <a href="#">路易斯·王 影像机构</a></p>
				</div>
			</div>
			<div class="recruit_posts">
				<div class="recruit_post">
					<img src="__TMPL__/Public/images/recruit/img2_mokoshow_9174923.jpg">
					<p> > <a href="#">路易斯·王 影像机构</a></p>
				</div>
			</div>
			<div class="recruit_posts">
				<div class="recruit_post">
					<img src="__TMPL__/Public/images/recruit/img2_mokoshow_9174923.jpg">
					<p> > <a href="#">路易斯·王 影像机构</a></p>
				</div>
			</div>
			<div class="recruit_posts">
				<div class="recruit_post">
					<img src="__TMPL__/Public/images/recruit/img2_mokoshow_9174923.jpg">
					<p> > <a href="#">路易斯·王 影像机构</a></p>
				</div>
			</div>
			<div class="recruit_posts">
				<div class="recruit_post">
					<img src="__TMPL__/Public/images/recruit/img2_mokoshow_9174923.jpg">
					<p> > <a href="#">路易斯·王 影像机构</a></p>
				</div>
			</div>
			<div class="recruit_posts">
				<div class="recruit_post">
					<img src="__TMPL__/Public/images/recruit/img2_mokoshow_9174923.jpg">
					<p> > <a href="#">路易斯·王 影像机构</a></p>
				</div>
			</div>-->
		</div>
		<div class="cb"></div>
	</div>
	<div class="fieldsstar">
		<div class="fieldsstar_title fl">行业明星</div>
		<div class="fieldsstar_nav fr"><a href="#">>进入 美空人才库</a></div>
		<div class="cb"></div>
	</div>
	<div class="fs_cb">
		<div class="fs_c fl">
			<?php if(is_array($fieldsstar)): $i = 0; $__LIST__ = array_slice($fieldsstar,0,14,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="fs_posts">
					<div class="fs_post uc_post">
						<img src="__TMPL__/Public/images/fieldsstar/<?php echo ($vo["imgurl"]); ?>">
						<div class="jobs"><?php echo ($vo["type"]); ?></div>
					</div>
					<p><a href="#"><?php echo ($vo["name"]); ?></a></p>
				</div><?php endforeach; endif; else: echo "" ;endif; ?>
			<!--<div class="fs_posts">
				<div class="fs_post uc_post">
					<img src="__TMPL__/Public/images/fieldsstar/img2_des_9432437.jpg">
					<div class="jobs">模特儿</div>
				</div>
				<p><a href="#">王梦实</a></p>
			</div>
			<div class="fs_posts">
				<div class="fs_post uc_post">
					<img src="__TMPL__/Public/images/fieldsstar/img2_des_9432437.jpg">
					<div class="jobs">模特儿</div>
				</div>
				<p><a href="#">王梦实</a></p>
			</div>
			<div class="fs_posts">
				<div class="fs_post uc_post">
					<img src="__TMPL__/Public/images/fieldsstar/img2_des_9432437.jpg">
					<div class="jobs">模特儿</div>
				</div>
				<p><a href="#">王梦实</a></p>
			</div>
			<div class="fs_posts">
				<div class="fs_post uc_post">
					<img src="__TMPL__/Public/images/fieldsstar/img2_des_9432437.jpg">
					<div class="jobs">模特儿</div>
				</div>
				<p><a href="#">王梦实</a></p>
			</div>
			<div class="fs_posts">
				<div class="fs_post uc_post">
					<img src="__TMPL__/Public/images/fieldsstar/img2_des_9432437.jpg">
					<div class="jobs">模特儿</div>
				</div>
				<p><a href="#">王梦实</a></p>
			</div>
			<div class="fs_posts">
				<div class="fs_post uc_post">
					<img src="__TMPL__/Public/images/fieldsstar/img2_des_9432437.jpg">
					<div class="jobs">模特儿</div>
				</div>
				<p><a href="#">王梦实</a></p>
			</div>
			<div class="fs_posts">
				<div class="fs_post uc_post">
					<img src="__TMPL__/Public/images/fieldsstar/img2_des_9432437.jpg">
					<div class="jobs">模特儿</div>
				</div>
				<p><a href="#">王梦实</a></p>
			</div>
			<div class="fs_posts">
				<div class="fs_post uc_post">
					<img src="__TMPL__/Public/images/fieldsstar/img2_des_9432437.jpg">
					<div class="jobs">模特儿</div>
				</div>
				<p><a href="#">王梦实</a></p>
			</div>
			<div class="fs_posts">
				<div class="fs_post uc_post">
					<img src="__TMPL__/Public/images/fieldsstar/img2_des_9432437.jpg">
					<div class="jobs">模特儿</div>
				</div>
				<p><a href="#">王梦实</a></p>
			</div>
			<div class="fs_posts">
				<div class="fs_post uc_post">
					<img src="__TMPL__/Public/images/fieldsstar/img2_des_9432437.jpg">
					<div class="jobs">模特儿</div>
				</div>
				<p><a href="#">王梦实</a></p>
			</div>
			<div class="fs_posts">
				<div class="fs_post uc_post">
					<img src="__TMPL__/Public/images/fieldsstar/img2_des_9432437.jpg">
					<div class="jobs">模特儿</div>
				</div>
				<p><a href="#">王梦实</a></p>
			</div>
			<div class="fs_posts">
				<div class="fs_post uc_post">
					<img src="__TMPL__/Public/images/fieldsstar/img2_des_9432437.jpg">
					<div class="jobs">模特儿</div>
				</div>
				<p><a href="#">王梦实</a></p>
			</div>
			<div class="fs_posts">
				<div class="fs_post uc_post">
					<img src="__TMPL__/Public/images/fieldsstar/img2_des_9432437.jpg">
					<div class="jobs">模特儿</div>
				</div>
				<p><a href="#">王梦实</a></p>
			</div>
			<div class="fs_posts">
				<div class="fs_post uc_post">
					<img src="__TMPL__/Public/images/fieldsstar/img2_des_9432437.jpg">
					<div class="jobs">模特儿</div>
				</div>
				<p><a href="#">王梦实</a></p>
			</div>-->
			
		</div>
		<div class="cb"></div>
	</div>
	<div class="recommend">
		<div>机构推荐</div>
	</div>
	<div class="rec_cb">
		<div class="rec_c fl">
			<?php if(is_array($recommend)): $i = 0; $__LIST__ = array_slice($recommend,0,7,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="rec_posts">
					<div class="rec_post">
						<img src="__TMPL__/Public/images/recommend/<?php echo ($vo["imgurl"]); ?>">
					</div>
					<ul>
						<li>><a href="#"><?php echo ($vo['describe']); ?></a></li>
						<li><span>VIP </span><?php echo ($vo['type']); ?></li>
						<li>粉丝数量<span><?php echo ($vo['amount']); ?></span></li>
					</ul>
				</div><?php endforeach; endif; else: echo "" ;endif; ?>
			<!--<div class="rec_posts">
				<div class="rec_post">
					<img src="__TMPL__/Public/images/recommend/img2_des_9804702.jpg">
				</div>
				<ul>
					<li>><a href="#">安特摄影</a></li>
					<li><span>VIP </span>电影摄影</li>
					<li>粉丝数量<span>273</span></li>
				</ul>
			</div>
			<div class="rec_posts">
				<div class="rec_post">
					<img src="__TMPL__/Public/images/recommend/img2_des_9804702.jpg">
				</div>
				<ul>
					<li>><a href="#">安特摄影</a></li>
					<li><span>VIP </span>电影摄影</li>
					<li>粉丝数量<span>273</span></li>
				</ul>
			</div>
			<div class="rec_posts">
				<div class="rec_post">
					<img src="__TMPL__/Public/images/recommend/img2_des_9804702.jpg">
				</div>
				<ul>
					<li>><a href="#">安特摄影</a></li>
					<li><span>VIP </span>电影摄影</li>
					<li>粉丝数量<span>273</span></li>
				</ul>
			</div>
			<div class="rec_posts">
				<div class="rec_post">
					<img src="__TMPL__/Public/images/recommend/img2_des_9804702.jpg">
				</div>
				<ul>
					<li>><a href="#">安特摄影</a></li>
					<li><span>VIP </span>电影摄影</li>
					<li>粉丝数量<span>273</span></li>
				</ul>
			</div>
			<div class="rec_posts">
				<div class="rec_post">
					<img src="__TMPL__/Public/images/recommend/img2_des_9804702.jpg">
				</div>
				<ul>
					<li>><a href="#">安特摄影</a></li>
					<li><span>VIP </span>电影摄影</li>
					<li>粉丝数量<span>273</span></li>
				</ul>
			</div>
			<div class="rec_posts">
				<div class="rec_post">
					<img src="__TMPL__/Public/images/recommend/img2_des_9804702.jpg">
				</div>
				<ul>
					<li>><a href="#">安特摄影</a></li>
					<li><span>VIP </span>电影摄影</li>
					<li>粉丝数量<span>273</span></li>
				</ul>
			</div>
			<div class="rec_posts">
				<div class="rec_post">
					<img src="__TMPL__/Public/images/recommend/img2_des_9804702.jpg">
				</div>
				<ul>
					<li>><a href="#">安特摄影</a></li>
					<li><span>VIP </span>电影摄影</li>
					<li>粉丝数量<span>273</span></li>
				</ul>
			</div>-->
		</div>
		<div class="cb"></div>
	</div>
</div>


<!--footer -->
<div id="footer">
	<div id="footer-box">
		<div id="footer-contents">
			<ul style="border-right:1px solid #727272;">
				<h3>关于</h3>
				<li><a href="#">什么是有乐？</a></li>
				<li><a href="#">什么是uolorMAN？</a></li>
				<li><a href="#">有乐事件</a></li>
				<li><a href="#">加入有乐</a></li>
			</ul>
			<ul style="border-right:1px solid #727272;">
				<h3>合作</h3>
				<li><a href="#">市场/商业合作</a></li>
				<li><a href="#">投资于成本</a></li>
				<li><a href="#">艺人/经纪合作</a></li>
			</ul>
			<ul style="border-right:1px solid #727272;">
				<h3>声明</h3>
				<li><a href="#">商标声明</a></li>
				<li><a href="#">有乐声明</a></li>
				<li><a href="#">产品设计保护</a></li>
				<li><a href="#">隐私政策</a></li>
			</ul>
			<ul style="border-right:1px solid #727272;">
				<h3>帮助</h3>
				<li><a href="#">官方互动</a></li>
				<li><a href="#">防骗说明</a></li>
				<li><a href="#">联系方式</a></li>
			</ul>
			<ul>
				<h3>更多</h3>
				<li><a href="#">合作链接</a></li>
				<li><a href="#">电子杂志</a></li>
			</ul>
		</div>
	</div>
	<div id="footer-bottom">
		<p>COPYRIGHT @ 2008 - 2013 MOKO NETWORK COMPANY.ALL RIGHTS RESERVED</p>
	</div>
</div>
<script type="text/javascript" src="__TMPL__/Public/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="__TMPL__/Public/js/main.js"></script>
</body>
</html>