<?php
// +----------------------------------------------------------------------
// | lgshop 乐购商城系统
// +----------------------------------------------------------------------
// | Copyright (c) 2011 http://www.lgshop.net.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: 听雨(262744441@qq.com)
// +----------------------------------------------------------------------

//计划任务执行接口
interface schedule {

	/**
	 * 执行指定的计划任务,
	 * 返回   返回 array("status"=>0/1, "attemp"=>0/1,  "info"=>string);
	 * @param unknown_type $data
	 */
	function exec($data);

	
	
	
}
?>