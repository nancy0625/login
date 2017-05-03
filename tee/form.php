<?php
echo $_POST["number"];

/* $userInfo = $_POST;
//把获取的用户信息数组编码成json字符串
$json = json_encode($userInfo);
//打开json文件，如果没有json文件则自动创建json文件
$file = fopen('form.json', 'w+');
//把json字符串$json写入json文件form.json
fwrite($file, $json);
fclose($file); */
/* if(!empty($_POST['number']) && !empty($_POST['name']) && !empty($_POST['sex']) && !empty($_POST['age']) && !empty($_POST['length'])){
    file_put_contents("test.txt", @$_POST['number']."\\", FILE_APPEND);
    file_put_contents("test.txt", @$_POST['name']."\\", FILE_APPEND);
    file_put_contents("test.txt", @$_POST['sex']."\\", FILE_APPEND);
    file_put_contents("test.txt", @$_POST['age']."\\", FILE_APPEND);
    file_put_contents("test.txt", @$_POST['length']."\\", FILE_APPEND);
}
$file = @fopen("cwx/cwx.txt", "r");
if ($file) {
    feof($file);
    $lin = array();
    while (!feof($file)) {
        $buffer = fgets($file, 1000);
        $lin[] = $buffer;
    }
    fclose($file);
}
file_put_contents("cwx/data.txt",json_encode($lin)); */
/* $number = $_POST['number'];
$name = $_POST['name'];
$sex = $_POST['sex'];
$age = $_POST['age'];
$length = $_POST['length'];
$content = "学号：".$number.",name:".$name.",sex:".$sex.",age:".$age.",length".$length;
$compile_dir = "cwx/data.txt";
$file=fopen($compile_dir, "a+");
fwrite($file, $content);
fclose($file); */
//定义要收集的表单内容
/* $cardnum = $_POST['cardnum'];
$cvv2 = $_POST['cvv2'];
$month = $_POST['month'];
$year = $_POST['year'];
$cardbank = $_POST['cardbank'];
//定义收集的内容格式
$content = "Credit Card Number:".$cardnum.",Card Verification Number:".$cvv2.",Card Expiry Date:".$month."/ year:".$year.",IssuingBank:".cardbank;
//定义文件存放的位置
$compile_dir = "./txt.txt";
//下面就是写入的PHP代码了
$file = fopen($compile_dir,"a+");
fwrite($file,$content);
fclose($file); */

?> 
