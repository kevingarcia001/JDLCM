$(document).ready(function() {
    $('#quickForA').submit(function(event) {
        var nombreAsignatura = $('#nom-asignatura').val().trim();

        if (nombreAsignatura === '') {
            event.preventDefault();
            $('#error-nom-asignatura').html('Por favor, ingresa el nombre de la asignatura.');
            $('#nom-asignatura').addClass('is-invalid');
        } else {
            $('#error-nom-asignatura').html('');
            $('#nom-asignatura').removeClass('is-invalid');
        }
    });

    $('#modal-asignaturas').on('hide.bs.modal', function(e) {
        if ($('#nom-asignatura').hasClass('is-invalid')) {
            e.preventDefault();
        }
    });

    $('#modal-asignaturas').on('click', '[data-dismiss="modal"]', function(e) {
        var errorsPresentes = $('#nom-asignatura').hasClass('is-invalid');
        if (errorsPresentes) {
            $('#nom-asignatura').removeClass('is-invalid');
            $('#error-nom-asignatura').html('');
        }
    });
});
