<?php
// Establecer la conexión con la base de datos
$host = "66.225.201.137";
$port = "3306";
$database = "qwsuvdzd_empresatycon";
$username = "qwsuvdzd_empresatycon";
$password = "Guadalajara2024";

$conn = new mysqli($host, $username, $password, $database, $port);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Recuperar datos del formulario
$username = $_POST['email'];
$password = $_POST['password'];

// Realizar la consulta SQL para la autenticación (ajusta la consulta según tu esquema de base de datos)
$query = "SELECT * FROM Usuarios WHERE Correo='$email' AND Password='$password'";
$result = $conn->query($query);

// Verificar si la consulta devolvió filas (usuario autenticado)
if ($result->num_rows > 0) {
    echo "¡Inicio de sesión exitoso!";
} else {
    echo "Inicio de sesión fallido. Verifica tus credenciales.";
}

// Cerrar la conexión
$conn->close();
?>