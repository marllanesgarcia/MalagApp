<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proyectofinal";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$sql = "SELECT id, pregunta, opcion1, opcion2, opcion3, respuesta FROM juego ORDER BY RAND() LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo json_encode($row);
} else {
    echo json_encode(array("error" => "No se encontraron preguntas"));
}

$conn->close();
?>
