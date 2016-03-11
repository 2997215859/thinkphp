<?php 
/**
* 	
*/
class UserAction extends Action
{
	public function index()
	{

		//echo "index of UserAction";
		$m = M('User');
		//$arr = $m->order("sex desc")->select();
		$arr = $m->order(array('id'=>'desc','sex'=>'asc'))->select();
		//var_dump($arr);
		$this->assign('data',$arr);
		$this->display();
	}
	public function del()
	{
		$m = M('User');
		$count = $m->delete($_GET['id']);
		if($count>0){
			$this->success('数据删除成功');
		}else{
			$this->error('数据删除错误');
		}
	}
	public function modify()
	{
		$m = M('User');
		//$arr = $m->where("id = $_GET[id]")->select();
		$arr = $m->find("$_GET[id]");
		var_dump($arr);
		//$sex = $arr['sex'];
		//var_dump($sex);
		$this->assign('data',$arr);
		//$this->assign('sx',$sex);
		$this->display();
	}
	public function update()
	{
		var_dump($_POST);
		$data['id'] = $_POST['id']; 
		$data['username'] = $_POST['username'];
		$data['sex'] = $_POST['sex'];
		var_dump($data);
		$m = M('User');
		$count = $m->save($data);
		echo $count;
		//$this->display('index');
		if($count>0){
			$this->success("数据更新成功","index");
		}else{
			$this->error("数据更新失败");
		}
	}
	public function add()
	{
		$this->display();
	}
	public function create(){
		$m = M('User');
		//var_dump($_POST);
		$m->username=$_POST['username'];
		$m->sex=$_POST['sex'];
		$idnum = $m->add();
		if($idnum){
			$this->success("数据插入成功","/thinkphp/index.php/User/");
		}else{
			$this->error("数据插入失败");
		}
	}
	public function search(){
		//var_dump($_POST);
		$m = M("User");
		//$search['username'] = $_POST['username'];
		if(isset($_POST['sex']) && $_POST['sex']) 
		{
			$search['sex'] = $_POST['sex'];
		}
		if(isset($_POST['username']) && $_POST['username']) 
		{
			$search['username'] = array('like',"%{$_POST['username']}%");
		}
		$arr = $m->where($search)->select();
		//var_dump($arr);
		$this->assign('data',$arr);
		$this->display('index');
	}
}
?>