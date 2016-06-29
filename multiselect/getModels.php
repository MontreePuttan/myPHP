<?php
include 'connect.php';

if(isset($_GET['make'])){
    $make=$_GET['make'];
    $sql="select tb_model.model
from tb_brand,tb_model
where tb_brand.id_brand = tb_model.id_brand AND tb_brand.name='$make'";

    $stm=$con->prepare($sql);
    try{
        $stm->execute();
    } catch (Exception $exc){
        echo $exc->getTraceAsString();
    }

    $models=array();
    while ($row=$stm->fetch(PDO::FETCH_ASSOC))
    {
        //echo $row['model']."<br>";
        array_push($models, $row['model']);
    }
}
echo json_encode($models);
