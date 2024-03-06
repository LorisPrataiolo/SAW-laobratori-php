<?php session_start(); 

/** qui verifichiamo se, accedendo al sito (in fase di login) la variabile di sessione
 * è stata inizializzata correttamente
 */
If (!isset($_SESSION["email"])) {

        header('Location:./login.html');
        exit();
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Area Riservata</title>
    </head>


    <body>
        
       <?php
            echo "<h1> Area Riservata di:  </h1> <br>";
            echo  $_SESSION["email"];
       ?>





    </body>

</html>