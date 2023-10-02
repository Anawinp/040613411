<?php include("connect.php");
    if(isset($_POST['OK'])){
        $stmt = $pdo->prepare("INSERT INTO member(username , password , name , address , mobile , email) VALUES(?,?,?,?,?,?)");
        $stmt->bindParam(1,$_POST['username']);
        $stmt->bindParam(2,$_POST['password']);
        $stmt->bindParam(3,$_POST['name']);
        $stmt->bindParam(4,$_POST['address']);
        $stmt->bindParam(5,$_POST['mobile']);
        $stmt->bindParam(6,$_POST['email']);

        $stmt->execute();

        if($_FILES['avatar']['tmp_name']){
            $jpg='./member_photo/'.$_POST['username'].".jpg";
            $load=move_uploaded_file($_FILES['avatar']['tmp_name'],$jpg);
        }
    };
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    เพิ่มข้อมูลเสร็จสิ้น <?=$_POST['username'] ?>
</body>
</html>