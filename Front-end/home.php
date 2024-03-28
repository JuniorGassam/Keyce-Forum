<?php
require("../Back-end/Security2Action.php");


?>


<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>


   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../css/style.css">

</head>

<body>

   <!-- header section starts  -->

   <?php require("./header.php") ?>

   <!-- header section ends -->

   <!-- home section starts  -->

   <section class="home">

      <div class="swiper home-slider">

         <div class="swiper-wrapper">

            <section class="swiper-slide slide" style="background: url(../images/home-slide-1.jpg) no-repeat;">
               <div class="content">
                  <h3>the best subject you will find find here!</h3>
                  <p>Welcome to keyce forum a flexible and interactive online learning environment to easily reinforce your knowledge</p>
                  <?php
                  if (!isset($_GET['id'])) {
                  ?>
                     <a href="Login.php" class="btn">get started</a>
                  <?php
                  }
                  ?>
               </div>
            </section>

            <section class="swiper-slide slide" style="background: url(images/home-slide-2.jpg) no-repeat;">
               <div class="content">
                  <h3>the best subject you will find find here!</h3>
                  <p>Welcome to keyce forum a flexible and interactive online learning environment to easily reinforce your knowledge</p>
                  <?php
                  if (!isset($_GET['id'])) {
                  ?>
                     <a href="Login.php" class="btn">get started</a>
                  <?php
                  }
                  ?>
               </div>
            </section>

            <section class="swiper-slide slide" style="background: url(images/home-slide-3.jpg) no-repeat;">
               <div class="content">
                  <h3>the best subject you will find find here!</h3>
                  <p>Welcome to keyce forum a flexible and interactive online learning environment to easily reinforce your knowledge</p>
                  <?php
                  if (!isset($_GET['id'])) {
                  ?>
                     <a href="Login.php" class="btn">get started</a>
                  <?php
                  }
                  ?>
               </div>
            </section>

         </div>

         <div class="swiper-pagination"></div>

      </div>

   </section>

   <!-- home section ends -->

   <!-- subjects section starts  -->

   <section class="subjects">

      <h1 class="heading">our popular subjects</h1>

      <div class="box-container">

         <div class="box">

            <h3>graphic design</h3>
            <p>Resolved</p>
         </div>

         <div class="box">

            <h3>mathemetics</h3>
            <p>Unresolved</p>
         </div>

         <div class="box">

            <h3>teaching</h3>
            <p>Resolved</p>
         </div>

         <div class="box">

            <h3>development</h3>
            <p>resolved</p>
         </div>

         <div class="box">

            <h3>science</h3>
            <p>resolved</p>
         </div>

         <div class="box">

            <h3>engineering</h3>
            <p>Unresolved</p>
         </div>

      </div>

   </section>

   <!-- subjects section ends -->



   <!-- footer section starts  -->

   <section class="footer">

      <div class="box-container">

         <div class="box">
            <h3> <i class="fas fa-lightbulb"></i> Keyce Forum</h3>
            <p>Learn quickly and flexibly</p>
            <div class="share">
               <a href="#" class="fab fa-facebook-f"></a>
               <a href="#" class="fab fa-twitter"></a>
               <a href="#" class="fab fa-instagram"></a>
               <a href="#" class="fab fa-linkedin"></a>
            </div>
         </div>

         <div class="box">
            <h3>quick links</h3>
            <a href="home.php" class="link">home</a>
            <a href="about.php" class="link">about</a>
            <a href="contact.php" class="link">contact</a>
         </div>

         <div class="box">
            <h3>useful links</h3>
            <a href="#" class="link">help center</a>
            <a href="#" class="link">ask questions</a>
            <a href="#" class="link">private policy</a>
            <a href="#" class="link">terms of use</a>
         </div>

      </div>



   </section>

   <!-- footer section ends -->



   <!-- swiper js link  -->
   <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

   <!-- custom js file link  -->
   <script src="js/script.js"></script>

</body>

</html>