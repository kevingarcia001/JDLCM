


</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="./assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="./assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="./assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="./assets/dist/js/demo.js"></script>
<!-- ajax -->
<script src="./views/js/usuarios.js"></script>
<script src="./views/js/alumno.js"></script>
<script src="./views/js/filtros.js"></script>
<script src="./views/js/perfil.alumno.js"></script>
<script src="./views/js/matricula.js"></script>
<script src="./views/js/inputsValidaciones.js"></script>

<!-- Validaciones -->

<script src="./assets/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="./assets/plugins/jquery-validation/additional-methods.min.js"></script>

<!-- Data tables -->
<script src="./assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="./assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="./assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="./assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="./assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="./assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="./assets/plugins/jszip/jszip.min.js"></script>
<script src="./assets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="./assets/plugins/pdfmake/vfs_fonts.js"></script>
<script src="./assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="./assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="./assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false, "pageLength": 5,
      "language": {url: '../assets/dist/js/es-mx.json'},
      // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:e q(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
      "pageLength":5,
      
    });
  });
</script>

</body>
</html>