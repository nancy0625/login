<?php
	$con=mysql_connect("localhost","root","5820.") or die("数据库连接错误".mysql_error());
	mysql_select_db("stu",$con) or die("数据库访问错误".mysql_error());
	mysql_query("set name gb2312");
?>
