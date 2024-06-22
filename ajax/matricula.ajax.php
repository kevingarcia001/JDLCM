<?php 
require_once "../controllers/matricula.controller.php";
require_once "../models/matricula.model.php";

class AjaxMatricula {
    public $idEliminar;

    public $idMatricula;
    
    public function ajaxEditarMatricula() {
        $item = "matricula";
        $valor = $this->idMatricula;
        $respuesta = ctrMatricula::ctrMostrarMatricula($valor, $item);
        echo json_encode($respuesta);
    }

    public function AjaxEliminarMatricula() {
        $respuesta = ctrMatricula::ctrEliminarMatricula($this->idEliminar);
        echo $respuesta;
    }
}

if (isset($_POST["idMatricula"])) {
    $editar = new AjaxMatricula();
    $editar->idMatricula = $_POST["idMatricula"];
    $editar->ajaxEditarMatricula();
}

if (isset($_POST["idMatriculaE"])) {
    $eliminar = new AjaxMatricula();
    $eliminar->idEliminar = $_POST["idMatriculaE"];
    $eliminar->AjaxEliminarMatricula();
}


?>