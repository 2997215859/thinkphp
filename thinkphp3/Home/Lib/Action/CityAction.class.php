<?php 
class CityAction extends Action{
	public function index()
	{
		# code...
	}
	public function beijing()
	{
		$oi = new IndexAction();
		$oi->index();
	}
	public function shanghai()
	{
		$oi = new IndexAction();
		$oi->index();
	}
	public function guangzhou()
	{
		$oi = new IndexAction();
		$oi->index();
	}
	public function _empty($name){
		$this->show("$name 不存在 <a href='__APP__/Index/index'>返回首页</a>");
	}
}
 ?>

