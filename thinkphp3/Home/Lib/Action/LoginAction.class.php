<?php 
class LoginAction extends Action{
	public function index()
	{
		$this->display();
	}
	public function login()
	{
		//var_dump($_POST);
		if($_POST['username']=='ruiy' && $_POST['password']=='root'){
			$_SESSION['pass'] = true;
			$this->display('Index:index');
		}else{
			$this->error("错误");
		}
		
	}
}
 ?>
