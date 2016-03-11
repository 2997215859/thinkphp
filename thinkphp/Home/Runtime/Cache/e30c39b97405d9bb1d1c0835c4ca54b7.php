<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>UserAction</title>
	<script type="text/javascript">
		//alert("hell");
		function add() {
			window.location="/thinkphp/index.php/User/add";
		}
	</script>
</head>
<body>
	<form action="__URL__/search/" method="post">
	<table width='500px' align="center" border="px" cellspacing="0px">
		<tr>
			<td>用户名:<input type="text" name="username"></input></td>
			<td>性别:
				<input type="radio" name="sex" value="1">男
				<input type="radio" name="sex" value="0">女
			</td>
			<td>
				<input type="submit" name="search" value="search"></input>
			</td>
		</tr>
	</table>
	</form>
	<table width = '500px' align="center" border="1px">
		<tr>
			<th>id</th>
			<th>username</th>
			<th>sex</th>
			<th>操作</th>
		</tr>
		<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
			<td><?php echo ($vo["id"]); ?></td>
			<td><?php echo ($vo["username"]); ?></td>
			<td><?php echo ($vo["sex"]); ?></td>
			<td>
			<a href="__URL__/del/id/<?php echo ($vo["id"]); ?>">删除</a>
			|
			<a href="__URL__/modify/id/<?php echo ($vo["id"]); ?>">修改</a>
			</td>
		</tr><?php endforeach; endif; else: echo "" ;endif; ?>
	</table>
	<center>
		<button onclick="add()">添加用户</button>
	</center>
	
	
</body>
</html>