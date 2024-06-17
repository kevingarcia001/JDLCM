<?php 
require_once "../controllers/matricula.controller.php";
require_once "../models/matricula.model.php";

class AjaxMatricula {
    public $idEliminar;

    public function AjaxEliminarMatricula() {
        $respuesta = ctrMatricula::ctrEliminarMatricula($this->idEliminar);
        echo $respuesta;
    }
}

if (isset($_POST["idMatriculaE"])) {
    $eliminar = new AjaxMatricula();
    $eliminar->idEliminar = $_POST["idMatriculaE"];
    $eliminar->AjaxEliminarMatricula();
}


?>