<?php
require_once 'dbconfig.php';
session_start ();
function check() {
	$userName = $_REQUEST ['username'];
	$password = $_REQUEST ['password'];
	$password2 = sha1($password);
	// 选择所要链接的数据表
	$query = "select * from user where username='$userName' and password='$password2'";
	$result = mysql_query ( $query );
	// 向与指定的连接标识符关联的服务器中的当前活动数据库发送一条查询
	if ($row = mysql_fetch_array ( $result )) {
		// 用户名密码正确
		$_SESSION ['username'] = $userName;
		header ( "location:index.php" );
	} else {
		// echo "用户名或者密码错";
		// 校验不过
		echo "<script>alert('用户名或者密码错！');</script>";
		header ( "location:login.html" );
	}
}
//登录过，不用验证
if (isset ( $_SESSION ['username'] )) {
	header ( "location:index.php" );
} else {
	//验证
	check ();
}
?>