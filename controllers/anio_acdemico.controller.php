<?php

class ctrAnioAcademico{
    static public function ctrMostrarAnioAcademico($item, $valor){
        $tabla="anio_academico";
        $respuesta = mdlAnioAcademico::mdlMostrarAnioAcademico($tabla, $item, $valor);
        return $respuesta;
    }

    static public function ctrComboAnioAcademico(){
        $tabla="anio_academico";
        $respuesta = mdlAnioAcademico::mdlComboAnioAcademico($tabla);
        return $respuesta;
    }


}