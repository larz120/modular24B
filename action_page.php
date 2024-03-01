<?php
// Conexion a base de datos
$servername = "localhost"; //Nombre del servidor 
$username = "qwsuvdzd_empresatycon";
$password = "Guadalajara2024";
$database = "qwsuvdzd_empresatycon";

// Crea la conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verifica la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

echo "Conexión exitosa";
?>