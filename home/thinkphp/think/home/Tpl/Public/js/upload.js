$(function(){
	//alert(1);
    var img = '';
	$('#imgupload').uploadify({
        	'swf'      : 'uploadify.swf',
        	'uploader' : '{:U("Index/uploadify")}',   //上传的方法
        	'buttonText' : '上传',
        	'onUploadSuccess' : function(file, data, response) {
        	 //把所有上传的图片都放入DIV中
        	 img += "<img width='200px' src='__TMPL__/Public/images/moretoshow/"+data+"'>";
            //$('#imgs').html(img);
            alert(img);
    	}
	});
});
