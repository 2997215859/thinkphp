<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
	public function _before_index(){
		if(!(isset($_SESSION['pass']) && ($_SESSION['pass'])))
		{
			$this->redirect('Login/index');
		}
	}
    public function index(){

    	$m = M('city');
    	$arr = $m->select();
    	//var_dump($arr);
    	$this->assign('list',$arr);
    	echo "asdf";
		$this->display();
    }
    public function _after_index()
    {
    	echo "<script>alert('欢迎')</script>";
    }
}