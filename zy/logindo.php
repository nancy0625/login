<?php header('Content-type:text/html;charset=UTF-8');?>
</head>
<meta http-equiv="Content-type" content="text/html: charset=UTF-8">
<body>
<?php
session_start ();

$email = $_POST ['email'];
$mobile = $_POST ['mobile'];
if (isset ( $_SESSION ["name"] )) {
	header ( "location:index.php" );
} elseif (! isset ( $_REQUEST ["name"] )) {
	/* echo "s";
	exit(); */
	header ( "location:login.php" );
} /* else if (empty ( $username )) {
	
	die ( "用户信息不能为空" );
}  */
$username = $_POST ['name'];
$passcode = $_POST ['passcode'];

	if (!preg_match ( "/^\w+$/i", $username ['name'] ) && $passcode == "07160605") {
// 	die ( "用户名不合法" );
		echo "用户名或密码错误<br/><a href='login.php'>重新登录</a>";

	/* var_dump($_SESSION["name"]);
	exit(); */
	//
} 
else {
	$_SESSION ["name"] = $username;
	header ( "location:index.php" ); // 自动跳转到index.php
	/* if (! preg_match ( '/^[\w\.]+@\w+\.\w+$/i', $user ['email'] )) {
		die ( "邮箱不合法" );
	}
	if (! preg_match ( '/^1\d{10}$/i', $user ['mobile'] )) {
		die ( "手机号不合法" );
	} else */ /* {
		
	} */
	echo "用户信息验证成功";
	
	// 获取用户输入
	
	/*
	 * if(strlen($user['name'])<6){
	 * die("用户名长度最少为6位");
	 * }
	 */
	// 用户名必须为字母，数字与下划线
	
	// 验证邮箱格式是否正确
	
	// 判断用户是否存在，密码是否正确
	/*
	 * if ($username == "07160605" && $passcode == "07160605") {
	 *
	 * }
	 */
	/*
	 * $user = array(
	 * 'name' => '07160605',
	 * 'email' => '1308013168@qq.com',
	 * 'mobile' => '110'
	 * );
	 */
}

?>
</body>
</html>