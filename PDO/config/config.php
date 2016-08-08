<?php
try{
    //connect to database
    $db = new PDO('mysql:host=localhost; dbname=myPHP; charset=utf8','root','root');
    //echo "Hello";

} catch(Exception $e){
    echo "Can not connect to database";
    throw new Exception($e);
}
?>