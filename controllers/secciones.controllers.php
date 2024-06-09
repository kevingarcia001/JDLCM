<?php

class ctrSeccion{
    static public function ctrMostrarSeccion($item, $valor){
        $tabla="seccion";
        $respuesta = mdlSecciones::mdlMostrarSecciones($tabla, $item, $valor);
        return $respuesta;
    }

    static public function ctrComboSecciones(){
        $tabla="seccion";
        $respuesta = mdlSecciones::mdlComboSecciones($tabla);
        return $respuesta;
    }


}