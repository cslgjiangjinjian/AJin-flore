<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		
		<meta charset="utf-8">
		<link rel="stylesheet" href="__TMPL__/Public/css/login_register.css" rel="stylesheet"/>
		<style>
			@import url(http://fonts.googleapis.com/css?family=Montserrat:400,700|Handlee);
		</style>
		<title>Login</title>
	</head>
	<body>
		<div class="login_container">
			<nav class="clearfix">
				<div>SB来登录</div>
				<div class="bgcolor">SB来注册</div>
			</nav>
			<div>
				<section class="login_main clearfix">
					<form class="login_form" method="post">
						<p>
							<input type="text" name="email" placeholder="Email" id='emial' />
							<input type="password" name="password" placeholder="Password" id="password" />
						</p>
						<button type="submit" name="submit">
							<i class="icon-arrow-right"></i>
							<span>Sign in</span>
						</button>
					</form>
				</section>
				<section class="login_main register_main clearfix">
					<form class="login_form" method="post">
						<p>
							<input type="text" name="regemail" placeholder="Email" id='regemail' />
							<input type="text" name="regname" placeholder="昵称" id='regname' />
							<input type="password" name="regpassword" placeholder="Password" id="regpassword" />
							
						</p>
						<button type="submit" name="submit" class="registerbtn">
							<i class="icon-arrow-right registeri"></i>
							<span class="registerspan">Register</span>
						</button>
					</form>
				</section>
			</div>
			
		</div>
		<script type="text/javascript" src="__TMPL__/Public/js/jquery-1.9.1.min.js"></script>
		<script src="__TMPL__/Public/js/jquery.placeholder.min.js"></script>
		<script type="text/javascript">
			$(function(){
				$('input,textarea').placeholder();
				$('nav div').hover(function(){
					$(this).removeClass('bgcolor').siblings().addClass('bgcolor');
					//alert();
					$('section').eq($(this).index()).show().siblings().hide();
				});
			});
		</script>
	</body>
</html>