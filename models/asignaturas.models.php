<?php
include_once "conexiondb.php";

class mdlAsiganturas{

    // listar Asignaturas
    static public function mdlListaAsiganturas($tabla){
        $stmt= Conexion::conectar()->prepare("SELECT * FROM $tabla");
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt=null;
   }


   static public function mdlCrearAsignaturas($tabla, $datos){
    try {
        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (Asignatura) VALUES (:Asignatura)");

        $stmt->bindParam(":Asignatura", $datos["Asignatura"], PDO::PARAM_STR);

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




?>