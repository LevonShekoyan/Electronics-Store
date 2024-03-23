<?php
include_once('connect.php');

if(isset($_POST['add'])){
    $title = $_POST['title'];
    $info = $_POST['info'];
    $price = $_POST['price'];
    $image = $_POST['image'];

    $add = "INSERT INTO `products`(`title`, `info`, `price`, `image`) 
    VALUES ('$title','$info','$price','$image')";

    $query = mysqli_query($db, $add);

    if($query){
        header("location: ../product/product.php");
    }else{
        echo "error";
    }
}

?>

<form action="add.php" method="post">
 <input type="text" name="title" placeholder="Title" required="">
 <input type="text" name="info" placeholder="Info" required="">
 <input type="number" name="price" placeholder="Price" required="">
 <input type="text" name="image" placeholder="Image" required="">
 <input type="submit" name="add" placeholder="Add Product" required="">

</form>