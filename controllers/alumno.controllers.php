<?php

class ctrAlumno{
    
    // controlador listar
    static public function ctrlistarAlumnos(){
        $tabla="alumnos";
        $respuesta=mdlAlumnos::mdlListarAlumnos($tabla); 
        return $respuesta;
    }

      // controlador mostrar datos en otras tablas
    static public function ctrMostrarAlumno($item, $valor){
        $tabla="alumnos";
        $respuesta = mdlAlumnos::mdlMostrarAlumno($tabla,$item, $valor);
        return $respuesta;
    }

    // Crear
      static public function ctrCrearAlumno() {
        if(isset($_POST["pnombre"])){
            $pnombre = $_POST["pnombre"];
            $snombre = $_POST["snombre"];
            $papellido = $_POST["papellido"];
            $sapellido = $_POST["sapellido"];
            $direccion = $_POST["direccion"];
            $telefono = $_POST["telefono"];
            $fecha = $_POST["fecha"];
            $sexo = $_POST["sexo"];
            $tutor = $_POST["tutor"];

            $datos = array(
                "PNombre"=> $pnombre,
                "SNombre"=> $snombre,
                "PApellido"=> $papellido,
                "SApellido"=> $sapellido,
                "Direccion"=> $direccion,
                "Telefono"=> $telefono,
                "Fecha_Nacimiento"=> $fecha,
                "Sexo_idSexo"=> $sexo,
                "Tutor_idTutor"=> $tutor 
            );

            $tabla = "alumnos";
            $respuesta = mdlAlumnos::mdlCrearAlumno($tabla, $datos);

            if($respuesta == "ok"){
                echo '<script>
                        Swal.fire({
                            icon: "success",
                            title: "Alumno guardado correctamente",
                            showConfirmButton: false,
                            timer: 3000
                        }).then(() => {
                            window.location = "index.php?pagina=alumnos";
                        });
                      </script>';
            } else {
                echo '<script>
                        Swal.fire({
                            icon: "error",
                            title: "Error",
                            text: "Error al guardar Alumno: ' . $respuesta . '",
                            showConfirmButton: false,
                            timer:3000
                        });
                      </script>';
            }
        }
    }

    // Editar
    static public function ctrEditarAlumno() {
        if (isset($_POST["idAlumnoE"])) {
            $idAlumno = $_POST["idAlumnoE"];
            $pnombre = $_POST["pnombreE"];
            $snombre = $_POST["snombreE"];
            $papellido = $_POST["papellidoE"];
            $sapellido = $_POST["sapellidoE"];
            $direccion = $_POST["direccionE"];
            $telefono = $_POST["telefonoE"];
            $fecha = $_POST["fechaE"];
            $sexo = $_POST["sexoE"];
            $tutor = $_POST["tutorE"];

            $datos = array(
                "idAlumno" => $idAlumno,
                "PNombre" => $pnombre,
                "SNombre" => $snombre,
                "PApellido" => $papellido,
                "SApellido" => $sapellido,
                "Direccion" => $direccion,
                "Telefono" => $telefono,
                "Fecha_Nacimiento" => $fecha,
                "Sexo_idSexo" => $sexo,
                "Tutor_idTutor" => $tutor
            );

            $tabla = "alumnos";
            $respuesta = mdlAlumnos::mdlEditarAlumno($tabla, $datos);

            if ($respuesta == "ok") {
                echo '<script>
                        Swal.fire({
                            icon: "success",
                            title: "Alumno actualizado correctamente",
                            showConfirmButton: false,
                            timer: 3000
                        }).then(() => {
                            window.location = "index.php?pagina=alumnos";
                        });
                      </script>';
            } else {
                echo '<script>
                        Swal.fire({
                            icon: "error",
                            title: "Error",
                            text: "Error al actualizar alumno: ' . $respuesta . '",
                            showConfirmButton: true,
                            timer: 3000
                        });
                      </script>';
            }
        }
    }
    

    static public function ctrEliminarAlumno($id){
        $tabla="alumnos";
        $respuesta=mdlAlumnos::mdlEliminarAlumno($tabla, $id);
        return $respuesta;
    }



    public static function ctrMostrarAlumnoPorId($id) {
        return mdlAlumnos::mdlMostrarAlumnoPorId($id);
    }

    public static function mdlMostrarAlumnoPorId($id) {
        $stmt = Conexion::conectar()->prepare("SELECT * FROM alumnos WHERE idAlumno = :id");
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC); // Devolver como arreglo asociativo
    }
    
    
}