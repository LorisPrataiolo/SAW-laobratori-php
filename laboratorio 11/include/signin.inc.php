<?php


    if (!$_SERVER["REQUEST_METHOD"] == "POST") {
        header("Location: /" );
        die();
    }


    $firstname = $_POST["firstname"];
    $email = $_POST["email"];
    $password = $_POST["password"];



    /************************ ci connettiamo al database ************************ */
    try {
        require_once './databasehandler.inc.php';
        require_once './signin_model.inc.php';
        require_once './signin_cont.inc.php';


        /******* ERROR HANDLERS ******* */ 

        if (is_input_empty($firstname, $password, $email)) {
            
        }

        if ( !is_email_valid($email)) {
            # code...
        }

        if ( is_email_registred($pdo,  $email)){

        }

    } catch (PDOException $e) {
        die("Query has failed: ". $e->getMessage());
    }
?>