<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8">
        <title>Meet.up - Login</title>
        
        <link href="indexstyle.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        
        <div class="bg">
        
            <?php session_start(); ?>
            <form action="login.php" method="post">   
                <p class="info">Meet.up</p>
                <input class="t" type="text" name="login"><br>
                <input class="t" type="password" name="password"><br>
                <?php if(!empty($_SESSION['blad'])){
                    echo '<p style="color:red">'.$_SESSION['blad'].'</p>';
                };?>
                <input type="submit" value="zaloguj" class="rose"><br>
                <br>
                <a href="rejestracja.php">Zarejestruj się</a>
            </form>
        </div>
    </body>

</html>