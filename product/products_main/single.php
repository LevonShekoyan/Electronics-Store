<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../style.css">
    <link rel="stylesheet" href="productStyle.css">
</head>
<body>
<?php 
include '../../HeaderAndFooter/header.php';
include ('../../admin/connect.php');

$id = $_GET['id'];
$select = "SELECT * FROM `products` WHERE `id` = '$id'";
$query = mysqli_query($db,$select);
$product = mysqli_fetch_assoc($query);

?>

<h1><?php echo $product['title'];?></h1>
  <div class="div-product">
<img class="goods_image" src="../<?php echo $product['image'];?>">
 <div class="product_info">
  <p><?php echo $product['info']; ?></p>
 </div>

</div>



  <!-- Buttons -->
<!--Update  -->
  <div class="buttons">


  <button class="button-3" role="button">
  <a href="../../admin/update.php?id=<?php echo $product['id'];?>">Update</a>
 </button>
 <!--  -->
  <!-- Delete -->
  
  <button class="button-3" role="button">
  <a href="../../admin/delete.php?id=<?php echo $product['id'];?>">Delete</a>
 </button>
  <!-- <form action="../../admin/delete.php=<?php echo $product['id'];?>" method="post">
    <input type="submit" name="delete" value="Delete">
  </form> -->
  <!--  -->
  </div>
  <!--  -->


<?php
include '../../HeaderAndFooter/footer.php'
?>

</body>
</html>