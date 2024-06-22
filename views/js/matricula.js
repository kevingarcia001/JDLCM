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



$(document).ready(function() {
    $("#quickForm").submit(function(event) {
        // Validación del campo pnombre (Primer Nombre)
        var pnombre = $("#pnombre").val().trim();
        if (pnombre === "") {
            event.preventDefault();
            $("#error-apnombre").html("Por favor, ingresa el primer nombre.");
            $("#pnombre").addClass("is-invalid");
        } else {
            $("#error-apnombre").html("");
            $("#pnombre").removeClass("is-invalid");
        }

        // Validación del campo papellido (Primer Apellido)
        var papellido = $("#papellido").val().trim();
        if (papellido === "") {
            event.preventDefault();
            $("#error-apellido").html("Por favor, ingresa el primer apellido.");
            $("#papellido").addClass("is-invalid");
        } else {
            $("#error-apellido").html("");
            $("#papellido").removeClass("is-invalid");
        }

        // Validación del campo fecha (Fecha de Nacimiento)
        var fecha = $("#fecha").val().trim();
        if (fecha === "") {
            event.preventDefault();
            $("#error-fecha").html("Por favor, ingresa la fecha de nacimiento.");
            $("#fecha").addClass("is-invalid");
        } else {
            $("#error-fecha").html("");
            $("#fecha").removeClass("is-invalid");
        }

        // Validación del campo direccion (Dirección)
        var direccion = $("#direccion").val().trim();
        if (direccion === "") {
            event.preventDefault();
            $("#error-adireccion").html("Por favor, ingresa la dirección.");
            $("#direccion").addClass("is-invalid");
        } else {
            $("#error-adireccion").html("");
            $("#direccion").removeClass("is-invalid");
        }

        // Validación del campo snombre (Segundo Nombre)
        var snombre = $("#snombre").val().trim();
        if (snombre === "") {
            event.preventDefault();
            $("#error-asegundonombre").html("Por favor, ingresa el segundo nombre.");
            $("#snombre").addClass("is-invalid");
        } else {
            $("#error-asegundonombre").html("");
            $("#snombre").removeClass("is-invalid");
        }

        // Validación del campo sapellido (Segundo Apellido)
        var sapellido = $("#sapellido").val().trim();
        if (sapellido === "") {
            event.preventDefault();
            $("#error-asegundoapellido").html("Por favor, ingresa el segundo apellido.");
            $("#sapellido").addClass("is-invalid");
        } else {
            $("#error-asegundoapellido").html("");
            $("#sapellido").removeClass("is-invalid");
        }

        // Validación del campo telefono (Teléfono)
        var telefono = $("#telefono").val().trim();
        if (telefono === "") {
            event.preventDefault();
            $("#error-atelefono").html("Por favor, ingresa el teléfono.");
            $("#telefono").addClass("is-invalid");
        } else {
            $("#error-atelefono").html("");
            $("#telefono").removeClass("is-invalid");
        }

        // Validación del campo sexo (Sexo)
        var sexo = $("#sexo").val();
        if (sexo === "") {
            event.preventDefault();
            $("#error-asexo").html("Por favor, selecciona el sexo.");
            $("#sexo").addClass("is-invalid");
        } else {
            $("#error-asexo").html("");
            $("#sexo").removeClass("is-invalid");
        }

        // Validación del campo t_pnombre (Primer Nombre del Tutor)
        var t_pnombre = $("#t_pnombre").val().trim();
        if (t_pnombre === "") {
            event.preventDefault();
            $("#error-tprimernombre").html("Por favor, ingresa el primer nombre del tutor.");
            $("#t_pnombre").addClass("is-invalid");
        } else {
            $("#error-tprimernombre").html("");
            $("#t_pnombre").removeClass("is-invalid");
        }

        // Validación del campo t_papellido (Primer Apellido del Tutor)
        var t_papellido = $("#t_papellido").val().trim();
        if (t_papellido === "") {
            event.preventDefault();
            $("#error-tprimerapellido").html("Por favor, ingresa el primer apellido del tutor.");
            $("#t_papellido").addClass("is-invalid");
        } else {
            $("#error-tprimerapellido").html("");
            $("#t_papellido").removeClass("is-invalid");
        }

        // Validación del campo t_fecha (Fecha de Nacimiento del Tutor)
        var t_fecha = $("#t_fecha").val().trim();
        if (t_fecha === "") {
            event.preventDefault();
            $("#error-tfecha").html("Por favor, ingresa la fecha de nacimiento del tutor.");
            $("#t_fecha").addClass("is-invalid");
        } else {
            $("#error-tfecha").html("");
            $("#t_fecha").removeClass("is-invalid");
        }

        // Validación del campo t_cedula (Cédula del Tutor)
        var t_cedula = $("#t_cedula").val().trim();
        if (t_cedula === "") {
            event.preventDefault();
            $("#error-tcedula").html("Por favor, ingresa la cédula del tutor.");
            $("#t_cedula").addClass("is-invalid");
        } else {
            $("#error-tcedula").html("");
            $("#t_cedula").removeClass("is-invalid");
        }

        // Validación del campo t_direccion (Dirección del Tutor)
        var t_direccion = $("#t_direccion").val().trim();
        if (t_direccion === "") {
            event.preventDefault();
            $("#error-tdireccion").html("Por favor, ingresa la dirección del tutor.");
            $("#t_direccion").addClass("is-invalid");
        } else {
            $("#error-tdireccion").html("");
            $("#t_direccion").removeClass("is-invalid");
        }

        // Validación del campo t_snombre (Segundo Nombre del Tutor)
        var t_snombre = $("#t_snombre").val().trim();
        if (t_snombre === "") {
            event.preventDefault();
            $("#error-tsegundonombre").html("Por favor, ingresa el segundo nombre del tutor.");
            $("#t_snombre").addClass("is-invalid");
        } else {
            $("#error-tsegundonombre").html("");
            $("#t_snombre").removeClass("is-invalid");
        }

        // Validación del campo t_sapellido (Segundo Apellido del Tutor)
        var t_sapellido = $("#t_sapellido").val().trim();
        if (t_sapellido === "") {
            event.preventDefault();
            $("#error-tsegundoapellido").html("Por favor, ingresa el segundo apellido del tutor.");
            $("#t_sapellido").addClass("is-invalid");
        } else {
            $("#error-tsegundoapellido").html("");
            $("#t_sapellido").removeClass("is-invalid");
        }

        // Validación del campo t_telefono (Teléfono del Tutor)
        var t_telefono = $("#t_telefono").val().trim();
        if (t_telefono === "") {
            event.preventDefault();
            $("#error-ttelefono").html("Por favor, ingresa el teléfono del tutor.");
            $("#t_telefono").addClass("is-invalid");
        } else {
            $("#error-ttelefono").html("");
            $("#t_telefono").removeClass("is-invalid");
        }

        // Validación del campo t_parentesco (Parentesco)
        var t_parentesco = $("#t_parentesco").val();
        if (t_parentesco === "") {
            event.preventDefault();
            $("#error-parentesco").html("Por favor, selecciona el parentesco.");
            $("#t_parentesco").addClass("is-invalid");
        } else {
            $("#error-parentesco").html("");
            $("#t_parentesco").removeClass("is-invalid");
        }

        // Validación del campo anio_academico (Año Académico)
        var anio_academico = $("#anio_academico").val();
        if (anio_academico === "") {
            event.preventDefault();
            $("#error-anioac").html("Por favor, selecciona el año académico.");
            $("#anio_academico").addClass("is-invalid");
        } else {
            $("#error-anioac").html("");
            $("#anio_academico").removeClass("is-invalid");
        }

        // Validación del campo grado (Grado)
        var grado = $("#grado").val();
        if (grado === "") {
            event.preventDefault();
            $("#error-grado").html("Por favor, selecciona el grado.");
            $("#grado").addClass("is-invalid");
        } else {
            $("#error-grado").html("");
            $("#grado").removeClass("is-invalid");
        }

        // Validación del campo turno (Turno)
        var turno = $("#turno").val();
        if (turno === "") {
            event.preventDefault();
            $("#error-turno").html("Por favor, selecciona el turno.");
            $("#turno").addClass("is-invalid");
        } else {
            $("#error-turno").html("");
            $("#turno").removeClass("is-invalid");
        }
    });

    // Evitar que el modal se cierre si hay errores
    $('#modal-lg').on('hide.bs.modal', function(e) {
        if ($("#pnombre").hasClass("is-invalid") ||
            $("#papellido").hasClass("is-invalid") ||
            $("#fecha").hasClass("is-invalid") ||
            $("#direccion").hasClass("is-invalid") ||
            $("#snombre").hasClass("is-invalid") ||
            $("#sapellido").hasClass("is-invalid") ||
                $("#telefono").hasClass("is-invalid") ||
                $("#sexo").hasClass("is-invalid") ||
                $("#t_pnombre").hasClass("is-invalid") ||
                $("#t_papellido").hasClass("is-invalid") ||
                $("#t_fecha").hasClass("is-invalid") ||
                $("#t_cedula").hasClass("is-invalid") ||
                $("#t_direccion").hasClass("is-invalid") ||
                $("#t_snombre").hasClass("is-invalid") ||
                $("#t_sapellido").hasClass("is-invalid") ||
                $("#t_telefono").hasClass("is-invalid") ||
                $("#t_parentesco").hasClass("is-invalid") ||
                $("#anio_academico").hasClass("is-invalid") ||
                $("#grado").hasClass("is-invalid") ||
                $("#turno").hasClass("is-invalid")) {
                e.preventDefault();
            }
        });
    
        // Limpiar errores y clases de error al abrir el modal
        $('#modal-lg').on('show.bs.modal', function(e) {
            // Limpiar mensajes de error
            $(".invalid-feedback").html("");
            // Remover clases de error de todos los campos
            $(".form-control").removeClass("is-invalid");
        });
    });
    