<?php

    declare (strict_types = 1);


    function is_input_empty(string $firstname, string $password, string $email){

        return (empty($firstname) ||  empty($password) || empty($email));

    }


    function is_email_valid(string $email) {
        return filter_var($email, FILTER_VALIDATE_EMAIL) != FALSE ?  TRUE :  FALSE;
    }

    function is_email_taken($email) {
        return filter_var($email, FILTER_VALIDATE_EMAIL) != FALSE ?  TRUE :  FALSE;
    }


?>