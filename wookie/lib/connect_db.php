<?php
	$host = "localhost";
	$user = "root";
	$passwd = "";
	$connect = mysqli_connect($host, $user, $passwd) or die("mysql서버 접속 에러");
	$db = mysqli_select_db($connect, 'wookie_db');
	mysqli_select_db($connect, 'wookie_db') or dir("DB 접속 에러");
?>