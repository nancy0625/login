<?php
$a = 'no';
// echo isset($b);
// echo 输出内容为字符串 对bool数据：true => 1 false =>'
isset($a) or exit('未定义$a');
echo "hello world<br/>";

// 分数转换，百分制转五级计分
function baifenToWuji($score)
{
    $result = '';
    if ($score >= 90) {
        $result = "优";
    } elseif ($score >= 80) {
        $result = "良";
    } elseif ($score >= 70) {
        $result = "中";
    } elseif ($score >= 60) {
        $result = "及格";
    } else {
        $result = "差！";
    }
    return $result;
}

$score = 75;
echo baifenToWuji($score) . "<br/>";

function sayHello()
{
    // 设置缺省时区
    date_default_timezone_set('ASIA/ShangHai');
    echo date("Y年m月d日  H:i:s") . "<br>";
    
    $d = date("D");
    if ($d == "Fri") {
        echo "Have a nice weekend!" . "<br/>";
    } elseif ($d == null) {
        echo "Have a nice Sunday!" . "<br/>";
    } else {
        echo "Have a nice Day" . "<br/>";
    }
}
echo sayHello() . "<br>";

function testSwitch()
{
    $x = "1";
    switch ($x) {
        case 1:
            echo "number 1" . "<br/>";
        case 2:
            echo "number 2" . "<br/>";
        case 3:
            echo "number 3" . "<br/>";
        default:
            echo "No number between 1 and 3" . "<br/>";
    }
}
testSwitch();

$students = array(
    array(
        "name" => "jack",
        "sex" => "boy",
        "age" => "19"
    ),
    array(
        "name" => "jack",
        "sex" => "boy",
        "age" => "19"
    )
);
echo $students[1]["age"] . "<br/>";

$str = "jack1 john2 sarra3";
$ary = explode(" ", $str);
echo $ary[0] . "<br/>";
// echo $ary[1] . "<br/>";

$da = "foo:*:1023:1000::/home/foo:bin/sh";
list($user,$pass,$uid,$gid,$gecos,$home,$shell) = explode(":",$da);
echo $user . "<br/>";
echo $pass . "<br/>";

$pizza  = "piece1 piece2 piece3 piece4 piece5 piece6";
$pieces = explode(" ", $pizza);
echo $pieces[0]; // piece1
echo $pieces[1]; // piece2

?>
