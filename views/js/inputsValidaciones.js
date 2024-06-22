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

