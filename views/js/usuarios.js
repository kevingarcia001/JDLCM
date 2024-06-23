$(document).ready(function() {
    $(".tablaUsuario").on("click", ".btneditarUsuario", function() {
        var idUsuario = $(this).attr("idUsuario");
        var datos = new FormData();
        datos.append("idUsuario", idUsuario);

        $.ajax({
            url: "./ajax/usuarios.ajax.php",
            method: "POST",
            data: datos,
            cache: false,
            contentType: false,
            processData: false,
            dataType: "json",
            success: function(respuesta) {
                $("#idUsuarioE").val(respuesta.idUsuario);
                $("#nusuarioE").val(respuesta.Usuario);
                $("#nombre_usuarioE").val(respuesta.Nombre);
                $("#password_usurioE").val(respuesta.Contrasena);
                $("#rol_usuarioE").val(respuesta.Rol_idRol);
                $('#modal-edit-usarios').modal('show');
            }
        });
    });
});

// elminar usuarios
$(document).ready(function() {
    $(document).on("click", ".btnEliminarUsuario", function() {
        var idUsuario = $(this).attr("idUsuarioE");

        Swal.fire({
            title: '¿Está seguro de eliminar este usuario?',
            text: "¡Si no lo está puede cancelar la acción!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            cancelButtonText: 'Cancelar',
            confirmButtonText: 'Sí, eliminar usuario',
            customClass: {
                popup: 'swal2-center',
            }
        }).then((result) => {
            if (result.isConfirmed) {
                var datos = new FormData();
                datos.append("idUsuarioE", idUsuario);
                $.ajax({
                    url: "./ajax/usuarios.ajax.php",
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
                                text: "El Usuario ha sido borrada correctamente",
                                showConfirmButton: true,
                                confirmButtonText: "Cerrar"
                            }).then(function(result) {
                                if (result.value) {
                                    window.location = "index.php?pagina=usarios";
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
    // Capturar clic en botón ver usuario
    $(".tablaUsuario").on("click", ".btnVerUsuario", function() {
        var idUsuario = $(this).attr("idUsuario");

        $.ajax({
            url: "./ajax/usuarios.ajax.php", // Ruta a tu archivo PHP que maneja la lógica del backend
            method: "POST",
            data: { idUsuario: idUsuario }, // Enviar el ID del usuario que se va a ver
            dataType: "json",
            success: function(respuesta) {
                // Llenar los campos del formulario de visualización con los datos del usuario
                $("#idUsuarioV").val(respuesta.idUsuario);
                $("#nusuarioV").text(respuesta.Usuario);
                $("#nombre_usuarioV").text(respuesta.Nombre);
                $("#nombre_usuarioV").text(respuesta.Nombre);
                $("#password_usurioV").text(respuesta.Contrasena);
                $("#rol_usuarioV").text(respuesta.Rol_idRol);

                // Mostrar el modal de visualización
                $("#modal-view-usuarios").modal("show");
            },
            error: function() {
                alert("Error al obtener datos del usuario");
            }
        });
    });
});


// 

$(document).ready(function() {
    $("#quickForm").submit(function(event) {
        var nusuario = $("#nusuario").val().trim();
        var nombre_usuario = $("#nombre_usuario").val().trim();
        var password_usuario = $("#password_usuario").val().trim();
        var rol_usuario = $("#rol_usuario").val();

        // Validación del campo nusuario (correo electrónico)
        if (nusuario === "") {
            event.preventDefault();
            $("#error-nusuario").html("Por favor, ingresa el correo electrónico.");
            $("#nusuario").addClass("is-invalid");
        } else {
            $("#error-nusuario").html("");
            $("#nusuario").removeClass("is-invalid");
        }

        // Validación del campo nombre_usuario
        if (nombre_usuario === "") {
            event.preventDefault();
            $("#error-nombre_usuario").html("Por favor, ingresa el nombre.");
            $("#nombre_usuario").addClass("is-invalid");
        } else {
            $("#error-nombre_usuario").html("");
            $("#nombre_usuario").removeClass("is-invalid");
        }

        // Validación del campo password_usuario
        if (password_usuario === "") {
            event.preventDefault();
            $("#error-password_usuario").html("Por favor, ingresa la contraseña.");
            $("#password_usuario").addClass("is-invalid");
        } else {
            $("#error-password_usuario").html("");
            $("#password_usuario").removeClass("is-invalid");
        }

        // Validación del campo rol_usuario
        if (rol_usuario === "") {
            event.preventDefault();
            $("#error-rol_usuario").html("Por favor, selecciona un rol.");
            $("#rol_usuario").addClass("is-invalid");
        } else {
            $("#error-rol_usuario").html("");
            $("#rol_usuario").removeClass("is-invalid");
        }
    });

    // Evitar que el modal se cierre si hay errores
    $('#modal-usuarios').on('hide.bs.modal', function(e) {
        if ($("#nusuario").hasClass("is-invalid") ||
            $("#nombre_usuario").hasClass("is-invalid") ||
            $("#password_usuario").hasClass("is-invalid") ||
            $("#rol_usuario").hasClass("is-invalid")) {
            e.preventDefault(); // Evitar que se cierre el modal
        }
    });

    // Limpiar errores al cerrar el modal
    $('#modal-usuarios').on('click', '[data-dismiss="modal"]', function(e) {
        $("#nusuario").removeClass("is-invalid");
        $("#error-nusuario").html("");
        $("#nombre_usuario").removeClass("is-invalid");
        $("#error-nombre_usuario").html("");
        $("#password_usuario").removeClass("is-invalid");
        $("#error-password_usuario").html("");
        $("#rol_usuario").removeClass("is-invalid");
        $("#error-rol_usuario").html("");
    });
});


  

// EDITAR
$(document).ready(function() {
    // Validación del formulario de edición
    $("#quickFormE").submit(function(event) {
        var nusuario = $("#nusuarioE").val().trim();
        var nombre_usuario = $("#nombre_usuarioE").val().trim();
        var password_usuario = $("#password_usuarioE").val().trim();
        var rol_usuario = $("#rol_usuarioE").val();

        // Validación del campo nusuario (correo electrónico)
        if (nusuario === "") {
            event.preventDefault();
            $("#error-nusuarioE").html("Por favor, ingresa el correo electrónico.");
            $("#nusuarioE").addClass("is-invalid");
        } else {
            $("#error-nusuarioE").html("");
            $("#nusuarioE").removeClass("is-invalid");
        }

        // Validación del campo nombre_usuario
        if (nombre_usuario === "") {
            event.preventDefault();
            $("#error-nombre_usuarioE").html("Por favor, ingresa el nombre.");
            $("#nombre_usuarioE").addClass("is-invalid");
        } else {
            $("#error-nombre_usuarioE").html("");
            $("#nombre_usuarioE").removeClass("is-invalid");
        }

        // Validación del campo rol_usuario
        if (rol_usuario === "") {
            event.preventDefault();
            $("#error-rol_usuarioE").html("Por favor, selecciona un rol.");
            $("#rol_usuarioE").addClass("is-invalid");
        } else {
            $("#error-rol_usuarioE").html("");
            $("#rol_usuarioE").removeClass("is-invalid");
        }
    });

    // Limpiar errores al abrir el modal
    $('#modal-edit-usuarios').on('show.bs.modal', function(e) {
        $("#nusuarioE").removeClass("is-invalid");
        $("#error-nusuarioE").html("");
        $("#nombre_usuarioE").removeClass("is-invalid");
        $("#error-nombre_usuarioE").html("");
        $("#rol_usuarioE").removeClass("is-invalid");
        $("#error-rol_usuarioE").html("");
    });

    // Evitar que el modal se cierre si hay errores
    $('#modal-edit-usuarios').on('hide.bs.modal', function(e) {
        if ($("#nusuarioE").hasClass("is-invalid") ||
            $("#nombre_usuarioE").hasClass("is-invalid") ||
            $("#rol_usuarioE").hasClass("is-invalid")) {
            e.preventDefault(); // Evitar que se cierre el modal
        }
    });

    // Limpiar errores al cerrar el modal
    $('#modal-edit-usuarios').on('click', '[data-dismiss="modal"]', function(e) {
        $("#nusuarioE").removeClass("is-invalid");
        $("#error-nusuarioE").html("");
        $("#nombre_usuarioE").removeClass("is-invalid");
        $("#error-nombre_usuarioE").html("");
        $("#rol_usuarioE").removeClass("is-invalid");
        $("#error-rol_usuarioE").html("");
    });
});