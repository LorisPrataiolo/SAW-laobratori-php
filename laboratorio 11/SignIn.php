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
        <img class="web_site_logo" src="logo.jpg" alt="logo" width="150" height="150">

        <h3>Insert E-mail & password and Click SignIn</h3>
        <nav class="navbar">
            
                <a href="./index.php">Home</a>
                <a href="./SignIn.php">Sing-In</a>
                <a href="contact.asp">Contact</a>
                <a href="about.asp">About</a>
            
        </nav>
        


    </header>

<main>
    <!-- Contenuto principale della pagina -->
    <form method="post" action="./logInVerfy.php">
        <label for="email">Email</label><br>
        <input type="email" id="email" name="email"><br>

        <label for="password">Password</label><br>
        <input type="password" id="password" name="password"><br>

        <input type="submit" name="Sign-In">
    </form>
</main>

</body>
</html>