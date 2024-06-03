<?php

class ctrAnioAcademico{
    static public function ctrMostrarAnioAcademico($item, $valor){
        $tabla="anio_academico";
        $respuesta = mdlAnicoAcademico::mdlMostrarAnioAcademico($tabla, $item, $valor);
        return $respuesta;
    }


}