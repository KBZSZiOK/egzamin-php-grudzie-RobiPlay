<?php
if (isset($_POST["data"]) && isset($_POST["osob"]) && isset($_POST["numer"])){

    $dara = $_POST['data'];
    $ludzie = $_POST['ludzie'];
    $tel = $_POST['tel'];
    $server = 'localhost';
    $user = 'root';
    $password = "";
    $database = 'baza';
    $connect = mysqli_connect($server,$user,$password,$database);
    $zapytanie = "INSERT INTO rezerwacje VALUES (DEFAULT,1, ".$_POST["data"].",".$_POST["osob"].",".$_POST["numer"].");"

    echo "Dodano rezerwację do bazy";
    $mysqli = new mysqli("localhost", "root", , "baza");

    $query = "INSERT INTO rezerwacje VALUES (DEFAULT,1, ".$_POST["data"].",".$_POST["osob"].",".$_POST["numer"].");"
    $mysqli -> query($query);
    $mysqli ->close(); 
}
else
{
    
}
?>