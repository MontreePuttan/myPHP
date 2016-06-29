<?php
include 'connect.php';

$sql="select name from tb_brand";
$stm=$con->prepare($sql);

try{
    $stm->execute();
} catch (Exception $exc){
    echo $exc->getTraceAsString();
}

$make=array();
while ($row=$stm->fetch(PDO::FETCH_ASSOC))
{
    //echo $row['name'];
    array_push($make, $row['name']);
}

echo json_encode($make);