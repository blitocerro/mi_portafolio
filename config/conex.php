<?php

function conexionBD()
{
    $host = "localhost";
    $dbname = "portafolioPablo";
    $username = "root";
    $password = "";

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        die("No se puede conectar a la base de datos $dbname :" . $e->getMessage());
    }
}
