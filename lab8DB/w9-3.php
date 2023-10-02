<?php include("connect.php");
    $stmt=$pdo->prepare("UPDATE member SET password=?,name=?,address=?,mobile=?,email=? WHERE username=?");
        $stmt->bindParam(1,$_POST['password']);
        $stmt->bindParam(2,$_POST['name']);
        $stmt->bindParam(3,$_POST['address']);
        $stmt->bindParam(4,$_POST['mobile']);
        $stmt->bindParam(5,$_POST['email']);
        $stmt->bindParam(6,$_POST['username']);
        $stmt->execute();

        if($_FILES['avatar']['tmp_name']){
            $jpg='./member_photo/'.$_POST['username'].".jpg";
            $load=move_uploaded_file($_FILES['avatar']['tmp_name'],$jpg);
        }

        if($stmt->execute()){
            header("location:w9.php");
        }
?>