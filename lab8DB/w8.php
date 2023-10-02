<?php 
    include ("connect.php");
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $stmt = $pdo->prepare("SELECT * FROM member");
        $stmt ->execute();

    ?>
    <?php while($row = $stmt->fetch()):?>
        <div>Username : 
            <?=$row['username']?>
        </div>

        <div>Password : 
            <?=$row['password']?>
        </div>
        <div>Nmae : 
            <?=$row['name']?>
        </div>
        <div>Address : 
            <?=$row['address']?>
        </div>
        <div>Mobile : 
            <?=$row['mobile']?>
        </div>
        <div>Email : 
            <?=$row['email']?>
        </div>
        <img src="member_photo/<?=$row['username']?>.jpg"><br>
        <hr>
        
        <?php endwhile;?>
</body>
</html>