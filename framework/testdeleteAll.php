<?php

$link=mysql_connect("localhost","root","root") or die("error".mysql_error());
mysql_query("SET NAMES UTF8");
mysql_select_db("myPHP",$link);

//http://localhost:8888/myPHP/editor/testshowAll.php


echo $SQL = deleteAll("test");

$objQuery = mysql_query($SQL) or die (mysql_error());

while ($result = mysql_fetch_array($objQuery)){

    ?>

    <?php echo $a=$a+1; ?>
    <?php echo  $result['name'];?>
    <?php echo  $result['lat'];?>
    <?php echo  $result['long'];?>
    <?php echo "<br>"; ?>
<?php } ?>

<?php
    function deleteAll($table)
    {

        $sql = "DELETE FROM $table";
        return $sql;


    }
?>