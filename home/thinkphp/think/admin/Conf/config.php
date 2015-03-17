<?php
if(!defined('THINK_PATH')) exit();
/*$arr1 =*/ return array(
	//'配置项'=>'配置值'
	//'URL_MODEL'				=>3,
	'URL_CASE_INSENSITIVE'		=>true,
	'DB_TYPE'               => 'mysql',     // 数据库类型
    'DB_HOST'               => 'localhost', // 服务器地址
    'DB_NAME'               => 'uolor',          // 数据库名
    'DB_USER'               => 'root',      // 用户名
    'DB_PWD'                => 'root',          // 密码
    'DB_PORT'               => '3306',        // 端口
    'DB_PREFIX'             => 'uolor_',    // 数据库表前缀
	'DB_CHARSET'            => 'utf8',      // 数据库编码默认采用utf8
	'ERROR_MESSAGE'			=>'页面错误！请稍后再试~',

);
/*$arr2 = include '../../DbLink.config.php';
$arr3 = array_merge($arr1,$arr2);
var_dump($arr3);*/
?>