<?php

//local
//$host = "localhost";
//$port = "5432";
//$dbname = "desarrolloweb";
//$username = "postgres";
//$password = "1192";

//web
$host = getenv('PGHOST');
$port = getenv('PGPORT');
$dbname = getenv('PGDATABASE');
$user = getenv('PGUSER');
$password = getenv('PGPASSWORD');

$conn = pg_connect("
host=$host
port=$port
dbname=$dbname
user=$username
password=$password
");

if (!$conn) {
    die("Error de conexión con PostgresSQL");
}

?>