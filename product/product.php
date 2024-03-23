<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>

    <link rel="stylesheet" href="libs/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="libs/bootstrap-grid.min.css">
    <!-- Шрифты с Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="product.css">
</head>
<body>




<?php
include '../HeaderAndFooter/header.php';
include('../admin/connect.php');

$select = "SELECT * FROM `products` ";
$query = mysqli_query($db,$select);
//$products = mysqli_fetch_assoc($query);
?>



<!-- <a href="products_main/single.php ?id=<?php echo $products['id'];?>">
 <div class="container2">
        <div class="product">
          <div class="image">
            <img src="<?php echo $products['image']; ?>" width="280" height="280" alt="">
          </div>
          <div class="info">
            <h3><?php echo $products['title']; ?></h3>
            <div class="info-price">
              <span class="price"><?php echo $products['price'] ?><small>$</small></span>
              <button class="add-to-cart"><ion-icon name="cart-outline"></ion-icon></button>
            </div>
          </div>
        </div>
 </div>
</a> -->



<div class="main">
      <?php
       if(mysqli_num_rows($query)>0){
         while($products = mysqli_fetch_assoc($query) ){ ?>
          <a href="products_main/single.php ?id=<?php echo $products['id'];?>"> 
      <div class="container2">
        <div class="product">
           <div class="image">
            <img src="<?php echo $products['image']; ?>" width="280" height="280" alt="Product Photo">
           </div>
            <div class="info">
              <h3><?php echo $products['title']; ?></h3>
             <div class="info-price">
              <span class="price"><?php echo $products['price'] ?><small>$</small></span>
              <button class="add-to-cart"><ion-icon name="cart-outline"></ion-icon></button>
             </div>
          </div>
        </div>
      </div>
   </a>
      <?php
      }
    }
?>
</div>




<?php
include '../HeaderAndFooter/footer.php';
?>



<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>