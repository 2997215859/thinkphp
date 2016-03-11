<script type="text/javascript">
		function login() {
			var ou = document.myform.username;
			var op = document.myform.password;
			var oc = document.myform.code;
			if(ou.value=='' || op.value=='' || oc.value==''){
				alert("用户名或者密码或者验证码为空");
			}else{	
				document.myform.submit();
			}
		}
	</script>