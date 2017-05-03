<?php
// ���ñ��뷽ʽ
header ( "content-type:text/html;charset=utf-8" );
// �������ݿ����ӳɹ��������ӱ�ʶ����ʧ��ʱ����false
$conn = mysql_connect ( "localhost", "root", "" );
if (! $conn) {
	die ( "连接失败" );
}
// �������ݱ�ı��뷽ʽ
mysql_set_charset ( "utf8" );
// ѡ����Ҫ���ӵ����ݿ�
mysql_select_db ( "gdmec" );
?>