<?php
require_once 'controllers/ctrAlumno.php'; // Asegúrate de que el nombre del archivo sea correcto

$idAlumno = isset($_GET['idAlumno']) ? $_GET['idAlumno'] : null;

if ($idAlumno) {
    try {
        // Generar el reporte del alumno
        ctrAlumno::generarReporteAlumno($idAlumno);

        // Enviar una respuesta JSON opcional si es necesario
        echo json_encode(['success' => true]);
        exit;
    } catch (Exception $e) {
        // Manejar errores si es necesario
        echo json_encode(['error' => 'Error al generar PDF: ' . $e->getMessage()]);
        exit;
    }
} else {
    // Manejar caso en el que no se reciba el ID del alumno
    echo json_encode(['error' => 'ID de alumno no especificado']);
    exit;
}
?>
