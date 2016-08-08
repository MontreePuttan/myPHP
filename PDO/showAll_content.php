<?php include "header.php"; ?>

<?php include "menu.php"; ?>

<?php include "config/config.php"; ?>

<?php
//$select = $db->query('select * from tb_member_pdo');
//$customer = $select->fetchAll();

$sql = "select * from tb_member_pdo";
$stmt = $db->prepare($sql);
$stmt->execute();
$customer = $stmt->fetchAll();

?>

<div class="container">
    <div class="row">
        <h4>Show All</h4>
    </div>

    <div class="row">
        <table class="table table-bordered">
            <tr>
                <td>#</td>
                <td>Name</td>
                <td>Last Name</td>
                <td>Action</td>
            </tr>
            <?php
            $no = 1;
            foreach($customer as $c){
            ?>
            <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $c['name']; ?></td>
                <td><?php echo $c['lastname']; ?></td>
                <td><a href="edit_showAll.php?id=<?php echo $c['id']; ?>">EDIT</a></td>
            </tr>
            <?php $no++; }?>
        </table>
    </div>
</div>

<?php include "footer.php"; ?>