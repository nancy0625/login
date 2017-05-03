
<?php
header ('Content-type:text/html;charset=utf-8');
move_uploaded_file($_FILES["file"]["tmp_name"], "cwx/" . $_FILES["file"]["name"]);
/* if(isset ($_REQUEST ['name'])) {
	if((($_FILES ["file"] ["type"] == "image/gif") || ($_FILES ["file"] ["type"] == "image/jpg"))){

	}
	if ($_FILES ["file"] ["error"] > 0){
		echo"Return Code:" . $_FILES["file"] ["error"] . "<br/>";
	}else{
		if (file_exists("upload/" . $_FILES ["file"] ["name"])) {
			echo $_FILES ["file"] ["name"] . "already exists.";
		}else{
			move_uploaded_file ($_FILES ["file"] ["tmp_name"], "cwx/" . "cwx.jpg");

		}
	}
}else{
	exit("��Ƭ��ʽ���ϸ�");

} */
//�Ѻ�����urlencode��Ȼ��ʹ��json_encode��json_encode֮���ڴ�ʹ��urldecode���������������������
//��json�����еĺ��־Ͳ����������

$number = $_REQUEST["number"];
$name = $_REQUEST["name"];
$sex = $_REQUEST["sex"];
$age = $_REQUEST["age"];
$strength = $_REQUEST["strength"];

$array = array(
    "number"=>urlencode($number),
    "name"=>urlencode($name),
    "sex"=>urlencode($sex),
    "age"=>urlencode($age),
    "strength"=>urlencode($strength)
);
file_put_contents("cwx/cwx.txt",json_encode($array));



?>
