<?php
$name = 'niii';
$number = 77;
$name1 = $name;
$number1 = $number;
echo $name1;

echo $number1;

$a = 10;
$b =&$a;
echo $b;
$b =50;
echo $a;
$a = "bbb";
function ee(){
   global  $a ;
    echo $a."<br>";
    
}

ee();

$a = "58956666";
strlen($a);
echo substr($a,4)."<br>";

$fileName = 'PHP大师.php';
echo substr($fileName, 0,-3)."<br>";
echo substr($fileName, 0,11)."<br>";
echo substr($fileName, 0,9)."<br>";
echo substr($fileName, 0,6)."<br>";
echo substr($fileName, 0)."<br>";

$x="866hihl";
$y=6;
echo $x.=$y."<br>";
/* 
$a = 55/2;
$b = 55/2.0;
echo $a.$b."<br>"; */

3>2||$a=2;
echo $a."<br>";



$c = 'qqqqqqqqqq$a';
$a = "4qqqqqqqqqq$c";

echo strrpos ( $a, 'q' );
echo "<br/>";
/* echo $c;
echo "<br/>";
echo strlen ( $c );
echo "<br/>";
echo strlen ( $b );
echo "<br/>"; */
 $a = array ('a' => 'apple', 'b' => 'banana', 'c' => array ('x','y','z'));
    print_r ($a);
    
    
    
    include 'tool.php';
    header("Content-Type: text/html;charset=utf-8");
    $str=$_GET['jt'];
    
    //echo $str;
    
    $arr=json_decode($str,true);
    
    //$s='罗耀';
    //echo $s;
    if($arr["act"]=="1")//查询1本书
    {
        seletctone($arr["parm"]);//parm为书名
    }
    if($arr["act"]=="2")// 查询所有书
        selectall($arr["parm"]);//parm为“all”
    
    


?>