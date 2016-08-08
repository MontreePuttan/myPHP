<?php include "header.php"; ?>

<?php include "connectPDO.php"; ?>



<?php
$select = $db->query('select * from tb_name');
$customer = $select->fetchAll();
?>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-2">
            <h1>Update Data With Modal</h1>
        </div>
        <div class="col-md-2"></div>
    </div>

    <div class="row">
        <div class="col-md-10 col-md-offset-2">
            <table class="table datatable">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>id</th>
                        <th>Name</th>
                        <th>Car ID</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $i = 1;
                        foreach($customer as $c){
                    ?>
                            <tr>
                                <th><?php echo $i; ?></th>
                                <th><?php echo $c['id_name']; ?></th>
                                <th><?php echo $c['name']; ?></th>
                                <th><?php echo $c['id_car']; ?></th>
                                <th>
                                    <a class="edit-customer"
                                        data-id="<?php echo $c['id_name']; ?>"
                                        data-name="<?php echo $c['name']; ?>"
                                        data-idcar="<?php echo $c['id_car']; ?>">Edit</a>
                                </th>
                            </tr>
                    <?php $i++; } ?>
                </tbody>
            </table>
        </div>
        <div class="col-md-2"></div>

        <!-- Modal Zone -->
        <div class="modal fade" id="myModal">
            <div class="modal-dialog">
                <form role="form" action="save.php" method="post">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">
                                <span>&times;</span>
                            </button>
                            <h4>การใช้ Modal</h4>
                        </div>
                        <div class="modal-body">
                                <div class="form-group">
                                    <label>ID</label>
                                    <input type="text" class="form-control" placeholder="id" name="id" id="id">
                                </div>
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" placeholder="name" name="name" id="name">
                                </div>
                                <div class="form-group">
                                    <label>ID Car</label>
                                    <input type="text" class="form-control" placeholder="id-car" name="idCar" id="idcar">
                                </div>


                            </form>
                        </div>
                        <div class="modal-footer">
                            Please fill your information.
                            <input type="submit" class="btn btn-primary" value="Save">
                            <button type="button" class="btn btn-danger"
                                    data-dismiss="modal">Close</button>
                        </div>

                    </div>
                </form>
            </div>

        </div>

    </div>
</div>



<?php include "footer.php"; ?>