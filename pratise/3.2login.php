<?php
header ( "Content-type:text/html;charset=utf-8" );
?>
<html>
<head>
<meta http-equiv="Content-Type" content=" text/html; charset=UTF-8">
</head>
<body>
<?php
if (isset ( $_COOKIE ["username"] )) {
	
	header ( "location:main1.php" );
} else {
	// 获取用户输入
	$username = $_POST ['username'];
	$passcode = $_POST ['passcode'];
	$cookie = $_POST ['cookie'];
	// 判断用户是否存在，密码是否正确
	if ($username == "hhh" && $passcode == "1234567890") {
		switch ($cookie) // 根据用户的选择设置cookie保存的时间
{
			case 0 :
				setcookie ( "username", $username );
				break;
			case 1 :
				setcookie ( "username", $username,time()+24*60*60 );
				break;
			case 2 :
				setcookie ( "username", $username,time()+30*24*60*60 );
				break;
			case 3 :
				setcookie ( "username", $username,time()+365*24*60*60  );
				break;
		}
		header("location:main.php");//自动跳转到main.php
	}else {
		echo "用户名或密码错误";
	}
}

?>
</body>
</html>