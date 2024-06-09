$(document).ready(function() {
    $('#grado_seccion').change(function() {
        var idGradoSeccion = $(this).val();

        // Realizar la solicitud AJAX para obtener la matrícula filtrada
        $.ajax({
            url: './ajax/filtro.ajax.php', // Ruta al archivo PHP que maneja la solicitud
            method: 'POST',
            data: { idGradoSeccion: idGradoSeccion },
            dataType: 'html',
            success: function(response) {
                $('#resultado-matricula').html(response); // Mostrar los resultados en la tabla
            }
        });
    });
});
