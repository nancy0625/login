<?php
session_start();
if(!isset($_SESSION['user'])){
	header("location:3.3login.html");//自动跳转登录
}else {
	echo "welcome";
}
?>