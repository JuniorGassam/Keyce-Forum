<?php
session_start();

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

   <section class="heading-link">
      <h3>about us</h3>
   </section>

   <!-- about section starts  -->

   <section class="about">

      <div class="image">
         <img src="../images/istockphoto-1191395009-612x612-removebg-preview.png" alt="">
      </div>

      <div class="content">
         <h3 class="about-title">we have best subject for you</h3>
         <p>Keyce Forum the best private community, Consult our goal in subjects, members and like of subjects!!</p>
         <div class="icons-container">
            <div class="icons">
               <img src="../images/png-clipart-graphy-computer-icons-graduation-certificate-photography-graduation-certificate-removebg-preview.png" alt="">
               <h3>350+</h3>
               <span>Subjects</span>
            </div>
            <div class="icons">
               <img src="../images/members-removebg-preview.png" alt="">
               <h3>1200+</h3>
               <span>Members</span>
            </div>
            <div class="icons">
               <img src="../images/téléchargement-removebg-preview.png" alt="">
               <h3>10+</h3>
               <span>Like</span>
            </div>
         </div>
      </div>

   </section>

   <!-- about section ends -->






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
            <a href="home1.php" class="link">home</a>
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
   <script src="../js/script.js"></script>

</body>

</html>