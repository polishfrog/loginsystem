<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8">
        <title>Ustawienia</title>
        
        
    </head>
    
    <body>
        
        <?php 
        
            session_start();
        
            $conn = mysqli_connect('remotemysql.com', 'G0FFCT0yDZ','1pZL8eA4jX', 'G0FFCT0yDZ');
            $id = $_SESSION['id'];
            $query1 = "SELECT uzytkownicy.email, uzytkownicy.Imie, uzytkownicy.Nazwisko, uzytkownicy.City, uzytkownicy.Wiek, uzytkownicy.nazwisko_pub, uzytkownicy.city_pub, uzytkownicy.wiek_pub FROM uzytkownicy WHERE uzytkownicy.id = '".$_SESSION['id']."'";
        
            $resul1 = mysqli_query($conn, $query1);
            
            while($row = mysqli_fetch_row($resul1)){
                $_SESSION['email'] = $row[0];
                $_SESSION['Imie'] = $row[1];
                $_SESSION['Nazwisko'] = $row[2];
                $_SESSION['City'] = $row[3];
                $_SESSION['Wiek'] = $row[4];
                $_SESSION['nazwisko_pub'] = $row[5];
                $_SESSION['city_pub'] = $row[6];
                $_SESSION['wiek_pub'] = $row[7];
            }
        
        ?>
        
        <form action="ustawienia_cd.php" method="post">
            Nickname: <?php echo $_SESSION['user']; ?> <br>
            E-mail: <?php echo $_SESSION['email']; ?> <br>
            
            <input type="text" name="Imie" value="<?php echo $_SESSION['Imie']; ?>"> <br>
            <input type="text" name="Nazwisko" value="<?php echo $_SESSION['Nazwisko']; ?>"> 
            <select name="nazwisko_pub" >
                <option value="0">Prywante</option>
                <option value="1" 
                        <?php 
                        if($_SESSION['nazwisko_pub'] != 0){
                            echo 'selected = "selected"'; 
                        }?> >
                    Publiczne</option>    
            </select>
            <br>
            <input type="text" name="City" value="<?php echo $_SESSION['City']; ?>">    
            <select name="city_pub" >
                <option value="0">Prywante</option>
                <option value="1" 
                        <?php 
                        if($_SESSION['city_pub'] != 0){
                            echo 'selected = "selected"'; 
                        }?> >
                    Publiczne</option>    
            </select>
            <br>
            <input type="text" name="Wiek" value="<?php echo $_SESSION['Wiek']; ?>"> 
            <select name="wiek_pub" >
                <option value="0">Prywante</option>
                <option value="1" 
                        <?php 
                        if($_SESSION['wiek_pub'] != 0){
                            echo 'selected = "selected"'; 
                        }?> >
                    Publiczne</option>    
            </select>
            <br>
            
            <input type="submit" value="Zapisz zmiany">
        </form>
        
        <a href="pulpit.php">Wróć</a>
    
    </body>
</html>