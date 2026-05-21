<?php

include('../conexion/conexion.php');

//Registrar un nuevo ganador
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $pokemon_id = $_POST['pokemon'];

    $query = "INSERT INTO ganadores
    (nombre, pokemon)
    VALUES
    ($1, $2)";  

    $resultado = pg_query_params(
        $conn,
        $query,
        array($nombre, $pokemon_id)
    );  

    if ($resultado) {
        echo "Ganador registrado exitosamente.";
    } else {
        echo "Error al registrar el ganador: " . pg_last_error($conn);
    }
} else {
    echo "Acceso invalido";
}