<?php
if (! isset ( $_SESSION )) {
	session_start ();
}
if (! isset ( $_SESSION ['userName'] )) {
	header ( "location:login.php" );
}
$userName = $_SESSION ['userName'];
// 访问数据库，查询学生表
require_once 'dbconfig.php';
$sql = "select * from student";
$result = mysql_query ( $sql );
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>学生信息</title>
</head>
<body>
	<div align='right'>用户名：<?=$userName?>   <a href='loginout.php'>退出登录</a></a>
	</div>
	<hr />
	<h1>学生信息</h1>
	<table border=1 >
		<tr>
			<th>学号</td>
			<th>姓名</td>
			<th>班级</td>
			<th>生日</td>
			<th>性别</td>
			<th>民族</td>
			<th>操作</th>
		</tr>
<?php
while ( $row = mysql_fetch_array ( $result ) ) {
	echo "<tr>";
	echo "<td>" . $row ['studentId'] . "</td>";
	echo "<td>" . $row ['name'] . "</td>";
	echo "<td>" . $row ['className'] . "</td>";
	echo "<td>" . $row ['birthday'] . "</td>";
	echo "<td>" . $row ['sex'] . "</td>";
	echo "<td>" . $row ['nation'] . "</td>";
	echo "<td>" ."<a href=\"edit.php?id='". $row ['id'] ."'\">编辑</a></td>";
	echo "</tr>";
}
?>
</table>

</body>
</html>