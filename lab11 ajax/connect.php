<?php
    $servername = "localhost";
    $userdb = "root";
    $passdb = "";
    $dbname = "blueshop";

    try{
        $pdo = new PDO("mysql:host=$servername; dbname=$dbname; charset=utf8","$userdb","");
        //set the PDO error mode to exception
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e){
        echo "Connection Failed".$e->getMessage();
    }
?>