<?php
require_once 'dbconfig.php';
session_start ();
function check() {
	$userName = $_REQUEST ['username'];
	$password = $_REQUEST ['password'];
	$password2 = sha1($password);
	// ѡ����Ҫ���ӵ����ݱ�
	$query = "select * from user where username='$userName' and password='$password2'";
	$result = mysql_query ( $query );
	// ����ָ�������ӱ�ʶ�������ķ������еĵ�ǰ����ݿⷢ��һ����ѯ
	if ($row = mysql_fetch_array ( $result )) {
		// �û���������ȷ
		$_SESSION ['username'] = $userName;
		header ( "location:index.php" );
	} else {
		// echo "�û������������";
		// У�鲻��
		echo "<script>alert('�û������������');</script>";
		header ( "location:login.html" );
	}
}
//��¼����������֤
if (isset ( $_SESSION ['username'] )) {
	header ( "location:index.php" );
} else {
	//��֤
	check ();
}
?>