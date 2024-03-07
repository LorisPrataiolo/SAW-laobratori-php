<!DOCTYPE html>
<html lang="it">
<head>
    <title>My Set cookie</title>
</head>

<body>

<?php

if(isset($_POST['submit'])) {

    // Leggi i valori ricevuti dal form
        $background_color = $_POST["background"];
        $text_color = $_POST["TextColor"];
        
    // combiniamo i valori in una singola stringa
        $cookie_value = $background_color . "|" . $text_color;
    
    // Memorizza la stringa nel cookie
        setcookie("mycookie", $cookie_value, time() + (86400 * 30), "/"); // 86400 secondi = 1 giorno

    // rimanda alla home page
        header("Location: ./index.php");
}

echo "errore con la post";

 
?>


</body>
</html>
