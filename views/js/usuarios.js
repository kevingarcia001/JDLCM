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

$(document).ready(function() {
    // Función para cambiar de pestaña
    $('.btn-anterior').click(function() {
      var $activeTab = $('#myTab .nav-link.active');
      var $tabs = $('#myTab .nav-link');
      var activeTabIndex = $tabs.index($activeTab);

      if (activeTabIndex > 0) {
        $($tabs[activeTabIndex - 1]).tab('show');
      }
    });

    $('.btn-siguiente').click(function() {
      var $activeTab = $('#myTab .nav-link.active');
      var $tabs = $('#myTab .nav-link');
      var activeTabIndex = $tabs.index($activeTab);

      if (activeTabIndex < $tabs.length - 1) {
        $($tabs[activeTabIndex + 1]).tab('show');
      }
    });
  });



  $(document).ready(function(){
    $("quickForm").submit(function(event){
        var nusuario = $("#nusuario").val().trim();

        if(nusuario === ""){
            event.preventDefault();
            $("#error-nusuario").html("porfavor, ingresar el usuario");
            $("#nusuario").addClass("is-invalid");
        }
        else{
            $("#error-nusuario").html("");
            $("#nusuario").removeClass("is-invalid");
        }
    });
    // enviar
    $('modal-usuarios').on('hide.bs.modal', function(e){
        if($("#nusuario").hasClass("is-invalid")){
            e.preventDefault();
        }
    });
    $('#modal-usuarios').on('click', '[data-dismiss="modal"]', function(e) {
        var errorsPresentes = $("#nom-asignatura").hasClass("is-invalid");
        if (errorsPresentes) {
            $("#nusuario").removeClass("is-invalid");
            $("#error-nusuario").html("");
        }
    });
});
