<?php
require("../Back-end/signUpAction.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Keyce Forum - Login</title>

  <!-- font awesome cdn link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  <!-- swiper css link  -->
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

  <!-- custom css file link  -->
  <link rel="stylesheet" href="../css/style.css">

  <!-- custom Login css file link  -->
  <link rel="stylesheet" href="../css/styles1.css">


</head>

<body>
  <!-- header section starts  -->

  <header class="header">

    <a href="#" class="logo"> <i class="fas fa-lightbulb"></i> Keyce Forum </a>

    <nav class="navbar">
      <div id="close-navbar" class="fas fa-times"></div>
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="contact.php">contact</a>
    </nav>

    <div class="icons">
      <div id="account-btn" class="fas fa-user"></div>
      <div id="menu-btn" class="fas fa-bars"></div>
    </div>

  </header>


  <!-- header section ends -->

  <!-- Login section starts -->

  <body>
    <main>
      <div class="boxs">
        <div class="inner-box">
          <div class="forms-wrap">
            <form action="" method="post" autocomplete="off" class="sign-in-form">
              <div class="header1">
                <h2>SIGN UP</h2>
              </div>

              <div>
                <p class="errormsg" style="color: red;font-size:20px"><?php if (isset($errormsg)) {
                                                                        echo $errormsg;
                                                                      } ?></p>
              </div>

              <div class="actual-form">
                <div class="input-wrap">
                  <input type="text" name="matricule" minlength="4" class="input-field" autocomplete="off" required />
                  <label>Matricule</label>
                </div>

                <div class="input-wrap">
                  <input type="text" name="pseudo" minlength="4" class="input-field" autocomplete="off" required />
                  <label>Pseudo</label>
                </div>

                <div class="input-wrap">
                  <input type="text" name="adresseEmail" minlength="4" class="input-field" autocomplete="off" required />
                  <label>Email Adress</label>
                </div>

                <div class="input-wrap">
                  <input type="password" name="mdp" minlength="4" class="input-field" autocomplete="off" required />
                  <label>Password</label>
                </div>

                <div class="input-wrap">
                  <input type="password" name="mdpConfirm" minlength="4" class="input-field" autocomplete="off" required />
                  <label>Confirm Password</label>
                </div>

                <input type="submit" name="submit" value="Sign Up" class="sign-btn" />
                <a href="./Login.php" style="font-size: 15px;color: orange;">Sign In</a>
              </div>
            </form>
          </div>

          <div class="carousel">
            <div class="images-wrapper">
              <img src="../images/image1.png" class="image img-1 show" alt="" />
              <img src="../images/image2.png" class="image img-2" alt="" />
              <img src="../images/image3.png" class="image img-3" alt="" />
            </div>

            <div class="text-slider">
              <div class="text-wrap">
                <div class="text-group">
                  <h2>Discuss with others</h2>
                  <h2>Customize question as you like</h2>
                  <h2>Interact with other students</h2>
                </div>
              </div>

              <div class="bullets">
                <span class="active" data-value="1"></span>
                <span data-value="2"></span>
                <span data-value="3"></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>


  </body>

  <!-- Login section ends -->
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
  <script src="../js/script.js"></script>
  <!-- custom js login file link -->
  <script src="../js/main.js"></script>
  <!-- Javascript file -->
  <script src="../js/app.js"></script>
</body>

</html>