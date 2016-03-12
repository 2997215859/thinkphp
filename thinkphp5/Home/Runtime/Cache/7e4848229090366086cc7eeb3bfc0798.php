<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<table border="1px" cellspacing="0px">
		<?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr>
				<td><a href="__URL__/info?id=<?php echo ($vo["id"]); ?>">用户名:<?php echo ($vo["username"]); ?></a></td>
			</tr><?php endforeach; endif; ?>
	</table>
</body>
</html>