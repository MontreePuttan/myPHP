<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form role="form" method="post" action="upload.php" enctype="multipart/form-data">



    <div class="form-group has-feedback">
        <label class="control-label">ไฟล์แนบ</label>
        <p>
            <label class="file">
                <input type="file" id="file" name="file1">
                <span class="file-custom"></span>
            </label>
        </p>
    </div>

    <div class="form-group has-feedback">
        <label class="control-label"></label>
        <button type="submit" class="btn btn-primary">Upload</button>
    </div>



</form>
</body>
</html>