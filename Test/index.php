<?php
$a = 44444;
$b = "qqqqqqqqqqqq";
echo $b."<br/>";

$c = 'qqqqqqqqqqqq';
echo $c;
echo "<br/>";
echo strlen($c);
echo "<br/>";
echo strlen($b);
echo "<br/>";

$c = "q$a";
echo strrpos($c, '4');
echo "<br/>";

//函数定义  function函数名（无数据类型形式参数）{return 返回值}
function rightN($a,$n){
//     $substr = $substr($str,strlen($str )- $n);
  $substr = substr ( $a, - $n );
	return $substr;
}

$a = "asdfgfd";
$n = 5;
echo rightN($a, $n);
echo "<br/>";


$fileName = "php大师.class.php";
echo substr($fileName, 0,strrpos($fileName, '.'));
echo "<br/>";



$fileName = "php大师.class.php";
//右边开始往左边找strrpos
//点号的位置，就是等于左边字符数    汉字占2字节
echo substr($fileName,0,strrpos($fileName,'.'));
echo "<br/>";

$xx = 55;
echo $xx++;  
echo "<br/>";
echo --$xx;  
echo "<br/>";

$yy = 33;
$zz = 44;
echo $yy.$zz;
echo "<br/>";

$yy = "33";$zz = "44";
echo $yy+$zz;echo "<br/>";


?>
