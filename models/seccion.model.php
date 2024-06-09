<?php
include_once "conexiondb.php";


class mdlSecciones{

    static public function mdlMostrarSecciones($tabla, $item, $valor){
        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");
        $stmt->bindParam(":".$item, $valor, PDO::PARAM_STMT);
        $stmt->execute();
        return $stmt->fetch();
    }

    // select Combo
    static public function mdlComboSecciones($tabla){
        $stmt= Conexion::conectar()->prepare("SELECT * FROM $tabla");
		$stmt -> execute();
		return $stmt -> fetchAll();
    }
}




?>
