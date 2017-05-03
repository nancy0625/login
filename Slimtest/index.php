<?php  
require 'Slim/Slim.php';   
\Slim\Slim::registerAutoloader();  
$app2=new \Slim\Slim();
$app2->get('/hello/:name', function ($name) {
    echo 'hello'.' '.$name;
});
$app2->run();
?>