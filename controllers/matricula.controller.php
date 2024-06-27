<?php

class ctrMatricula
{

    static public function ctrListarMatricula()
    {
        $tabla = "matricula";
        $respuesta = mdlMatricula::mdlListraMatricula($tabla);
        return $respuesta;
    }

    // muestra la matricula
    static public function ctrMostrarMatricula($item, $valor)
    {
        $tabla = "matricula";
        $respuesta = mdlMatricula::mdlMostrarMatricula($tabla, $item, $valor);
        return $respuesta;
    }


    // static public function ctrcargamatricula($idMatricula){
    //     $tabla = "matricula";
    //     $respuesta = mdlMatricula::cargarDatosMatricula($idMatricula, $tabla);
    //     return $respuesta;
    // }



    static public function ctrCrearMatricula()
    {
        if (
            isset($_POST["pnombre"])
        ) {
            // Datos del alumno
            $datosAlumno = array(
                "PNombre" => htmlspecialchars($_POST["pnombre"]),
                "SNombre" => htmlspecialchars($_POST["snombre"]),
                "PApellido" => htmlspecialchars($_POST["papellido"]),
                "SApellido" => htmlspecialchars($_POST["sapellido"]),
                "Direccion" => htmlspecialchars($_POST["direccion"]),
                "Fecha_Nacimiento" => htmlspecialchars($_POST["fecha"]),
                "Telefono" => htmlspecialchars($_POST["telefono"]),
                "Sexo_idSexo" => htmlspecialchars($_POST["sexo"])
            );

            // Datos del tutor
            $datosTutor = array(
                "PNombre" => htmlspecialchars($_POST["t_pnombre"]),
                "SNombre" => htmlspecialchars($_POST["t_snombre"]),
                "PApellido" => htmlspecialchars($_POST["t_papellido"]),
                "SApellido" => htmlspecialchars($_POST["t_sapellido"]),
                "Direccion" => htmlspecialchars($_POST["t_direccion"]),
                "Cedula" => htmlspecialchars($_POST["t_cedula"]),
                "Telefono" => htmlspecialchars($_POST["t_telefono"]),
                "Sexo_idSexo" => htmlspecialchars($_POST["t_sexo"]),
                "Parentesco_idParentesco" => htmlspecialchars($_POST["t_parentesco"])
            );

            // Datos de la matrícula
            $datosMatricula = array(
                "CodMatricula" => htmlspecialchars($_POST["CodMatricula"]),
                "Anio_Academico_idAnio_Academico" => htmlspecialchars($_POST["anio_academico"]),
                "GradoSeccion_idGradoSeccion" => htmlspecialchars($_POST["grado"]),
                "Turno_idTurno" => htmlspecialchars($_POST["turno"]),
                "Alumnos_idAlumno" => null, // Se asignará en el modelo después de insertar el alumno
                "Fecha" => date('Y-m-d') // O la fecha que necesites
            );

            $tablaMatricula = "matricula";
            $tablaAlumno = "alumnos";
            $tablaTutor = "tutor";

            $respuesta = mdlMatricula::mdlCrearMatricula($tablaMatricula, $datosMatricula, $tablaAlumno, $datosAlumno, $tablaTutor, $datosTutor);

            if ($respuesta == "ok") {
                echo '<script>
                        Swal.fire({
                            icon: "success",
                            title: "Matrícula guardada correctamente",
                            showConfirmButton: false,
                            timer: 3000
                        }).then(() => {
                            window.location = "index.php?pagina=matriculas";
                        });
                    </script>';
            } else {
                echo '<script>
                        Swal.fire({
                            icon: "error",
                            title: "Error",
                            text: "Error al guardar Matrícula: No se permite enviar campos vacios",
                            showConfirmButton: false,
                            timer: 3000
                        });
                    </script>';
            }
        }
    }


    static public function ctrEditarMatricula()
    {
        if (isset($_POST["matriculaE"])) {
            // Datos del alumno
            $datosAlumno = array(
                "idAlumno" => $_POST["edit-idAlumno"],
                "PNombre" => $_POST["edit-pnombre"],
                "SNombre" => $_POST["edit-snombre"],
                "PApellido" => $_POST["edit-papellido"],
                "SApellido" => $_POST["edit-sapellido"],
                "Direccion" => $_POST["edit-direccion"],
                "Fecha_Nacimiento" => $_POST["edit-fecha"],
                "Telefono" => $_POST["edit-telefono"],
                "Sexo_idSexo" => $_POST["edit-sexo"]
            );

            // Datos del tutor
            $datosTutor = array(
                "idTutor" => $_POST["edit-idTutor"],
                "PNombre" => $_POST["edit-t_pnombre"],
                "SNombre" => $_POST["edit-t_snombre"],
                "PApellido" => $_POST["edit-t_papellido"],
                "SApellido" => $_POST["edit-t_sapellido"],
                "Direccion" => $_POST["edit-t_direccion"],
                "Cedula" => $_POST["edit-t_cedula"],
                "Telefono" => $_POST["edit-t_telefono"],
                "Sexo_idSexo" => $_POST["edit-t_sexo"],
                "Parentesco_idParentesco" => $_POST["edit-t_parentesco"]
            );

            // Datos de la matrícula
            $datosMatricula = array(
                "idMatricula" => $_POST["edit-id"],
                "Anio_Academico_idAnio_Academico" => $_POST["edit-anio_academico"],
                "GradoSeccion_idGradoSeccion" => $_POST["edit-grado"],
                "Turno_idTurno" => $_POST["edit-turno"],
                "Alumnos_idAlumno" => $_POST["edit-idAlumno"],
                "Fecha" => date('Y-m-d') // O la fecha que necesites
            );

            $tablaMatricula = "matricula";
            $tablaAlumno = "alumnos";
            $tablaTutor = "tutor";

            $respuesta = mdlMatricula::mdlEditarMatricula($tablaMatricula, $datosMatricula, $tablaAlumno, $datosAlumno, $tablaTutor, $datosTutor);

            if ($respuesta == "ok") {
                echo '<script>
                    Swal.fire({
                        icon: "success",
                        title: "Matrícula actualizada correctamente",
                        showConfirmButton: false,
                        timer: 3000
                    }).then(() => {
                        window.location = "index.php?pagina=matriculas";
                    });
                </script>';
            } else {
                echo '<script>
                    Swal.fire({
                        icon: "error",
                        title: "Error",
                        text: "Error al actualizar Matrícula: ",
                        showConfirmButton: false,
                        timer: 3000
                    });
                </script>';
            }
        }
    }


    static public function ctrEliminarMatricula($id)
    {
        $tabla = "matricula";
        $respuesta = mdlMatricula::mdlEliminarMatricula($tabla, $id);
        return $respuesta;
    }


    public static function ctrObtenerMatricula($idMatricula) {
        return mdlMatricula::obtenerMatriculaPorId($idMatricula);
    }
}
