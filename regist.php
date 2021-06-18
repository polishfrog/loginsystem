<?php
 
    session_start();

    

    if(!empty($_POST['user']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['powpassword']) && !empty($_POST['imie']) && !empty($_POST['nazwisko'])){
        
        unset($_SESSION['brak']);
        
        $name = $_POST['user'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $powpassword = $_POST['powpassword'];
        $imie = $_POST['imie'];
        $nazwisko = $_POST['nazwisko'];
        

        $wszystko_ok = true;
        
        if($password != $powpassword){
            $wszystko_ok = false;
            $_SESSION['brak'] = "Hasła nie są takie same!";
            header('Location: rejestracja.php');
        }
        
        
        $haslo_hash = password_hash($password, PASSWORD_DEFAULT);
        
        if($wszystko_ok == true){
            
            //NAZWA
            $conn = mysqli_connect('remotemysql.com', 'G0FFCT0yDZ','1pZL8eA4jX', 'G0FFCT0yDZ');
            $resultat = mysqli_query($conn, "SELECT id FROM uzytkownicy WHERE name='$name'");
            
            $ile_nazw = mysqli_num_rows($resultat);
            
            //echo $ile_nazw;
            
            if($ile_nazw>0)
            {
				$wszystko_ok=false;
				$_SESSION['brak'] = "Istnieje już konto przypisane do tego adresu e-mail!";
                header('Location: rejestracja.php');
            }
            //MAIL
            $resultat2= mysqli_query($conn, "SELECT id FROM uzytkownicy WHERE email='$email'");
            
            $ile_takich_maili = mysqli_num_rows($resultat2);
            //echo $ile_takich_maili;
            if($ile_takich_maili>0)
            {
				$wszystko_ok=false;
				$_SESSION['brak'] = "Istnieje już konto przypisane do tego adresu e-mail!";
                header('Location: rejestracja.php');
            }
            //DODAWANIE DO BAZY
            if($wszystko_ok == true){
                $zapytanko = "INSERT INTO uzytkownicy (`name`, `pass`, `email`, `Imie`, `Nazwisko`) VALUES ($name', '$haslo_hash', '$email', '$imie', '$nazwisko')";
                
                $result = mysqli_query($conn, $zapytanko);
                
                
                header('Location: index.php');
                
            }if($wszystko_ok == false){
                header('Location: rejestracja.php');
            }
            
           mysqli_close(); 
        }

    }



    

?>