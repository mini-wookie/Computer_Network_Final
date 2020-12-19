<html>
<head><title> 로그인 폼 </title></head>
<body>
<script>	
	function chk_logform(){
		if(login_form.fuserid.value==""){
			alert('[아이디]를 입력하세요.');
			login_form.fuser.focus();
			return false;
		} else if(login_form.fpasswd.value==""){
			alert('[비밀번호]를 입력하세요.');
			login_form.fpasswd.focus();
			return false;
		} else{
			return true;
		}
	}
	</script>
	<center><font size = 4><br><br> 로그인 페이지 </br></font><hr>
	<form name = "login_form" action = "login.php" method = "post" onsubmit = "return chk_logform();">
	<table width = "350" border = "0" align = "center" cellpadding = "5" cellspacing = "0">
	<tr bgcolor = #3300CC>
	<td colspan = "2"><font color = #FFFFFF><b> 로그인 폼<b></font></td>
	</tr>
	<tr bgcolor = #FFFFCC><td width = "35%" align = "center">아이디 </td>
	<td align = "center"><input type = "text" name = "fuserid" id = "fuserid" size = "19"></td>
	</tr>
	<tr bgcolor = #FFFFCC><td align = "center"> 비밀번호 </td>
	<td align = "center"><input type = "password" name = "fpasswd" id = "fpasswd" size = "20"></td>
	</tr>
	<tr bgcolor = #CCCCFF><td colspan = "2" align = "center">
	<input type = "submit" name = "Submit" value = " 로그인 ">&nbsp;&nbsp;
	<input type = "reset" name = "Reset" value = "취소 "></td>
	</tr>
	</form>
	</table>
	<br> [<a href = "add_form.php"> 회원가입 </a>]</center><br>
	</body>
	</html>