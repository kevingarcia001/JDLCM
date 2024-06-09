<?php

include_once "conexiondb.php";


class mdlGradoSeccion{

    static public function mdlMostrarGradoSeccion($tabla, $item, $valor){
        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");
        $stmt->bindParam(":".$item, $valor, PDO::PARAM_STMT);
        $stmt->execute();
        return $stmt->fetch();
    }

        // select Grado seccion
        static public function mdlComboGradoseccion($tabla){
            $stmt= Conexion::conectar()->prepare("SELECT * FROM $tabla");
            $stmt -> execute();
            return $stmt -> fetchAll();
        }


}