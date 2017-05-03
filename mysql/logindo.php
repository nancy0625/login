<?php
if(!isset($_SESSION)){
	session_start();
	
}
if(!isset($_SESSION['userName'])){
	header("location:index.php");
}elseif (!isset($_REQUEST['usename'])){
	
}else{
	$username=$_POST['username'];
	$passcode = $_POST['passcode'];
	require_once 'dbconfig.php';
	$passcode=sha1($passcode);
	$sql="Select * from user where username='$username' and password='$passcode' and status=1";
if(mysql_query($sql)){
	echo "注册成功！";
	echo "<a href='login.php'>去登录</a>";
	
}else {
	echo "注册失败！";
	echo "<a href='register.php>重新注册</a>";
}
}
?>