<?php
Class MyCookie{
	public static function deleteAllCookie(){
		foreach ($_COOKIE as $value){
			setcookie($value,"",time()-24*3600);
		}
		
	}
}

?>