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
      <h3>contact us</h3>

   </section>

   <!-- contact section starts  -->

   <section class="contact">

      <h1 class="heading"> get in touch </h1>

      <div class="icons-container">

         <div class="icons">
            <i class="fas fa-phone"></i>
            <h3>phone :</h3>
            <p>+237 698 66 56 24</p>
            <p>+237 672 92 51 40</p>
         </div>

         <div class="icons">
            <i class="fas fa-envelope"></i>
            <h3> email : </h3>
            <p>gassamgassamlionel@gmail.com</p>
            <p>chileneemane16@gmail.com</p>
         </div>

         <div class="icons">
            <i class="fas fa-map"></i>
            <h3>address :</h3>
            <p>Yaounde, Nkonengui- Face de la prison</p>
         </div>

      </div>

      <div class="row">

         <div class="image">
            <img src="../images/Picture-11-1.jpeg" alt="">
         </div>

         <form action="">
            <h3>send us a message</h3>
            <input type="text" placeholder="name" class="box">
            <input type="email" placeholder="email" class="box">
            <input type="file" class="box">
            <textarea name="" class="box" placeholder="message" id="" cols="30" rows="10"></textarea>
            <input type="submit" value="send message" class="btn">
         </form>

      </div>

   </section>

   <!-- contact section ends -->

   <!-- faq section starts  -->

   <section class="faq">

      <h1 class="heading">Some resolved subjects</h1>

      <div class="accordion-container">

         <div class="accordion active">
            <div class="accordion-heading">
               <h3>how to contact for help?</h3>
               <i class="fas fa-angle-down"></i>
            </div>
            <p class="accordion-content">
               Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit consequatur molestias deserunt facere laborum doloremque fuga, quae aut. Recusandae officia quis temporibus! Magnam mollitia nostrum voluptatibus deserunt quidem. Natus, quo.
            </p>
         </div>

         <div class="accordion">
            <div class="accordion-heading">
               <h3>what is the best career in 2022?</h3>
               <i class="fas fa-angle-down"></i>
            </div>
            <p class="accordion-content">
               Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit consequatur molestias deserunt facere laborum doloremque fuga, quae aut. Recusandae officia quis temporibus! Magnam mollitia nostrum voluptatibus deserunt quidem. Natus, quo.
            </p>
         </div>

         <div class="accordion">
            <div class="accordion-heading">
               <h3>how much fees for web development?</h3>
               <i class="fas fa-angle-down"></i>
            </div>
            <p class="accordion-content">
               Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit consequatur molestias deserunt facere laborum doloremque fuga, quae aut. Recusandae officia quis temporibus! Magnam mollitia nostrum voluptatibus deserunt quidem. Natus, quo.
            </p>
         </div>

         <div class="accordion">
            <div class="accordion-heading">
               <h3>can I choose my own tutor?</h3>
               <i class="fas fa-angle-down"></i>
            </div>
            <p class="accordion-content">
               Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit consequatur molestias deserunt facere laborum doloremque fuga, quae aut. Recusandae officia quis temporibus! Magnam mollitia nostrum voluptatibus deserunt quidem. Natus, quo.
            </p>
         </div>

         <div class="accordion">
            <div class="accordion-heading">
               <h3>what payment methods are availabe?</h3>
               <i class="fas fa-angle-down"></i>
            </div>
            <p class="accordion-content">
               Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit consequatur molestias deserunt facere laborum doloremque fuga, quae aut. Recusandae officia quis temporibus! Magnam mollitia nostrum voluptatibus deserunt quidem. Natus, quo.
            </p>
         </div>

         <div class="accordion">
            <div class="accordion-heading">
               <h3>can I have free trial for a month?</h3>
               <i class="fas fa-angle-down"></i>
            </div>
            <p class="accordion-content">
               Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit consequatur molestias deserunt facere laborum doloremque fuga, quae aut. Recusandae officia quis temporibus! Magnam mollitia nostrum voluptatibus deserunt quidem. Natus, quo.
            </p>
         </div>

      </div>

   </section>

   <!-- faq section ends -->


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