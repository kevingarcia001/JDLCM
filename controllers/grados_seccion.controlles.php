<?php

class ctrGradosSecciones{
    
    static public function ctrMostrarGSecciones($item, $valor){
        $tabla="gradoseccion";
        $respuesta = mdlGradoSeccion::mdlMostrarGradoSeccion($tabla, $item, $valor);
        return $respuesta;
    }

    static public function ctrComboGseccion(){
        $tabla="gradoseccion";
        $respuesta = mdlGradoSeccion::mdlComboGradoseccion($tabla);
        return $respuesta;
    }



}