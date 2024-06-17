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
            confirmButtonText: 'Sí, eliminar usuario'
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
                        if (respuesta == "ok") {
                            Swal.fire({
                                position: "top-end",
                                icon: "success",
                                title: "El usuario ha sido eliminado",
                                showConfirmButton: false,
                                timer: 1500
                            }).then(function() {
                                window.location = "usuarios";
                            });
                        }
                    }
                });
            }
        });
    });
});





                  