<?php
// Datos de conexion
$servername = "sql108.infinityfree.com";
$username = "if0_37620344";
$password = "D2a0v0i4d";
$dbname = "if0_37620344_XXX";

// Crear conexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexion
if ($conn->connect_error) {
    die("Conexion fallida: " . $conn->connect_error);   

} else {
    echo "Conexion exitosa";   

}
?>