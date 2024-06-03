<?php

class ctrTutor{
    static public function ctrMostrarTutor($item, $valor){
        $tabla="tutor";
        $respuesta = mdlTutor::mdlMostrarTutor($tabla, $item, $valor);
        return $respuesta;
    }

    static public function ctrComboTutor(){
        $tabla="tutor";
        $respuesta = mdlTutor::mdlComboTutor($tabla);
        return $respuesta;
    }


}