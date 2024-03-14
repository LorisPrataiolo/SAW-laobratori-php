<?php

    declare (strict_types = 1);


    /*  */
    function get_email(object $pdo, string $email) {

   
        $query = "SELECT email FROM users WHERE email = :email;";

    // Preparazione della query
        $stmt = $pdo->prepare($query);

    // Associazione del parametro :email con il valore della variabile $email
        $stmt->bindParam(":email", $email);

    // Esecuzione della query
        $stmt->execute();

    // Recupero della riga risultante come un array associativo
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        return $result;

    }

?>