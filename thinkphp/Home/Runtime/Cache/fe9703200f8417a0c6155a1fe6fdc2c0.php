<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/login.css">
	<script src="__PUBLIC__/Js/login.js"></script>
</head>
<body>
	<form action="__URL__/login/" method="post" name="myform">
		<table>
			<tr>
				<td>用户名:<input type="text" name="username"></input></td>
			</tr>
			<tr>
				<td>密  码:<input type="password" name="password"></input></td>
			</tr>
			<tr>
				<td>验证码:<input type="text" name="code"></td>
				<td><img src="__APP__/Public/code" onclick="this.src=this.src+'?'+Math.random()"></td>
			</tr>
			<tr>
			<td><img src="__PUBLIC__/images/login.gif" onclick="login()"></td>
			</tr>
		</table>
	</form>
</body>
</html>