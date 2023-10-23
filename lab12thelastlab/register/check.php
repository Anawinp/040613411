<?php 
    $keyword = $_GET["keyword"];
    $conn = mysql_connect("localhost","root","1234");

    if($conn){
        mysql_select_db("blueshop");
        mysql_query("SET NAMES utf8");
    }else{
        echo mysql_errno();
    }

    $sql = "SELECT * FORM product WHERE product_name LIKE'%$keyword%'";
    $objQuery = mysql_query($sql);
?>

<?php  while($row = mysql_fetch_array($objQuery)):?>
<tr>
    <td><a href="