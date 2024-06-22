<?php

require_once 'models/alumnos.models.php';
require_once 'tcpdf/tcpdf.php';
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

    // pdf
    static public function generarReporteAlumno($id_alumno) {
        // Obtener datos del alumno desde el modelo
        $alumno = mdlAlumnos::mdlreporte($id_alumno);

        // Crear instancia de TCPDF
        $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

        // Configurar información del documento
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('Nombre del Autor');
        $pdf->SetTitle('Reporte de Alumno');
        $pdf->SetSubject('Reporte personalizado por alumno');
        $pdf->SetKeywords('TCPDF, PDF, ejemplo, alumno, reporte');

        // Agregar una página
        $pdf->AddPage();

        // Configurar fuente y tamaño
        $pdf->SetFont('helvetica', '', 12);

        // Construir el contenido del PDF
        $contenido = "
            <h1>Reporte de Alumno</h1>
            <p><strong>ID:</strong> {$alumno['idAlumno']}</p>
            <p><strong>Nombre:</strong> {$alumno['PNombre']} {$alumno['SNombre']}</p>
            <p><strong>Apellidos:</strong> {$alumno['PApellido']} {$alumno['SApellido']}</p>
            <p><strong>Dirección:</strong> {$alumno['Direccion']}</p>
            <p><strong>Fecha de Nacimiento:</strong> {$alumno['Fecha_Nacimiento']}</p>
            <p><strong>Teléfono:</strong> {$alumno['Telefono']}</p>
            <p><strong>Tutor ID:</strong> {$alumno['Tutor_idTutor']}</p>
            <p><strong>Sexo ID:</strong> {$alumno['Sexo_idSexo']}</p>
        ";

        // Escribir el contenido en el PDF
        $pdf->writeHTML($contenido, true, false, true, false, '');

        // Cerrar y generar el PDF
        $pdf->Output('reporte_alumno_'.$id_alumno.'.pdf', 'I');
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
    
    
}