<?php

class ctrTurno{
    static public function ctrMostrarTurnos($item, $valor){
        $tabla="turno";
        $respuesta = mdlTurno::mdlMostrarTurno($tabla, $item, $valor);
        return $respuesta;
    }

    static public function ctrComboTurno(){
        $tabla="turno";
        $respuesta = mdlTurno::mdlComboTurno($tabla);
        return $respuesta;
    }


}