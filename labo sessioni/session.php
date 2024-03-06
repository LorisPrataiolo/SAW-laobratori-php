<?php

    session_start();
?>

<!DOCTYPE html>
<html>
<body>

<?php
  echo session_name() . ": " . session_id();
?>

</body>
</html>
