<!DOCTYPE html>
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
		<volist name = 'data' id='vo'>
		<tr>
			<td><{$vo.id}></td>
			<td><{$vo.username}></td>
			<td><{$vo.sex}></td>
			<td>
			<a href="__URL__/del/id/<{$vo.id}>">删除</a>
			|
			<a href="__URL__/modify/id/<{$vo.id}>">修改</a>
			</td>
		</tr>
		</volist>
	</table>
	<center>
		<button onclick="add()">添加用户</button>
	</center>
	
	
</body>
</html>