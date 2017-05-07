<?php
// +----------------------------------------------------------------------
// | lgshop 乐购商城系统
// +----------------------------------------------------------------------
// | Copyright (c) 2011 http://www.lgshop.net.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: 听雨(262744441@qq.com)
// +----------------------------------------------------------------------

interface sms{
	
	/**
	 * 发送短信
	 * @param array $mobile_number		手机号
	 * @param string $content		短信内容
	 * return array(status='',msg='')
	*/
	function sendSMS($mobile_number,$content,$is_adv=0);
	
	/*获取该短信接口的相关数据*/
	function getSmsInfo();
	
	function check_fee();
}
?>