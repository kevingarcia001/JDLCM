<?php
include_once './controllers/dahsboard.php';
// usuarios
// mstricula
include_once './controllers/matricula.controller.php';
include_once './models/matricula.model.php';
include_once './controllers/usuarios.controllers.php';
include_once './models/usuarios.model.php';
// año academico
include_once './controllers/anio_acdemico.controller.php';
include_once './models/anio_acdemico.model.php';
// alumno
include_once './controllers/alumno.controllers.php';
include_once './models/alumnos.models.php';
// turnos
include_once './controllers/turno.controlles.php';
include_once './models/turno.models.php';
// tututor
include_once './controllers/tutor.controlles.php';
include_once './models/tutor.models.php';
// roles
include_once './controllers/roles.controlador.php';
include_once './models/roles.model.php';
// sexo
include_once './controllers/sexo.controllers.php';
include_once './models/sexo.model.php';
// grado
include_once './controllers/grado.controllers.php';
include_once './models/grado.model.php';
// grado seccion
include_once './controllers/grados_seccion.controlles.php';
include_once './models/grados_seccion.models.php';
// grado seccion
include_once './controllers/secciones.controllers.php';
include_once './models/seccion.model.php';
// grado parentesco
include_once './controllers/parentesco.controllers.php';
include_once './models/parentesco.model.php';
// permisos 
include_once './controllers/permisos.controllers.php';

// Asignaturas
include_once './controllers/asignaturas.controllers.php';
include_once './models/asignaturas.models.php';

include_once './controllers/notas.controllers.php';
include_once './models/notas.models.php';

$plantilla = new controllerDashboard();
$plantilla->Dashboard();

?>