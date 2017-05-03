<?php
session_start();
if(isset($_SESSION['id'])){
	$_SESSION=array();
	if(isset($_COOKIE[session_name()])){
		setcookie(session_name(),'',time()-3600);
		
	}
	//使用内置session_destroy()函數清楚session記錄
	session_destroy();
	
}
header ( "location:login.php" );
?>