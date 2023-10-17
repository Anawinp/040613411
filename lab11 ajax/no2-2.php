<?php 
    include('connect.php');
    $keyword = $_GET['search'];
    $stmt = $pdo->prepare("SELECT * FROM member WHERE username LIKE '%$keyword%';");
    $stmt->execute();
?>
<head>
    <style>
        table{
            width: 100vh;
        }
        td,th,table{
            border: 1px solid;
            border-collapse: collapse;
        }
    </style>
</head>
<table>
    <thead style="padding: 0 2rem;">
        <th>รูปภาพ</th>
        <th>ชื่อผู้ใช้</th>
        <th>รหัสผ่าน</th>
        <th>ชื่อ</th>
        <th>ที่อยู่</th>
        <th>เบอร์โทรศัพท์</th>
        <th>อีเมล์</th>
    </thead>
    <tbody>
        <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)):?>
            <tr>
                <td><img src="member_photo/<?=$row['username']?>.jpg" width='100'></td>
                <td><?=$row['username']?></td>
                <td><?=$row['password']?></td>
                <td><?=$row['name']?></td>
                <td><?=$row['address']?></td>
                <td><?=$row['mobile']?></td>
                <td><?=$row['email']?></td>
            </tr>
        <?php endwhile;?>
    </tbody>
</table>

