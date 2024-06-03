<?php

include_once "conexiondb.php";


class mdlAlumnos{

    // listar alumno
    static public function mdlListarAlumnos($tabla){
        $stmt= Conexion::conectar()->prepare("SELECT * FROM $tabla");
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt=null;
   }

    //llamada de otra tabla.
    static public function mdlMostrarAlumno($tabla, $item, $valor){
        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");
        $stmt->bindParam(":".$item, $valor, PDO::PARAM_STMT);
        $stmt->execute();
        return $stmt->fetch();
    }

    // Crear
    static public function mdlCrearAlumno($tabla, $datos){
        try {
            $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (PNombre, SNombre, PApellido, SApellido, Direccion, Telefono, Fecha_Nacimiento, Sexo_idSexo, Tutor_idTutor) VALUES (:PNombre, :SNombre, :PApellido, :SApellido, :Direccion, :Telefono, :Fecha_Nacimiento, :Sexo_idSexo, :Tutor_idTutor)");
    
            $stmt->bindParam(":PNombre", $datos["PNombre"], PDO::PARAM_STR);
            $stmt->bindParam(":SNombre", $datos["SNombre"], PDO::PARAM_STR);
            $stmt->bindParam(":PApellido", $datos["PApellido"], PDO::PARAM_STR);
            $stmt->bindParam(":SApellido", $datos["SApellido"], PDO::PARAM_STR);
            $stmt->bindParam(":Direccion", $datos["Direccion"], PDO::PARAM_STR);
            $stmt->bindParam(":Telefono", $datos["Telefono"], PDO::PARAM_STR);
            $stmt->bindParam(":Fecha_Nacimiento", $datos["Fecha_Nacimiento"], PDO::PARAM_STR);
            $stmt->bindParam(":Sexo_idSexo", $datos["Sexo_idSexo"], PDO::PARAM_INT);
            $stmt->bindParam(":Tutor_idTutor", $datos["Tutor_idTutor"], PDO::PARAM_INT);
    
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

    // Editar
    static public function mdlEditarAlumno($tabla, $datos) {
        try {
            $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET PNombre=:PNombre, SNombre=:SNombre, PApellido=:PApellido, SApellido=:SApellido, Direccion=:Direccion, Telefono=:Telefono, Fecha_Nacimiento=:Fecha_Nacimiento, Sexo_idSexo=:Sexo_idSexo, Tutor_idTutor=:Tutor_idTutor WHERE idAlumno=:idAlumno");

            $stmt->bindParam(":idAlumn
            o", $datos["idAlumno"], PDO::PARAM_INT);
            $stmt->bindParam(":PNombre", $datos["PNombre"], PDO::PARAM_STR);
            $stmt->bindParam(":SNombre", $datos["SNombre"], PDO::PARAM_STR);
            $stmt->bindParam(":PApellido", $datos["PApellido"], PDO::PARAM_STR);
            $stmt->bindParam(":SApellido", $datos["SApellido"], PDO::PARAM_STR);
            $stmt->bindParam(":Direccion", $datos["Direccion"], PDO::PARAM_STR);
            $stmt->bindParam(":Telefono", $datos["Telefono"], PDO::PARAM_STR);
            $stmt->bindParam(":Fecha_Nacimiento", $datos["Fecha_Nacimiento"], PDO::PARAM_STR);
            $stmt->bindParam(":Sexo_idSexo", $datos["Sexo_idSexo"], PDO::PARAM_INT);
            $stmt->bindParam(":Tutor_idTutor", $datos["Tutor_idTutor"], PDO::PARAM_INT);

            if ($stmt->execute()) {
                return "ok";
            } else {
                return "error";
            }
        } catch (PDOException $e) {
            return "error: " . $e->getMessage();
        } finally {
            $stmt->closeCursor();
            $stmt = null;
        }
    }

    // Eliminar
    static public function mdlEliminarAlumno($tabla, $id) {
        try {
            $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE idAlumno =:idAlumno");
            $stmt->bindParam(":idAlumno", $id, PDO::PARAM_INT);
            if ($stmt->execute()) {
                return "ok";
            } else {
                return "error";
            }
        } catch (PDOException $e) {
            return "error: " . $e->getMessage();
        } finally {
            $stmt = null;
        }
    }
    
    
}