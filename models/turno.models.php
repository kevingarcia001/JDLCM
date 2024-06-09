<?php

include_once "conexiondb.php";


class mdlTurno{

    static public function mdlMostrarTurno($tabla, $item, $valor){
        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");
        $stmt->bindParam(":".$item, $valor, PDO::PARAM_STMT);
        $stmt->execute();
        return $stmt->fetch();
    }

     // select Turno
     static public function mdlComboTurno($tabla){
        $stmt= Conexion::conectar()->prepare("SELECT * FROM $tabla");
		$stmt -> execute();
		return $stmt -> fetchAll();
    }
}