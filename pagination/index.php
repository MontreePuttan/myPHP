<?php

// db user pass option
$dns = 'mysql:host=localhost;dbname=myPHP';
$user = 'root';
$pass = 'root';
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
);

//connect
$db=new PDO($dns,$user,$pass,$options);

//เริ่มแบ่งหน้า
$page = isset($_GET['page'])?(int)$_GET['page']:1;
$per_page = isset($_GET['per_page'])?(int)$_GET['per_page']:5; //จำนวนต่อหน้า
$start = ($page>1)?($page*$per_page)-$per_page:0;

echo "page=".$page."per_page=".$per_page."start=".$start;

$product = $db->prepare("SELECT SQL_CALC_FOUND_ROWS id_name,name FROM tb_name LIMIT {$start},{$per_page}");
$product->execute();
$productname = $product->fetchAll(PDO::FETCH_ASSOC);

// ดึงจำนวน reccord ในตาราง
$total = $db->query("SELECT FOUND_ROWS() as total")->fetch()['total'];
echo "Total=".$total;

$pagecount = ceil($total/$per_page); //ฟังก์ชันปัดเศษ

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        .selected{
            font-weight: bold;
        }
    </style>
</head>
<body>
<div>
    <?php foreach($productname as $proname):?>
    <p><?php echo $proname['id_name'] ?> : <?php echo $proname['name'] ?></p>
    <?php endforeach; ?>

</div>

<div>
    <?php for ($x = 1; $x <= $pagecount; $x++): ?>
        <a href="?page=<?php echo $x; ?>&per_page=<?php echo $per_page; ?>"<?php if($page===$x) {echo " class=selected";} ?>><?php echo $x; ?></a>
    <?php endfor; ?>
</div>
</body>
</html>