<?php 
class LoginAction extends Action{
	public function index()
	{
		$this->display();
	}
	public function login()
	{
		$username = $_POST['username'];
		$psw = $_POST['password'];
		$code = $_POST['code'];
		//var_dump($_SESSION);
		if(md5($code) != $_SESSION['verify']){
			$this->error("验证码错误");
		}
		$m = M('User');
		$where['username'] = $username;
		$where['password'] = $psw;
		$count = $m->where($where)->count();
		if($count>0){
			$this->redirect("User/index");
		}else{
			$this->error("该用户不存在");
		}

	}
}
?>

