<?php 
// +----------------------------------------------------------------------
// | lgshop 乐购商城系统
// +----------------------------------------------------------------------
// | Copyright (c) 2011 http://www.lgshop.net.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: 听雨(262744441@qq.com)
// +----------------------------------------------------------------------

define("FILE_PATH",""); //文件目录，空为根目录
require_once './system/system_init.php';

require_once APP_ROOT_PATH.'app/Lib/'.APP_TYPE.'/core/MainApp.class.php';
//实例化一个网站应用实例
$AppWeb = new MainApp();
?>