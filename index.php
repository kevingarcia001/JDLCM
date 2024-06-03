<?php
include_once './controllers/dahsboard.php';
// usuarios
include_once './controllers/usuarios.controllers.php';
include_once './models/usuarios.model.php';
// mstricula
include_once './controllers/matricula.controller.php';
include_once './models/matricula.model.php';
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


$plantilla = new controllerDashboard();
$plantilla->Dashboard();

?>