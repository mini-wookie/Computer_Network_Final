<?php 
	include "../wookie/lib/connect_db.php";
	echo "<center><p><br><b><h2> user_tbl 테이블 성공여부 판별 </h2></b><hr><p>";
	if($db)
	{
		echo " [wookie_db] 데이터베이스 선택완료 <br> ";
	}
	else
	{
		echo " <B> wookie_db 데이터 베이스 선택 실패 </B><br> ";
		echo " 프로그램을 종료합니다...";
		exit;
	}
	$sql = "create table user_tbl(
			no int primary key not null auto_increment,
			userid varchar(12) not null,
			name varchar(12) not null,
			passwd varchar(12),
			sex char(1),
			email varchar(30),
			date datetime,
			ip_addr varchar(30))
			default charset = utf8 ";
	$result = mysqli_query($connect, $sql);
	
	if($result)
	{
		echo "<hr>";
		echo "<p> 성공적으로 user_tbl 테이블을 생성하였습니다. ..... <br><br>";
		echo "........ 이제 레코드를 삽입할 준비가 되었습니다.. <hr><br>";
		echo">> <a href = ../wookie/main.php> 메인화면으로 이동 </a><< <br>";
	exit;
	}
	echo "</center>";
	mysqli_close($connect);
?>