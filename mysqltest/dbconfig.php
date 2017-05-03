<?php
// 设置编码方式
header ( "content-type:text/html;charset=utf-8" );
// 连接数据库连接成功返回链接标识符，失败时返回false
$conn = mysql_connect ( "localhost", "root", "5820." );
if (! $conn) {
	die ( "连接失败!" );
}
// 编码方式
mysql_set_charset ( "utf8" );
//选择数据库
mysql_select_db ( "gdmec" );
?>