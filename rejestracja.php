<!DOCTYPE html>
<html lang="pl">
    <head>
    
        <meta charset="utf-8">
        <title>Meet.up -rejestracja</title>
        <link rel="stylesheet" href="registerstyle.css">
    </head>
    
    <body> 
        <?php session_start(); ?>
        <div class="bg">
            <form action="regist.php" method="post">
                <div class="tytul">Zarejestruj się - Meet.up</div>
                <div class="lewy">
                    <input type="text" name="user" placeholder="nick"><br>
                    <input type="text" name="email" placeholder="e-mail"><br>
                    <input type="password" name="password" placeholder="password"><br>
                    <input type="password" name="powpassword" placeholder="password">
                
                </div>
                <div class="prawy">
                    <input type="text" name="imie" placeholder="imie"><br>
                    <input type="text" name="nazwisko" placeholder="nazwisko"><br>
                    <input type="submit" value="zarejestruj się" class="rose">
                    <a href="index.php">Wróć</a>
                </div><br><br>
                <?php if(!empty($_SESSION['brak'])){
                    echo '<p style="color:red">'.$_SESSION['brak'].'</p>';
                }
                ?>
                
            </form>
        </div>
        
    </body>

</html>