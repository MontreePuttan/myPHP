<?php include "header.php"; ?>

<?php include "menu.php"; ?>

<?php include "config/config.php"; ?>


<?php
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$create = date("Y-m-d H:i:s");
$active = "1";


$sql = "INSERT INTO tb_member_pdo(name,lastname,`create`,active) VALUES (:name,:lastname,:create,:active)";

$stmt = $db->prepare($sql);

$stmt->bindParam(':name', $name,PDO::PARAM_STR);
$stmt->bindParam(':lastname', $lastname,PDO::PARAM_STR);
$stmt->bindParam(':create', $create,PDO::PARAM_STR);
$stmt->bindParam(':active', $active,PDO::PARAM_INT);

$check = $stmt->execute();
if($check){
    echo "Check Pass";
}else{
    echo "Check Fail";
}

?>


    <div class="container">
        <div class="row">
            <form action="" method="post">
                <div class="form-group">
                    <label for="email">Name</label>
                    <input type="text" class="form-control" name="name">
                </div>

                <div class="form-group">
                    <label for="email">Last Name</label>
                    <input type="text" class="form-control" name="lastname">
                </div>

                <input type="submit" value="Search" class="btn btn-default"/>
            </form>
        </div>
    </div>

<?php include "footer.php"; ?>