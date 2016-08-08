<div class="container">
    <div class="row">
        <p>
            <a href="showAll_content.php">Show All</a>
        </p>
        <p>
            <a href="showSelect_content.php">Show Select</a>
        </p>
        <p>
            <a href="insert_content.php">Insert</a>
        </p>
    </div>
    <div class="row">
        <p>
            <a href="#" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i>Add</a>
        </p>
        <table class="table table-bordered">
            <tr align="center">
                <td>#</td>
                <td>Name</td>
                <td>Password</td>
                <td>Create</td>
                <td colspan="2">Action</td>
            </tr>
            <tr>
                <td>001</td>
                <td>Natty</td>
                <td>123</td>
                <td>2016-07-20 15:40:00</td>
                <td align="center"><a href="#"><i class="glyphicon glyphicon-edit"></i></a></td>
                <td align="center"><a href="#"><i class="glyphicon glyphicon-trash"></i></a></td>
            </tr>
            <tr>
                <td colspan="7" align="center">
                    <nav>
                        <ul class="pagination">
                            <li>
                                <a href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li>
                                <a href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </td>
            </tr>
        </table>
    </div>


    <div class="row">
        <form method="post" action="123.php">
            <table class="table table-bordered">
                <tr>
                    <td>Name</td>
                    <td>
                        <div class="form-group">
                            <input type="text" class="form-control" id="" placeholder="">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Last Name</td>
                    <td>
                        <div class="form-group">
                            <input type="text" class="form-control" id="" placeholder="">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>
                        <div class="form-group">
                            <input type="text" class="form-control" id="" placeholder="">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i>Create</button>
                            <button type="reset" class="btn btn-warning"><i class="glyphicon glyphicon-minus"></i>Reset</button>
                        </div>

                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>