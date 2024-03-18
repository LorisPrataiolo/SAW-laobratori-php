<?php

if (!$_SERVER["REQUEST_METHOD"] == "POST") {
    header("Location: ../index.php" );
    die();
}


$email = $_POST["email"];
$password = $_POST["password"];


try {

    require_once './databasehandler.inc.php';
    require_once './login_model.inc.php';
    require_once './login_cont.inc.php';


    /******* ERROR HANDLERS ******* */ 


    $errors = [];

    if ( is_input_empty( $email,  $password )){
    
        $errors["empty_input"] =  "Fill in all filelds";
    }

    // nota: pdo la prendimo dal file: databasehandler.inc.php
    $result = get_user($pdo, $email);

    if (is_email_exsist($result)) {
        $errors["login_incorrect"] = "email is incorrect or not exsist";
    }


    /* ricordo che result e' un'array in caso l'utente esista all'interno del db 
    potendo cosi' accedere alla password hashed come qui di seguito*/
    if (password_verify($password, $result["pwd"])) {
        $errors["login_incorrect"] = "password is incorrect";
    }





    require_once './config_session.inc.php';

    // nota: si e' corretto fare cosi' altrimenti non potremmos
    // scrivere all'interno di $_SESSION
    if($errors) {
        $_SESSION["errors_login"] = $errors;

        
    

        header("Location: ../pages/signIn.php");
        die(); 
    }   
    
    
    /* test: a questo punto presumibilmente l-utente ha inserito
    correttamente le sue cedenziali, vogliamo che che la sessione sia
    collegata al nostro utente*/

    $newSessionId = session_create_id();
    $sessionId = $newSessionId . '_' . $result["id"];


    session_id($sessionId); // impostiamo l'id della sessione con quella creata

    /* tuttavia sappioamo che ogni 30 min l'id della sessione viene rigenerata automaticamente
    --> cambiamo il file conf_session */
    
} catch (PDOException $e) {
    die("Query has failed: ". $e->getMessage());
}


?>