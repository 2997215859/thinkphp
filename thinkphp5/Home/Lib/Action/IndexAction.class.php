<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
		$m = M('User');
		$arr = $m->select();
		//var_dump($arr);
		$this->assign('list',$arr);
		$this->display();
    }
    public function info()
    {
    	$id = $_GET['id'];
    	$m = M('User');
    	$arr = $m->find($id);
    	if($arr){
    		$this->assign('data',$arr);
    		$this->display();
    	}else{
    		$this->success('查询成功',U('User/index'));
    	}   	
    }
}