<?php

class ctrSexo{
    static public function ctrMostrarSexo($item, $valor){
        $tabla="sexo";
        $respuesta = mdlTurno::mdlMostrarTurno($tabla, $item, $valor);
        return $respuesta;
    }

    static public function ctrComboSexo(){
        $tabla="sexo";
        $respuesta = mdlSexo::mdlComboSexo($tabla);
        return $respuesta;
    }


}