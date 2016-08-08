<?php include "header.php"; ?>

<?php
echo $_POST['name'];
echo "<br>";
echo $_POST['lastname'];
?>

<div class="container">
    <button class="btn btn-default" type="button"
            data-toggle="modal" data-target="#myModal">
        Launch Modal

    </button>

    <div>
        <table class="table-bordered">
            <tr>
                <td>ชื่อ</td>
                <td>นามสกุล</td>
                <td>#</td>
            </tr>
            <tr>
                <td>Mr.Lee</td>
                <td>Yoo</td>
                <td>
                    <a href="#myModalEdit" data-toggle="modal">Edit</a>
                    <button class="btn btn-primary" data-toggle="modal" data-target="#myModalEdit">
                        <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                    </button>
                    <button class="btn btn-danger">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </td>
            </tr>
        </table>
    </div>

    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                    <h4>การใช้ Modal</h4>
                </div>
                <div class="modal-body">
                    <form role="form" action="" method="post">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" placeholder="Message" name="name">
                        </div>
                        <div class="form-group">
                            <label>Lastname</label>
                            <input type="text" class="form-control" placeholder="Message" name="lastname">
                        </div>

                        <button type="submit" class="btn btn-success"> Save </button>
                        <button type="button" class="btn btn-danger"
                                data-dismiss="modal">Close</button>
                    </form>
                </div>
                <div class="modal-footer">
                    Please fill your information.
                </div>

            </div>
        </div>

    </div>

    <div class="modal fade" id="myModalEdit">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                    <h4>การใช้ ModalEdit</h4>
                </div>
                <div class="modal-body">
                    <form role="form" action="" method="post">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" placeholder="Message" name="name" value="">
                        </div>
                        <div class="form-group">
                            <label>Lastname</label>
                            <input type="text" class="form-control" placeholder="Message" name="lastname">
                        </div>

                        <button type="submit" class="btn btn-success"> Save </button>
                        <button type="button" class="btn btn-danger"
                                data-dismiss="modal">Close</button>
                    </form>
                </div>
                <div class="modal-footer">
                    Please fill your information.
                </div>

            </div>
        </div>

    </div>

</div>



<?php include "footer.php"; ?>