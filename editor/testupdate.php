<?php

$link=mysql_connect("localhost","root","root") or die("error".mysql_error());
mysql_query("SET NAMES UTF8");
mysql_select_db("myPHP",$link);

//http://localhost:8888/myPHP/editor/testupdate.php?name=NN&lat=10&long=20&id=3

$name = $_GET['name'];
$lat = $_GET['lat'];
$long = $_GET['long'];
$id = $_GET['id'];

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

echo $SQL = update("test",$data,"id=".$id);
$objQuery = mysql_query($SQL) or die (mysql_error());


function update($table,$data,$where)
{
    global $mysqli;
    $modifs="";
    $i=1;
    foreach($data as $key=>$val)
    {
        if($i!=1){ $modifs.=", "; }
        if(is_numeric($val)) { $modifs.=$key.'='.$val; }
        else { $modifs.=$key.' = "'.$val.'"'; }
        $i++;
    }


    $sql = ("UPDATE $table SET $modifs WHERE $where");
    return $sql;


}