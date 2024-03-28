<?php
require("DatabaseConnect.php");

session_start();

if (isset($_POST['submit'])) {

    if (!empty($_POST['matricule']) and !empty($_POST['pseudo']) and !empty($_POST['adresseEmail']) and !empty($_POST['mdp']) and !empty($_POST['mdpConfirm'])) {

        $matricule = htmlspecialchars($_POST['matricule']);
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $adresseEmail = htmlspecialchars($_POST['adresseEmail']);
        $mdp = htmlspecialchars($_POST['mdp']);
        $mdpConfirm = htmlspecialchars($_POST['mdpConfirm']);

        $validiteEmailArobase = strpos($adresseEmail, '@');
        $validiteEmailPoint = strpos($adresseEmail, '.');
        $validiteMatricule = substr($matricule, 0, 4);

        if ($validiteMatricule == "KIA-") {

            $requete00 = $bdd->prepare("SELECT * FROM `comptes` WHERE matricule = ?");
            $requete00->execute(array($matricule));

            if($requete00->rowCount() > 0){
                $errormsg = "Un compte existe déjà sous ce matricule...";
            }else{

                if ($validiteEmailArobase == true and $validiteEmailPoint) {

                    if ($mdp == $mdpConfirm) {

                        $requete0 = $bdd->prepare("SELECT * FROM `comptes` WHERE matricule = ?");
                        $requete0->execute(array($matricule));

                        if ($requete0->rowCount() > 0) {
                            $errormsg = "Cet utilisateur existe déjà dans ce site...";
                        } else {
                            $requete = $bdd->prepare("INSERT INTO `comptes` VALUES(?, ?, ?, ?)");
                            $requete->execute(array($matricule, $pseudo, $adresseEmail, $mdp));

                            if ($requete->rowCount() > 0) {
                                $_SESSION['auth'] = true;
                                $_SESSION['id'] = $pseudo;
                                $_SESSION['id_auteur'] = $matricule;
                                header("location: ../Front-end/Home.php?id=<?= $pseudo ?>");
                            } else {
                                $errormsg = "Erreur lors de la création du compte...\nVeuillez réessayer s'il-vous-plaît";
                            }
                        }
                    } else {
                        $errormsg = "Veuillez vérifier votre mot de passe";
                    }
                } else {
                    $errormsg = "Adresse email invalide!";
                }
            }
        } else {
            $errormsg = "Matricule invalide!";
        }
    }
}
