<?php
	$dsn = 'mysql:host=localhost;dbname=myPHP';
	$username = 'root';
	$password = 'root';
	$options = array(
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
    );

	try {
        $con = new PDO($dsn, $username, $password, $options);
        //echo 'ติดต่อ mysql สำเร็จ';
    } catch (PDOException $e){
        echo 'ไม่สามารถติดต่อ mysql'.$e->getMessage();
    }
?>