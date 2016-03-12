<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Index</title>
	<style type="text/css">
		#navigation{
			height:100px;
			width:400px;
			background:blue;
		}
		a{
			border:1px solid gray;
			font-size: 20px;
			text-decoration-style: none;
		}
	</style>
</head>
<body>
	<div id="navigation">
		<?php if(is_array($list)): foreach($list as $key=>$v): ?><a href="__APP__/City/<?php echo ($v["name"]); ?>"><?php echo ($v["name"]); ?></a><?php endforeach; endif; ?>
	</div>
</body>
</html>