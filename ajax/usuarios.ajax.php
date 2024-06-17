<?php
require_once "../controllers/usuarios.controllers.php";
require_once "../models/usuarios.model.php";

class AjaxUsuario {
    public $idUsuario;
    
    public function ajaxEditarUsuario() {
        $item = "idUsuario";
        $valor = $this->idUsuario;
        $respuesta = ctrUsuarios::ctrMostrarUsuarios($item, $valor);
        echo json_encode($respuesta);
    }
    
    public $idEliminar;
    public function AjaxEliminarUsuario(){
        $respuesta = ctrUsuarios::ctrEliminarUsuario($this->idEliminar);
        echo $respuesta;
    }
}

if (isset($_POST["idUsuario"])) {
    $editar = new AjaxUsuario();
    $editar->idUsuario = $_POST["idUsuario"];
    $editar->ajaxEditarUsuario();
}

if (isset($_POST["idUsuarioE"])) {
    $elminar = new AjaxUsuario();
    $elminar->idEliminar = $_POST["idUsuarioE"];
    $elminar->AjaxEliminarUsuario();
}
?>
