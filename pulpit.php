<!DOCTYPE HTML>
<html lang="pl">
    <head>
        <meta charset="utf-8">
        <title>Meet - pulpit</title>
        <link href="pulpit.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        
        <?php session_start(); ?>
        
        <div class="gora">
            <div class="przyciski">Witaj, <?php echo $_SESSION['user'] ?>!</div>
            <div class="przyciski"><a href="profil.php">Mój profil</a></div>
            <div class="przyciski"><a href="ustawienia.php">Ustawienia</a></div>
            <div class="przyciski"><a href="logout.php">Wyloguj</a></div>
        </div>
        
        <div class="lewy">
        
        </div>
        <div class="srodek">
        
        </div>
        <div class="prawy">
        
        </div>
        
    </body>
</html>