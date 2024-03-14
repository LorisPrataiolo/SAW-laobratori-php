<?php


    if (!$_SERVER["REQUEST_METHOD"] == "POST") {
        header("Location: /" );
        die();
    }


    $firstname = $_POST["firstname"];
    $email = $_POST["email"];
    $password = $_POST["password"];


?>