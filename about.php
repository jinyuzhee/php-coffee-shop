<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<section class="about">

   <div class="row">

      <div class="box">
         <img src="images/about-img-1.png" alt="Why choose us">
         <h3>Why choose us?</h3>
         <p>At Stracrock, we pride ourselves on providing a unique and personalized coffee shop experience. Our secret recipes and attention to detail ensure that every cup of coffee we make is of the highest quality. We offer convenient ordering by phone, making it easy for our customers to enjoy their favorite beverages whenever and wherever they want.</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

      <div class="box">
         <img src="images/about-img-2.png" alt="What we provide">
         <h3>What we provide?</h3>
         <p>We provide a wide range of delicious coffee and food, all made with our special secret recipes. Our menu includes classic favorites as well as unique and creative drinks that you won't find anywhere else. We also offer a cozy and welcoming atmosphere in our coffee shop, perfect for meeting with friends, studying, or just relaxing with a good book. </p>
         <a href="shop.php" class="btn">our shop</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">Testimonial</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic-1.png" alt="avatar">
         <p>I've been coming to Starock for years, and every cup of coffee is consistently excellent. The atmosphere is cozy and inviting, and staff is always friendly.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>John</h3>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="avatar">
         <p>Starock Coffee is my go-to spot for meetings with colleagues and friends. The coffee is always hot and delicious, and pastries and baked goods.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Sarah</h3>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="avatar">
         <p>I stumbled upon Starock Coffee during a weekend getaway, and I'm so glad I did! The coffee is exceptional - rich, smooth, and perfectly brewed.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>David</h3>
      </div>

   </div>

</section>









<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>