
<a href="logout.php">退出登录</a>
<hr/>
<?php
//是否登录过
session_start();
if (!isset($_SESSION['name'])){
	header("location:login.php");
}

include_once 'cookie.php';
setcookie("visttime","今天的天气不错",time()+24*3600);
echo $_COOKIE["visttime"];
//MyCookie::deleteAllCookie();
?>
07160605