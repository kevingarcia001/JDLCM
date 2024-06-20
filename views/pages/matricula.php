<?php

$matricula = ctrMatricula::ctrMostrarMatricula();
// var_dump($matricula);
?>

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 style="font-weight: bold;" >MATRÍCULA</h1>
        </div>

      </div>
    </div>
  </section>
  <!-- <div class="spinner-grow text-danger" role="status">
    <span class="visually-hidden"></span>
  </div>
  <div class="spinner-grow text-primary" role="status">
  <span class="visually-hidden"></span>
</div>
<div class="spinner-grow text-success" role="status">
  <span class="visually-hidden"></span>
</div> -->

  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">

            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped tablaMatricula rounded-4">
                <thead>
                  <div class="col-md-6">
                  <?php include_once "AddEditMatricula/AgregarAMatricula.php"; ?>
                  </div>
                  <tr class="text-bold text-uppercase text-white" style="background-color:#14173D">
                    <th>Id</th>
                    <th>Alumno</th>
                    <th>Seccion </th>
                    <th>Año Academico</th>
                    <th>Turno</th>
                    <th>Fechas</th>
                    <th style="width: 10%">Acciones</th>
                  </tr>
                </thead>
                <tbody class="text-bold text-uppercase" id="resultado-matricula">
                  <?php   ?>

                  <?php
                  foreach ($matricula as $key => $value) {

                    $item = "idAnio_Academico";
                    $valor = $value["Anio_Academico_idAnio_Academico"];
                    $anioAc = ctrAnioAcademico::ctrMostrarAnioAcademico($item, $valor);

                    $item = "idAlumno";
                    $valor = $value["Alumnos_idAlumno"];
                    $alumno = ctrAlumno::ctrMostrarAlumno($item, $valor);

                    $item = "idTurno";
                    $valor = $value["Turno_idTurno"];
                    $turno = ctrTurno::ctrMostrarTurnos($item, $valor);
                  ?>
                    <tr>
                      <td> <?php echo ($key + 1)  ?></td>
                      <td><?php echo ($alumno["PNombre"] . " " . $alumno["PApellido"] . " " . $alumno["SApellido"])  ?> </td>
                      <td><?php echo ($value["GradoSeccion_idGradoSeccion"])  ?> </td>
                      <td> <?php echo ($anioAc["Anio_Academico"])  ?> </td>
                      <td><?php echo ($turno["Turno"])  ?> </td>
                      <td> <?php echo ($value["Fecha"])  ?> </td>
                      <td>

                        <div class="btn-group">
                          <a href="index.php?pagina=prueba.pdf.php" target="_blank" class="btnPdfMatricula mr-2"  style="border: none" >
                          <i class="fas fa-file-pdf text-lg text-danger"></i>
                           </a>
                          <a class="border-none btn-ver-perfil mr-2" data-profile="alumno" data-toggle="modal"  data-target="#modal-view-matricula" style="border: none" >
                            <i class="fa fa-eye text-lg text-primary"></i>
                          </a>
                          <a class="btn-editar mr-2" data-toggle="modal" data-target="#modal-editar-matricula" idUsuario=" <?php echo ($roles["id"])  ?>"   style="border: none"  >
                            <i class="fas fa-pencil-alt text-lg text-success .no-border"></i>
                          </a>

                          <a class="btnEliminarMatricula mr-2"  idMatriculaE="<?php echo ($value["idMatricula"])?>"  style="border: none" >
                            <i class="fas fa-trash-alt text-lg text-center text-danger .no-border"></i>
                          </a>
                        </div>
                        <?php include_once "AddEditMatricula/editarMatricula.php"; ?>
                        <!-- <div class="btn-group">
                          <button class="btn btn-secondary btn-sm btn-ver-perfil" data-profile="alumno">
                            <i class="fa fa-eye"></i> 
                          </button>
                          <button type="button" class="btn btn-primary btn-sm btn-editar" data-toggle="modal" data-target="#modal-editar-usuarios" idUsuario=" <?php echo ($roles["id"])  ?>">
                            <i class="fas fa-pencil-alt text-white"></i>
                          </button>
                        </div> -->
                      </td>
                    </tr>
                  <?php
                  }
                  ?>
                </tbody>

              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<iframe src="pruebapdf.php" frameborder="0"></iframe>
<!-- View -->
<div class="modal fade" id="modal-view-matricula">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#14173D">
        <h4 class="modal-title text-white text-uppercase fw-bold">Ver Matrícula</h4>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="form-view-matricula">
          <div class="row">
            <input type="hidden" name="idMatriculaV" id="idMatriculaV">

            <div class="col-md-6">
              <div class="form-group">
                <label for="pnombreV"><i class="fas fa-user"></i> Primer Nombre</label>
                <p id="pnombreV" class="form-control-plaintext border rounded bg-light p-2"></p>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="papellidoV"><i class="fas fa-user"></i> Primer Apellido</label>
                <p id="papellidoV" class="form-control-plaintext border rounded bg-light p-2"></p>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="fechaV"><i class="fas fa-calendar-alt"></i> Fecha Nacimiento</label>
                <p id="fechaV" class="form-control-plaintext border rounded bg-light p-2"></p>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="direccionV"><i class="fas fa-map-marker-alt"></i> Dirección</label>
                <p id="direccionV" class="form-control-plaintext border rounded bg-light p-2"></p>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="telefonoV"><i class="fas fa-phone"></i> Teléfono</label>
                <p id="telefonoV" class="form-control-plaintext border rounded bg-light p-2"></p>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="sexoV"><i class="fas fa-venus-mars"></i> Sexo</label>
                <p id="sexoV" class="form-control-plaintext border rounded bg-light p-2"></p>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="t_pnombreV"><i class="fas fa-user"></i> Primer Nombre Tutor</label>
                <p id="t_pnombreV" class="form-control-plaintext border rounded bg-light p-2"></p>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="t_papellidoV"><i class="fas fa-user"></i> Primer Apellido Tutor</label>
                <p id="t_papellidoV" class="form-control-plaintext border rounded bg-light p-2"></p>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="t_fechaV"><i class="fas fa-calendar-alt"></i> Fecha Nacimiento Tutor</label>
                <p id="t_fechaV" class="form-control-plaintext border rounded bg-light p-2"></p>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="t_cedulaV"><i class="fas fa-id-card"></i> Cédula Tutor</label>
                <p id="t_cedulaV" class="form-control-plaintext border rounded bg-light p-2"></p>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="t_direccionV"><i class="fas fa-map-marker-alt"></i> Dirección Tutor</label>
                <p id="t_direccionV" class="form-control-plaintext border rounded bg-light p-2"></p>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="t_telefonoV"><i class="fas fa-phone"></i> Teléfono Tutor</label>
                <p id="t_telefonoV" class="form-control-plaintext border rounded bg-light p-2"></p>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="t_parentescoV"><i class="fas fa-users"></i> Parentesco Tutor</label>
                <p id="t_parentescoV" class="form-control-plaintext border rounded bg-light p-2"></p>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="t_sexoV"><i class="fas fa-venus-mars"></i> Sexo Tutor</label>
                <p id="t_sexoV" class="form-control-plaintext border rounded bg-light p-2"></p>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="anio_academicoV"><i class="fas fa-calendar-alt"></i> Año Académico</label>
                <p id="anio_academicoV" class="form-control-plaintext border rounded bg-light p-2"></p>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="seccionV"><i class="fas fa-columns"></i> Sección</label>
                <p id="seccionV" class="form-control-plaintext border rounded bg-light p-2"></p>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="turnoV"><i class="fas fa-clock"></i> Turno</label>
                <p id="turnoV" class="form-control-plaintext border rounded bg-light p-2"></p>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="gradoV"><i class="fas fa-graduation-cap"></i> Grado</label>
                <p id="gradoV" class="form-control-plaintext border rounded bg-light p-2"></p>
              </div>
            </div>

          </div>
          <div class="text-right">
            <button type="button" class="btn btn-success text-uppercase" data-dismiss="modal" style="font-weight: bold">Cerrar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
