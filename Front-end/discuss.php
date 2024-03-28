<?php
require("../Back-end/discussAction.php");

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
        body {
            background-color: rgb(243, 219, 175);
        }

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

        #para {
            height: 40px;
            width: 40px;
            border-radius: 20px;
            background-color: pink;
            margin-left: 15px;
            text-align: center;
            padding-top: 5px;
            margin-top: 5px;
            font-size: 30px;
            font-family: Courier, monospace;
            font-weight: 900;
            color: orange;
            background-color: rgba(19, 19, 61, 0.829);
            margin-left: 70px;
        }

        .paraidliste {
            font-size: 25px;

        }

        .question {
            display: flex;
            justify-content: center;
            margin-top: 20px;
            min-width: 800px;
            margin-left: 200px;
            margin-right: 200px;
            min-height: 110px;
            background-color: white;
        }

        .question:hover {
            background-color: gray;
            border-radius: 5px;
        }

        .infosAuteur {
            width: 180px;
            display: inline-block;
        }

        .questionDeUtilisateur {
            width: 400px;
            min-height: 110px;
            margin-left: 20px;
            margin-top: 5px;
        }

        .grandContainer {
            overflow: auto;
            height: 200px;
        }
    </style>
</head>

<body>
    <?php require("./header.php") ?>

    <div class="discussion">

        <div class="question">
            <div class="infosAuteur">
                <div id="para">
                    <p class="paraidliste"><?= $pseudoAuteur[0] ?></p>
                </div>
                <h1 style="text-align: center;"><?= $pseudoAuteur ?></h1><br>
                <?php
                if ($statut == "Résolut") {
                ?>
                    <h2 style="background-color:blue;border-radius:5px;text-align:center;"><?= $statut ?></h2>
                <?php
                } else {
                ?>
                    <h2 style="background-color:red;border-radius:5px;text-align:center;"><?= $statut ?></h2>
                <?php
                }
                ?>
            </div>
            <div class="questionDeUtilisateur">
                <h2><?= $date_publication ?></h2><br><br>
                <div class="corpsQuestion">
                    <h1><?= $questionBdd ?></h1>
                </div>
            </div>
        </div>
        <hr><br><br><br>


        <?php if ($nombreResult > 1) { ?>
            <div class="grandContainer">
                <div class="reponsesQuestions">
                    <?php while ($resultRequete3 = $requete3->fetch()) { ?>
                        <div class="question">
                            <div class="infosAuteur">
                                <div id="para">
                                    <p class="paraidliste"><?= $resultRequete3['pseudo_auteur'][0] ?></p>
                                </div>
                                <h1 style="text-align: center;"><?= $resultRequete3['pseudo_auteur'] ?></h1><br>
                            </div>
                            <div class="questionDeUtilisateur">
                                <h2><?= $resultRequete3['date_publication'] ?></h2><br><br>
                                <div class="corpsQuestion">
                                    <h1><?= $resultRequete3['reponse'] ?></h1>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        <?php } ?>

        <?php if ($nombreResult == 1) { ?>
            <div class="reponsesQuestions">
                <div class="question">
                    <div class="infosAuteur">
                        <div id="para">
                            <p class="paraidliste"><?= $resultRequete3['pseudo_auteur'][0] ?></p>
                        </div>
                        <h1 style="text-align: center;"><?= $resultRequete3['pseudo_auteur'] ?></h1><br>
                    </div>
                    <div class="questionDeUtilisateur">
                        <h2><?= $resultRequete3['date_publication'] ?></h2><br><br>
                        <div class="corpsQuestion">
                            <h1><?= $resultRequete3['reponse'] ?></h1>
                        </div>
                    </div>
                </div>
            </div>
    </div>
<?php } ?>


<form action="" method="post">
    <div class="question">
        <div class="infosAuteur">
            <div id="para">
                <p class="paraidliste"><?= $_SESSION['id'][0] ?></p>
            </div>
            <h1 style="text-align: center;"><?= $_SESSION['id'] ?></h1><br>
        </div>
        <div class="questionDeUtilisateur">
            <h2><?= date("20y-m-d") ?></h2><br><br>
            <div class="corpsQuestion">
                <textarea placeholder="Ecriver votre réponse ici...." style="max-width: 500px;width:300px;max-height:250px;font-size:20px;" name="reponse" required></textarea>
                <button type="submit" name="repondre" class="btn btn-primary" id="repondre" title="Answer" value="<?= $idQuestion ?>">Repondre</button><br><br>
            </div>
        </div>
    </div>
</form>

</div>


<hr style="padding-bottom: 20px;">


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