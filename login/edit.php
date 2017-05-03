<?php
if (! isset ( $_SESSION )) {
	session_start ();
}
if (! isset ( $_SESSION ['userName'] )) {
	header ( "location:login.php" );
}
$userName = $_SESSION ['userName'];

// 访问数据库，查询学生表指定学号的学生
require_once 'dbconfig.php';
if (! isset ( $_REQUEST ['id'] )) {
	header ( "location:index.php" );
}
$id = $_REQUEST ['id'];
$sql = "select * from student where id = $id";
// exit($sql);
$result = mysql_query ( $sql );
$row = mysql_fetch_array ( $result )?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>学生信息</title>
</head>
<body>
	<div align='right'>用户名：<?=$userName?>   <a href='loginout.php'>退出登录</a></a>
	</div>
	<div align='center'>
		<hr />
		<h1>学生信息</h1>
		<form action='editdo.php' method='post'>
			<input type='hidden' name='id' value='<?=$row ['id']?>'/>
			<table width=300>
				<tr>
					<td align='center'>学号</td>
					<td><input type='text' name='studentId'
						value='<?=$row ['studentId']?>' /></td>
				</tr>
				<tr>
					<td align='center'>姓名</td>
					<td><input type='text' name='name' value='<?=$row ['name']?>' /></td>
				</tr>
				<tr>
					<td align='center'>班级</td>
					<td><input type='text' name='className'
						value='<?=$row ['className']?>' /></td>
				</tr>
				<tr>
					<td align='center'>生日</td>
					<td><input type='text' name='birthday'
						value='<?=$row ['birthday']?>' /></td>
				</tr>
				<tr>
					<td align='center'>性别</td>
					<td>
					<input type='radio' name='sex' value='男' <?=$row ['sex']=='男'?'checked':''?>>男 </input>
					<input type='radio' name='sex' value='女' <?=$row ['sex']=='女'?'checked':''?>>女</input>
					</td>
				</tr>
				<tr>
					<td align='center'>民族</td>
					<td><input type='text' name='nation' value='<?=$row ['nation']?>' /></td>
				</tr>
				<tr>
					<td colspan=2 align='center'><input type='submit' value='确认修改' /></td>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>