<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link href="__TMPL__/Public/css/main.css" rel="stylesheet" />
<title>有乐</title>
</head>
<body>
	<nav class="uolor_nav">
		<div class="u_c_nav">
			<img src="__TMPL__/Public/images/nav_logo.jpg" class="logo">
			<div class="fr">
				<ul class="fl">
					<li><a href="#1">展示</a></li>
					<li><a href="#2">人才库</a></li>
					<li>个人服务</li>
					<li>机构服务</li>
					<li><a href="#3">聚娇</a></li>
				</ul>
				<div class="serach fr">
					<div><input type="text" /><div class="serach_icon"></div></div>
					<a href="#4">注册</a>
					<a href="__URL__/login"><?php echo ($outinfo_name?$outinfo_name:'登录'); ?></a>
				</div>
			</div>
			
		</div>
	</nav>
<!--正文-->
	<div class="works_contents">
		<div class="works_info">
			<a href="album.html">法越鑫</a>
		</div>
		<div class="works_lists">
			<div class="works_posts">
				<a href="#"><img src="__TMPL__/Public/images/works/636696397337325376.jpg"></a>
			</div>
			<div class="works_posts">
				<a href="#"><img src="__TMPL__/Public/images/works/1176283927691812002.jpg"></a>
			</div>
			<div class="works_posts">
				<a href="#"><img src="__TMPL__/Public/images/works/2453617372004583189.jpg"></a>
			</div>
			<div class="works_posts">
				<a href="#"><img src="__TMPL__/Public/images/works/2843460214748930054.jpg"></a>
			</div>
			<div class="works_posts">
				<a href="#"><img src="__TMPL__/Public/images/works/2869637387583213756.jpg"></a>
			</div>
			<div class="works_posts">
				<a href="#"><img src="__TMPL__/Public/images/works/6630468531861434762.jpg"></a>
			</div>
			<div class="works_posts">
				<a href="#"><img src="__TMPL__/Public/images/works/6630886346280027184.jpg"></a>
			</div>
			<div class="works_posts">
				<a href="#"><img src="__TMPL__/Public/images/works/6630894042861421577.jpg"></a>
			</div>
			<div class="works_posts">
				<a href="#"><img src="__TMPL__/Public/images/works/6630896241884677100.jpg"></a>
			</div>
		</div>
		<div class="works_comments">
			<form action='__ACTION__'>
				<textarea class="comment_contents" name="content"></textarea><br />
				<input type="submit" class="comment_submit"  value="提交" />
			</form>
			
		</div>
		<div class="comments_lists">
		
			
		
				

			
			<ul>
				
				<?php if(is_array($list)): $k = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$aa): $mod = ($k % 2 );++$k;?><li><div><span><?php echo ($aa['userid']); ?></span><p><?php echo ($aa['content']); ?></p></div></li><?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
			<div class="cb"></div>
		</div>
	</div>

	<footer class="album_footer">
		<p>©<span>法越鑫</span> | Powered by Uolor</p>
	</footer>
</body>
</html>