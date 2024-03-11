<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-In</title>
    <link rel="stylesheet" type="text/css" href="./style.css">
</head>
<body>

<header>
    <!-- Contenuto dell'header -->
</header>

<main>
    <!-- Contenuto principale della pagina -->
    <h3>Insert E-mail & password and Click SignIn</h3>
    <form method="post" action="./logInVerfy.php">
        <label for="email">Email</label><br>
        <input type="email" id="email" name="email">

        <label for="password">Password</label><br>
        <input type="password" id="password" name="password"><br>

        <input type="submit" name="Sign-In">
    </form>
</main>

</body>
</html>