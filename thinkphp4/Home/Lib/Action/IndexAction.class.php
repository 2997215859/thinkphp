<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
		echo "asdf";
		echo $_GET['year']."年".$_GET['month']."月".$_GET['date']."日";
    }
}