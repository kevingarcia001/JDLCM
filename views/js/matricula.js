$(document).on("click", ".btn-ver-perfil", function() {
    var idMatricula = $(this).attr("data-id");

    $.ajax({
        url: "index.php?ruta=matriculas&accion=ver",
        method: "POST",
        data: { idMatricula: idMatricula },
        dataType: "json",
        success: function(response) {
            if(response) {
                // Rellenar los campos del modal con los datos recibidos
                $("#ver-pnombre").text(response.PNombre);
                $("#ver-snombre").text(response.SNombre);
                $("#ver-papellido").text(response.PApellido);
                $("#ver-sapellido").text(response.SApellido);
                $("#ver-fecha").text(response.Fecha_Nacimiento);
                $("#ver-direccion").text(response.Direccion);
                $("#ver-telefono").text(response.Telefono);
                $("#ver-sexo").text(response.Sexo);

                $("#ver-t-pnombre").text(response.Tutor_PNombre);
                $("#ver-t-snombre").text(response.Tutor_SNombre);
                $("#ver-t-papellido").text(response.Tutor_PApellido);
                $("#ver-t-sapellido").text(response.Tutor_SApellido);
                $("#ver-t-cedula").text(response.Tutor_Cedula);
                $("#ver-t-direccion").text(response.Tutor_Direccion);
                $("#ver-t-telefono").text(response.Tutor_Telefono);
                $("#ver-t-parentesco").text(response.Tutor_Parentesco);

                $("#ver-anio-academico").text(response.Anio_Academico);
                $("#ver-grado").text(response.Grado);
                $("#ver-seccion").text(response.Seccion);
                $("#ver-turno").text(response.Turno);
                $("#ver-fecha-matricula").text(response.Fecha);

                // Abrir el modal
                $("#modal-ver-matricula").modal("show");
            } else {
                alert("No se encontraron datos.");
            }
        },
        error: function() {
            alert("Error al recuperar los datos.");
        }
    });
});

// Editar
$(document).ready(function() {
    $(".tablaMatricula").on("click", ".btnEditarmatricula", function() {
        var idMatricula = $(this).attr("idMatricula");
        var datos = new FormData();
        datos.append("idMatricula", idMatricula);

        $.ajax({
            url: "./ajax/matricula.ajax.php",
            method: "POST",
            data: datos,
            cache: false,
            contentType: false,
            processData: false,
            dataType: "json",
            success: function(respuesta) {
                $("#idMatricula").val(respuesta.idMatricula);
                $("#pnombre").val(respuesta.PNombre);
                $("#snombre").val(respuesta.SNombre);
                $("#papellido").val(respuesta.PApellido);
                $("#sapellido").val(respuesta.SApellido);
                $("#fecha").val(respuesta.Fecha_Nacimiento);
                $("#direccion").val(respuesta.Direccion);
                $("#telefono").val(respuesta.Telefono);
                $("#sexo").val(respuesta.Sexo);

                $("#t_pnombre").val(respuesta.T_PNombre);
                $("#t_snombre").val(respuesta.T_SNombre);
                $("#t_papellido").val(respuesta.T_PApellido);
                $("#t_sapellido").val(respuesta.T_SApellido);
                $("#t_fecha").val(respuesta.T_Fecha_Nacimiento);
                $("#t_cedula").val(respuesta.T_Cedula);
                $("#t_direccion").val(respuesta.T_Direccion);
                $("#t_telefono").val(respuesta.T_Telefono);
                $("#t_parentesco").val(respuesta.T_Parentesco);
                $("#t_sexo").val(respuesta.T_Sexo);

                $("#codigo").val(respuesta.CodMatricula);
                $("#fecha_matricula").val(respuesta.Fecha);

                $('#modal-lg').modal('show');
            }
        });
    });
});


$(document).ready(function() {
    $(document).on("click", ".btnEliminarMatricula", function() {
        var idMatricula = $(this).attr("idMatriculaE");

        Swal.fire({
            title: '¿Está seguro de eliminar esta Matrícula?',
            text: "¡Si no lo está puede cancelar la acción!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            cancelButtonText: 'Cancelar',
            confirmButtonText: 'Sí, eliminar matrícula'
        }).then((result) => {
            if (result.isConfirmed) {
                var datos = new FormData();
                datos.append("idMatriculaE", idMatricula);
                $.ajax({
                    url: "./ajax/matricula.ajax.php",
                    method: "POST",
                    data: datos,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function(respuesta) {
                        console.log(respuesta);
                        if (respuesta == "ok") {
                            Swal.fire({
                                icon: "success",
                                title: "¡CORRECTO!",
                                text: "La matrícula ha sido borrada correctamente",
                                showConfirmButton: true,
                                confirmButtonText: "Cerrar"
                            }).then(function(result) {
                                if (result.value) {
                                    window.location = "index.php?pagina=matricula";
                                }
                            });
                        }
                    }
                });
            }
        });
    });
});
