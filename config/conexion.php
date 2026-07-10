<?php

$host = getenv("MYSQLHOST") ?: "localhost";
$usuario = getenv("MYSQLUSER") ?: "root";
$password = getenv("MYSQLPASSWORD") ?: "";
$basedatos = getenv("MYSQLDATABASE") ?: "gesca";
$puerto = getenv("MYSQLPORT") ?: 3306;

$conn = new mysqli($host, $usuario, $password, $basedatos, $puerto);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

$conn->set_charset("utf8");