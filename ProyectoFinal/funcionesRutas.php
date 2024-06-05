<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "proyectofinal";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$nombre = $_POST['nombre'];
$puntuacion = $_POST['puntuacion'];
$comentario = $_POST['comentario'];

$stmt = $conn->prepare("INSERT INTO comentarios (nombre, puntuacion, comentario) VALUES (?, ?, ?)");
$stmt->bind_param("sis", $nombre, $puntuacion, $comentario);

if ($stmt->execute()) {
    $status = 'success';
    echo "<script>
                    Swal.fire({
                        icon: 'success',
                        title: 'Comentario guardado exitosamente',
                        showConfirmButton: true,
                        timer: 1500
                    });
                  </script>";
} else {
    $status = 'error';
    echo "<script>
    Swal.fire({
        icon: 'error',
        title: 'Error al guardar el comentario',
        text: 'Por favor, inténtalo de nuevo más tarde.',
    });
  </script>";
}

$stmt->close();
$conn->close();

header("Location: index.php");
exit();
?>