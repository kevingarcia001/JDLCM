<?php

class ctrPerentesco{
    static public function ctrMostrarParentesco($item, $valor){
        $tabla="parentesco";
        $respuesta = mdlParentesco::mdlMostrarParentesco($tabla, $item, $valor);
        return $respuesta;
    }

    static public function ctrComboParentesco(){
        $tabla="parentesco";
        $respuesta = mdlParentesco::mdlComboParentesco($tabla);
        return $respuesta;
    }


}