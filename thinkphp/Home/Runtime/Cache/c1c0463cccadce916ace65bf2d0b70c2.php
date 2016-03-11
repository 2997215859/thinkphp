<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>add</title>
</head>
<body>
	<form action="/thinkphp/index.php/User/create" method="post">
	<table border="1px">
		<tr>
			<th>姓名</th>
			<td>
				<input type="text" name="username"></input>
			</td>
		</tr>
		<tr>
			<th>性别</th>
			<td>
				<input name="sex" value="1" type="radio">男
				<input name="sex" value="0" type="radio">女
			</td>
		</tr>
		<tr>
			<th colspan="2">
				<input type="submit" value="添加新用户"></input>
			</th>
		</tr>
	</table>
	</form>
</body>
</html>