
<?php
//把汉字先urlencode，然后使用json_encode，json_encode之后在次使用urldecode来解析，这样编码出来的
//的json数组中的汉字就不会出现乱码
move_uploaded_file($_FILES["file"]["tmp_name"], "cwx/" . $_FILES["file"]["name"]);
$number = $_POST["number"];
$name = $_POST["name"];
$sex = $_POST["sex"];
$age = $_POST["age"];
$strength = $_POST["strength"];

$array = array(
    "number"=>urlencode($number),
    "name"=>urlencode($name),
    "sex"=>urlencode($sex),
    "age"=>urlencode($age),
    "strength"=>urlencode($strength)
);
file_put_contents("cwx/cwx.txt",json_encode($array));


?>
