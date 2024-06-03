<?php

require_once "conexiondb.php";

class mdlMatricula{


    static public function mdlMostrarMatricula($tabla){
        $stmt= Conexion::conectar()->prepare("SELECT * FROM $tabla");
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt=null;
    }
}