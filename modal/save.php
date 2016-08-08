<?php ob_start();?>
<?php include "header.php"; ?>
<?php include "connectPDO.php"; ?>

<?php
//set sql statment
$sql = "UPDATE tb_name SET `name`=:name,`id_car`=:idCar WHERE `id_name`=:id";

$stmt = $db->prepare($sql);

$stmt->bindParam(':name',$_POST['name'],PDO::PARAM_STR);
$stmt->bindParam(':idCar',$_POST['idCar'],PDO::PARAM_STR);
$stmt->bindParam(':id',$_POST['id'],PDO::PARAM_INT);
$stmt->execute();

header('Location: content2.php');
exit;

?>

<?php include "footer.php"; ?>
<?php ob_end_flush();?>