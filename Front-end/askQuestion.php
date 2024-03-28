<?php
require("../Back-end/askQuestionAction.php");

if (!isset($_SESSION['auth'])) {
    header("location: ../Front-end/Login.php");
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poser une question</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- swiper css link  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../css/style.css">

    <style>
        .inputQuestion {
            background-color: orange;
            width: 400px;
            height: 50px;
            color: white;
            border-radius: 5px;
            font-size: 20px;
        }

        .inputAjoutRubrique {
            background-color: inherit;
            width: 250px;
            height: 35px;
            color: white;
            border-radius: 3px;
            font-size: 15px;
            border-color: rgb(230, 160, 31);
        }

        .inputAjoutRubrique:focus {
            background-color: rgb(230, 160, 31);
            width: 250px;
            height: 35px;
            color: white;
            border-radius: 3px;
            font-size: 15px;
        }

        .buttonAskQuestion {
            background-color: white;
            border: solid 1px orange;
            width: 95px;
            height: 45px;
            border-radius: 10px;
            font-size: 18px;
        }

        .buttonAskQuestion:hover {
            background-color: orange;
            border: solid 1px orange;
            width: 100px;
            height: 50px;
            border-radius: 5px;
            color: white;
        }

        #poserQuestion {
            margin-left: 300px;
            margin-top: 20px;
        }

        #rubrique {
            width: 120px;
            height: 50px;
            font-size: 20px;
            font-weight: 900;
        }

        #container {
            min-height: 400px;
        }

        .reponse {
            text-align: center;
            background-color: rgb(250, 193, 88);
            display: inline-block;
            min-width: 300px;
            min-height: 200px;
            margin-left: 20px;
            margin-bottom: 20px;
            border-radius: 5px;
        }

        .likesComments {
            display: flex;
        }
    </style>
</head>

<body>
    <?php require("./header.php") ?>

    <form action="" method="post">
        <div id="poserQuestion">
            <select name="rubrique" id="rubrique">
                <optgroup label="Subjets">
                    <?php while ($rubrique = $requete0->fetch()) { ?>
                        <option><?= $rubrique['rubrique'] ?></option>
                    <?php } ?>
                </optgroup>
            </select>
            <input type="text" name="question" class="inputQuestion" value="<?php if(isset($question)){echo $question;} ?>" placeholder="Ask your question...">
            <button button type="submit" name="submit" class="buttonAskQuestion">Search</button><br><br>
            <input type="text" placeholder="Add a subject" class="inputAjoutRubrique" name="inputAjoutRubrique">
        </div>
    </form><br><br><br>


    <?php if (isset($resultat)) { ?>
        <h1 style="font-family: Comic Sans MS, Comic Sans, cursive;margin-left:200px;font-size:30px;color:rgb(107, 107, 107)"><?= $resultat ?></h1>
    <?php } ?><br><br>
    <div id="container">
        <?php
        if (isset($requete7)) {
            while ($reponse = $requete7->fetch()) { ?>
                <form method="post" action="" class="reponse">
                    <strong>
                        <h1 title="author"><?= $reponse['pseudo_auteur'] ?></h1>
                    </strong>
                    <h4 title="publication date"><?= $reponse['date_publication'] ?></h4><br>
                    <h2 title="body of answer"><?= $reponse['reponse'] ?></h2><br><br>
                    <div class="likesComments">
                        <span><input style="margin-left:105px;background-color:inherit;" name="like" type="button" value="<?= $reponse['like'] ?>"><i class="fas fa-thumbs-up" style="padding-left: 5px;"></i></input></span>
                        <input style="margin-left:75px;background-color:inherit;" name="comment" type="button"><i class="fas fa-comment"></i></input>
                    </div>
                    <button type="submit" class="btn btn-primary" title="like" value="<?= $reponse['id'] ?>" name="liker"><i class="fas fa-thumbs-up"></i></button>
                    <button type="submit" name="repondre" class="btn btn-primary" id="repondre" value="<?= $reponse['id'] ?>" title="comment"><i class="fas fa-comment"></i></button>
            </form>
        <?php }
        } ?>
    </div>

    <hr style="padding-bottom: 600px;">


    <section class="subjects">

        <h1 class="heading">our sections of questions</h1>

        <div class="box-container">

            <?php while ($rubriqueQuestion = $requetemoins->fetch()) { ?>
                <a class="box" href="#">
                    <h3><?= $rubriqueQuestion['rubrique'] ?></h3>
                </a>
            <?php } ?>

        </div>

    </section>



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
    <script src="js/script.js"></script>
</body>

</html>