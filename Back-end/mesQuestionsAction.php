<?php
require("DatabaseConnect.php");
session_start();

// Affichage par défaut de toutes les questions

$requete0 = $bdd->prepare("SELECT * FROM rubriques ORDER BY `rubrique` asc");
$requete0->execute();

if (isset($_SESSION['id']) and !empty($_SESSION['id'])) {

    $pseudoActualOnLine = $_SESSION['id'];
    $matriculeActualOnLine = $_SESSION['id_auteur'];

    $requete = $bdd->prepare("SELECT * FROM questions WHERE id_auteur = ?");
    $requete->execute(array($matriculeActualOnLine));
}

// Recherche de mes questions

$idsQuestions = array();
$questions = array();
$dates_publications = array();
$statuts = array();

if (isset($_POST['submit'])) {
    if (!empty($_POST['question'])) {

        $question = nl2br(htmlspecialchars($_POST['question']));

        $rubrique = htmlspecialchars($_POST['rubrique']);

        $requete1 = $bdd->prepare("SELECT * FROM `questions` WHERE rubrique = ? and id_auteur = ?");
        $requete1->execute(array($rubrique, $matriculeActualOnLine));

        if ($requete1->rowCount() > 0) {
            // RECHERCHE
            while ($resultRequete1 = $requete1->fetch()) {

                $idQuestion = $resultRequete1['id'];
                $questionBdd = $resultRequete1['question'];
                $id_auteur = $resultRequete1['id_auteur'];
                $statut = $resultRequete1['statut'];
                $date_publication = $resultRequete1['date_publication'];

                $questionElements = explode(" ", $question);
                $questionBddElements = explode(" ", $questionBdd);
                $nombreQuestionElements = count($questionElements);
                $nombreQuestionBddElements = count($questionBddElements);



                if ($nombreQuestionElements >= $nombreQuestionBddElements) {
                    for ($i = 0; $i < $nombreQuestionBddElements; $i++) {
                        if (strlen($questionElements[$i]) > 3) {
                            for ($j = 0; $j < $nombreQuestionElements; $j++) {
                                if ($questionElements[$j] == $questionBddElements[$i]) {

                                    if ($statut == 'n') {
                                        $statut = "Non résolut";
                                    } else {
                                        $statut = "Résolut";
                                    }

                                    array_unshift($questions, $questionBdd);
                                    array_unshift($dates_publications, $date_publication);
                                    array_unshift($statuts, $statut);
                                    array_unshift($idsQuestions, $idQuestion);
                                }
                            }
                        }
                    }
                } else {
                    for ($i = 0; $i < $nombreQuestionElements; $i++) {
                        if (strlen($questionElements[$i]) > 3) {
                            for ($j = 0; $j < $nombreQuestionBddElements; $j++) {
                                if ($questionBddElements[$j] == $questionElements[$i]) {

                                    if ($statut == 'n') {
                                        $statut = "Non résolut";
                                    } else {
                                        $statut = "Résolut";
                                    }


                                    array_unshift($questions, $questionBdd);
                                    array_unshift($dates_publications, $date_publication);
                                    array_unshift($statuts, $statut);
                                    array_unshift($idsQuestions, $idQuestion);
                                }
                            }
                        }
                    }
                }
            }
        } else {
            $resultat = "No result";
        }
    } else {
        $resultat = "No result";
    }
}

if (isset($_POST['supprimer'])) {
    $idElementASupprimer = $_POST['supprimer'];

    $requete2 = $bdd->prepare("DELETE FROM `questions` WHERE id = ?");
    $requete2->execute(array($idElementASupprimer));

    $requete3 = $bdd->prepare("DELETE FROM `reponses` WHERE id_question = ?");
    $requete3->execute(array($idElementASupprimer));
}
