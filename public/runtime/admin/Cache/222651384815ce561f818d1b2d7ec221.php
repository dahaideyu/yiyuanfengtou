<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo conf("APP_NAME");?><?php echo l("CACHE_INDEX");?></title>
<script type="text/javascript" src="__ROOT__/public/runtime/admin/lang.js"></script>
<link rel="stylesheet" type="text/css" href="__TMPL__Common/style/style.css" />
<script type="text/javascript" src="__TMPL__Common/js/jquery.js"></script>
<script type="text/javascript" src="__TMPL__Common/js/cache.js"></script>
<script type="text/javascript" src="__TMPL__Common/js/jquery.bgiframe.js"></script>
<script type="text/javascript" src="__TMPL__Common/js/jquery.weebox.js"></script>
<link rel="stylesheet" type="text/css" href="__TMPL__Common/style/weebox.css" />
</head>
<style type="text/css">
	table.form td.cc{padding:20px 10px; text-align:center;}
	table.form td.cc .button{ padding:10px 15px;}
</style>
<body>
	<div class="main">
	<div class="main_title"><?php echo L("CACHE_INDEX");?>	</div>
	<div class="blank5"></div>
	<table class="form" cellpadding=0 cellspacing=0>
		<tr>
			<td colspan=4 class="topTd"></td>
		</tr>
		<tr>
			<td class="cc">
				<input type="button" class="button ajaxclear" value="清空程序缓存"  rel="<?php echo u("Cache/clear_data",array("is_all"=>0));?>"/>
			</td>
			<?php if($oss_type != 'ALI_OSS'): ?><td class="cc">
				<input type="button" class="button ajaxclear" value="重置图片缩略图"  rel="<?php echo u("Cache/clear_image");?>"/>
			</td><?php endif; ?>
			<td class="cc">
				<input type="button" class="button" id="syn_data" value="清空早期数据"  rel="<?php echo u("Cache/syn_data");?>"/>
			</td>
		</tr>
		
	

		<tr>
			
			<td colspan=4 class="cc">
				回收指定时段的夺宝数据，以保证数据库的数据量和性能<br />
				该操作比较耗时与占用系统资源，<span style="color:#f30;">请谨慎操作</span><br />
			</td>
		</tr>
		<tr>
			<td colspan=4 class="bottomTd"></td>
		</tr>
	</table>	
	</div>
</body>
</html>