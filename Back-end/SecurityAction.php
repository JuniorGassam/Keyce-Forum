<?php
require("DatabaseConnect.php");

session_start();

if (!isset($_SESSION['auth'])) {
    header("location: ../Front-end/Login.php");
}
