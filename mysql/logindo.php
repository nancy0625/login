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
	echo "ע��ɹ���";
	echo "<a href='login.php'>ȥ��¼</a>";
	
}else {
	echo "ע��ʧ�ܣ�";
	echo "<a href='register.php>����ע��</a>";
}
}
?>