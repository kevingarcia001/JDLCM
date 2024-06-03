<?php

class ctrSeccion{
    static public function ctrMostrarSecciones($item, $valor){
        $tabla="turno";
        $respuesta = mdlSeccion::mdlMostrarSeccion($tabla, $item, $valor);
        return $respuesta;
    }


}