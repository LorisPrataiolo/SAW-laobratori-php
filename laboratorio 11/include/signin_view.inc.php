<?php

    declare (strict_types = 1);



/*  verifichiamo se in SESSION sono stati registrati degli errori e li stampiamo */
    function check_signin_errors() {
        if (isset($_SESSION["errors_signin"])) {
            $errors = $_SESSION["errors_signin"];


            

            echo "<br>";

            foreach ($errors as $error ) {
               echo '<p class="form-error">'. $error . '</p>';
            }

            // dopo averli stampati mi premuro di eliminarli dalla variabile globale
            unset($_SESSION["errors_signin"]);
        }
    }

?>