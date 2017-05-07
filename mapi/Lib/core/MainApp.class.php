<?php
// +----------------------------------------------------------------------
// | lgshop 乐购商城系统
// +----------------------------------------------------------------------
// | Copyright (c) 2011 http://www.lgshop.net.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: 听雨(262744441@qq.com)
// +----------------------------------------------------------------------

require_once APP_ROOT_PATH.'mapi/Lib/core/MainBaseModule.class.php';
require_once APP_ROOT_PATH.'mapi/Lib/core/api_init.php';

if(!defined("CTL"))define("CTL",'ctl');
if(!defined("ACT"))define("ACT",'act');

class MainApiApp{		
	private $module_obj;
	
	private $api_data;
	
	//网站项目构造
	public function __construct($request_param = null){
		
		if($request_param)
		{
			$GLOBALS['request'] = $request_param;
		}
				
		$module = strtolower($GLOBALS['request'][CTL]?$GLOBALS['request'][CTL]:"index");
		$action = strtolower($GLOBALS['request'][ACT]?$GLOBALS['request'][ACT]:"index");
		
		$module = filter_ctl_act_req($module);
		$action = filter_ctl_act_req($action);
		
		if(!file_exists(APP_ROOT_PATH."mapi/Lib/".$module."Module.class.php"))
		$module = "index";
		
		require_once APP_ROOT_PATH."mapi/Lib/".$module."Module.class.php";				
		if(!class_exists($module."ApiModule"))
		{
			$module = "index";
			require_once APP_ROOT_PATH."mapi/Lib/".$module."Module.class.php";	
		}
		if(!method_exists($module."ApiModule",$action))
		$action = "index";
		
		if(!defined("MODULE_NAME"))define("MODULE_NAME",$module);
		if(!defined("ACTION_NAME"))define("ACTION_NAME",$action);
		
		$module_name = $module."ApiModule";
		$this->module_obj = new $module_name;
		$this->api_data = $this->module_obj->$action();
	}
	
	public function data()
	{
		return $this->api_data;
	}
	
	public function __destruct()
	{
		unset($this);
	}
}
?>