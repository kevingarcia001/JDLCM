<?php
// Incluir los archivos necesarios y configurar la conexión a la base de datos
require_once '../models/conexiondb.php';
require_once "../models/matricula.model.php";

// Obtener el ID de grado y sección seleccionado desde la solicitud AJAX
$idGradoSeccion = $_POST['idGradoSeccion'];

// Obtener la matrícula filtrada por el grado y sección seleccionados
$matricula = mdlMatricula::MatriculaPorGradoSeccion($idGradoSeccion); // Suponiendo que tienes un método en tu modelo para obtener la matrícula por grado y sección

// Construir la tabla de resultados HTML
foreach ($matricula as $m) {  
    echo "<tr>";
    echo "<td>" . $m['idMatricula'] . "</td>"; // ID de la matrícula
    echo "<td>" . $m['Alumnos_idAlumno'] . "</td>"; // Nombre del alumno
    echo "<td>" . $m['GradoSeccion_idGradoSeccion'] . "</td>"; // Grado y Sección
    echo "<td>" . $m['Anio_Academico_idAnio_Academico'] . "</td>"; // Grado y Sección
    echo "<td>" . $m['Turno_idTurno'] . "</td>"; // Fecha de matrícula
    echo "<td>" . $m['Fecha'] . "</td>"; // Fecha de matrícula
    // Agrega más columnas según sea necesario
    echo "</tr>";
}
?>
