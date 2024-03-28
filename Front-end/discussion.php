<!DOCTYPE html>
<html lang="fr">
 
<head>
 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
 
    <title>Messenger</title>
 
    <!-- Bootstrap core CSS -->
    <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
 
    <!-- Custom styles for this template -->
    <link href="../../css/modern-business.css" rel="stylesheet">
 
    <!-- Bootstrap core JavaScript -->
    <script src="../../vendor/jquery/jquery.min.js"></script>
    <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
 
</head>
 
<body>
 
<!-- Navigation -->
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="../../../index.php">Messenger</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="../../../index.php?p=conversation">conversation</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../../../index.php?p=messenger">Messenger</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../../../index.php?p=compte">Compte</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../../../index.php?p=deconnexion">Déconnexion</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<style>
    .grid-container{
        display: grid;
        grid-template-columns: auto;
 
 
        height: 100%;
    }
    .left{
        float: left;
        color: black;
        background-color: #e5f2ff;
    }
    .right{
        float: right;
        color:white;
        background-color: #0084ff;
    }
    .scrowl{
        overflow: auto;
    }
    .conversation{
        overflow: auto;
    }
    .message{
        clear: both;
        max-width: 75%;
        border-radius: 4px;
        padding: 1%;
    }
    .btn-messenger{
        margin-left: 0.5%;
    }
</style>
 
<script src="../js/ajax.js"></script>
<script src="../js/sendMessage.js"></script>
 
<!-- Page Content -->
<div class="container">
 
    <h1 class="my-4">Conversation avec Monsieur X</h1>
    <div class="grid-container" style="border: 1px solid black; padding: 1%;">
        <div id="conversation" class="grid-item scrowl">
            <input type="text" id="lastId" value="0" style="display: none;">
            <input type="text"  id="idRecepteur" style="display: none;" value="2">
            <input type="text"  id="recepteur" style="display: none;" value="Monsieur X">
            <input type="text"  id="idEmetteur" style="display: none;" value="1">
            <input type="text"  id="emetteur" style="display: none;" value="Clément">       
         <p class="message right" id="3">Message de test 1</p>
         <p class="message left" id="3">Message de test 2</p>
         <p class="message right" id="3">Message de test 3</p>
         <p class="message left" id="3">Message de test 4</p>
         
        </div>
        <div class="grid-item">
            <div id="sender" style="display: flex; flex-wrap: nowrap;padding-top: 1%;" >
                <input type="text" id="message" style="width: 100%;" placeholder="Message..." value="">
                <button class="btn btn-primary btn-messenger" onclick="sendMessage(readData)">Envoyer</button>
            </div>
        </div>
    </div>
    <script src="../js/checkMessage.js"></script>
    <script>
        function executeChercker(){
            checkMessage(readData);
            setTimeout(executeChercker(), 1000);
        }
        executeChercker();
    </script>
    <!-- /.row -->
</div>
<!-- /.container -->
</body>
 
</html>