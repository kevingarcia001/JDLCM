<?php
include_once "conexiondb.php";

class mdlNotas{

    // listar Asignaturas
    static public function mdlListarNotas($tabla){
        $stmt= Conexion::conectar()->prepare("SELECT * FROM $tabla");
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt=null;
   }


   static public function mdlCrearNotas($tabla, $datos){
    try {
        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (Nota, Asignatura_idAsignatura, Matricula_idMatricula) VALUES (:Nota, :Asignatura_idAsignaturan :Matricula_idMatricula)");

        $stmt->bindParam(":Nota",  $datos["Nota"], PDO::PARAM_INT);
        $stmt->bindParam(":Asignatura_idAsignatura", $datos["Asignatura_idAsignatura"], PDO::PARAM_INT);
        $stmt->bindParam(":Matricula_idMatricula", $datos["Matricula_idMatricula"], PDO::PARAM_INT);

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