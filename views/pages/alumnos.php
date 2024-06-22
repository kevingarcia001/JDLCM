<?php
$alumnos = ctrAlumno::ctrlistarAlumnos();
?>

<div class="content-wrapper">

  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>ALUMNOS</h1>
        </div>
      </div>
    </div>
  </section>


  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">

            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped tablaAlumno">
                <thead>
                  <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-lg">
                    AGREGAR ALUMNOS
                  </button>
                  <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Fecha Nacimiento</th>
                    <th>Telefono</th>
                    <th>Tutor</th>
                    <th>Acciones</th>
                  </tr>
                </thead>
                <tbody>
                  <?php   ?>
                  <?php
                  foreach ($alumnos as $key => $value) {
                    $item = "idTutor";
                    $valor = $value["Tutor_idTutor"];
                    $tutor = ctrTutor::ctrMostrarTutor($item, $valor);
                  ?>
                    <tr>
                      <td> <?php echo ($key + 1)  ?></td>
                      <td><?php echo ($value["PNombre"])  ?> </td>
                      <td><?php echo ($value["Fecha_Nacimiento"])  ?> </td>
                      <td><?php echo ($value["Telefono"])  ?> </td>
                      <td> <?php echo ($tutor["PNombre"])  ?> </td>
                      <td class="text-center">
                        <a href="#" class="btnPdfMatricula mr-2" style="border: none" data-id="<?php echo $value['idAlumno']; ?>">
                          <i class="fas fa-file-pdf text-xl text-danger"></i>
                        </a>
                        <button type="button" class="btn btn-primary btn-sm btn-editarAlumno" data-toggle="modal" data-target="#modal-edit" idAlumno="<?php echo ($value["idAlumno"])  ?>">
                          <i class="fa fa-edit"></i>
                        </button>
                        <button type="button" class="btn btn-danger btn-sm btnEliminarAlumno" data-toggle="modal" data-target="#modal-delete" idAlumnoE="<?php echo ($value["idAlumno"])  ?>">
                          <i class="fa fa-trash"></i>
                        </button>
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



<div class="modal fade" id="modal-lg">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Agregar Alumno</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="post" enctype="multipart/form-data">
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="pnombre">Primer Nombre</label>
                  <input type="text" name="pnombre" class="form-control" id="pnombre" placeholder="Primer Nombre">
                </div>
                <div class="form-group">
                  <label for="snombre">Segundo Nombre</label>
                  <input type="text" name="snombre" class="form-control" id="snombre" placeholder="Segundo Nombre">
                </div>
                <div class="form-group">
                  <label for="papellido">Primer Apellido</label>
                  <input type="text" name="papellido" class="form-control" id="papellido" placeholder="Primer Apellido">
                </div>
                <div class="form-group">
                  <label for="sapellido">Segundo Apellido</label>
                  <input type="text" name="sapellido" class="form-control" id="sapellido" placeholder="Segundo Apellido">
                </div>
                <div class="form-group">
                  <label for="direccion">Dirección</label>
                  <input type="text" name="direccion" class="form-control" id="direccion" placeholder="Dirección">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="telefono">Teléfono</label>
                  <input type="text" name="telefono" class="form-control" id="telefono" placeholder="Teléfono">
                </div>
                <div class="form-group">
                  <label for="fecha">Fecha Nacimiento</label>
                  <input type="date" name="fecha" class="form-control" id="fecha" placeholder="Fecha Nacimiento">
                </div>
                <div class="form-group">
                  <label for="tutor">Tutor</label>
                  <select class="form-control" name="tutor" id="tutor">
                    <option value="">seleccione</option>
                    <?php
                    $tutores = ctrTutor::ctrComboTutor();
                    foreach ($tutores as $tutor) {
                    ?>
                      <option value="<?php echo $tutor["idTutor"] ?>"><?php echo $tutor["PNombre"] ?></option>
                    <?php
                    }
                    ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="sexo">Sexo</label>
                  <select class="form-control" name="sexo" id="sexo">
                    <option value="">seleccione</option>
                    <?php
                    $sexos = ctrSexo::ctrComboSexo();
                    foreach ($sexos as $sexo) {
                    ?>
                      <option value="<?php echo $sexo["idSexo"] ?>"><?php echo $sexo["Sexo"] ?></option>
                    <?php
                    }
                    ?>
                  </select>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>
        </form>
      </div>

      <?php
      $crearAlumno = new ctrAlumno();
      $crearAlumno->ctrCrearAlumno();
      ?>
    </div>
  </div>
</div>



<!-- Editar alumno -->
<div class="modal fade" id="modal-editar-alumno">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Editar Alumno</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formEditarAlumno" method="post">
          <div class="card-body">
            <input type="hidden" name="idAlumnoE" id="idAlumnoE">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="pnombreE">Primer Nombre</label>
                  <input type="text" name="pnombreE" class="form-control" id="pnombreE" placeholder="Primer Nombre">
                </div>
                <div class="form-group">
                  <label for="snombreE">Segundo Nombre</label>
                  <input type="text" name="snombreE" class="form-control" id="snombreE" placeholder="Segundo Nombre">
                </div>
                <div class="form-group">
                  <label for="papellidoE">Primer Apellido</label>
                  <input type="text" name="papellidoE" class="form-control" id="papellidoE" placeholder="Primer Apellido">
                </div>
                <div class="form-group">
                  <label for="sapellidoE">Segundo Apellido</label>
                  <input type="text" name="sapellidoE" class="form-control" id="sapellidoE" placeholder="Segundo Apellido">
                </div>
                <div class="form-group">
                  <label for="direccionE">Dirección</label>
                  <input type="text" name="direccionE" class="form-control" id="direccionE" placeholder="Dirección">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="telefonoE">Teléfono</label>
                  <input type="text" name="telefonoE" class="form-control" id="telefonoE" placeholder="Teléfono">
                </div>
                <div class="form-group">
                  <label for="fechaE">Fecha Nacimiento</label>
                  <input type="date" name="fechaE" class="form-control" id="fechaE" placeholder="Fecha Nacimiento">
                </div>
                <div class="form-group">
                  <label for="tutorE">Tutor</label>
                  <select class="form-control" name="tutorE" id="tutorE">
                    <option value="">seleccione</option>
                    <?php
                    $tutores = ctrTutor::ctrComboTutor();
                    foreach ($tutores as $tutor) {
                    ?>
                      <option value="<?php echo $tutor["idTutor"] ?>"><?php echo $tutor["PNombre"] ?></option>
                    <?php
                    }
                    ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="sexoE">Sexo</label>
                  <select class="form-control" name="sexoE" id="sexoE">
                    <option value="">seleccione</option>
                    <?php
                    $sexos = ctrSexo::ctrComboSexo();
                    foreach ($sexos as $sexo) {
                    ?>
                      <option value="<?php echo $sexo["idSexo"] ?>"><?php echo $sexo["Sexo"] ?></option>
                    <?php
                    }
                    ?>
                  </select>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>

          <?php
          $editarAlumno = new ctrAlumno();
          $editarAlumno->ctrEditarAlumno();
          ?>
        </form>
      </div>

    </div>
  </div>
</div>