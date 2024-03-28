<?php
require("../Back-end/mesQuestionsAction.php");

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
            background-color: inherit;
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
            height: 600px;
        }

        #repondre {
            margin-top: 70px;
            margin-left: 5px;
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
            <input type="text" name="question" class="inputQuestion" value="<?php if (isset($question)) {
                                                                                echo $question;
                                                                            } ?>" placeholder="Search your question...">
            <button button type="submit" name="submit" class="buttonAskQuestion">Search</button><br><br>
        </div>
    </form>

    <?php if (empty($questions) and !isset($resultat)) { ?>
        <div class="discussion">
            <form action="" method="post">
            <div class="grandContainer">
                <div class="reponsesQuestions">
                    <?php while ($resultRequete = $requete->fetch()) {
                        $statut = $resultRequete['statut'];

                        if ($statut == 'n') {
                            $statut = "Non résolut";
                        } else {
                            $statut = "Résolut";
                        } ?>
                        <div class="question">
                            <div class="infosAuteur">
                                <div id="para">
                                    <p class="paraidliste"><?= $pseudoActualOnLine[0] ?></p>
                                </div>
                                <h1 style="text-align: center;"><?= $pseudoActualOnLine ?></h1><br>
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
                                <h2><?= $resultRequete['date_publication'] ?></h2><br><br>
                                <div class="corpsQuestion">
                                    <h1><?= $resultRequete['question'] ?></h1>
                                </div>
                            </div>
                            <a type="submit" name="repondre" class="btn btn-primary" id="repondre" href="discuss.php?id=<?= $resultRequete['id'] ?>" title="Answer">Repondre</a>
                            <button type="submit" class="btn btn-primary" title="like" id="repondre" value="<?= $resultRequete['id'] ?>" name="supprimer">Supprimer</i></button><br><br>
                        </div>
                    <?php } ?>
                </div>
            </div>
            </form>
        </div>
    <?php } ?>


    <?php if (isset($resultat)) { ?>
        <h1 style="font-family: Comic Sans MS, Comic Sans, cursive;margin-left:200px;font-size:30px;color:rgb(107, 107, 107)"><?= $resultat ?></h1>
    <?php } ?>
    <?php if (isset($questions)) {
        for ($k = 0; $k < count($questions); $k++) {
    ?>

            <div class="discussion">
                <form action="" method="post">
                <div class="grandContainer">
                    <div class="reponsesQuestions">
                        <div class="question">
                            <div class="infosAuteur">
                                <div id="para">
                                    <p class="paraidliste"><?= $pseudoActualOnLine[0] ?></p>
                                </div>
                                <h1 style="text-align: center;"><?= $pseudoActualOnLine ?></h1><br>
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
                                <h2><?= $dates_publications[$k] ?></h2><br><br>
                                <div class="corpsQuestion">
                                    <h1><?= $questions[$k] ?></h1>
                                </div>
                            </div>
                            <a type="submit" name="repondre" class="btn btn-primary" id="repondre" href="discuss.php?id=<?= $idsQuestions[$k] ?>" title="Answer">Repondre</a>
                            <button type="submit" class="btn btn-primary" title="like" id="repondre" value="<?= $idsQuestions[$k] ?>" name="supprimer">Supprimer</i></button><br><br>
                        </div>
                    </div>
                </div>
                </form>
            </div>

        <?php } ?>
    <?php } ?>


    <hr style="padding-bottom: 500px;">


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