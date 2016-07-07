<?php

$link=mysql_connect("localhost","root","root") or die("error".mysql_error());
mysql_query("SET NAMES UTF8");
mysql_select_db("myPHP",$link);

//http://localhost:8888/myPHP/editor/testdelete.php?id=14

$id = $_GET['id'];


echo $SQL = delete("test","id=".$id);
$objQuery = mysql_query($SQL) or die (mysql_error());

function delete($table, $where)
{
    global $mysqli;
    $sql = "DELETE FROM $table WHERE $where";
    return $sql;


}