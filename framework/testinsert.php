<?php

$link=mysql_connect("localhost","root","root") or die("error".mysql_error());
mysql_query("SET NAMES UTF8");
mysql_select_db("myPHP",$link);

//http://localhost:8888/myPHP/editor/testinsert.php?name=NN&lat=10&long=20

$name = $_GET['name'];
$lat = $_GET['lat'];
$long = $_GET['long'];

$data = array(
    "name"=>$name,
    "lat"=>$lat,
    "`long`"=>$long,
);

/*
$data = array(
    "name"=>"ชื่อนะ",
    "lat"=>"แลต",
    "`long`"=>"ลอง",
);

*/

echo $SQL = insert("test",$data);
$objQuery = mysql_query($SQL) or die (mysql_error());

function insert($table,$data)
{
    global $mysqli;
    $fields=""; $values="";
    $i=1;
    foreach($data as $key=>$val)
    {
        if($i!=1)
        { $fields.=", "; $values.=", "; }
        $fields.="$key";
        $values.="'$val'";
        $i++;
    }


    $sql = "INSERT INTO $table ($fields) VALUES ($values)";
    return $sql;


}