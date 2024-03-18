<?php

declare(strict_types=1);


function check_login_errors() {

    if (isset($_SESSION["errors_login"])) {

        $errors = $_SESSION["errors_login"];

        foreach ($errors as $error ) {
            echo '<p class="form-error">'. $error . '</p>';
        }


        unset($_SESSION["error_login"]);
    }
    
    elseif (isset($_GET["login"]) && $_GET["login"] == "success") {
        
        echo "<br>";
        echo '<p class="form-success"> Sign In Success </p>';
    }
}

?>