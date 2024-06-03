<?php

class ctrMatricula{


    static public function ctrMostrarMatricula(){
        $tabla="matricula";
        $respuesta=mdlMatricula::mdlMostrarMatricula($tabla);
        return $respuesta;
        
    }
}