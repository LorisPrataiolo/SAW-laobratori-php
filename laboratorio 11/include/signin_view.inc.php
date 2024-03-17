<?php

    declare (strict_types = 1);



/*  verifichiamo se in SESSION sono stati registrati degli errori e li stampiamo  altrimenti stamperemo 
 *   un messaggio di successo*/
    function check_signin_errors() {
        if (isset($_SESSION["errors_signin"]) && is_array($_SESSION["errors_signin"])) {
            $errors = $_SESSION["errors_signin"];


            

            echo "<br>";

            foreach ($errors as $error ) {
               echo '<p class="form-error">'. $error . '</p>';
            }

            // dopo averli stampati mi premuro di eliminarli dalla variabile globale
            unset($_SESSION["errors_signin"]);


        }elseif (isset($_GET["signin"]) && $_GET["signin"] == "success") {

            echo "<br>";
            echo '<p class="form-success"> Sign In Success </p>';

        }
    }



    function signin_inputs()  {
        


        // verifico che il campo signin_data non sia vuoto per la key firstname
        if (isset($_SESSION["signin_data"]["firstname"])) {


            // verrra' cos' ristampato nel campo
            echo'<label for="firstname">Firstname</label><br>
            <input type="text" id="firstname" name="firstname"
            value="'.$_SESSION["signin_data"]["firstname"].'"><br>';


        }else {

            // altrimenti...
            echo'<label for="firstname">Firstname</label><br>
            <input type="text" id="firstname" name="firstname"><br>';
        }



        // verifico che il campo signin_data non sia vuoto per la key email
        if (isset($_SESSION["signin_data"]["email"]) &&
            !isset($_SESSION["errors_signin"]["invalid_email"]) &&
            !isset($_SESSION["errors_signin"]["email_registred"])) {

            // verrra' cos' ristampato nel campo
            echo '<label for="email">Email</label><br>
            <input type="email" id="email" name="email"
            value="'.$_SESSION["signin_data"]["email"].'  "><br>';


        }else {

            // altrimenti...
            echo '<label for="email">Email</label><br>
            <input type="email" id="email" name="email"><br>';
        }


        // contrariamente per la password il campo sara' sempre vuoto
        echo '<label for="password">Password</label><br>
        <input type="password" id="password" name="password"><br>';
    }







?>