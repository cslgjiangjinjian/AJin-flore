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
<!--正文-->
	<div class="album_contents">
		<div class="album_myinfo">
			<div class="album_headimg fl">
				<img src="__TMPL__/Public/images/authors/img2_des_x3_9053940.jpg">
			</div>
			<div class="album_info fl">
				<ul>
					<li><?php echo ($userinfo['username']); ?></li>
					<li>www.uolor.com/fayuexin</li>
					<li><?php echo ($userinfo['localplace']); ?></li>
					<li><?php echo ($userinfo['labels']); ?></li>
					<li>联系方式:<?php echo ($userinfo['connection']); ?></li>
				</ul>
			</div>
			<div class="cb"></div>
		</div>
		<div class="album_cb">
			<div class="album_c fl">
				<?php if(is_array($albums)): $i = 0; $__LIST__ = array_slice($albums,0,12,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="album_posts">
						<a href="__URL__/works?ad=<?php echo ($vo['Id']); ?>&d=<?php echo ($vo["userid"]); ?>">
							<img src="__TMPL__/Public/images/album/<?php echo ($vo['imgrl']); ?>">
							<div class="album_post"><?php echo ($vo['datetime']); ?></div>
						</a>
					</div><?php endforeach; endif; else: echo "" ;endif; ?>
				<!--<div class="album_posts">
					<a href="__URL__/works?id=2">
						<img src="__TMPL__/Public/images/album/1.jpg">
						<div class="album_post">2015-03-05</div>
					</a>
				</div>
				<div class="album_posts">
					<a href="__URL__/works?id=2">
						<img src="__TMPL__/Public/images/album/3.jpg">
						<div class="album_post">2015-03-05</div>
					</a>
				</div>
				<div class="album_posts">
					<a href="__URL__/works?id=2">
						<img src="__TMPL__/Public/images/album/2.jpg">
						<div class="album_post">2015-03-05</div>
					</a>
				</div>
				<div class="album_posts">
					<a href="__URL__/works?id=2">
						<img src="__TMPL__/Public/images/album/4.jpg">
						<div class="album_post">2015-03-05</div>
					</a>
				</div>
				<div class="album_posts">
					<a href="__URL__/works?id=2">
						<img src="__TMPL__/Public/images/album/2.jpg">
						<div class="album_post">2015-03-05</div>
					</a>
				</div>
				<div class="album_posts">
					<a href="__URL__/works?id=2">
						<img src="__TMPL__/Public/images/album/1.jpg">
						<div class="album_post">2015-03-05</div>
					</a>
				</div>
				<div class="album_posts">
					<a href="__URL__/works?id=2">
						<img src="__TMPL__/Public/images/album/3.jpg">
						<div class="album_post">2015-03-05</div>
					</a>
				</div>
				<div class="album_posts">
					<a href="__URL__/works?id=2">
						<img src="__TMPL__/Public/images/album/4.jpg">
						<div class="album_post">2015-03-05</div>
					</a>
				</div>
				<div class="album_posts">
					<a href="__URL__/works?id=2">
						<img src="__TMPL__/Public/images/album/1.jpg">
						<div class="album_post">2015-03-05</div>
					</a>
				</div>
				<div class="album_posts">
					<a href="__URL__/works?id=2">
						<img src="__TMPL__/Public/images/album/5.jpg">
						<div class="album_post">2015-03-05</div>
					</a>
				</div>
				<div class="album_posts">
					<a href="__URL__/works?id=2">
						<img src="__TMPL__/Public/images/album/1.jpg">
						<div class="album_post">2015-03-05</div>
					</a>
				</div>
				<div class="album_posts">
					<a href="__URL__/works?id=2">
						<img src="__TMPL__/Public/images/album/2.jpg">
						<div class="album_post">2015-03-05</div>
					</a>
				</div>-->
			</div>
			<div class="cb"></div>
		</div>
		
		<div class="albums_page">
			分页
		</div>
	</div>
	<footer class="album_footer">
		<p>©<span>法越鑫</span> | Powered by Uolor</p>
	</footer>
<script type="text/javascript" src="__TMPL__/Public/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="__TMPL__/Public/js/album.js"></script>
</body>
</html>