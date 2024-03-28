<?php
require("DatabaseConnect.php");
session_start();

$requetemoins = $bdd->prepare("SELECT * FROM rubriques ORDER BY `rubrique` asc");
$requetemoins->execute();

$requete0 = $bdd->prepare("SELECT * FROM rubriques ORDER BY `rubrique` asc");
$requete0->execute();

$idAuteur = $_SESSION['id_auteur'];


if (isset($_POST['submit'])) {
    if (!empty($_POST['question'])) {

        $question = nl2br(htmlspecialchars($_POST['question']));

        if (!empty($_POST['inputAjoutRubrique'])) {

            $rubriqueAjout = htmlspecialchars($_POST['inputAjoutRubrique']);

            $requete1 = $bdd->prepare("SELECT * FROM `rubriques` WHERE rubrique = ?");
            $requete1->execute(array($rubriqueAjout));

            if ($requete1->rowCount() > 0) {
                echo '<script>window.alert("Cette rubrique existe déjà !")</script>';
            } else {

                $requete2 = $bdd->prepare("INSERT INTO rubriques(rubrique) VALUES(?)");
                $requete2->execute(array($rubriqueAjout));

                $requete3 = $bdd->prepare("INSERT INTO questions(id_auteur, rubrique, question) VALUES(?, ?, ?)");
                $requete3->execute(array($idAuteur, $rubriqueAjout, $question));

                echo '<script>window.alert("Votre question a été publiée avec succès!")</script>';
            }
        } else {
            $rubrique = htmlspecialchars($_POST['rubrique']);

            $requete4 = $bdd->prepare("SELECT `id`, `question` FROM `questions` WHERE rubrique = ? AND statut = 'o' ");
            $requete4->execute(array($rubrique));

            if ($requete4->rowCount() > 0) {
                // RECHERCHE
                while ($resultRequete4 = $requete4->fetch()) {

                    $idQuestion = $resultRequete4['id'];
                    $questionBdd = $resultRequete4['question'];

                    $questionElements = explode(" ", $question);
                    $questionBddElements = explode(" ", $questionBdd);
                    $nombreQuestionElements = count($questionElements);
                    $nombreQuestionBddElements = count($questionBddElements);



                    if ($nombreQuestionElements >= $nombreQuestionBddElements) {
                        for ($i = 0; $i < $nombreQuestionBddElements; $i++) {
                            if (strlen($questionElements[$i]) > 3) {
                                for ($j = 0; $j < $nombreQuestionElements; $j++) {
                                    if ($questionElements[$j] == $questionBddElements[$i]) {
                                        $requete7 = $bdd->prepare("SELECT * FROM `reponses` WHERE id_question = ? ORDER BY `like` desc");
                                        $requete7->execute(array($idQuestion));
                                        $resultat = "Result(s) :";
                                    }
                                }
                            }
                        }
                    } else {
                        for ($i = 0; $i < $nombreQuestionElements; $i++) {
                            if (strlen($questionElements[$i]) > 3) {
                                for ($j = 0; $j < $nombreQuestionBddElements; $j++) {
                                    if ($questionBddElements[$j] == $questionElements[$i]) {
                                        $requete7 = $bdd->prepare("SELECT * FROM `reponses` WHERE id_question = ? ORDER BY `like` desc");
                                        $requete7->execute(array($idQuestion));
                                        $resultat = "Result(s) :";
                                    }
                                }
                            }
                        }
                    }
                }
            } else {

                $requete3 = $bdd->prepare("INSERT INTO questions(id_auteur, rubrique, question) VALUES(?, ?, ?)");
                $requete3->execute(array($idAuteur, $rubrique, $question));

                echo '<script>window.alert("Votre question a été publiée avec succès!")</script>';
            }
        }
    } else {
        $resultat = "No result";
    }
}


if (isset($_POST['liker']) and !empty($_POST['liker'])) {
    $id_reponse = htmlspecialchars($_POST['liker']);

    $requete10 = $bdd->prepare("SELECT auteur FROM `likes` WHERE id_reponse = ? and auteur = ? ");
    $requete10->execute(array($id_reponse, $idAuteur));

    if ($requete10->rowCount() > 0) {
        echo '<script>window.alert("Vous avez déjà aimer cette réponse ")</script>';
    } else {
        $requete8 = $bdd->prepare("SELECT `like` FROM `reponses` WHERE id = ? ");
        $requete8->execute(array($id_reponse));

        $resultRequete8 = $requete8->fetch();
        $likesBddPlusUn = $resultRequete8['like'] + 1;

        $requete9 = $bdd->prepare("UPDATE `reponses` SET `like` = ? WHERE id = ?");
        $requete9->execute(array($likesBddPlusUn, $id_reponse));

        $requete11 = $bdd->prepare("INSERT INTO likes(id_reponse, auteur) VALUES (?, ?)");
        $requete11->execute(array($id_reponse, $idAuteur));

        echo '<script>window.alert("Nouveau like!")</script>';
    }
}
