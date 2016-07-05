<?php
    if($_FILES["file1"]["error"]>0)
    {
        echo "Error".$_FILES["file1"]["error"]."<br/>";
    }
    else
    {
        /** Show Details File **/
        echo "Upload: ".$_FILES["file1"]["name"]."<br/>";//File Name
        echo "Type: ".$_FILES["file1"]["type"]."<br/>";//File Type
        echo "Size: ".($_FILES["file1"]["size"]/1024)."kB<br/>";//File Size kB
        echo "Store in: ".$_FILES["file1"]["tmp_name"]."<br/>";//File Location

        $f_type=$_FILES["file1"]["type"];
        $fname=time()."_".rand(1,9999);//Protect filename duplicate

        /**
         condition upload image
         if($f_type=="image/x-png")
         {
            $webUP_fn="$fname.png";
         }
        else if(($f_type=="image/pjpeg")||($f_type=="image/jpeg"))
        {
            $webUP_fn="$fname.jpg";
        }
        else if($f_type=="image/gif")
        {
            $webUP_fn="$fname.png";
        }
        else
        {
            echo "<br/>สำหรับไฟล์ นามสกุล .GIF, .PNG, .JPG เท่านั้น";
        }

         **/
        if($f_type=="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet")
        {
            $webUP_fn="$fname.xlsx";
        }
        else
        {
            echo "สำหรับ excel เท่านั้น";
        }

        echo $webUP_fn;
        move_uploaded_file($_FILES["file1"]["tmp_name"],"./upload_Document/".$webUP_fn);
    }
?>