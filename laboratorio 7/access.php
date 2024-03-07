<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Log-In</title>
</head>

<body>

<?php
    
    /************************************************** GATHERING & CAMPS VERIFY **************************************************/
    $email = $password = "";
    $filename = "./users.txt";
    
    if($_SERVER["REQUEST_METHOD"] != "POST") {
     exit;
    }

    $email = test_input($_POST["email"]);
    $password = test_input($_POST["pass"]);

    function test_input($data) {
        if($data == NULL) {
            echo "check input data, some are missing";
            exit;
        }


        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }




    
    
      
    /*********************************************** FIND & CHECK VARIABLES **************************************************** */



    // variabili per tener traccia della corrispondenza delle variabili
        $found_email = false; 
        $found_pass  = false;
    
        $file_content = file_get_contents($filename); // leggo il file attraverso file_get_contents($filename cosi da avere tutte le variabili gia come stringe
   
        $lines = explode("\n", $file_content);  // Divido il contenuto del file in righe


    // Controlla se l'email e la password corrispondono

        foreach($lines as $line) {

            if ($email === $line )  $found_email = true; 

            if(password_verify($password, $line)) $found_pass = true; 
                
        }


    
    
    if ($found_email == false or $found_pass == false ) {
        echo "HoLy sShItOh! Credenziali non valide. Registrati, per favore.\n";
        exit();
    } else {
    


        /** 1.3 - se l'accesso viene eseguito creo due variabili di sessione */

        $_SESSION["email"] = $email;



        /**in caso di successo ridirezioniamo lo user alla pagian index */
        header('Location: ./index.php');
        exit;
    }


    /** NOTA: l'idea era quella che una volta verificata le credenziali, e reindirizzata all'
     * area risevata veniva stampato anche il nome dell'utente, tuttavia nelle condizioni attuali
     * questo è possibile solo ri-visitando il file e prendendone il valore.
     * 
     * con $_POST non è possibile perche i campi di log in sono solo email e password 
     * quindi non c'è corrispondenza con firstname
     */

    
    
  
?>


</body>
</html>