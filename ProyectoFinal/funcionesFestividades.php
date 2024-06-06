<?php
// funciones para el funcionamiento del calendario
$mes = intval($_GET['mes']); 
$anio = intval($_GET['anio']);

$conexion = new mysqli('localhost', 'root', '', 'proyectofinal');

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$sql = "SELECT * FROM eventos WHERE MONTH(fecha) = ? AND YEAR(fecha) = ?";
$consulta = $conexion->prepare($sql);
$consulta->bind_param("ii", $mes, $anio); 

$consulta->execute();
$resultado = $consulta->get_result();

$numeroDias = cal_days_in_month(CAL_GREGORIAN, $mes, $anio);
$primerDia = date('N', mktime(0, 0, 0, $mes, 1, $anio));

$calendarioHTML = '<table>';
$calendarioHTML .= '<tr><th>Lun</th><th>Mar</th><th>Mie</th><th>Jue</th><th>Vie</th><th>Sab</th><th>Dom</th></tr>';

$contador = 0;
$calendarioHTML .= '<tr>';

for ($i = 1; $i < $primerDia; $i++) {
    $calendarioHTML .= '<td></td>';
    $contador++;
}

for ($dia = 1; $dia <= $numeroDias; $dia++) {
    if ($contador % 7 == 0) {
        $calendarioHTML .= '</tr><tr>';
    }
    $calendarioHTML .= '<td>' . $dia;

    while ($fila = $resultado->fetch_assoc()) {
        $fechaEvento = date('j', strtotime($fila['fecha']));
        if ($fechaEvento == $dia) {
            $calendarioHTML .= '<br>' . $fila['titulo'];
        }
    }
    
    $calendarioHTML .= '</td>';
    $contador++;
}

while ($contador % 7 != 0) {
    $calendarioHTML .= '<td></td>';
    $contador++;
}

$calendarioHTML .= '</tr>';
$calendarioHTML .= '</table>';

echo $calendarioHTML;

// Cerrar conexión y liberar recursos
$consulta->close();
$conexion->close();

?>