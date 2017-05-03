<?php
include 'mydb.php';
header("Content-Type: text/html;charset=utf-8");
function seletctone($param)
{
    $mysql="select * from allbook where bookname='".$param."'";
    $resCat = @mysql_query($mysql);
    $rowCat = @mysql_fetch_array($resCat);

    $s=array("act"=>"1","bookname"=>$rowCat["bookname"],"author"=>$rowCat["author"],"detail"=>$rowCat["detail"]);

    echo json_encode($s);

}
function selectall($param)
{
    $mysql="select * from allbook";
    $resCat = @mysql_query($mysql);

    while($rowCat = @mysql_fetch_array($resCat))
    {
        $chooseall[]=array(
            "bookname"=>$rowCat["bookname"],
            "author"=>$rowCat["author"],
            "detail"=>$rowCat["detail"]
        );
    }
    $ca='{"act":"2","all":'.json_encode($chooseall).'}';

    echo $ca;
}

?>