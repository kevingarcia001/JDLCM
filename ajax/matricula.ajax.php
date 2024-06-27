<?php 
require_once "../controllers/matricula.controller.php";
require_once "../models/matricula.model.php";

class AjaxMatricula {
    public $idEliminar;

    public $idMatricula;
    
    public function ajaxEditarMatricula() {
        $idMatricula = $this->idMatricula;
        $respuesta = ctrMatricula::ctrObtenerMatricula($idMatricula);
        echo json_encode($respuesta);
    }

    public function AjaxEliminarMatricula() {
        $respuesta = ctrMatricula::ctrEliminarMatricula($this->idEliminar);
        echo $respuesta;
    }
}

if (isset($_POST['idMatricula'])) {
    $editarMatricula = new AjaxMatricula();
    $editarMatricula->idMatricula = $_POST['idMatricula'];
    $editarMatricula->ajaxEditarMatricula();
}

if (isset($_POST["idMatriculaE"])) {
    $eliminar = new AjaxMatricula();
    $eliminar->idEliminar = $_POST["idMatriculaE"];
    $eliminar->AjaxEliminarMatricula();
}


?>