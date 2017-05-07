<td colspan="6">
	<h4>计算结果</h4>
	<ol>
		<li><span class="index">1、</span>求和：<?php echo $this->_var['root']['item_data']['fair_sn_local']; ?> (上面50条参与记录的时间取值相加)</li>
		<li><span class="index">2、</span><?php if ($this->_var['root']['item_data']['fair_type'] == 'wy'): ?>第 <?php echo $this->_var['root']['item_data']['fair_period']; ?> 期“老时时彩”<?php endif; ?>幸运号码：<?php $_from = $this->_var['root']['item_data']['fair_sn_s']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'fair_sn');if (count($_from)):
    foreach ($_from AS $this->_var['fair_sn']):
?><b class="ico ball"><?php echo $this->_var['fair_sn']; ?></b><?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?></li>
		<li><span class="index">3、</span>求余：(<?php echo $this->_var['root']['item_data']['fair_sn_local']; ?> + <?php $_from = $this->_var['root']['item_data']['fair_sn_s']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'fair_sn');if (count($_from)):
    foreach ($_from AS $this->_var['fair_sn']):
?><b class="ico ball"><?php echo $this->_var['fair_sn']; ?></b><?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		) % <?php echo $this->_var['root']['item_data']['max_buy']; ?> (商品所需人次) =
		<?php $_from = $this->_var['root']['item_data']['luck_lottery']['fixed_values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'fixed_values');if (count($_from)):
    foreach ($_from AS $this->_var['fixed_values']):
?><b class="square"><?php echo $this->_var['fixed_values']; ?></b><?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		(余数)
			<i class="ico ico-question" style="margin-top: -2px">
				<div class="tips-layer">
					<i class="ico small-tip-ico"></i>
						<b class="txt-red">余数：</b>指整数除法中，被除数未被除尽部分。“例如27除以6”，商数为4，余数为3。
				</div>
			</i>
		</li>
		<li><span class="index">4、</span><?php $_from = $this->_var['root']['item_data']['luck_lottery']['fixed_values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'fixed_values');if (count($_from)):
    foreach ($_from AS $this->_var['fixed_values']):
?><b class="square"><?php echo $this->_var['fixed_values']; ?></b><?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		(余数) + 100000001 =
		<?php $_from = $this->_var['root']['item_data']['luck_lottery']['lottery_sns']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'lottery_sns');if (count($_from)):
    foreach ($_from AS $this->_var['lottery_sns']):
?><b class="square"><?php echo $this->_var['lottery_sns']; ?></b><?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		</li>
	</ol>
	<span class="result-code">幸运号码： <?php echo $this->_var['root']['item_data']['luck_lottery']['lottery_sn']; ?></span>
</td>