$(document).ready(function() {
    $(".tablaAlumno").on("click", ".btn-editarAlumno", function() {
        var idAlumno = $(this).attr("idAlumno");
        var datos = new FormData();
        datos.append("idAlumno", idAlumno);

        $.ajax({
            url: "./ajax/alumno.ajax.php",
            method: "POST",
            data: datos,
            cache: false,
            contentType: false,
            processData: false,
            dataType: "json",
            success: function(respuesta) {
                $("#idAlumnoE").val(respuesta.idAlumno);
                $("#pnombreE").val(respuesta.PNombre);
                $("#snombreE").val(respuesta.SNombre);
                $("#papellidoE").val(respuesta.PApellido);
                $("#sapellidoE").val(respuesta.SApellido);
                $("#direccionE").val(respuesta.Direccion);
                $("#telefonoE").val(respuesta.Telefono);
                $("#fechaE").val(respuesta.Fecha_Nacimiento);
                $("#tutorE").val(respuesta.Tutor_idTutor);
                $("#sexoE").val(respuesta.Sexo_idSexo);
                $('#modal-editar-alumno').modal('show');
            }
        });
    });
});

$(document).ready(function() {
    $(document).on("click", ".btnEliminarAlumno", function() {
        var idAlumno = $(this).attr("idAlumnoE");

        Swal.fire({
            title: '¿Está seguro de eliminar este Alumno?',
            text: "¡Si no lo está puede cancelar la acción!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            cancelButtonText: 'Cancelar',
            confirmButtonText: 'Sí, eliminar alumno'
        }).then((result) => {
            if (result.isConfirmed) {
                var datos = new FormData();
                datos.append("idAlumnoE", idAlumno);
                $.ajax({
                    url: "ajax/alumno.ajax.php",
                    method: "POST",
                    data: datos,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function(respuesta) {
                        console.log(respuesta);
                        if (respuesta == "ok") {
                            Swal.fire({
                                type: "success",
                                title: "¡CORRECTO!",
                                text: "El alumno ha sido borrado correctamente",
                                showConfirmButton: true,
                                confirmButtonText: "Cerrar"
                            }).then(function(result) {
                                if (result.value) {
                                    window.location = "alumnos";
                                }
                            });
                        }
                    }
                });
            }
        });
    });
    // EliminarAlumnoConDependenciasÇ
});





                  