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
    
    $stmt = $pdo->prepare("SELECT * FROM product");
    $stmt->execute();

    while($row=$stmt->fetch()){
        echo "รหัสสินค้า:".$row["pid"]."<br>";
        echo "ชื่อสินค้า:".$row["pname"]."<br>";
        echo "รายละเอียดสินค้า:" . $row["pdetail"]."<br>";
        echo "ราคา:" . $row["price"]."บาท <br>";
        echo "<hr>\n";
    }
    ?>

    <table border="1">
        <tr>
            <td>รหัสสินค้า</td>
            <td>ชื่อสินค้า</td>
            <td>รายละเอียดสินค้า</td>
            <td>ราคา</td>
        </tr>

      <?php  
      $stmt = $pdo->prepare("SELECT * FROM product");
      $stmt->execute();
      while($row=$stmt->fetch()):?>
      <tr>
        <th><?= $row["pid"] ?></th>
        <th><?= $row["pname"] ?></th>
        <th><?= $row["pdetail"] ?></th>
        <th><?= $row["price"]  ?></th>
      </tr>
      <?php endwhile; ?>

    
    </table>

   
    
</body>
</html>