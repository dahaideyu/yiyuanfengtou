<?php
// +----------------------------------------------------------------------
// | lgshop 乐购商城系统
// +----------------------------------------------------------------------
// | Copyright (c) 2011 http://www.lgshop.net.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: 听雨(262744441@qq.com)
// +----------------------------------------------------------------------

class WeixinSingleAction extends CommonAction{
	 public $navs;
	 public $faces;
	 public $page = 1;
	 public $isajax = 0;
	 public $account;
	 public $account_id;
	 public $option;
	 
	 public function __construct(){
	 	parent::__construct();
	 	$this->navs = $GLOBALS['mobile_cfg']['wap']['nav'];
		$this->assign('navs',$this->navs);
		$this->faces = array(
			"/::)"=>"0.gif","/::~"=>"1.gif","/::B"=>"2.gif","/::|"=>"3.gif","/:8-)"=>"4.gif",
			"/::<"=>"5.gif",'/::$'=>"6.gif",
			"/::X"=>"7.gif","/::Z"=>"8.gif","/::'("=>"9.gif",
			"/::-|"=>"10.gif","/::@"=>"11.gif","/::P"=>"12.gif","/::D"=>"13.gif","/::O"=>"14.gif",
			"/::("=>"15.gif","/::+"=>"16.gif","/:–b"=>"17.gif","/::Q"=>"18.gif","/::T"=>"19.gif","/:,@P"=>"20.gif","/:,@-D"=>"21.gif","/::d"=>"22.gif","/:,@o"=>"23.gif","/::g"=>"24.gif","/:|-)"=>"25.gif","/::!"=>"26.gif","/::L"=>"27.gif","/::>"=>"28.gif","/::,@"=>"29.gif","/:,@f"=>"30.gif","/::-S"=>"31.gif","/:?"=>"32.gif","/:,@x"=>"33.gif","/:,@@"=>"34.gif","/::8"=>"35.gif","/:,@!"=>"36.gif","/:!!!"=>"37.gif","/:xx"=>"38.gif","/:bye"=>"39.gif","/:wipe"=>"40.gif","/:dig"=>"41.gif","/:handclap"=>"42.gif","/:&-("=>"43.gif","/:B-)"=>"44.gif","/:<@"=>"45.gif","/:@>"=>"46.gif","/::-O"=>"47.gif","/:>-|"=>"48.gif","/:P-("=>"49.gif","/::'|"=>"50.gif","/:X-)"=>"51.gif","/::*"=>"52.gif","/:@x"=>"53.gif","/:8*"=>"54.gif","/:pd"=>"55.gif","/:<W>"=>"56.gif","/:beer"=>"57.gif",
			"/:basketb"=>"58.gif","/:oo"=>"59.gif","/:coffee"=>"60.gif","/:eat"=>"61.gif","/:pig"=>"62.gif","/:rose"=>"63.gif","/:fade"=>"64.gif","/:showlove"=>"65.gif","/:heart"=>"66.gif","/:break"=>"67.gif","/:cake"=>"68.gif","/:li"=>"69.gif","/:bome"=>"70.gif","/:kn"=>"71.gif","/:footb"=>"72.gif","/:ladybug"=>"73.gif","/:shit"=>"74.gif","/:moon"=>"75.gif","/:sun"=>"76.gif","/:gift"=>"77.gif","/:hug"=>"78.gif","/:strong"=>"79.gif","/:weak"=>"80.gif","/:share"=>"81.gif","/:v"=>"82.gif","/:@)"=>"83.gif","/:jj"=>"84.gif","/:@@"=>"85.gif","/:bad"=>"86.gif","/:lvu"=>"87.gif","/:no"=>"88.gif","/:ok"=>"89.gif","/:love"=>"90.gif","/:<L>"=>"91.gif","/:jump"=>"92.gif","/:shake"=>"93.gif","/:<O>"=>"94.gif","/:circle"=>"95.gif","/:kotow"=>"96.gif","/:turn"=>"97.gif","/:skip"=>"98.gif","[挥手]"=>"99.gif","/:#-0"=>"100.gif","[街舞]"=>"101.gif",
			"/:kiss"=>"102.gif","/:<&"=>"103.gif","/:&>"=>"104.gif"
		);
		 $weixin_res = $GLOBALS['db']->getAll("select * from ".DB_PREFIX."weixin_account_conf");
		 foreach($weixin_res as $k=>$v){
			 $weixin_conf[$v['name']]=$v['value'];
		 }
		if(!$weixin_conf){
			$this->redirect(u("WeixinAccount/index"));
		}
		 $this->option = array(
			 'appid'=>$weixin_conf['appid'],
			 'appsecret'=>$weixin_conf['appsecret'],
			 'token'=>$weixin_conf['token'],
			 'encodingAesKey'=>$weixin_conf['encodingAesKey'],
			 'debug'=>false,
		 );
		
		if(isset($_REQUEST['page'])){
			$this->page = max(1,(int)$_REQUEST['page']);
		}
		if(isset($_REQUEST['isajax'])){
			$this->isajax = (int)$_REQUEST['isajax'] > 0 ? 1 : 0;
		}
		if(isset($_REQUEST['page'])){
			$this->page = max(1,(int)$_REQUEST['page']);
		}
		$this->assign('pager_num_now',$this->page);
	 }
	 
	public function load_module()
	{
		$id = intval($_REQUEST['id']);
		$module = trim($_REQUEST['module']);
		$act = M("WeixinNav")->where("id=".$id)->getField("u_action");
		$this->ajaxReturn($this->navs[$module]['acts'],$act);
	}
 }
?>