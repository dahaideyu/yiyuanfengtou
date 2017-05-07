<?php
// +----------------------------------------------------------------------
// | lgshop 乐购商城系统
// +----------------------------------------------------------------------
// | Copyright (c) 2014 http://www.lgshop.net.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: 听雨(262744441@qq.com)
// +----------------------------------------------------------------------

class uc_ecvModule extends MainBaseModule
{
	public function index()
	{		
		global_run();
		init_app_page();
		$data['page_title'] = '我的红包';

		$GLOBALS['tmpl']->display("uc_ecv_index.html");
	}
	
	public function exchange(){
	    global_run();
	    init_app_page();
	    $data['page_title'] = '红包兑换';
	    
	    $GLOBALS['tmpl']->display("uc_ecv_exchange.html");
	}
	
	
}
?>