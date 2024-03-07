<!DOCTYPE html>
<html lang="it">
<head>
    <title>My Set cookie</title>
</head>

<body>

<?php

if(!empty($_POST)) {

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

// stampa l'array $_POST
    foreach ($_POST as $key => $value) {
        echo "<tr>";
        echo "<td>";
        echo $key;
        echo "</td>";
        echo "<td>";
        echo $value;
        echo "</td>";
        echo "</tr>";
    }

 
?>


</body>
</html>
