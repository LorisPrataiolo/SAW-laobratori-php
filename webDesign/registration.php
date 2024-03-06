<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Sign-up</title>
</head>

<body>

<?php 
    echo "<h1>I have been called after submit on your form</h1>\n";
    echo "<h2>Now you should read the data sent and write them in a file</h2>\n";

?>

<?php



    /**** data validation *****/

    $firstname = $lastname = $email = $password = $ConfirmPassword = "";

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $firstname = test_input($_POST["firstname"]);
        $lastname = test_input($_POST["lastname"]);
        $email = test_input($_POST["email"]);
        $password = test_input($_POST["password"]);
        $ConfirmPassword =  test_input($_POST["ConfirmPassword"]);


         $password = password_hash($password, PASSWORD_DEFAULT);
        // $ConfirmPassword = password_hash($ConfirmPassword, null);

        if( !password_verify($ConfirmPassword,$password)) {
            echo "invalid pasword";
            exit;
        }


      // Apre il file in modalità lettura/scrittura, creandolo se non esiste
        if (!($file = fopen("users.txt", "w+"))) {
            echo "Errore durante l'apertura/creazione del file di dati.";
            exit;
        }

        // Imposta le autorizzazioni di accesso per rendere il file leggibile e scrivibile
        if (!chmod("users.txt", 0666)) {
            echo "Errore nell'impostare le autorizzazioni di accesso del file.";
            exit;
        }


        $form_data_user = array($firstname,$lastname, $email, $password);
        foreach($form_data_user as $data) {
            
            if (fwrite($file,"$data\n") == FALSE) {
                echo "error with writing all form's data <\br> ";
                fclose($file);
                exit;
            }
        }

        echo "Success! all data has been written in to form_login_data.txt";
        fclose($file);




    }


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




?><br>




Welcome <?php echo $_POST["firstname"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>

</body>
</html>