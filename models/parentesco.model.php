<?php

include_once "conexiondb.php";


class mdlParentesco{

    // mostrar 
    static public function mdlMostrarParentesco($tabla, $item, $valor){
        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");
        $stmt->bindParam(":".$item, $valor, PDO::PARAM_STMT);
        $stmt->execute();
        return $stmt->fetch();
    }

    // select sexo
    static public function mdlComboParentesco($tabla){
        $stmt= Conexion::conectar()->prepare("SELECT * FROM $tabla");
		$stmt -> execute();
		return $stmt -> fetchAll();
    }
}