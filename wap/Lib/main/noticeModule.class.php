<?php
// +----------------------------------------------------------------------
// | lgshop 乐购商城系统
// +----------------------------------------------------------------------
// | Copyright (c) 2014 http://www.lgshop.net.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: 听雨(262744441@qq.com)
// +----------------------------------------------------------------------

class noticeModule extends MainBaseModule
{

	public function index()
	{
		global_run();		
		init_app_page();
		
		$id=intval($_REQUEST['data_id']);
		$cache_id  = md5(MODULE_NAME.ACTION_NAME.$id);		
		if (!$GLOBALS['tmpl']->is_cached('notice_detail.html', $cache_id)){
				$param=array();
				$param['id'] = intval($_REQUEST['data_id']);
				$data = call_api_core("notice","detail",$param);
					
		}
		$GLOBALS['tmpl']->assign("data",$data);		
		$GLOBALS['tmpl']->display("notice_detail.html",$cache_id);	
	}

}
?>