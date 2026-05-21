<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

include('../conexion/conexion.php');

if($conn){
    echo "Conexion exitosa";
} else {
    echo "Conexion fallida";
}

?>