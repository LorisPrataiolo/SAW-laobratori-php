<!DOCTYPE html>
<html lang="it">
    <head>
        <title>Form</title>
        <link rel="stylesheet" href="mystyle.css"

    </head>

    <body>
    <h1>9</h1>


    <form action="./setcookie.php" method="post">
        <div class="form-group">
            <label for="TextColor">Text Color</label>
            <input type="color" id="TextColor" name="TextColor">
        </div>

        <div class="form-group">
            <label for="background">Background</label>
            <input type="color" id="background" name="background">
        </div>

        
        <div class="form-group">
            <label for="font-family">font family</label>
            <select name="font-family">
                <option value="Georgia, serif">choose your font-style</option>
                <option value="Georgia, serif">Georgia, serif        </option>
                <option value="sans-serif">       sans-serif         </option>
                <option value="serif">              serif            </option>
                <option value="cursive">           cursive           </option>
                <option value="system-ui">        system-ui          </option>
            </select>
        </div>


        <input type="submit" name="submit" >
    </form>
    
    </body>
</html>
