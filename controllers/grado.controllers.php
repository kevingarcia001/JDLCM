<?php

class ctrGrado{
    static public function ctrMostrarGrados($item, $valor){
        $tabla="grado";
        $respuesta = mdlGrado::mdlMostrarGrados($tabla, $item, $valor);
        return $respuesta;
    }

    static public function ctrComboGrados(){
        $tabla="grado";
        $respuesta = mdlGrado::mdlComboGrados($tabla);
        return $respuesta;
    }


}