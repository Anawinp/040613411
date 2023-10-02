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
<script>
    function Delete(username){
        var ans = confirm("ต้องการลบรายชื่อ" + username);
            if(ans==true)
            document.location = "delete.php?username="+username;
    }
</script>
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
        <a href="#" onclick="Delete('<?=$row['username']?>')">ลบรายชื่อ</a>
        <hr>
        
        <?php endwhile;?>
</body>
</html>