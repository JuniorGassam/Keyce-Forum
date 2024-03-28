<?php
require("DatabaseConnect.php");

session_start();
$_SESSION = [];
session_destroy();

header("location: ../Front-end/home.php");
