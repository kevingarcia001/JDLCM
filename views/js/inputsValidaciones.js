$(document).ready(function() {
    $("#quickForm").submit(function(event) {
        var nombreAsignatura = $("#nom-asignatura").val().trim();

        // Validar que el campo no esté vacío
        if (nombreAsignatura === "") {
            event.preventDefault(); // Detener el envío del formulario
            $("#error-nom-asignatura").html("Por favor, ingresa el nombre de la asignatura.");
            $("#nom-asignatura").addClass("is-invalid");
        } else {
            $("#error-nom-asignatura").html("");
            $("#nom-asignatura").removeClass("is-invalid");
        }
    });
    // Evitar que el modal se cierre si hay errores
    $('#modal-asignaturas').on('hide.bs.modal', function(e) {
        if ($("#nom-asignatura").hasClass("is-invalid")) {
            e.preventDefault(); // Evitar que se cierre el modal
        }
    });
    $('#modal-asignaturas').on('click', '[data-dismiss="modal"]', function(e) {
        var errorsPresentes = $("#nom-asignatura").hasClass("is-invalid");
        if (errorsPresentes) {
            $("#nom-asignatura").removeClass("is-invalid");
            $("#error-nom-asignatura").html("");
        }
    });
});

// usuarios
$(document).ready(function(){
    $("quickForm").submit(function(event){
        var nusuario = $("#nusuario").val().trim();
        var nombreusuario = $("#nusuario").val().trim();

        if(nusuario === ""){
            event.preventDefault();
            $("#error-nusuario").html("porfavor, ingresar el usuario");
            $("#nusuario").addClass("is-invalid");
        }
        else{
            $("#error-nusuario").html("");
            $("#nusuario").removeClass("is-invalid");
        }
        if(nombreusuario === ""){
            event.preventDefault();
            $("#error-nusuario").html("porfavor, ingresar un nombre de usuario");
            $("#nombre_usuario").addClass("is-invalid");
        }
        else{
            $("#error-nombre_usuario").html("");
            $("#nombre_usuario").removeClass("is-invalid");
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

