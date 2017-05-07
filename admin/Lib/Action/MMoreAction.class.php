<?php
// +----------------------------------------------------------------------
// | lgshop 乐购商城系统
// +----------------------------------------------------------------------
// | Copyright (c) 2011 http://www.lgshop.net.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: 听雨(262744441@qq.com)
// +----------------------------------------------------------------------

class MMoreAction extends CommonAction{
	public function add()
	{
		$nav_cfg = $GLOBALS['mobile_cfg'];
		$this->assign("nav_cfg",$nav_cfg);


		
		$this->assign("new_sort",intval(M(MODULE_NAME)->max("sort"))+1);

		$this->display();
	}
	
	public function insert() {
		B('FilterString');
		$ajax = intval($_REQUEST['ajax']);
		
		$nav_cfg = $GLOBALS['mobile_cfg'];
		
		$data = M(MODULE_NAME)->create ();
		
		if ( mb_strlen($data['desc'], 'UTF-8' )  > 20 ) {
		    $this->error('描述不能超过20个字');
		}
		
		foreach($nav_cfg as $k=>$v)
		{
			if($v['mobile_type']==$data['mobile_type'])
			{
				$navs = $v['nav'];
			}
		}
		
		foreach($navs as $ctl=>$v)
		{
			if($v['type']==$data['type'])
			{
				$data['ctl'] = $ctl;
				$cfg = array($v['field']=>$_POST[$v['field']]);
				$data['data'] = serialize($cfg);
			}
		}
			
		//开始验证有效性
		$this->assign("jumpUrl",u(MODULE_NAME."/add"));
		if(!check_empty($data['name']))
		{
			$this->error(L("NAME_EMPTY_TIP"));
		}	


		
		$log_info = $data['name'];
		$list=M(MODULE_NAME)->add($data);
		if (false !== $list) {
			//成功提示
			save_log($log_info.L("INSERT_SUCCESS"),1);
			$this->success(L("INSERT_SUCCESS"));
		} else {
			//错误提示
			save_log($log_info.L("INSERT_FAILED"),0);
			$this->error(L("INSERT_FAILED"));
		}
	}

	
	
	public function edit()
	{
        $nav_cfg = $GLOBALS['mobile_cfg'];
        $this->assign("nav_cfg",$nav_cfg);

        $id = intval($_REQUEST['id']);
        $vo = M(MODULE_NAME)->getById($id);
        $vo['data'] = unserialize($vo['data']);

        $this->assign ('vo', $vo);

        foreach($nav_cfg as $k=>$v)
        {
            if($v['mobile_type']==$vo['mobile_type'])
                $this->assign("nav_list",$v['nav']);
        }
        $this->display();
	}
	
	
	public function update() {
        B('FilterString');


        $nav_cfg = $GLOBALS['mobile_cfg'];

        $data = M(MODULE_NAME)->create ();
        
        if ( mb_strlen($data['desc'], 'UTF-8')  > 20 ) {
            $this->error('描述不能超过20个字');
        }

        foreach($nav_cfg as $k=>$v)
        {
            if($v['mobile_type']==$data['mobile_type'])
            {
                $navs = $v['nav'];
            }
        }

        foreach($navs as $ctl=>$v)
        {
            if($v['type']==$data['type'])
            {
                $data['ctl'] = $ctl;
                $cfg = array($v['field']=>$_POST[$v['field']]);
                $data['data'] = serialize($cfg);
            }
        }

        $log_info = $data['id'];

        //开始验证有效性
        $this->assign("jumpUrl",u(MODULE_NAME."/edit",array("id"=>$data['id'])));
        if(!check_empty($data['name']))
        {
            $this->error(L("NAME_EMPTY_TIP"));
        }



        $log_info = $data['name'];

        $list=M(MODULE_NAME)->save ($data);
        if (false !== $list) {
            //成功提示
            save_log($log_info.L("UPDATE_SUCCESS"),1);
            $this->success(L("UPDATE_SUCCESS"));
        } else {
            //错误提示
            save_log($log_info.L("UPDATE_FAILED"),0);
            $this->error(L("UPDATE_FAILED"),0,$log_info.L("UPDATE_FAILED"));
        }
	}
	
	
	public function foreverdelete() {
		//彻底删除指定记录
		$ajax = intval($_REQUEST['ajax']);
		$id = $_REQUEST ['id'];
		if (isset ( $id )) {
				$condition = array ('id' => array ('in', explode ( ',', $id ) ) );	

				$list = M(MODULE_NAME)->where ( $condition )->delete();	
		
				if ($list!==false) {
					$this->success (l("FOREVER_DELETE_SUCCESS"),$ajax);
				} else {
					$this->error (l("FOREVER_DELETE_FAILED"),$ajax);
				}
			} else {
				$this->error (l("INVALID_OPERATION"),$ajax);
		}
	}
	
	public function set_sort()
	{
		$id = intval($_REQUEST['id']);
		$sort = intval($_REQUEST['sort']);
		$log_info = M(MODULE_NAME)->where("id=".$id)->getField("name");
		if(!check_sort($sort))
		{
			$this->error(l("SORT_FAILED"),1);
		}
		M(MODULE_NAME)->where("id=".$id)->setField("sort",$sort);
		save_log($log_info.l("SORT_SUCCESS"),1);
		$this->success(l("SORT_SUCCESS"),1);
	}
}
?>