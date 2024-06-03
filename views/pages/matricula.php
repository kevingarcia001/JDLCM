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
          <h1>MATRICULA</h1>
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
              <table id="example1" class="table table-bordered table-striped tablaMatricula">
                <thead>
                  <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-lg">
                    AGREGAR ALUMNOS
                  </button>
                  <tr>
                    <th>Id</th>
                    <th>Alumno</th>
                    <th>Seccion </th>
                    <th>Anio Academico</th>
                    <th>Turno</th>
                    <th>Fechas</th>
                    <th>Acciones</th>
                  </tr>
                </thead>
                <tbody>
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
                      <td><?php echo ($alumno["PNombre"])  ?> </td>
                      <td><?php echo ($value["GradoSeccion_idGradoSeccion"])  ?> </td>
                      <td> <?php echo ($anioAc["Anio_Academico"])  ?> </td>
                      <td><?php echo ($turno["Turno"])  ?> </td>
                      <td> <?php echo ($value["Fecha"])  ?> </td>
                      <td>
                        <div class="btn-group">
                          <button type="button" class="btn btn-primary btn-sm btn-editar" data-toggle="modal" data-target="#modal-editar-usuarios" idUsuario=" <?php echo ($roles["id"])  ?>">
                            <i class="fas fa-pencil-alt text-white"></i>
                          </button>

                          <button class="btn btn-danger btn-sm">
                            <i class="fas fa-trash-alt text-white"></i>
                          </button>
                        </div>
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
        <h4 class="modal-title">Afdsfs</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Pestañas -->
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="tab1-tab" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="true">Formulario 1</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="tab2-tab" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false">Formulario 2</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="tab3-tab" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="false">Formulario 3</a>
          </li>
        </ul>
        <!-- Contenido de las pestañas -->
        <div class="tab-content" id="myTabContent">
          <!-- Pestaña 1 -->
          <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
            <form id="formEditarAlumno" method="post">
              <div class="card-body">
                <input type="hidden" name="idAlumnoE" id="idAlumnoE">
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
                <div class="form-group">
                  <label for="telefonoE">Teléfono</label>
                  <input type="text" name="telefonoE" class="form-control" id="telefonoE" placeholder="Teléfono">
                </div>
                <div class="form-group">
                  <label for="fechaE">Fecha Nacimiento</label>
                  <input type="date" name="fechaE" class="form-control" id="fechaE" placeholder="Fecha Nacimiento">
                </div>
                <div class="form-group">
                  <label for="tutor">Tutor</label>
                  <select class="form-control" name="tutor" id="tutor">
                    <option value="">Seleccione</option>
                    <option value="1">Tutor 1</option>
                    <option value="2">Tutor 2</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="sexo">Sexo</label>
                  <select class="form-control" name="sexo" id="sexo">
                    <option value="1">Masculino</option>
                    <option value="2">Femenino</option>
                  </select>
                </div>
              </div>
              <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Guardar</button>
              </div>

              <?php
              // $editarAlumno = new ctrAlumno();
              // $editarAlumno->ctrEditarAlumno();
              ?>
            </form>
          </div>
          <!-- Pestaña 2 -->
          <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
            <form id="formEditarAlumno" method="post">
              <div class="form-group">
                <label for="pnombre">Primer Nombre Tutor</label>
                <input type="text" class="form-control" id="pnombre" name="pnombre" placeholder="Primer Nombre Tutor">
              </div>
              <div class="form-group">
                <label for="snombre">Segundo Nombre Tutor</label>
                <input type="text" class="form-control" id="snombre" name="snombre" placeholder="Segundo Nombre Tutor">
              </div>
              <div class="form-group">
                <label for="papellido">Primer Apellido Tutor</label>
                <input type="text" class="form-control" id="papellido" name="papellido" placeholder="Primer Apellido Tutor">
              </div>
              <div class="form-group">
                <label for="sapellido">Segundo Apellido Tutor</label>
                <input type="text" class="form-control" id="sapellido" name="sapellido" placeholder="Segundo Apellido Tutor">
              </div>
              <div class="form-group">
                <label for="direccion">Dirección Tutor</label>
                <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Dirección Tutor">
              </div>
              <div class="form-group">
                <label for="cedula">Cédula Tutor</label>
                <input type="text" class="form-control" id="cedula" name="cedula" placeholder="Cédula Tutor">
              </div>
              <div class="form-group">
                <label for="telefono">Teléfono Tutor</label>
                <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Teléfono Tutor">
              </div>
              <div class="form-group">
                <label for="sexo">Sexo Tutor</label>
                <select class="form-control" id="sexo" name="sexo">
                  <option value="1">Masculino</option>
                  <option value="2">Femenino</option>
                </select>
              </div>
            </form>
          </div>
          <!-- Pestaña 3 -->
          <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
            <form id="formEditarAlumno" method="post">
              <div class="card-body">
                <input type="hidden" name="idAlumnoE" id="idAlumnoE">
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
                <div class="form-group">
                  <label for="telefonoE">Teléfono</label>
                  <input type="text" name="telefonoE" class="form-control" id="telefonoE" placeholder="Teléfono">
                </div>
                <div class="form-group">
                  <label for="fechaE">Fecha Nacimiento</label>
                  <input type="date" name="fechaE" class="form-control" id="fechaE" placeholder="Fecha Nacimiento">
                </div>
                <div class="form-group">
                  <label for="tutor">Tutor</label>
                  <select class="form-control" name="tutor" id="tutor">
                    <option value="">Seleccione</option>
                    <option value="1">Tutor 1</option>
                    <option value="2">Tutor 2</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="sexo">Sexo</label>
                  <select class="form-control" name="sexo" id="sexo">
                    <option value="1">Masculino</option>
                    <option value="2">Femenino</option>
                  </select>
                </div>
              </div>
              <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Guardar</button>
              </div>

              <?php
              // $editarAlumno = new ctrAlumno();
              // $editarAlumno->ctrEditarAlumno();
              ?>
            </form>
          </div>
        </div>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>