<?php
require("../Back-end/discussAction.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>

    <div class="card" id="a1">
        <div class="card-header" id="division">
            <?= $pseudoAuteur ?>
        </div>
        <div class="card-body">
            <h5 class="card-title">Département : <?= $données['département'] ?></h5>
            <p class="card-text">Date de publication : <?= $données['date_d_entrée'] ?></p>
            <div style="display: flex;" style="width: 2000px;">
                <a href="Modify.php?id=<?= $données['id'] ?>" class="btn btn-primary" id="edit">Editer</a>
                <a href="TakingLeave.php?id=<?= $données['id'] ?>" class="btn btn-primary" id="ask">Demande_congés</a>
                <a href="More.php?id=<?= $données['id'] ?> ?>" class="btn btn-primary" id="more">Voir_plus</a>
                <button type="submit" name="supprimer" class="btn btn-primary" id="delete" value="<?= $données['id'] ?>">Suprimer</button>
            </div>
        </div>
    </div>
</body>

</html>