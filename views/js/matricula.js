
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
                console.log(respuesta); 

                // Asignar datos a los campos del formulario de edición
                $("#edit-id").val(respuesta.idMatricula);
                $("#edit-pnombre").val(respuesta.PNombre);
                $("#edit-snombre").val(respuesta.SNombre);
                $("#edit-papellido").val(respuesta.PApellido);
                $("#edit-sapellido").val(respuesta.SApellido);
                $("#edit-fecha").val(respuesta.Fecha_Nacimiento);
                $("#edit-direccion").val(respuesta.Direccion);
                $("#edit-telefono").val(respuesta.Telefono);
                $("#edit-sexo").val(respuesta.Sexo);
                $("#edit-t_pnombre").val(respuesta.T_PNombre);
                $("#edit-t_snombre").val(respuesta.T_SNombre);
                $("#edit-t_papellido").val(respuesta.T_PApellido);
                $("#edit-t_sapellido").val(respuesta.T_SApellido);
                $("#edit-t_cedula").val(respuesta.T_Cedula);
                $("#edit-t_direccion").val(respuesta.T_Direccion);
                $("#edit-t_telefono").val(respuesta.T_Telefono);
                $("#edit-t_parentesco").val(respuesta.T_Parentesco);
                $("#edit-t_sexo").val(respuesta.T_Sexo);
                $("#edit-anio_academico").val(respuesta.Anio_Academico_idAnio_Academico);
                $("#edit-grado").val(respuesta.GradoSeccion_idGradoSeccion);
                $("#edit-turno").val(respuesta.Turno_idTurno);
                
                // Mostrar el modal de edición
                $('#modal-editar-matricula').modal('show');
            },
            error: function(xhr, status, error) {
                console.error("Error al obtener datos de la matrícula:", error);
                // Manejar el error si es necesario
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
        
        var pnombre = $("#pnombre").val().trim();
        var papellido = $("#papellido").val().trim();
        var fecha = $("#fecha").val().trim();
        var direccion = $("#direccion").val().trim();
        var snombre = $("#snombre").val().trim();
        var sapellido = $("#sapellido").val().trim();
        var telefono = $("#telefono").val().trim();
        var sexo = $("#sexo").val();
        // tutot
        var t_pnombre = $("#t_pnombre").val().trim();
        var t_papellido = $("#t_papellido").val().trim();
        var t_cedula = $("#t_cedula").val().trim();
        var t_direccion = $("#t_direccion").val().trim();
        var t_snombre = $("#t_snombre").val().trim();
        var t_sapellido = $("#t_sapellido").val().trim();
        var t_telefono = $("#t_telefono").val().trim();
        var t_parentesco = $("#t_parentesco").val();
        var t_sexo = $("#t_sexo").val();
        // matriucla
        var anio_academico = $("#anio_academico").val();
        var seccion = $("#seccion").val();
        var grado = $("#grado").val();
        var turno = $("#turno").val();



        if (pnombre === "") {
            event.preventDefault();
            $("#error-apnombre").html("Por favor, ingresa el primer nombre.");
            $("#pnombre").addClass("is-invalid");
        } else {
            $("#error-apnombre").html("");
            $("#pnombre").removeClass("is-invalid");
        }
        
        // Validación del campo papellido (Primer Apellido)
        if (papellido === "") {
            event.preventDefault();
            $("#error-aprimerapellido").html("Por favor, ingresa el primer apellido.");
            $("#papellido").addClass("is-invalid");
        } else {
            $("#error-aprimerapellido").html("");
            $("#papellido").removeClass("is-invalid");
        }

        // Validación del campo fecha (Fecha de Nacimiento)
        if (fecha === "") {
            event.preventDefault();
            $("#error-fecha").html("Por favor, ingresa la fecha de nacimiento.");
            $("#fecha").addClass("is-invalid");
        } else {
            $("#error-fecha").html("");
            $("#fecha").removeClass("is-invalid");
        }

        // Validación del campo direccion (Dirección)
        if (direccion === "") {
            event.preventDefault();
            $("#error-adireccion").html("Por favor, ingresa la dirección.");
            $("#direccion").addClass("is-invalid");
        } else {
            $("#error-adireccion").html("");
            $("#direccion").removeClass("is-invalid");
        }

        // Validación del campo snombre (Segundo Nombre)
        if (snombre === "") {
            event.preventDefault();
            $("#error-asegunnombre").html("Por favor, ingresa el segundo nombre.");
            $("#snombre").addClass("is-invalid");
        } else {
            $("#error-asegunnombre").html("");
            $("#snombre").removeClass("is-invalid");
        }

        // Validación del campo sapellido (Segundo Apellido)
        if (sapellido === "") {
            event.preventDefault();
            $("#error-asegundoapellido").html("Por favor, ingresa el segundo apellido.");
            $("#sapellido").addClass("is-invalid");
        } else {
            $("#error-asegundoapellido").html("");
            $("#sapellido").removeClass("is-invalid");
        }

        // Validación del campo telefono (Teléfono)
        if (telefono === "") {
            event.preventDefault();
            $("#error-atelefono").html("Por favor, ingresa el teléfono.");
            $("#telefono").addClass("is-invalid");
        } else {
            $("#error-atelefono").html("");
            $("#telefono").removeClass("is-invalid");
        }

        // Validación del campo sexo (Sexo)
        if (sexo === "") {
            event.preventDefault();
            $("#error-asexo").html("Por favor, selecciona el sexo.");
            $("#sexo").addClass("is-invalid");
        } else {
            $("#error-asexo").html("");
            $("#sexo").removeClass("is-invalid");
        }

        // tutor
        // Validación del campo t_pnombre (Primer Nombre del Tutor)
        if (t_pnombre === "") {
            event.preventDefault();
            $("#error-tprimernombre").html("Por favor, ingresa el primer nombre del tutor.");
            $("#t_pnombre").addClass("is-invalid");
        } else {
            $("#error-tprimernombre").html("");
            $("#t_pnombre").removeClass("is-invalid");
        }

        // Validación del campo t_papellido (Primer Apellido del Tutor)
        
        if (t_papellido === "") {
            event.preventDefault();
            $("#error-tprimerapellido").html("Por favor, ingresa el primer apellido del tutor.");
            $("#t_papellido").addClass("is-invalid");
        } else {
            $("#error-tprimerapellido").html("");
            $("#t_papellido").removeClass("is-invalid");
        }

        // Validación del campo t_fecha (Fecha de Nacimiento del Tutor)
       
        // if (t_fecha === "") {
        //     event.preventDefault();
        //     $("#error-tfecha").html("Por favor, ingresa la fecha de nacimiento del tutor.");
        //     $("#t_fecha").addClass("is-invalid");
        // } else {
        //     $("#error-tfecha").html("");
        //     $("#t_fecha").removeClass("is-invalid");
        // }

        // Validación del campo t_cedula (Cédula del Tutor)

        if (t_cedula === "") {
            event.preventDefault();
            $("#error-tcedula").html("Por favor, ingresa la cédula del tutor.");
            $("#t_cedula").addClass("is-invalid");
        } else {
            $("#error-tcedula").html("");
            $("#t_cedula").removeClass("is-invalid");
        }

        // Validación del campo t_direccion (Dirección del Tutor)
        if (t_direccion === "") {
            event.preventDefault();
            $("#error-tdireccion").html("Por favor, ingresa la dirección del tutor.");
            $("#t_direccion").addClass("is-invalid");
        } else {
            $("#error-tdireccion").html("");
            $("#t_direccion").removeClass("is-invalid");
        }

        // Validación del campo t_snombre (Segundo Nombre del Tutor)
        if (t_snombre === "") {
            event.preventDefault();
            $("#error-tsegudnombre").html("Por favor, ingresa el segundo nombre del tutor.");
            $("#t_snombre").addClass("is-invalid");
        } else {
            $("#error-tsegudnombre").html("");
            $("#t_snombre").removeClass("is-invalid");
        }

        // Validación del campo t_sapellido (Segundo Apellido del Tutor)
        if (t_sapellido === "") {
            event.preventDefault();
            $("#error-tsegundoapellido").html("Por favor, ingresa el segundo apellido del tutor.");
            $("#t_sapellido").addClass("is-invalid");
        } else {
            $("#error-tsegundoapellido").html("");
            $("#t_sapellido").removeClass("is-invalid");
        }

        // Validación del campo t_telefono (Teléfono del Tutor)
        if (t_telefono === "") {
            event.preventDefault();
            $("#error-ttelefono").html("Por favor, ingresa el teléfono del tutor.");
            $("#t_telefono").addClass("is-invalid");
        } else {
            $("#error-ttelefono").html("");
            $("#t_telefono").removeClass("is-invalid");
        }

        // Validación del campo t_parentesco (Parentesco)
        if (t_parentesco === "") {
            event.preventDefault();
            $("#error-parentesco").html("Por favor, selecciona el parentesco.");
            $("#t_parentesco").addClass("is-invalid");
        } else {
            $("#error-parentesco").html("");
            $("#t_parentesco").removeClass("is-invalid");
        }

        if (t_sexo === "") {
            event.preventDefault();
            $("#error-asexo").html("Por favor, selecciona el sexo.");
            $("#t_sexo").addClass("is-invalid");
        } else {
            $("#error-tasexo").html("");
            $("#t_sexo").removeClass("is-invalid");
        }

        // matricula
        // Validación del campo anio_academico (Año Académico)
        if (anio_academico === "") {
            event.preventDefault();
            $("#error-anioac").html("Por favor, selecciona el año académico.");
            $("#anio_academico").addClass("is-invalid");
        } else {
            $("#error-anioac").html("");
            $("#anio_academico").removeClass("is-invalid");
        }
        if (seccion === "") {
            event.preventDefault();
            $("#error-seccion").html("Por favor, selecciona el año académico.");
            $("#seccion").addClass("is-invalid");
        } else {
            $("#error-seccion").html("");
            $("#seccion").removeClass("is-invalid");
        }

         // Validación del campo turno (Turno)
         if (turno === "") {
            event.preventDefault();
            $("#error-turno").html("Por favor, selecciona el turno.");
            $("#turno").addClass("is-invalid");
        } else {
            $("#error-turno").html("");
            $("#turno").removeClass("is-invalid");
        }

        // Validación del campo grado (Grado)
        if (grado === "") {
            event.preventDefault();
            $("#error-grado").html("Por favor, selecciona el grado.");
            $("#grado").addClass("is-invalid");
        } else {
            $("#error-grado").html("");
            $("#grado").removeClass("is-invalid");
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
            // tutores
            $("#t_pnombre").hasClass("is-invalid") ||
            $("#t_papellido").hasClass("is-invalid") ||
            $("#t_cedula").hasClass("is-invalid") ||
            $("#t_direccion").hasClass("is-invalid") ||
            $("#t_snombre").hasClass("is-invalid") ||
            $("#t_sapellido").hasClass("is-invalid") ||
            $("#t_telefono").hasClass("is-invalid") ||
            $("#t_parentesco").hasClass("is-invalid") ||
            // matricula
            $("#anio_academico").hasClass("is-invalid") ||
            $("#seccion").hasClass("is-invalid") ||
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
    