<?php

class ctrAsignaturas{
    // controlador listar
    static public function ctrlistarAsignaturas(){
        $tabla="asignatura";
        $respuesta=mdlAlumnos::mdlListarAlumnos($tabla); 
        return $respuesta;
    }



    static public function ctrCrearAsignatura() {
        if(isset($_POST["nom-asignatura"]) && !empty($_POST["nom-asignatura"])){
            $asignatura = $_POST["nom-asignatura"];
        
            $datos = array(
                "Asignatura"=> $asignatura,
            );

            $tabla = "asignatura";
            $respuesta = mdlAsiganturas::mdlCrearAsignaturas($tabla, $datos);

            if($respuesta == "ok"){
                echo '<script>
                        Swal.fire({
                            icon: "success",
                            title: "Asignatura guardada correctamente",
                            showConfirmButton: false,
                            timer: 3000
                        }).then(() => {
                            window.location = "index.php?pagina=asignaturas";
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
}




?>