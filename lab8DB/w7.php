<?php 
include("connect.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="w7-2.php" method="post" enctype="multipart/form-data" > 
        Username :
        <input name="username" type="text"><br>
        Password :
        <input name="password" type="text"><br>
        Name :
        <input name="name" type="text"><br>
        Address : <br>
        <textarea name="address" rows="3" cols="40"></textarea><br>
        Mobile :
        <input name="mobile" type="text"><br>
        Email : <input name="email" type="text"><br>
        <input name="avatar" id="avatar" type="file" value="เพิ่มรูปภาพ"><br>
        <input name="OK" type="submit" value="เพิ่มข้อมูล">
        
    </form>
</body>
</html>