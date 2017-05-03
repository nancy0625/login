<?php
header("Content-type:text/html;charset=utf-8");
if ((isset($_COOKIE["username"]))){
	echo "欢迎你的光临！！！！！".$_COOKIE['username'];
}else{
	echo "你无权查看相关内容！！！";
}
?>