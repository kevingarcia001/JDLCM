<?php

require_once "conexiondb.php";

class mdlMatricula
{

    // listar matricula
    static public function mdlMostrarMatricula($tabla)
    {
        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt = null;
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



    static public function mdlVerMatricula($idMatricula)
    {
        try {
            $conexion = Conexion::conectar();
            $stmt = $conexion->prepare("SELECT * FROM matricula 
                                        JOIN alumnos ON matricula.Alumnos_idAlumno = alumnos.idAlumno 
                                        JOIN tutor ON alumnos.Tutor_idTutor = tutor.idTutor
                                        WHERE matricula.idMatricula = :idMatricula");
            $stmt->bindParam(":idMatricula", $idMatricula, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return "error: " . $e->getMessage();
        } finally {
            $stmt = null;
            $conexion = null;
        }
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


    // eliminar
    static public function mdlEliminarMatricula($tabla, $id) {
        try {
            $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE idMatricula = :idMatricula");
            $stmt->bindParam(":idMatricula", $id, PDO::PARAM_INT);
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
