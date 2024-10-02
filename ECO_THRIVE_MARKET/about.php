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
         <img src="images/about-img-1.png" alt="">
         <h3 style="color:white">why choose us?</h3>
         <p>Choose us for a wide selection of organic products, better for your health and the environment..</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

      <div class="box">
         <img src="images/about-img-2.png" alt="">
         <h3 style="color:white">what we provide?</h3>
         <p>We support local farmers by sourcing our organic products from nearby farms and small businesses. This ensures freshness and supports the local economy..</p>
         <a href="shop.php" class="btn">our shop</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">Our Team Members</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/sai-1.png" alt="">
         <p>Founder, chairman and CEO of Eco Thrive Markets</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Sai Narayana Adusupalli</h3>
      </div>

      <div class="box">
         <img src="images/SURYA_TEJA_KASIGARI-1.png" alt="">
         <p>Cheif Financial Officer (CFO) of Eco Thrive Markets</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            
         </div>
         <h3>Surya Teja Kasigari</h3>
      </div>

      <div class="box">
         <img src="images/ravi.png" alt="">
         <p>Cheif Operating Officer (COO) of Eco Thrive Markets</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Ravi Teja Kotapati</h3>
      </div>

      <div class="box">
         <img src="images/kp.png" alt="">
         <p>Cheif Marketing Officer (CMO) of Eco Thrive Markets</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>KP Dinesh </h3>
      </div>

      <div class="box">
         <img src="images/swetha.png" alt="">
         <p>Cheif Transport Officer (CTO) of Eco Thrive Markets</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Swetha A</h3>
      </div>

      

   </div>

</section>









<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>
