<!DOCTYPE html>
<html lang="en">
    <?php include "connect.php"?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $stmt = $pdo->prepare("SELECT * FROM member");
    $stmt->execute();?>
    <?php
    while($row=$stmt->fetch()):
        echo "ชื่อสมาชิก:" . $row["name"]."<br>";
        echo "ที่อยู่:" . $row["address"]." <br>";
        echo "อีเมลล์:" . $row["email"]."<br>";
        ?>
<img src='member_photo/<?=$row["username"]?>.jpg'width='100'>
    <hr>
    <?php endwhile;  ?>