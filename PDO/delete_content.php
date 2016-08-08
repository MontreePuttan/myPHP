<?php
$option = ["cost"=>12,];
define("PASSWORD","12345");
echo $aa  =  password_hash(PASSWORD,PASSWORD_DEFAULT,$option);