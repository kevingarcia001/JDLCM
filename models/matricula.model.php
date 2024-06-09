<?php

require_once "conexiondb.php";

class mdlMatricula{

    // listar matricula
    static public function mdlMostrarMatricula($tabla){
        $stmt= Conexion::conectar()->prepare("SELECT * FROM $tabla");
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt=null;
    }

    // Mfiltro
    public static function MatriculaPorGradoSeccion($idGradoSeccion)
    {
        // Realizar la consulta a la base de datos para obtener la matrícula filtrada
        $consulta = "SELECT * FROM matricula WHERE GradoSeccion_idGradoSeccion = :idGradoSeccion";

        // Preparar y ejecutar la consulta utilizando PDO u otro método de acceso a la base de datos
        $stmt = Conexion::conectar()->prepare($consulta);
        $stmt->bindParam(":idGradoSeccion", $idGradoSeccion, PDO::PARAM_INT);
        $stmt->execute();

        // Obtener los resultados de la consulta
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}