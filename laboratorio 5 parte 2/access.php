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
    $filename = "C:/xampp/htdocs/SAW-laobratori-php/laboratorio 5/users.txt";
    
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

    // Verifica se il file è leggibile
    if (!is_readable($filename)) {
        echo "error: Il file non è leggibile\n";
        exit;
    }

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
        echo "<h1>WELCOME BACK stronzo!</h1>";
    }
    
    
  
?>


</body>
</html>