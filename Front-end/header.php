<?php

?>

<style>
    .a1 {
        color: white;
        border: solid 1px orange;
        font-size: 20px;
        font-family: Arial Narrow, sans-serif;
        padding-top: 30px;
        width: 300px;
        height: 90px;
        position: absolute;
        text-align: center;
        border-radius: 15px;
    }

    .a2 {
        color: white;
        border: solid 1px orange;
        font-size: 20px;
        font-family: Arial Narrow, sans-serif;
        padding-top: 30px;
        margin-left: 750px;
        width: 300px;
        height: 90px;
        position: absolute;
        text-align: center;
        border-radius: 15px;
    }

    .a1:hover,
    .a2:hover {
        background-color: orange;
    }

    .initialPseudo {
        text-align: center;
        padding-top: 20px;
        background-color: gray;
        font-size: 30px;
        border-radius: 10px 0px 0px 10px;
        color: orange;
        width: 100px;
    }

    .menu {
        text-decoration: none;
        list-style: none;
    }

    .card {
        background-color: orange;
        border-radius: 10px;
        display: none;
        width: 400px;
        height: 300px;
        position: absolute;
        top: 60px;
        right: 100px;
    }

    .liens {
        font-size: 20px;
        display: flex;
        text-align: center;
        width: 300px;
        color: black;
        font-family: Comic Sans MS, Comic Sans, cursive;
        padding-left: 30px;
    }

    .liens:hover {
        color: orange;
        background-color: white;
    }

    .para {
        height: 40px;
        width: 40px;
        border-radius: 20px;
        background-color: pink;
        margin-left: 15px;
        text-align: center;
        padding-top: 5px;
        font-size: 30px;
        font-family: Courier, monospace;
        font-weight: 900;
        color: orange;
        background-color: rgba(19, 19, 61, 0.829);
        margin-right: 10px;
    }

    .para:hover .card {
        display: flex;
    }

    .paraidliste {
        font-size: 25px;
    }
</style>

<header class="header">

    <a href="#" class="logo"> <i class="fas fa-comments"></i> Keyce Forum </a>

    <nav class="navbar">
        <div id="close-navbar" class="fas fa-times"></div>
        <?php
        if (!isset($_SESSION['auth'])) {
        ?>
            <a href="home.php">home</a>
            <a href="about.php">about</a>
            <a href="contact.php">contact</a>
        <?php
        }
        ?>

        <?php
        if (isset($_SESSION['auth'])) {
        ?>
            <a href="home1.php">home</a>
            <a href="about.php">about</a>
            <a href="contact.php">contact</a>
        <?php
        }
        ?>
    </nav>

    <?php
    if (!isset($_SESSION['auth'])) {
    ?>
        <div class="icons">
            <div><a id="account-btn" class="fas fa-user" href="Login.php"></a></div>
            <div id="menu-btn" class="fas fa-bars"></div>
        </div>
    <?php
    }
    ?>

    <?php
    if (isset($_SESSION['id'])) {
        $id = $_SESSION['id'][0];
    ?>
        <div class="para">
            <p class="paraidliste"><?= $id ?></p>
            <div class="card">
                <div class="initialPseudo"><?= $id ?></div>
                <ul class="menu">
                    <a class="liens" href="./mesQuestions.php">Mes questions</a>
                    <a class="liens" href="./askQuestion.php">Poser une question</a>
                    <a class="liens" href="./answerQuestion.php">Repondre à une question</a>
                    <a class="liens" href="../Back-end/LogoutAction.php">Déconnexion</a>
                </ul>
            </div>
        </div>

        <div style="position: absolute;background-color:orange;height:10px;width:10px;border-radius:5px;top:20px;right:210px;"></div>

        <div class="icons">
            <div><a id="men" class="fas fa-bell"></a></div>
            <div id="menu-btn" class="fas fa-bars"></div>
        </div>

    <?php
    }
    ?>

</header>