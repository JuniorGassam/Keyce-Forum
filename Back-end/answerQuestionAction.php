<?php
require("DatabaseConnect.php");
session_start();

$requetemoins = $bdd->prepare("SELECT * FROM rubriques ORDER BY `rubrique` asc");
$requetemoins->execute();

$requete0 = $bdd->prepare("SELECT * FROM rubriques ORDER BY `rubrique` asc");
$requete0->execute();

$idsQuestions = array();
$idAuteur = $_SESSION['id_auteur'];
$questions = array();
$auteurs = array();
$dates_publications = array();
$statuts = array();



if (isset($_POST['submit'])) {
    if (!empty($_POST['question'])) {

        $question = nl2br(htmlspecialchars($_POST['question']));

        $rubrique = htmlspecialchars($_POST['rubrique']);

        $requete1 = $bdd->prepare("SELECT `id`, `question`, `id_auteur`, `date_publication`, `statut` FROM `questions` WHERE rubrique = ? ");
        $requete1->execute(array($rubrique));

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

                                    $requete2 = $bdd->prepare("SELECT `pseudo` FROM `comptes` WHERE matricule = ? ");
                                    $requete2->execute(array($id_auteur));
                                    $pseudoAuteur = $requete2->fetch();
                                    if($statut == 'n'){
                                        $statut = "Non résolut";
                                    }else{
                                        $statut = "Résolut";
                                    }

                                    array_unshift($questions, $questionBdd);
                                    array_unshift($auteurs, $pseudoAuteur['pseudo']);
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
                                    
                                    $requete2 = $bdd->prepare("SELECT `pseudo` FROM `comptes` WHERE matricule = ? ");
                                    $requete2->execute(array($id_auteur));
                                    $pseudoAuteur = $requete2->fetch();
                                    if($statut == 'n'){
                                        $statut = "Non résolut";
                                    }else{
                                        $statut = "Résolut";
                                    }


                                    array_unshift($questions, $questionBdd);
                                    array_unshift($auteurs, $pseudoAuteur['pseudo']);
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
