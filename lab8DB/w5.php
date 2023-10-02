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
<form>
    <input type="text" name="keyword">
    <input type="submit" value="ค้นหา">
</form>
    <?php
    $stmt = $pdo->prepare("SELECT * FROM member WHERE member.name LIKE ?");

    if(!empty($_GET))
        $value = '%' . $_GET["keyword"] . '%';

        
    
    $stmt->bindParam(1,$value);
        $stmt->execute();
    ?>
    <?php
    while($row=$stmt->fetch()):
        echo "ชื่อสมาชิก:" . $row["name"]."<br>";
        echo "ที่อยู่:" . $row["address"]." <br>";
        echo "อีเมลล์:" . $row["email"]."<br>";
        ?>
    <a href="w5-2.php?username=<?=$row["username"]?>"> 
<img src='member_photo/<?=$row["username"]?>.jpg'width='100'> 
</a>    
<hr>
    <?php endwhile;  ?>