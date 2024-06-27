<?php

require_once "conexiondb.php";

class mdlMatricula
{

    // listar matricula
    static public function mdlListraMatricula($tabla)
    {
        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt = null;
    }

    static public function mdlMostrarMatricula($tabla, $item, $valor){
        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item= :$item");
        $stmt->bindParam(":".$item, $valor, PDO::PARAM_STMT);
        $stmt->execute();
        return $stmt->fetch();
    }

 



    static public function mdlCrearMatricula($tablaMatricula, $datosMatricula, $tablaAlumno, $datosAlumno, $tablaTutor, $datosTutor)
    {
        try {
            $conexion = Conexion::conectar();
            // Iniciar transacción
            $conexion->beginTransaction();

            // Insertar en la tabla tutor
            $stmt = $conexion->prepare("INSERT INTO $tablaTutor (PNombre, SNombre, PApellido, SApellido, Direccion, Cedula, Telefono, Sexo_idSexo, Parentesco_idParentesco) VALUES (:PNombre, :SNombre, :PApellido, :SApellido, :Direccion, :Cedula, :Telefono, :Sexo_idSexo, :Parentesco_idParentesco)");
            $stmt->execute($datosTutor);
            $tutor_id = $conexion->lastInsertId(); // Obtener el ID del tutor recién insertado

            // Insertar en la tabla alumnos
            $datosAlumno['Tutor_idTutor'] = $tutor_id; // Añadir el ID del tutor a los datos del alumno
            $stmt = $conexion->prepare("INSERT INTO $tablaAlumno (PNombre, SNombre, PApellido, SApellido, Direccion, Fecha_Nacimiento, Telefono, Sexo_idSexo, Tutor_idTutor) VALUES (:PNombre, :SNombre, :PApellido, :SApellido, :Direccion, :Fecha_Nacimiento, :Telefono, :Sexo_idSexo, :Tutor_idTutor)");
            $stmt->execute($datosAlumno);
            $alumno_id = $conexion->lastInsertId(); // Obtener el ID del alumno recién insertado

            // Insertar en la tabla matricula
            $datosMatricula['Alumnos_idAlumno'] = $alumno_id; // Añadir el ID del alumno a los datos de la matrícula
            $stmt = $conexion->prepare("INSERT INTO $tablaMatricula (CodMatricula, Anio_Academico_idAnio_Academico, GradoSeccion_idGradoSeccion, Turno_idTurno, Alumnos_idAlumno, Fecha) VALUES (:CodMatricula, :Anio_Academico_idAnio_Academico, :GradoSeccion_idGradoSeccion, :Turno_idTurno, :Alumnos_idAlumno, :Fecha)");
            $stmt->execute($datosMatricula);

            // Confirmar transacción
            $conexion->commit();
            return "ok";
        } catch (PDOException $e) {
            // Revertir transacción en caso de error
            $conexion->rollBack();
            return "error: " . $e->getMessage();
        } finally {
            $stmt = null;
            $conexion = null;
        }
    }

    // editar matricula
    static public function mdlEditarMatricula($tablaMatricula, $datosMatricula, $tablaAlumno, $datosAlumno, $tablaTutor, $datosTutor)
{
    try {
        $conexion = Conexion::conectar();
        // Iniciar transacción
        $conexion->beginTransaction();

        // Actualizar datos del tutor
        $stmt = $conexion->prepare("UPDATE $tablaTutor SET PNombre=:PNombre, SNombre=:SNombre, PApellido=:PApellido, SApellido=:SApellido, Direccion=:Direccion, Cedula=:Cedula, Telefono=:Telefono, Sexo_idSexo=:Sexo_idSexo, Parentesco_idParentesco=:Parentesco_idParentesco WHERE idTutor=:idTutor");
        $stmt->bindParam(":idTutor", $datosTutor["idTutor"], PDO::PARAM_INT);
        $stmt->bindParam(":PNombre", $datosTutor["PNombre"], PDO::PARAM_STR);
        $stmt->bindParam(":SNombre", $datosTutor["SNombre"], PDO::PARAM_STR);
        $stmt->bindParam(":PApellido", $datosTutor["PApellido"], PDO::PARAM_STR);
        $stmt->bindParam(":SApellido", $datosTutor["SApellido"], PDO::PARAM_STR);
        $stmt->bindParam(":Direccion", $datosTutor["Direccion"], PDO::PARAM_STR);
        $stmt->bindParam(":Cedula", $datosTutor["Cedula"], PDO::PARAM_STR);
        $stmt->bindParam(":Telefono", $datosTutor["Telefono"], PDO::PARAM_STR);
        $stmt->bindParam(":Sexo_idSexo", $datosTutor["Sexo_idSexo"], PDO::PARAM_INT);
        $stmt->bindParam(":Parentesco_idParentesco", $datosTutor["Parentesco_idParentesco"], PDO::PARAM_INT);
        $stmt->execute();

        // Actualizar datos del alumno
        $stmt = $conexion->prepare("UPDATE $tablaAlumno SET PNombre=:PNombre, SNombre=:SNombre, PApellido=:PApellido, SApellido=:SApellido, Direccion=:Direccion, Fecha_Nacimiento=:Fecha_Nacimiento, Telefono=:Telefono, Sexo_idSexo=:Sexo_idSexo WHERE idAlumno=:idAlumno");
        $stmt->bindParam(":idAlumno", $datosAlumno["idAlumno"], PDO::PARAM_INT);
        $stmt->bindParam(":PNombre", $datosAlumno["PNombre"], PDO::PARAM_STR);
        $stmt->bindParam(":SNombre", $datosAlumno["SNombre"], PDO::PARAM_STR);
        $stmt->bindParam(":PApellido", $datosAlumno["PApellido"], PDO::PARAM_STR);
        $stmt->bindParam(":SApellido", $datosAlumno["SApellido"], PDO::PARAM_STR);
        $stmt->bindParam(":Direccion", $datosAlumno["Direccion"],  PDO::PARAM_STR);
        $stmt->bindParam(":Fecha_Nacimiento", $datosAlumno["Fecha_Nacimiento"], PDO::PARAM_STR);
        $stmt->bindParam(":Telefono", $datosAlumno["Telefono"], PDO::PARAM_STR);
        $stmt->bindParam(":Sexo_idSexo", $datosAlumno["Sexo_idSexo"], PDO::PARAM_INT);
        $stmt->execute();

        // Actualizar datos de la matrícula
        $stmt = $conexion->prepare("UPDATE $tablaMatricula SET Anio_Academico_idAnio_Academico=:Anio_Academico_idAnio_Academico, GradoSeccion_idGradoSeccion=:GradoSeccion_idGradoSeccion, Turno_idTurno=:Turno_idTurno, Fecha=:Fecha WHERE idMatricula=:idMatricula");
        $stmt->bindParam(":idMatricula", $datosMatricula["idMatricula"], PDO::PARAM_INT);
        $stmt->bindParam(":Anio_Academico_idAnio_Academico", $datosMatricula["Anio_Academico_idAnio_Academico"], PDO::PARAM_INT);
        $stmt->bindParam(":GradoSeccion_idGradoSeccion", $datosMatricula["GradoSeccion_idGradoSeccion"], PDO::PARAM_INT);
        $stmt->bindParam(":Turno_idTurno", $datosMatricula["Turno_idTurno"], PDO::PARAM_INT);
        $stmt->bindParam(":Fecha", $datosMatricula["Fecha"], PDO::PARAM_STR);
        $stmt->execute();

        // Confirmar transacción
        $conexion->commit();
        return "ok";
    } catch (PDOException $e) {
        // Revertir transacción en caso de error
        $conexion->rollBack();
        return "error: " . $e->getMessage();
    } finally {
        $stmt = null;
        $conexion = null;
    }
}


    // eliminar
    static public function mdlEliminarMatricula($tabla, $id) {
        try {
            $conexion = Conexion::conectar();
            $conexion->beginTransaction();
    
            // Eliminar registros dependientes en la tabla `nota`
            $stmt = $conexion->prepare("DELETE FROM nota WHERE Matricula_idMatricula = :idMatricula");
            $stmt->bindParam(":idMatricula", $id, PDO::PARAM_INT);
            $stmt->execute();
    
            // Eliminar la matrícula
            $stmt = $conexion->prepare("DELETE FROM $tabla WHERE idMatricula = :idMatricula");
            $stmt->bindParam(":idMatricula", $id, PDO::PARAM_INT);
            if ($stmt->execute()) {
                $conexion->commit();
                return "ok";
            } else {
                $conexion->rollBack();
                return "error";
            }
        } catch (PDOException $e) {
            $conexion->rollBack();
            return "error: " . $e->getMessage();
        } finally {
            $stmt = null;
        }
    }
    


    public static function obtenerMatriculaPorId($idMatricula) {
        $stmt = Conexion::conectar()->prepare("
            SELECT 
                m.idMatricula,
                m.CodMatricula,
                m.Fecha,
                a.idAlumno,
                a.PNombre as alumnoPNombre,
                a.SNombre as alumnoSNombre,
                a.PApellido as alumnoPApellido,
                a.SApellido as alumnoSApellido,
                a.Direccion as alumnoDireccion,
                a.Fecha_Nacimiento as alumnoFechaNacimiento,
                a.Telefono as alumnoTelefono,
                t.idTutor,
                t.PNombre as tutorPNombre,
                t.SNombre as tutorSNombre,
                t.PApellido as tutorPApellido,
                t.SApellido as tutorSApellido,
                t.Direccion as tutorDireccion,
                t.Cedula as tutorCedula,
                t.Telefono as tutorTelefono,
                ta.Turno,
                aa.Anio_Academico,
                g.Grado,
                s.NSecc as seccion
            FROM matricula m
            JOIN alumnos a ON m.Alumnos_idAlumno = a.idAlumno
            JOIN tutor t ON a.Tutor_idTutor = t.idTutor
            JOIN turno ta ON m.Turno_idTurno = ta.idTurno
            JOIN anio_academico aa ON m.Anio_Academico_idAnio_Academico = aa.idAnio_Academico
            JOIN gradoseccion gs ON m.GradoSeccion_idGradoSeccion = gs.idGradoSeccion
            JOIN seccion s ON gs.Seccion_idSeccion = s.idSeccion
            JOIN grado g ON gs.Grado_idGrado = g.idGrado
            WHERE m.idMatricula = :idMatricula
        ");
        $stmt->bindParam(":idMatricula", $idMatricula, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch();
    }
    
    
     
    public static function getMatriculados() {
        try {
            $stmt = Conexion::conectar()->prepare("SELECT * FROM vw_matriculados");
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Error al obtener los datos de matrícula: " . $e->getMessage();
        }
    }
    
}





