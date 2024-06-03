<?php

class ctrRoles{

    static public function ctrMostrarRoles($items, $valor){
        $tabla="rol";
        $respuesta = ModelosRoles::mdlMostrarRoles($tabla, $items, $valor);
        return $respuesta;
    }

    static public function ctrComboRol(){
        $tabla="rol";
        $respuesta = ModelosRoles::mdlComboRol($tabla);
        return $respuesta;
    }
}

?>