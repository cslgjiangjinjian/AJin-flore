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

<div class="uolor_upload">
	<ul>
		<li>
			<div class="upload_addimg">
				<img src="__TMPL__/Public/images/addimg.png" />
				<form  enctype="multipart/form-data" >
					<input type="file"  name="photo1" class="imgupload" id='imgupload' accept="image/*"  multiple="true"/>
					
				</form>
			</div>
			<textarea class="upload_desc" placeholder="描述"></textarea>
			<input class="upload_labels"  placeholder="标签"/>
		</li>
		<li>
			<div class="upload_addimg">
				<img src="__TMPL__/Public/images/addimg.png" />
				<form  enctype="multipart/form-data">
					<input type="file" name="photo2" class="imgupload" accept="image/*" />
				</form>
			</div>
			<textarea class="upload_desc" placeholder="描述"></textarea>
			<input class="upload_labels"  placeholder="标签"/>
		</li>
	</ul>
	
	
</div>
<script type="text/javascript" src="__TMPL__/Public/js/jquery-1.9.1.min.js"></script>
<script src="__TMPL__/Public/js/jquery.placeholder.min.js"></script>
<script type="text/javascript" src="__TMPL__/Public/js/jquery.uploadify.min.js"></script>
<script type="text/javascript" src="__TMPL__/Public/js/main.js"></script>
<script type="text/javascript" src="__TMPL__/Public/js/upload.js"></script>
<script>
$(function(){
	$('input,textarea').placeholder();
});
</script>
</body>
</html>