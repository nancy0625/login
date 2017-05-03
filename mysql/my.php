<?php
session_start();
//检测是否登录
if (!isset($_SESSION['id'])){
	header("Location:login.php");
	exit();
}
include 'ms_login.php';
$userid=$_SESSION['id'];
$username = $_SESSION['username'];
$user_query = mysql_query("select * from user where id = '$userid' limit 1");
$row = mysql_fetch_array($user_query);
?>