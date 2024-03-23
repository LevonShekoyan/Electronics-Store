<?php
//echo $_GET['id'];exit();
include ('connect.php');

$id = $_GET['id'];
$delete = "DELETE FROM `products` WHERE `id` = '$id'";
var_dump($delete);
$query = mysqli_query($db,$delete);
     if($query){
        header("location: ../product/product.php");
     }else{
        echo "error";
     }


?>