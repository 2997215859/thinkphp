<script type="text/javascript">
		function login() {
			var ou = document.myform.username;
			var op = document.myform.password;
			var oc = document.myform.code;
			if(ou.value=='' || op.value=='' || oc.value==''){
				alert("�û����������������֤��Ϊ��");
			}else{	
				document.myform.submit();
			}
		}
	</script>