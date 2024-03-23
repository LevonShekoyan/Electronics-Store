<?php

include('connect.php');

if(isset($_POST['update'])){
  // var_dump($_POST);exit();
    $id = $_POST['id'];
    $title = $_POST['title'];
    $info = $_POST['info'];
    $price = $_POST['price'];
    $image = $_POST['image'];

    $update = "UPDATE `products` SET 
     `title` = '$title',
     `info` = '$info',
     `price` = '$price',
     `image` = '$image' WHERE `id` = '$id'";
    
     $query = mysqli_query($db,$update);
     if($query){
        header("location: ../product/product.php");
     }else{
        echo "error";
     }
}

?>

<form action="update.php" method="post">
 <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
 <input type="text" name="title" placeholder="Update Title" >
 <input type="text" name="info" placeholder="Update Info" >
 <input type="number" name="price" placeholder="Update Price" >
 <input type="text" name="image" placeholder="Update Image" >
 <input type="submit" name="update" >

</form>