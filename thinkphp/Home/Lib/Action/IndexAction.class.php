<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
	// $this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p></div><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
	//$this->display();
	//$m =new Model('user');
	$m = M('User');
	$id = '1';
	//$arr=$m->find($id);
	//$arr = $m->select();
	//$arr = $m->getField('id,username');
	//var_dump($arr);
	//$this->assign('data',$arr);
	//$m->username='ruiy';
	//$m->sex='男';
	//$m->add();
	//$m->where('id=5')->delete();
	//$data['id'] = 7;
	/*$data['username'] = "txl";
	$data['sex']='0';
	$data['_logic']='and';
	$data['id'] =array('lt','10');*/
	//$data['username'] = array(like,array("%xl","vovl","we"));
	//$arr = $m->where("username='xi' and sex=0")->find();
    //$data['id'] = array("not between",array(1,10));
    //$data['id'] = array("not in",array(1,7,8));
    //$data['id'] = array(array("lt",10),array("gt",4),'and');
    //$data['id'] = array(array("lt",10),array("gt",4),"or");
    //$data['username'] = array(array("like","%xl"),array("like","%we"),"or");
    //$data["username"] = array(array("like",));
    //$arr = $m->where("username='txl'")->count();
    //$arr = $m->sum('id');
	//$arr = $m->where($data)->select();
	//$arr = $m->execute("select * from tp_user where id > 7");
	$arr = $m->execute("insert into tp_user(`username`,`sex`) values('hello','0')");
	var_dump($arr);
	$this->display();
    }
    public function show(){
    	//echo "thinkphp".$_GET['name'];
    	// $name = $_GET['name'];
    	// $this->assign('data',$name);
   		// $this->display();
   		$this->display('my:public:error');
    }
}