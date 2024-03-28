<?php
require("DatabaseConnect.php");

session_start();

if (isset($_POST['submit'])) {

    if (!empty($_POST['matricule']) and !empty($_POST['pseudo']) and !empty($_POST['mdp'])) {

        $matricule = htmlspecialchars($_POST['matricule']);
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $mdp = htmlspecialchars($_POST['mdp']);

        $requete = $bdd->prepare("SELECT * FROM comptes WHERE matricule = ?");
        $requete->execute(array($matricule));

        if ($requete->rowCount() > 0) {

            $valeurs = $requete->fetch();

            $matriculeBdd = $valeurs['matricule'];
            $pseudoBdd = $valeurs['pseudo'];
            $mdpBdd = $valeurs['mot_de_passe'];

            if ($matricule == $matriculeBdd and $pseudo == $pseudoBdd and $mdp == $mdpBdd) {

                $_SESSION['auth'] = true;
                $_SESSION['id'] = $pseudo;
                $_SESSION['id_auteur'] = $matricule;
                header("location: ../Front-end/Home1.php?id=<?= $pseudo ?>");
            } else {

                $errormsg = "mot de passe incorrect...";
            }
        } else {

            $errormsg = "matricule d'utilisateur incorrect...";
        }
    }
}
