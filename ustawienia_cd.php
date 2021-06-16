<?php

    session_start();

    $imie = $_POST['Imie'];
    $nazwisko = $_POST['Nazwisko'];
    $City = $_POST['City'];
    $Wiek = $_POST['Wiek'];
    $nazwisko_pub = $_POST['nazwisko_pub'];
    $city_pub = $_POST['city_pub'];
    $wiek_pub = $_POST['wiek_pub'];

    $conn = mysqli_connect('remotemysql.com', 'G0FFCT0yDZ','1pZL8eA4jX', 'G0FFCT0yDZ');
    $query1 = "UPDATE uzytkownicy SET Imie = '".$imie."', Nazwisko = '".$nazwisko."', City = '".$City."', Wiek = '".$Wiek."', nazwisko_pub  = '".$nazwisko_pub."', city_pub  = '".$city_pub."', wiek_pub  = '".$wiek_pub."' WHERE uzytkownicy.id = '".$_SESSION['id']."'";
    $resul1 = mysqli_query($conn, $query1);

    header('Location: ustawienia.php');
?>