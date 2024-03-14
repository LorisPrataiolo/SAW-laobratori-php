<?php

    declare (strict_types = 1);


    function is_input_empty(string $firstname, string $password, string $email){

        return (empty($firstname) ||  empty($password) || empty($email));

    }


    function is_email_valid(string $email) {
        return filter_var($email, FILTER_VALIDATE_EMAIL) != FALSE ?  TRUE :  FALSE;
    }



    /* la seguente funzione restituisce TRUE se l'email  e' gia' presente all'interno del
    database, FALSE altrimenti */
    function is_email_taken(object $pdo, string $email) {
        
        return (bool) get_email($pdo, $email);
    }


?>