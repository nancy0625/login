<?php
echo $_REQUEST['user'];
echo $_REQUEST['password'];
if(isset($_POST['submit'])){
    exit('非法登录！！！');
}
/* $user = htmlspecialchars($_POST['user']);
$password = md5($_POST['password']);
//检查用户名和密码是否正确
$check_query = mysql_query("select userid from user='$user' and password")
    if($_POST['user']==$_POST['TOM'] && $_POST['password']==$_POST['12345']){
        echo $_REQUEST["user"];
        echo $_REQUEST["password"];
        
    }else if ($_POST['user'] != $_POST['TOM']){
        echo "<script>alert('用户名错误');
            window.location.href='Test001.html';</script>";
    }
    else if ($_POST['password'] != $_POST['12345']){
        echo "<script>alert('密码错误')；
            window.location.href='Test001.html';</script>";
    } */

?>