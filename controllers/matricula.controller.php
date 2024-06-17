<?php

class ctrMatricula
{

    // muestra la matricula
    static public function ctrMostrarMatricula()
    {
        $tabla = "matricula";
        $respuesta = mdlMatricula::mdlMostrarMatricula($tabla);
        return $respuesta;
    }

   
    static public function ctrVerMatricula($idMatricula) {    
     return mdlMatricula::mdlVerMatricula($idMatricula);
    }
   
    

    static public function ctrCrearMatricula()
    {
        if (isset($_POST["pnombre"]) && !empty($_POST["pnombre"])) {
            // Datos del alumno
            $datosAlumno = array(
                "PNombre" => $_POST["pnombre"],
                "SNombre" => $_POST["snombre"],
                "PApellido" => $_POST["papellido"],
                "SApellido" => $_POST["sapellido"],
                "Direccion" => $_POST["direccion"],
                "Fecha_Nacimiento" => $_POST["fecha"],
                "Telefono" => $_POST["telefono"],
                "Sexo_idSexo" => $_POST["sexo"]
            );
    
            // Datos del tutor
            $datosTutor = array(
                "PNombre" => $_POST["t_pnombre"],
                "SNombre" => $_POST["t_snombre"],
                "PApellido" => $_POST["t_papellido"],
                "SApellido" => $_POST["t_sapellido"],
                "Direccion" => $_POST["t_direccion"],
                "Cedula" => $_POST["t_cedula"],
                "Telefono" => $_POST["t_telefono"],
                "Sexo_idSexo" => $_POST["t_sexo"],
                "Parentesco_idParentesco" => $_POST["t_parentesco"]
            );
    
            // Datos de la matrícula
            $datosMatricula = array(
                "CodMatricula" => null, // Suponiendo que CodMatricula es autogenerado o no es necesario
                "Anio_Academico_idAnio_Academico" => $_POST["anio_acdemico"],
                "GradoSeccion_idGradoSeccion" => $_POST["grado"],
                "Turno_idTurno" => $_POST["turno"],
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
                            text: "Error al guardar Matrícula: ' . $respuesta . '",
                            showConfirmButton: false,
                            timer: 3000
                        });
                    </script>';
            }
        }
    }


    static public function ctrEliminarMatricula($id) {
        $tabla = "matricula";
        $respuesta = mdlMatricula::mdlEliminarMatricula($tabla, $id);
        return $respuesta;
    }
}
