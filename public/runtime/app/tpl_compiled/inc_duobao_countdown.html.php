<?php if (! $this->_var['root']['item_data']['has_lottery']): ?>
			<!-- 揭晓中 -->
			<!-- 倒计时 -->
			<div class="detail-countdown clearfix" >
				<i class="goods-detail-ico hourglass f_l"></i>
				<div class="countdown-box f_l">
					<div class="countdown-box-hd">
						<span>期号：<?php echo $this->_var['root']['item_data']['id']; ?></span>
						<span class="split">|</span>
						<span>揭晓倒计时</span>
					</div>
					<time class="countdown-num" nowtime="<?php echo $this->_var['root']['item_data']['now_time']; ?>" endtime="<?php echo $this->_var['root']['item_data']['lottery_time']; ?>" id="<?php echo $this->_var['root']['item_data']['id']; ?>">
						正在揭晓中
					</time>
				</div>
			</div>
				
			<?php else: ?>
			<!-- 已揭晓 -->
			<div class="winner">
				<!-- 获奖者幸运号码 -->
				<div class="winner-luckycode clearfix">
					<div class="hd f_l">
						<span class="period">期号<span class="period-num"><?php echo $this->_var['root']['item_data']['luck_lottery']['duobao_item_id']; ?></span></span>
						<span class="title">幸运号码</span>
					</div>
					<div class="code f_l"><?php echo $this->_var['root']['item_data']['luck_lottery']['lottery_sn']; ?></div>
				</div>
				<!-- 获奖者信息 -->
				<div class="winner-detail clearfix">
					<i class="goods-detail-ico winner-ico"></i>
					<div class="clear"></div>
					<img src="<?php 
$k = array (
  'name' => 'get_user_avatar',
  'uid' => $this->_var['root']['item_data']['luck_lottery']['user_id'],
  'type' => 'big',
);
echo $k['name']($k['uid'],$k['type']);
?>" alt="" class="user-pic f_l" width="90" height="90">
					<div class="f_l winner-user-info">
						<div class="info-item user-name">
							<span class="hd">用户昵称</span>：<span class="bd"><a href="<?php
echo parse_url_tag("u:index|home|"."id=".$this->_var['root']['item_data']['luck_lottery']['user_id']."".""); 
?>" target="_blank"><?php echo $this->_var['root']['item_data']['luck_lottery']['user_name']; ?></a></span>
							<?php if ($this->_var['root']['item_data']['luck_lottery']['province_name'] || $this->_var['root']['item_data']['luck_lottery']['city_name']): ?>（<?php if ($this->_var['root']['item_data']['luck_lottery']['province_name']): ?><?php echo $this->_var['root']['item_data']['luck_lottery']['province_name']; ?>省<?php endif; ?><?php if ($this->_var['root']['item_data']['luck_lottery']['city_name']): ?><?php echo $this->_var['root']['item_data']['luck_lottery']['city_name']; ?>市<?php endif; ?>）<?php endif; ?>
						</div>
						<div class="info-item user-id">
							<span class="hd">用户 I D</span>：<span class="bd"><?php echo $this->_var['root']['item_data']['luck_lottery']['user_id']; ?>（ID为用户唯一不变标识）</span>
						</div>
						<div class="info-item user-buy-time">
							<span class="hd">本期参与</span>：<span><b class="txt-red"><?php echo $this->_var['root']['item_data']['luck_lottery']['user_duobao_count']; ?>人次</b></span>
						</div>
					</div>
					<div class="f_l winner-record">
						<div class="info-item published-time">
							<span class="hd">揭晓时间</span>：<span class="bd"><?php echo $this->_var['root']['item_data']['lottery_time_format']; ?></span>
						</div>
						<div class="info-item buy-time">
							<span class="hd">购买时间</span>：<span class="bd"><?php echo $this->_var['root']['item_data']['luck_lottery']['create_time']; ?></span>
						</div>
						<div class="info-item codes">
							<a class="btn-winner-code-s">查看<?php if ($this->_var['root']['is_login']): ?>我<?php else: ?>TA<?php endif; ?>的号码>></a>
						</div>
					</div>
				</div>
			</div>
			<?php endif; ?>
			<!-- 计算规则 -->
			<div class="calcu-rule clearfix">
				<!-- 如何计算已经最终取值 -->
				<div class="calcu-main info f_l clearfix">
					<div class="calcu-title">如何计算？</div>
					<!-- 幸运号码 -->
					<div class="calcu-luckycode f_l calcu-item">
						<p class="num"><?php if ($this->_var['root']['item_data']['luck_lottery']['lottery_sn']): ?><?php echo $this->_var['root']['item_data']['luck_lottery']['lottery_sn']; ?><?php else: ?>?<?php endif; ?></p>
						<p class="tip">本期幸运号码</p>
					</div>
					<!-- 等于号 -->
					<div class="equal f_l">=</div>
					<!-- 固定数值 -->
					<div class="calcu-item f_l">
						<p class="num">100000001</p>
						<p class="tip">固定数值</p>
					</div>
					<!-- 加号 -->
					<div class="add f_l">+</div>
					<!-- 变化数值 -->
					<div class="calcu-num-x f_l calcu-item">
						<p class="num"><?php if ($this->_var['root']['item_data']['luck_lottery']['lottery_sn']): ?><?php echo $this->_var['root']['item_data']['luck_lottery']['fixed_value']; ?><?php else: ?>?<?php endif; ?></p>
						<p class="tip">变化数值</p>
					</div>
				</div>
				<!-- 变化数值取值方式 -->
				<div class="calcu-sec info f_l clearfix">
					<div class="calcu-title"><strong>变化数值</strong>是取下面公式的余数</div>
					<div class="f_l left-bk">(</div>
					<div class="f_l calcu-item calcu-sum">
						<p class="num"><?php echo $this->_var['root']['item_data']['fair_sn_local']; ?></p>
						<div class="tip">50个时间求和
							<div class="hover-more more-1">
								<i class="goods-detail-ico tip-box"></i>
								<div class="more-content">
									商品的最后一个号码分配完毕，公示该分配时间点前本站全部商品的<span class="txt-red">最后50个参与时间</span>，并求和。
								</div>
							</div>
						</div>
					</div>
					<div class="f_l add">+</div>
					<div class="f_l calcu-item calcu-lottery">
						<p class="num"><?php if ($this->_var['root']['item_data']['luck_lottery']['lottery_sn']): ?><?php echo $this->_var['root']['item_data']['fair_sn']; ?><?php else: ?>?<?php endif; ?></p>
						<div class="tip">
							“老时时彩”幸运号码
							<div class="hover-more more-2">
								<i class="goods-detail-ico tip-box"></i>
								<div class="more-content">
									取最近一期“老时时彩” (第<?php echo $this->_var['root']['item_data']['fair_period']; ?>期) 揭晓结果。
								</div>
							</div>
						</div>
					</div>
					<div class="f_l right-bk">)</div>
					<div class="f_l calcu-divide">÷</div>
					<div class="f_l calcu-price calcu-item">
						<p class="num"><?php echo $this->_var['root']['item_data']['max_buy']; ?></p>
						<div class="tip">总需人次</div>
					</div>
				</div>
			</div>