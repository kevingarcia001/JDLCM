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

    // CrearAlumno
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

            $stmt->bindParam(":idAlumno", $datos["idAlumno"], PDO::PARAM_INT);
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


    public static function mdlMostrarAlumnoPorId($id) {
        $stmt = Conexion::conectar()->prepare("SELECT * FROM alumnos WHERE idAlumno = :id");
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch();
    }

    public static function guardarAlumno($data) {
        // Inserta en la tabla alumno y devuelve el ID generado
        // Ejemplo:
        $stmt = Conexion::conectar()->prepare("INSERT INTO alumno (pnombre, snombre, papellido, sapellido, fecha, direccion, telefono, sexo) VALUES (:pnombre, :snombre, :papellido, :sapellido, :fecha, :direccion, :telefono, :sexo)");
        $stmt->bindParam(":pnombre", $data['pnombre'], PDO::PARAM_STR);
        $stmt->bindParam(":snombre", $data['snombre'], PDO::PARAM_STR);
        $stmt->bindParam(":papellido", $data['papellido'], PDO::PARAM_STR);
        $stmt->bindParam(":sapellido", $data['sapellido'], PDO::PARAM_STR);
        $stmt->bindParam(":fecha", $data['fecha'], PDO::PARAM_STR);
        $stmt->bindParam(":direccion", $data['direccion'], PDO::PARAM_STR);
        $stmt->bindParam(":telefono", $data['telefono'], PDO::PARAM_STR);
        $stmt->bindParam(":sexo", $data['sexo'], PDO::PARAM_STR);
        $stmt->execute();
        return Conexion::conectar()->lastInsertId();
    }


    // getEstudiante
    public static function mdlGetStudentInfoById($idAlumno) {
        $stmt = Conexion::conectar()->prepare("SELECT * FROM VistaReporteEstudiantes WHERE idAlumno = :idAlumno");
        $stmt->bindParam(":idAlumno", $idAlumno, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    static public function mdlMostrarAlumnoPorIdDesdeVista($idAlumno) {
        try {
            $stmt = Conexion::conectar()->prepare("CALL vista_alumnos(:idAlumno)");
            $stmt->bindParam(":idAlumno", $idAlumno, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return null;
        }
    }
    
}