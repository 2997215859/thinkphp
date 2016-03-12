<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>login</title>
</head>
<body>
<form action='__URL__/login' method="post">
	<table>
		<tr>
			<td>用户名:<input type="text" name="username"></input></td>
			<td>密码:<input type="password" name="password"></input></td>
		</tr>
		<tr>
			<td>
				<input type="submit" name="login" value="login"></input>
			</td>
		</tr>
	
	</table>
</form>
</body>
</html>