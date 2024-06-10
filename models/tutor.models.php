<?php

include_once "conexiondb.php";


class mdlTutor{

    static public function mdlMostrarTutor($tabla, $item, $valor){
        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");
        $stmt->bindParam(":".$item, $valor, PDO::PARAM_STMT);
        $stmt->execute();
        return $stmt->fetch();
    }

    // select tutor
    static public function mdlComboTutor($tabla){
        $stmt= Conexion::conectar()->prepare("SELECT * FROM $tabla");
		$stmt -> execute();
		return $stmt -> fetchAll();
    }

    public static function mdlCrarTutor($tabla, $datos) {
        try {
            $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (PNombre, SNombre, PApellido, SApellido, Direccion, Telefono, Cedula, Sexo_idSexo, Parentesco_idParentesco) VALUES (:PNombre, :SNombre, :PApellido, :SApellido, :Direccion, :Telefono, :Cedula, :Sexo_idSexo, :Parentesco_idParentesco)");
    
            $stmt->bindParam(":PNombre", $datos["PNombre"], PDO::PARAM_STR);
            $stmt->bindParam(":SNombre", $datos["SNombre"], PDO::PARAM_STR);
            $stmt->bindParam(":PApellido", $datos["PApellido"], PDO::PARAM_STR);
            $stmt->bindParam(":SApellido", $datos["SApellido"], PDO::PARAM_STR);
            $stmt->bindParam(":Direccion", $datos["Direccion"], PDO::PARAM_STR);
            $stmt->bindParam(":Telefono", $datos["Telefono"], PDO::PARAM_STR);
            $stmt->bindParam(":Cedula", $datos["Cedula"], PDO::PARAM_STR);
            $stmt->bindParam(":Sexo_idSexo", $datos["Sexo_idSexo"], PDO::PARAM_INT);
            $stmt->bindParam(":Parentesco_idParentesco", $datos["Parentesco_idParentesco"], PDO::PARAM_INT);
    
            if($stmt->execute()){
                return "ok";
            } else {
                return "error";
            }
        } catch(PDOException $e) {
            return "error: " . $e->getMessage();
        } finally {
            $stmt->closeCursor();
            $stmt = null;
        }
    }
}