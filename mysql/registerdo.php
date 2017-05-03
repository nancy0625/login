<?php
require_once 'dbconfig.php';
header("content-type:text/html;charset=utf-8");
//取出数据库
$username =$_POST['username'];
$password=$_POST['password'];
//计算摘要

$password2=sha1($password);
//sql语句参数值如果是字符串，必须加引号，数字字段随便
$sql="insert into user(id,username,password,status) values (null,'$username','$password2',1)";
if(mysql_query($sql)){
	echo "注册成功！";
	echo "<a href='login.php'>去登录</a>";
	
}else {
	echo "注册失败！";
	echo "<a href='registerdo.php>重新注册</a>";
}
?>