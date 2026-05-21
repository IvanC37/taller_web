<?php

include('../conexion/conexion.php');

//Registrar un nuevo usuario
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $pokemon_id = $_POST['pokemon_id'];
    $nombre = $_POST['nombre'];
    $tipo = $_POST['tipo'];

    $query = "INSERT INTO pokemones
    (pokemon_id, nombre, tipo)
    VALUES
    ($1, $2, $3)";

    $resultado = pg_query_params(
        $conn,
        $query,
        array($pokemon_id, $nombre, $tipo)
    );

    if ($resultado) {
        echo "Pokemon registrado exitosamente.";
    } else {
        echo "Error al registrar el pokemon: " . pg_last_error($conn);
    }

} else {
    echo "Acceso invalido";
}
?>
