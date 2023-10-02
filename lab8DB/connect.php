<?php
    $pdo = new PDO("mysql:host=localhost;dbname=blueshops;charset=utf8", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    ?>