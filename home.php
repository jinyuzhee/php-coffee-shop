<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
};



?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home page</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="home-bg">

   <section class="home">

      <div class="content">
         <span>Reach for the Stars, One Sip at a Time</span>
         <h3>Fuel Your Day with Starock Coffee</h3>
         <p>At Starock, we also provide the convenience of ordering by phone, so you can enjoy your coffee on-the-go. Come in and experience the taste and ambiance of Starock Coffee today!</p>
         <a href="tel:+1234567890" class="btn">Ordering now</a>
      </div>

   </section>

</div>

<div class="about-bg">

   <section class="home">

      <div class="content">
         <h3>Discover the best coffee</h3>
         <p>Bean Scene is a coffee shop that provides you with quality coffee that helps boost your productivity and helps build your mood. Having a cup of coffee is good, but having a cup of real coffee is greater. There is no doubt that you will enjoy this coffee more than others you have ever tasted.</p>
         <a href="about.php" class="btn">Learn More</a>
      </div>

   </section>

</div>

<section class="steps">

   <h1 class="title">Why are we different?</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/feature-1.png" alt="High Quality">
         <h3>High Quality</h3>
         <p>We provide the highest quality</p>
      </div>

      <div class="box">
         <img src="images/feature-2.png" alt="Extraordinary">
         <h3>Extraordinary</h3>
         <p>Coffee like you have never tasted</p>
      </div>

      <div class="box">
         <img src="images/feature-3.png" alt="Affordable Price">
         <h3>Affordable Price</h3>
         <p>Our Coffee prices are easy to afford</p>
      </div>

   </div>

</section>

<section class="home-category">

   <h1 class="title">shop by category</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/cat-1.png" alt="Americano">
         <h3>Americano</h3>
         <p>This classic coffee drink is made by adding hot water to a shot of espresso. It has a bold, rich flavor and is a popular choice for those who prefer a stronger coffee taste.</p>
         <a href="category.php?category=americano" class="btn">Americano</a>
      </div>

      <div class="box">
         <img src="images/cat-2.png" alt="Cappuccino">
         <h3>Cappuccino</h3>
         <p>A cappuccino is made with equal parts espresso, steamed milk. The frothed milk gives it a creamy, velvety texture and the espresso provides rich flavor.</p>
         <a href="category.php?category=cappuccino" class="btn">Cappuccino</a>
      </div>

      <div class="box">
         <img src="images/cat-3.png" alt="Mocha">
         <h3>Mocha</h3>
         <p>A mocha is a delicious combination of espresso, and chocolate syrup or powder. It has a sweet, indulgent flavor and is often topped with whipped cream.</p>
         <a href="category.php?category=mocha" class="btn">Mocha</a>
      </div>

      <div class="box">
         <img src="images/cat-4.png" alt="Dessert">
         <h3>Dessert</h3>
         <p>A coffee dessert is a sweet treat that pairs perfectly with a cup of coffee. Examples include pastries like croissants, muffins, or scones, more decadent options.</p>
         <a href="category.php?category=dessert" class="btn">Dessert</a>
      </div>
        
   </div>

</section>

<section class="products">

   <h1 class="title">latest products</h1>

   <div class="box-container">

   <?php
      $select_products = $conn->prepare("SELECT * FROM `products` LIMIT 6");
      $select_products->execute();
      if($select_products->rowCount() > 0){
         while($fetch_products = $select_products->fetch(PDO::FETCH_ASSOC)){ 
   ?>
   <form action="" class="box" method="POST">
      <div class="price">$<span><?= $fetch_products['price']; ?></span>/-</div>
      <a href="view_page.php?pid=<?= $fetch_products['id']; ?>" class="fas fa-eye"></a>
      <img src="uploaded_img/<?= $fetch_products['image']; ?>" alt="">
      <div class="name"><?= $fetch_products['name']; ?></div>
      <input type="hidden" name="pid" value="<?= $fetch_products['id']; ?>">
      <input type="hidden" name="p_name" value="<?= $fetch_products['name']; ?>">
      <input type="hidden" name="p_price" value="<?= $fetch_products['price']; ?>">
      <input type="hidden" name="p_image" value="<?= $fetch_products['image']; ?>">
   </form>
   <?php
      }
   }else{
      echo '<p class="empty">no products added yet!</p>';
   }
   ?>

   </div>

</section>







<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>