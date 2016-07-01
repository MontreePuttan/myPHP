<?php

$link=mysql_connect("localhost","root","root") or die("error".mysql_error());
mysql_query("SET NAMES UTF8");
mysql_select_db("myPHP",$link);

//http://localhost:8888/myPHP/editor/testshowCondotion.php?id=15

$id = $_GET['id'];

echo $SQL = selectAll("test","id=".$id);

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
function selectAll($table,$where)
{

    $sql = "SELECT * FROM $table WHERE $where";
    return $sql;


}
?>