<?php

// db user pass option
$dns = 'mysql:host=localhost;dbname=myPHP';
$user = 'root';
$pass = 'root';
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
);

//connect
$db=new PDO($dns,$user,$pass,$options);

if(isset($_GET['make'])){
    echo $make=$_GET['make'];

$product = $db->prepare("SELECT tb_name.name FROM tb_name,tb_car WHERE tb_name.id_car = tb_car.id_car AND tb_name.id_car='$make'");
$product->execute();
$productname = $product->fetchAll(PDO::FETCH_ASSOC);

    $models = array();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<div>
    <?php foreach($productname as $proname):?>

        <?php //echo $proname['name'];
            array_push($models,$proname['name']);

        ?>
    <?php endforeach; ?>
    <?php echo json_encode($models); ?>
</div>
</body>
</html>