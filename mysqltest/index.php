<?php
session_start();
if(!isset($_SESSION['username'])){
	header("location:login.html");
}
echo "hello,welcome you";
?>
