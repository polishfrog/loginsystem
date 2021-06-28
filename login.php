<?php 


session_start();

$conn = mysqli_connect('remotemysql.com', 'G0FFCT0yDZ','1pZL8eA4jX', 'G0FFCT0yDZ');

$query1 = "SELECT uzytkownicy.name, uzytkownicy.pass, uzytkownicy.id FROM uzytkownicy";


$resul1 = mysqli_query($conn, $query1);


while($row = mysqli_fetch_row($resul1)){
    $password = $row[1];
    $user = $row[0];
    $id = $row[2];
    if(!empty($_POST['login']) && !empty($_POST['password'])){
        if($_POST['login'] == $user){
            unset($_SESSION['blad']);
            if(password_verify($_POST['password'], $password)){
                $_SESSION['user'] = htmlspecialchars($user);
                $_SESSION['id'] = $id;
                
            
                header('Location: pulpit.php');
                
            }else{
                $_SESSION['blad'] = ("Błędne hasło");
                header('Location: index.php');
            }
        }else{
            $_SESSION['blad'] = ("Błędny login");
            header('Location: index.php');
        }
    }
}




mysqli_close();



?>