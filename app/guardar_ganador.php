<?php

include('../conexion/conexion.php');

if($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nombre = $_POST['nombre'] ?? '';
    $pokemon = $_POST['pokemon'] ?? '';

    if(empty($nombre) || empty($pokemon)){
        die("Datos incompletos");
    }

    if(!$conn){
        die("Conexion fallida");
    }

    $query = "INSERT INTO ganadores
    (nombre, pokemon)
    VALUES
    ($1, $2)";

    $resultado = pg_query_params(
        $conn,
        $query,
        array($nombre, $pokemon)
    );

    if ($resultado) {
        echo "Ganador registrado exitosamente.";
    } else {
        echo "Error SQL: " . pg_last_error($conn);
    }

} else {
    echo "Acceso invalido";
}
?>