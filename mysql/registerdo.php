<?php
require_once 'dbconfig.php';
header("content-type:text/html;charset=utf-8");
//ȡ�����ݿ�
$username =$_POST['username'];
$password=$_POST['password'];
//����ժҪ

$password2=sha1($password);
//sql������ֵ������ַ�������������ţ������ֶ����
$sql="insert into user(id,username,password,status) values (null,'$username','$password2',1)";
if(mysql_query($sql)){
	echo "ע��ɹ���";
	echo "<a href='login.php'>ȥ��¼</a>";
	
}else {
	echo "ע��ʧ�ܣ�";
	echo "<a href='registerdo.php>����ע��</a>";
}
?>