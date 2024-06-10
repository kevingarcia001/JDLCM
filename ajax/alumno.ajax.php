<?php
require_once "../controllers/alumno.controllers.php";
require_once "../models/alumnos.models.php";

class AjaxAlumno {
    public $idAlumno;
    
    public function ajaxEditarAlumno() {
        $item = "idAlumno";
        $valor = $this->idAlumno;
        $respuesta = ctrAlumno::ctrMostrarAlumno($item, $valor);
        echo json_encode($respuesta);
    }
    
    public $idEliminar;
     public function AjaxEliminarAlumno(){
        $respuesta = ctrAlumno::ctrEliminarAlumno($this->idEliminar);
        echo $respuesta;
    }
}

if (isset($_POST["idAlumno"])) {
    $editar = new AjaxAlumno();
    $editar->idAlumno = $_POST["idAlumno"];
    $editar->ajaxEditarAlumno();
}

if (isset($_POST["idAlumnoE"])) {
    $elminar = new AjaxAlumno();
    $elminar->idEliminar = $_POST["idAlumnoE"];
    $elminar->AjaxEliminarAlumno();
}
?>
