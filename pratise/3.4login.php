<?php

session_start();
if (isset($_SESSION['user'])){
	header("Location:main.php");//自动跳转
}else {
	//获取用户输入
	$username = $_POST['username'];
	$passcode = $_POST['passcode'];
	$cookie = $_POST['cookie'];
	//判断用户是否存在，密码是否正确
	if ($username=="hhh"&&$passcode=="123456789")
	{
		$_SESSION['user']=$username;
		header("Location:main.php");//自动跳转到main.php
		
	}else{
		echo "用户名或密码错误";
	}
}
?>