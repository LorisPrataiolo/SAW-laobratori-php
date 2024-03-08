<?php

if(!isset($_COOKIE["mycookie"])) { 
  echo "il cookie non esiste";
  exit;
}

$cookie_value = $_COOKIE["mycookie"];
    
    // Suddivide la stringa utilizzando il delimitatore
    $values = explode("|", $cookie_value);
    
    // Ora $values contiene i valori separati
    $background_color = $values[0];
    $text_color = $values[1];
    $font_family = $values[2];


?>


<!DOCTYPE html>
<html lang="it">
<head>
<head>
    <title>Homepage</title>


    
    <?php
    /******** impostiamo i nuovi colori nella pagina iniziale ********* */
    echo "<style>
     
        body {
          background-color: {$background_color};
          color: {$text_color};
          font-family: {$font_family};
        }

    
    </style>"

    
    ?>
</head>

<body>
<h1>Lorem Ipsum</h1>
<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sem tellus, sagittis eu molestie non, venenatis vel lectus. Etiam sapien sem, efficitur ut lacus at, volutpat sodales nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nulla facilisi. In tempor auctor odio, a fringilla diam maximus et. Proin risus augue, rutrum a scelerisque et, pretium vel mi. Nulla egestas mauris ac turpis sollicitudin hendrerit. Curabitur posuere, lorem eget tincidunt venenatis, massa tortor feugiat tortor, a sollicitudin neque neque in lorem. In venenatis arcu sed urna lobortis tempor. Proin hendrerit, nisi in maximus varius, ipsum urna efficitur eros, sed feugiat nisi libero nec ex. Vestibulum semper lectus eget purus sollicitudin vehicula. Quisque nec magna vel mauris congue volutpat nec in ex.</p>
<p>
Proin dapibus risus congue, cursus libero sit amet, bibendum lectus. Morbi a hendrerit mi. Phasellus feugiat nulla eros, pellentesque congue felis dictum eu. In hac habitasse platea dictumst. Nullam sit amet vestibulum massa. Integer eu urna blandit, tempus quam non, suscipit urna. Nam imperdiet consequat velit, sit amet lacinia massa aliquet at. Vivamus scelerisque sapien id risus gravida iaculis. Nullam vestibulum eleifend arcu nec scelerisque. Donec mollis molestie mi, viverra congue risus semper euismod. Morbi nisl lorem, mattis vel ligula accumsan, condimentum hendrerit velit. Aenean at mauris eu dui pharetra tempor rutrum nec risus. Vestibulum dignissim, magna a aliquam venenatis, nisl diam vulputate tellus, sed dapibus odio massa ac lacus. Nunc efficitur auctor lorem rutrum maximus. Sed eget felis bibendum, laoreet mi non, vehicula dolor.</p>
<p><a href="./form.php">Vai alla pagina di personalizzazione</a></p>
</body>
</html>
