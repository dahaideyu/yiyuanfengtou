<?php
// +----------------------------------------------------------------------
// | lgshop 乐购商城系统
// +----------------------------------------------------------------------
// | Copyright (c) 2011 http://www.lgshop.net.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: 听雨(262744441@qq.com)
// +----------------------------------------------------------------------

//快递单打印接口
interface express {
	/**
	 * 打印快递单的接口
	 * @param $order_id 订单号
	 * @param $express_sn 快递单号
	 * return html 关于本快递的打印HTML
	 */
	function get_express_form($order_id,$express_sn);

	
}
?>