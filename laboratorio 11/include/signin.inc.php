<?php


    if (!$_SERVER["REQUEST_METHOD"] == "POST") {
        header("Location: ../index.php" );
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

        $errors = [];

        if (is_input_empty($firstname, $password, $email)) {
            $errors["empty_input"] =  "Fill in all filelds";
        }


        if ( !is_email_valid($email)) {
            $errors["invalid_email"] =  "invalid email used, be careful man";
        }

        if ( is_email_registred($pdo,  $email)){

            $errors["email_registred"] =  "oh gosh, the email has been registred;
            have you forgotten your account credentials?";

        }


    //  non ci siano errore possiamo procedere con la sessione
        require_once './config_session.inc.php';

        // nota: si e' corretto fare cosi' altrimenti non potremmos
        // scrivere all'interno di $_SESSION
        if($errors) {
            $_SESSION["errors_signin"] = $errors;
            header("Location: ../pages/signin.php");
        }






    } catch (PDOException $e) {
        die("Query has failed: ". $e->getMessage());
    }
?>