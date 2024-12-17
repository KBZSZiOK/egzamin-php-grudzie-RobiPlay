<?php
if (isset($_POST["data"]) && isset($_POST["osob"]) && isset($_POST["numer"])){
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