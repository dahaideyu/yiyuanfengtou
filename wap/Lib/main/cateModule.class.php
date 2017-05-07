<?php
// +----------------------------------------------------------------------
// | lgshop 乐购商城系统
// +----------------------------------------------------------------------
// | Copyright (c) 2014 http://www.lgshop.net.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: 听雨(262744441@qq.com)
// +----------------------------------------------------------------------

class cateModule extends MainBaseModule
{

	public function index()
	{
		global_run();
		init_app_page();

		$data_id = intval($_REQUEST['data_id']);
		
		$data = call_api_core("cate","index",array("data_id"=>$data_id));

		$GLOBALS['tmpl']->assign("data",$data);
		$GLOBALS['tmpl']->display("cate.html");
	}


}
?>
