$(document).ready(function() {
    $('.btn-ver-perfil').on('click', function() {
        var profileType = $(this).data('profile'); // Tipo de perfil, por ejemplo, 'alumno'

        $('.nav-sidebar').hide();

        $.ajax({
            url: './ajax/perfilAlumno.ajax.php',
            method: 'POST',
            data: { profileType: profileType },
            success: function(response) {
                $('#secondary-menu').html(response); // Actualiza el menú secundario con el nuevo contenido
            },
            complete: function() {
                // Mostrar el menú secundario y ocultar el botón
                $('#secondary-menu').show();
                // $('.btn-ver-perfil').hide();
            }
        });
    });
});
