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
                  <div class="container mt-3">
                    <div class="row align-items-center">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="grado">Filtra Matricula por seccion</label>
                          <select class="form-control" name="grado" id="grado_seccion">
                            <option value="">Seleccione</option>
                            <?php
                            $gradosSeccion = ctrGradosSecciones::ctrComboGseccion();
                            foreach ($gradosSeccion as $grado) {

                              // $item = "idGrado";
                              // $valor = $value["Anio_Academico_idAnio_Academico"];
                              // $nombregrado = ctrAnioAcademico::ctrMostrarAnioAcademico($item, $valor);
                            ?>
                              <option value="<?php echo $grado["idGradoSeccion"] ?>">
                                <?php echo $grado["Grado_idGrado"] ?> <?php echo $grado["Seccion_idSeccion"] ?>
                              </option>
                            <?php
                            }
                            ?>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6 text-right">
                        <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-lg">
                          AGREGAR ALUMNOS
                        </button>
                      </div>
                    </div>
                  </div>
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
                <tbody id="resultado-matricula">
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
                          <a href="index.php?pagina=info" type="button" class="btn btn-secondary btn-sm ">
                            <i class="fa fa-eye "></i>
                          </a>
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
        <h4 class="modal-title">AGREGAR NUEVA MATRICULA</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Pestañas -->
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="tab1-tab" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="true">Datos Alumno</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="tab2-tab" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false">Datos Tutor</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="tab3-tab" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="false">Información Matricula</a>
          </li>
        </ul>
        <!-- Contenido de las pestañas -->
        <div class="tab-content" id="myTabContent">
          <!-- Pestaña 1 -->
          <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
            <form action="" method="post" enctype="multipart/form-data">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="pnombre">Primer Nombre</label>
                      <input type="text" name="pnombre" class="form-control" id="pnombre" placeholder="Primer Nombre">
                    </div>

                    <div class="form-group">
                      <label for="papellido">Primer Apellido</label>
                      <input type="text" name="papellido" class="form-control" id="papellido" placeholder="Primer Apellido">
                    </div>
                    <div class="form-group">
                      <label for="fecha">Fecha Nacimiento</label>
                      <input type="date" name="fecha" class="form-control" id="fecha" placeholder="Fecha Nacimiento">
                    </div>

                    <div class="form-group">
                      <label for="direccion">Dirección</label>
                      <input type="text" name="direccion" class="form-control" id="direccion" placeholder="Dirección">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="snombre">Segundo Nombre</label>
                      <input type="text" name="snombre" class="form-control" id="snombre" placeholder="Segundo Nombre">
                    </div>
                    <div class="form-group">
                      <label for="sapellido">Segundo Apellido</label>
                      <input type="text" name="sapellido" class="form-control" id="sapellido" placeholder="Segundo Apellido">
                    </div>
                    <div class="form-group">
                      <label for="telefono">Teléfono</label>
                      <input type="text" name="telefono" class="form-control" id="telefono" placeholder="Teléfono">
                    </div>

                    <!-- <div class="form-group">
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
                    </div> -->
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
              <!-- <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Guardar</button>
              </div> -->
            </form>
          </div>
          <!-- Pestaña 2 -->
          <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
            <form action="" method="post" enctype="multipart/form-data">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="pnombre">Primer Nombre</label>
                      <input type="text" name="pnombre" class="form-control" id="pnombre" placeholder="Primer Nombre">
                    </div>

                    <div class="form-group">
                      <label for="papellido">Primer Apellido</label>
                      <input type="text" name="papellido" class="form-control" id="papellido" placeholder="Primer Apellido">
                    </div>
                    <div class="form-group">
                      <label for="fecha">Fecha Nacimiento</label>
                      <input type="date" name="fecha" class="form-control" id="fecha" placeholder="Fecha Nacimiento">
                    </div>

                    <div class="form-group">
                      <label for="direccion">Cedula</label>
                      <input type="text" name="direccion" class="form-control" id="direccion" placeholder="Dirección">
                    </div>
                    <div class="form-group">
                      <label for="direccion">Dirección</label>
                      <input type="text" name="direccion" class="form-control" id="direccion" placeholder="Dirección">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="snombre">Segundo Nombre</label>
                      <input type="text" name="snombre" class="form-control" id="snombre" placeholder="Segundo Nombre">
                    </div>
                    <div class="form-group">
                      <label for="sapellido">Segundo Apellido</label>
                      <input type="text" name="sapellido" class="form-control" id="sapellido" placeholder="Segundo Apellido">
                    </div>
                    <div class="form-group">
                      <label for="telefono">Teléfono</label>
                      <input type="text" name="telefono" class="form-control" id="telefono" placeholder="Teléfono">
                    </div>

                    <div class="form-group">
                      <label for="tutor">Parentesco</label>
                      <select class="form-control" name="tutor" id="tutor">
                        <option value="">seleccione</option>
                        <?php
                        $parentesco = ctrPerentesco::ctrComboParentesco();
                        foreach ($parentesco as $pariente) {
                        ?>
                          <option value="<?php echo $pariente["idParentesco"] ?>"><?php echo $pariente["Parentesco"] ?></option>
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
              <!-- <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Guardar</button>
              </div> -->
            </form>
          </div>
          <!-- Pestaña 3 -->
          <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
            <form action="" method="post" enctype="multipart/form-data">
              <div class="card-body">
                <div class="row">
                  <!-- Columna izquierda -->
                  <div class="col-md-6">
                  <div class="form-group">
                      <label for="snombre">Año Academco</label>
                      <input type="text" name="snombre" class="form-control" id="snombre" placeholder="Segundo Nombre">
                    </div>
                    <div class="form-group">
                      <label for="sexo">Seccion</label>
                      <select class="form-control" name="sexo" id="sexo">
                        <option value="">seleccione</option>
                        <?php
                        $secciones = ctrSeccion::ctrComboSecciones();
                        foreach ($secciones as $seccion) {
                        ?>
                          <option value="<?php echo $seccion["idSeccion"] ?>"><?php echo $seccion["NSecc"] ?></option>
                        <?php
                        }
                        ?>
                      </select>
                    </div>
                  </div>

                  <!-- Columna derecha -->
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="tutor">Turno</label>
                      <select class="form-control" name="turno" id="turno">
                        <option value="">seleccione</option>
                        <?php
                        $turnos = ctrTurno::ctrComboTurno();
                        foreach ($turnos as $turno) {
                        ?>
                          <option value="<?php echo $turno["idTurno"] ?>"><?php echo $turno["Turno"] ?></option>
                        <?php
                        }
                        ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="sexo">Grado</label>
                      <select class="form-control" name="sexo" id="sexo">
                        <option value="">seleccione</option>
                        <?php
                        $grados = ctrGrado::ctrComboGrados();
                        foreach ($grados as $grado) {
                        ?>
                          <option value="<?php echo $grado["idGrado"] ?>"><?php echo $grado["Grado"] ?></option>
                        <?php
                        }
                        ?>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <!-- <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div> -->
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