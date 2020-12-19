<?php
$fuserid = $_POST['fuserid'];
$fname = $_POST['fname'];
$fpasswd = $_POST['fpasswd'];
$fpasswd_re = $_POST['fpasswd_re'];
$fsex = $_POST['fsex'];
$femail = $_POST['femail'];
$userip = $_SERVER['REMOTE_ADDR'];

include "../wookie/lib/connect_db.php";

if($fuserid == "" || $fname == "" || $fpasswd == "" || $fpasswd_re == "" || $fpasswd !== $fpasswd_re)
{
	echo "<script>
	alert(' * 필수 입력사항은 반드시 입력해야 합니다...');
	history.back();
	</script>";
	die;
}
mysqli_query($connect, "set session character_set_connection = utf8;");
mysqli_query($connect, "set session character_set_results = utf8;");
mysqli_query($connect, "set session character_set_client = utf8;");

$sql = "insert into user_tbl(userid, name, passwd, sex, email, date, ip_addr)";
$sql.= "values ('$fuserid', '$fname', '$fpasswd', '$fsex', '$femail', now(), '$userip')";
$res = mysqli_query($connect, $sql);

echo "<center><br><font size = 5> 회원등록 성공 </font><p><hr>";
echo "<br> 회원등록을 축하합니다~~</font></center>";

if($res > 0){
	echo "<script>
	alert('[등록 성공]\\r\\n회원으로 등로되었습니다.');
	location.replace('login_form.php');
	</script>";
	}else {
		echo "<script>
		alert('[등록 실패]\\r\\n회원으로 등록을 실패했습니다.');
		history.back();
		</script>";
	}
	mysqli_close($connect);
?>