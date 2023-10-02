<?php include("connect.php")

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
     $stmt=$pdo->prepare("SELECT * FROM member WHERE username=?");
        $stmt->bindParam(1,$_GET['username']);
        $stmt->execute();
        $row = $stmt->fetch();
    ?>
<form action="w9-3.php" method="post" enctype="multipart/form-data" > 
        Username :
        <input name="username" type="text" value="<?=$row['username']?>" readonly><br>
        Password :
        <input name="password" type="text" value="<?=$row['password']?>"><br>
        Name :
        <input name="name" type="text" value="<?=$row['name']?>"><br>
        Address : <br>
        <textarea name="address" rows="3" cols="40" ><?=$row['address']?></textarea><br>
        Mobile :
        <input name="mobile" type="text" value="<?=$row['mobile']?>"><br>
        Email : <input name="email" type="text" value="<?=$row['email']?>"><br>
        <img src="member_photo/<?=$row['username']?>.jpg">
        <input name="avatar" id="avatar" type="file" value="เพิ่มรูปภาพ"><br>
        <input name="OK" type="submit" value="เพิ่มข้อมูล">
        
    </form>
</body>
</html>