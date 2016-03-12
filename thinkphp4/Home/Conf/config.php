<?php
return array(
	//'配置项'=>'配置值'
	'URL_CASE_INSENSITIVE'=>true,//url不区分大小写	
	'URL_ROUTER_ON'   => true, //开启路由
	'URL_ROUTE_RULES' => array( //定义路由规则
    'news/:year/:month/:day' => array('News/archive', 'status=1'),
    'news/:id'               => 'News/read',
    'news/read/:id'          => '/news/:1',
    'my'					 => 'index',
    'id/:num'				 => 'index/index',
    //'year/:year\d/:month\d/:date\d' => 'index/index',
    '/^year\/(\d{4})\/(\d{2})\/(\d{2})/'  => 'index/index?year=:1&month=:2&date=:3',
	),
	//'URL_HTML_SUFFIX'=>'html|shtml|xml',//限制伪静态的后缀
);
?>