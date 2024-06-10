<?php

include_once "conexiondb.php";


class mdlAnioAcademico{

    static public function mdlMostrarAnioAcademico($tabla, $item, $valor){
        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");
        $stmt->bindParam(":".$item, $valor, PDO::PARAM_STMT);
        $stmt->execute();
        return $stmt->fetch();
    }

     // select Turno
     static public function mdlComboAnioAcademico($tabla){
        $stmt= Conexion::conectar()->prepare("SELECT * FROM $tabla");
		$stmt -> execute();
		return $stmt -> fetchAll();
    }
}