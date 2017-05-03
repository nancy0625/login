<?php
function checkCard($cardNu)
{
    $cardArray = str_split($cardNu,1);
    $sum = 0;
    
    //从卡号最后一位数字开始，逆向将奇数位（1、3、5等）相加
    for ($i = count($cardArray)-1;$i >= 0;$i -= 2)
    {
        $sum += $cardArray[$i];
    }
    for ($j = count($cardArray)-2; $j >= 0; $j -=2) {
        $test = 2*$cardArray[$j];
        if ($test>9)$test -= 9;
        
            $sum += $test;
    }
        if ($sum%10==0)
        {
            return true;
        }else
        {
            return false;
        }
        
    }

$cardNu = '356827027232780';
    if (checkCard($cardNu)){
        echo "卡号通过验证";
    }else {
        echo "卡号不对！";
    }
    
for ($i = 100;$i<999999;$i++)
{
    $arr=str_split(''.$i);
    $length = count($arr);
    $sum = 0;
    for ($j=0;$j<$length;$j++)
    {
        $sum += pow($arr[$j], $length);
    }
    if ($sum==$i){
        echo $i.''."<br>";
    }
}
    
/* for ($i = 100;$i<999;$i++)
{
    $arry = str_split('',$i);
    $length = count($arry);
    $sum = 0;
    for ($j =0;$j<$length;$j++)
    {
        $sum += pow($arry[$j], $length);
        
    }
    if ($sum == $i)
    {
        echo $i.'';
    }
}
 */
?>
