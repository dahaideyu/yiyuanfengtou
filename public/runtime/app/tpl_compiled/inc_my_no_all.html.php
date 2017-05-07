<div class="w-msgbox-bd" pro="entry" style="padding:10px 30px 30px;color:#333333;font-family:'microsoft yahei', verdana, sans-serif;font-size:14px;line-height:25.2px;">
	<div id="pro-view-31">
		<div class="w-duobaoCodeList" pro="codeWarper" style="width:500px;">
			<div class="w-duobaoCodeList-hd" pro="codeTitle" style="line-height:38px;font-weight:bold;color:#323232;border-bottom-width:1px;border-bottom-style:dashed;border-bottom-color:#dbdbdb;margin-bottom:20px;font-size:16px;">本期总共参与了<?php echo $this->_var['data']['duobao_count']; ?>人次
			</div>
			<div pro="list" class="w-duobaoCodeList-list" style="width:500px;max-height:420px;overflow-y:auto;line-height:36px;">
				<dl class="iItem f-clear" id="pro-view-32" style="width:500px;height:200px;margin:0px;padding:0px 0px 5px;clear:both;overflow-y:auto">
					<?php $_from = $this->_var['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'order');if (count($_from)):
    foreach ($_from AS $this->_var['order']):
?>
					<dt class="iItemTime" style="margin:0px 0px 6px;padding:0px;color:#aaaaaa;line-height:18px;"><?php echo $this->_var['order']['create_time']; ?></dt>
					<dt style="margin:0px;padding:0px;">
						<?php $_from = $this->_var['order']['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['value']):
?>
						<span class="iCodeItem" style="white-space:nowrap;margin-right:15px;"><?php echo $this->_var['value']['lottery_sn']; ?></span>&nbsp;
						<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
					</dt>
					<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
				</dl>
			</div>
		</div>
	</div>
</div>
