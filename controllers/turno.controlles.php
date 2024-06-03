<?php

class ctrTurno{
    static public function ctrMostrarTurnos($item, $valor){
        $tabla="turno";
        $respuesta = mdlTurno::mdlMostrarTurno($tabla, $item, $valor);
        return $respuesta;
    }


}