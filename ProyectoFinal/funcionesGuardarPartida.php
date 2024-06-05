<?php
session_start();

$data = json_decode(file_get_contents('php://input'), true);

if (!isset($data['aciertos']) || !isset($data['fallos'])) {
    http_response_code(400);
    echo json_encode(['error' => 'Datos de puntuación inválidos']);
    exit;
}

$aciertos = intval($data['aciertos']);
$fallos = intval($data['fallos']);
$usuario = isset($_SESSION['usuario']) ? $_SESSION['usuario'] : 'Boquerón';

$mysqli = new mysqli('localhost', 'root', '', 'proyectofinal');

if ($mysqli->connect_error) {
    http_response_code(500);
    echo json_encode(['error' => 'Error de conexión a la base de datos']);
    exit;
}

$usuario_id = null;
if ($usuario !== 'Boquerón') {
    $query = $mysqli->prepare('SELECT id FROM usuarios WHERE usuario = ?');
    $query->bind_param('s', $usuario);
    $query->execute();
    $query->bind_result($usuario_id);
    $query->fetch();
    $query->close();
}

$query = $mysqli->prepare('INSERT INTO puntuacion (usuario_id, usuario, fecha_juego, aciertos, fallos) VALUES (?, ?, NOW(), ?, ?)');
$query->bind_param('isiii', $usuario_id, $usuario, $aciertos, $fallos);
if ($query->execute()) {
    echo json_encode(['success' => 'Puntuación registrada']);
} else {
    http_response_code(500);
    echo json_encode(['error' => 'Error al registrar la puntuación']);
}
$query->close();

$mysqli->close();
?>
