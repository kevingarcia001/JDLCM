<?php
// Incluir los archivos necesarios y configurar la conexión a la base de datos
require_once './controllers/alumno.controllers.php'; // Ajusta la ruta según la estructura de tu proyecto

// Obtener el ID del alumno desde la URL
$alumnoId = 3;

if ($alumnoId) {
    // Obtener los detalles del alumno
    $alumno = ctrAlumno::ctrMostrarAlumnoPorId($alumnoId); 
}
?>

<!-- About Me Box -->
<div class="content-wrapper d-flex justify-content-center mt-5">
    <div class="card card-primary" style="width: 80%;">
        <div class="card-header">
            <h3 class="card-title">Informacion del Tutor</h3>
        </div>
    
        <div class="card-body">
        <?php if (isset($alumno) && $alumno): ?>
    <strong><i class="fas fa-user mr-1"></i> Alumno</strong>
    <p class="text-muted"><?php echo $alumno['PNombre']. ' '. $alumno['SNombre']. ' '. $alumno['PApellido']. ' '. $alumno['SApellido']; ?></p>
    <hr>

    <!-- Agregar icono de sexo -->
    <strong><i class="fas fa-venus-mars mr-1"></i> Sexo</strong>
    <p class="text-muted"><?php echo $alumno['Sexo_idSexo']; ?></p>
    <hr>

    <strong><i class="fas fa-venus-mars mr-1"></i> Sexo</strong>
    <p class="text-muted"><?php echo $alumno['Parentesco_idParentesco']; ?></p>
    <hr>

    <strong><i class="fas fa-map-marker-alt mr-1"></i> Dirección</strong>
    <p class="text-muted"><?php echo $alumno['Direccion']; ?></p>
    <hr>

    <strong><i class="fas fa-pencil-alt mr-1"></i> Nuemero de Cedula</strong>
    <p class="text-muted"><?php echo $alumno['Numero de Cedula']; ?></p>
    <hr>

    <strong><i class="fas fa-phone-alt mr-1"></i> Teléfono</strong>
    <p class="text-muted"><?php echo $alumno['Telefono']; ?></p>
    <hr>
<?php else: ?>
    <p class="text-muted">No se encontró información para el alumno seleccionado.</p>
<?php endif; ?>
        </div>
    </div>
</div>
