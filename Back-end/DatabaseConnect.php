<?php

try {
    $bdd = new PDO('mysql:host=localhost;port=3307;dbname=forum_keyce;charset=utf8;', 'root', '');
} catch (Exception $e) {
    die("La connexion à la base de données n'a pas abouti..." . $e->getMessage());
}
