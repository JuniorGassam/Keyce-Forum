<?php
require("DatabaseConnect.php");
session_start();

if (isset($_GET['id']) and !empty($_GET['id'])) {

    $idQuestion = $_GET['id'];

    $requete1 = $bdd->prepare("SELECT `question`, `id_auteur`, `date_publication`, `statut` FROM `questions` WHERE id = ? ");
    $requete1->execute(array($idQuestion));

    if ($requete1->rowCount() > 0) {
        while ($resultRequete1 = $requete1->fetch()) {

            $questionBdd = $resultRequete1['question'];
            $id_auteur = $resultRequete1['id_auteur'];
            $statut = $resultRequete1['statut'];
            $date_publication = $resultRequete1['date_publication'];

            $requete2 = $bdd->prepare("SELECT `pseudo` FROM `comptes` WHERE matricule = ? ");
            $requete2->execute(array($id_auteur));

            if ($statut == 'n') {
                $statut = "Non résolut";
            } else {
                $statut = "Résolut";
            }

            $resultRequete2 = $requete2->fetch();
            $pseudoAuteur = $resultRequete2['pseudo'];
        }
    }


    $requete3 = $bdd->prepare("SELECT * FROM `reponses` WHERE id_question = ? ORDER BY `like` desc");
    $requete3->execute(array($idQuestion));
    $nombreResult = $requete3 -> rowCount();


}



if (isset($_POST['repondre'])) {
    $idReponse = $_POST['repondre'];
    $reponse = nl2br(htmlspecialchars($_POST['reponse']));

    $requete4 = $bdd->prepare("INSERT INTO reponses(reponse, id_question, pseudo_auteur) VALUES(?, ?, ?)");
    $requete4->execute(array($reponse, $idReponse, $_SESSION['id']));

    header("Refresh:1");
}