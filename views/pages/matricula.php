<?php

$matricula = ctrMatricula::ctrListarMatricula();
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
 

  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">

            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped rounded-4  tablaMatricula">
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
                          <!-- <a href="pdf.php" target="_blank" class="btnPdfMatricula mr-2"  style="border: none" >
                          <i class="fas fa-file-pdf text-lg text-danger"></i>
                           </a> -->
                          <!-- <a class="border-none btn-ver-perfil mr-2" data-profile="alumno" data-toggle="modal"  data-target="#modal-view-matricula" style="border: none" >
                            <i class="fa fa-eye text-lg text-primary"></i>
                          </a> -->
                          <a class="btnEditarmatricula mr-2" data-toggle="modal" data-target="#modal-editar-matricula" idMatricula="<?php echo ($value["idMatricula"])?>" style="border: none"  >
                            <i class="fas fa-pencil-alt text-lg text-success .no-border"></i>
                          </a>
                         
                          <a class="btnEliminarMatricula mr-2"  idMatriculaE="<?php echo ($value["idMatricula"])?>"  style="border: none" >
                            <i class="fas fa-trash-alt text-lg text-center text-danger .no-border"></i>
                          </a>
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

<div class="modal fade" id="modal-editar-matricula">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="background-color:#14173D">
                <h4 class="modal-title text-white fw-bold" style="font-weight: bold;">EDITAR MATRÍCULA</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="text-white" aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Pestañas -->
                <ul class="nav nav-pillss nav-fill mt-1" id="editarMatriculaTabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active text-uppercase fw-bold" id="editar-tab1-tab" data-toggle="tab" href="#editar-tab1" role="tab" aria-controls="editar-tab1" aria-selected="true">Datos Alumno</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase fw-bold" id="editar-tab2-tab" data-toggle="tab" href="#editar-tab2" role="tab" aria-controls="editar-tab2" aria-selected="false">Datos Tutor</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase fw-bold" id="editar-tab3-tab" data-toggle="tab" href="#editar-tab3" role="tab" aria-controls="editar-tab3" aria-selected="false">Información Matrícula</a>
                    </li>
                </ul>

                <!-- Contenido de las pestañas -->
                <form action="" method="post" enctype="multipart/form-data" class="mt-3" id="form-edit-matriucula">
                    <div class="tab-content" id="editarMatriculaTabContent">
                        <!-- Pestaña 1 - Datos Alumno -->
                        <div class="tab-pane fade show active" id="editar-tab1" role="tabpanel" aria-labelledby="editar-tab1-tab">
                            <div class="row">
                                <input type="hidden" name="matriculaE" id="matriculaE" >
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="edit-pnombre" class="text-uppercase"><i class="fas fa-user"></i> Primer Nombre</label>
                                        <input type="text" name="edit-pnombre" class="form-control text-uppercase" id="edit-pnombre" placeholder="Primer Nombre">
                                    </div>
                                    <div class="form-group">
                                        <label for="edit-papellido" class="text-uppercase"><i class="fas fa-user"></i> Primer Apellido</label>
                                        <input type="text" name="edit-papellido" class="form-control text-uppercase" id="edit-papellido" placeholder="Primer Apellido">
                                    </div>
                                    <div class="form-group">
                                        <label for="edit-fecha" class="text-uppercase"><i class="fas fa-calendar-alt"></i> Fecha Nacimiento</label>
                                        <input type="date" name="edit-fecha" class="form-control text-uppercase" id="edit-fecha" placeholder="Fecha Nacimiento">
                                    </div>
                                    <div class="form-group">
                                        <label for="edit-direccion" class="text-uppercase"><i class="fas fa-map-marker-alt"></i> Dirección</label>
                                        <input type="text" name="edit-direccion" class="form-control text-uppercase" id="edit-direccion" placeholder="Dirección">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="edit-snombre" class="text-uppercase"><i class="fas fa-user"></i> Segundo Nombre</label>
                                        <input type="text" name="edit-snombre" class="form-control text-uppercase" id="edit-snombre" placeholder="Segundo Nombre">
                                    </div>
                                    <div class="form-group">
                                        <label for="edit-sapellido" class="text-uppercase"><i class="fas fa-user"></i> Segundo Apellido</label>
                                        <input type="text" name="edit-sapellido" class="form-control text-uppercase" id="edit-sapellido" placeholder="Segundo Apellido">
                                    </div>
                                    <div class="form-group">
                                        <label for="edit-telefono" class="text-uppercase"><i class="fas fa-phone"></i> Teléfono</label>
                                        <input type="text" name="edit-telefono" class="form-control text-uppercase" id="edit-telefono" placeholder="Teléfono">
                                    </div>
                                    <div class="form-group">
                                        <label for="edit-sexo" class="text-uppercase"><i class="fas fa-venus-mars"></i> Sexo</label>
                                        <select class="form-control text-uppercase" name="edit-sexo" id="edit-sexo">
                                        <option value="">Seleccione</option>
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
                        <!-- Pestaña 2 - Datos Tutor -->
                        <div class="tab-pane fade" id="editar-tab2" role="tabpanel" aria-labelledby="editar-tab2-tab">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="edit-t_pnombre" class="text-uppercase"><i class="fas fa-user"></i> Primer Nombre</label>
                                        <input type="text" name="edit-t_pnombre" class="form-control text-uppercase" id="edit-t_pnombre" placeholder="Primer Nombre">
                                    </div>
                                    <div class="form-group">
                                        <label for="edit-t_papellido" class="text-uppercase"><i class="fas fa-user"></i> Primer Apellido</label>
                                        <input type="text" name="edit-t_papellido" class="form-control text-uppercase" id="edit-t_papellido" placeholder="Primer Apellido">
                                    </div>
                                    <div class="form-group">
                                        <label for="edit-t_fecha" class="text-uppercase"><i class="fas fa-calendar-alt"></i> Fecha Nacimiento</label>
                                        <input type="date" name="edit-t_fecha" class="form-control text-uppercase" id="edit-t_fecha" placeholder="Fecha Nacimiento">
                                    </div>
                                    <div class="form-group">
                                        <label for="edit-t_cedula" class="text-uppercase"><i class="fas fa-id-card"></i> Cédula</label>
                                        <input type="text" name="edit-t_cedula" class="form-control text-uppercase" id="edit-t_cedula" placeholder="Cédula">
                                    </div>
                                    <div class="form-group">
                                        <label for="edit-t_direccion" class="text-uppercase"><i class="fas fa-map-marker-alt"></i> Dirección</label>
                                        <input type="text" name="edit-t_direccion" class="form-control text-uppercase" id="edit-t_direccion" placeholder="Dirección">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="edit-t_snombre" class="text-uppercase"><i class="fas fa-user"></i> Segundo Nombre</label>
                                        <input type="text" name="edit-t_snombre" class="form-control text-uppercase" id="edit-t_snombre" placeholder="Segundo Nombre">
                                    </div>
                                    <div class="form-group">
                                        <label for="edit-t_sapellido" class="text-uppercase"><i class="fas fa-user"></i> Segundo Apellido</label>
                                        <input type="text" name="edit-t_sapellido" class="form-control text-uppercase" id="edit-t_sapellido" placeholder="Segundo Apellido">
                                    </div>
                                    <div class="form-group">
                                        <label for="edit-t_telefono" class="text-uppercase"><i class="fas fa-phone"></i> Teléfono</label>
                                        <input type="text" name="edit-t_telefono" class="form-control text-uppercase" id="edit-t_telefono" placeholder="Teléfono">
                                    </div>
                                    <div class="form-group">
                                        <label for="edit-t_parentesco" class="text-uppercase"><i class="fas fa-users"></i> Parentesco</label>
                                        <select class="form-control text-uppercase" name="edit-t_parentesco" id="edit-t_parentesco">
                                        <option value="">Seleccione</option>
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
                                        <label for="edit-t_sexo" class="text-uppercase"><i class="fas fa-venus-mars"></i> Sexo</label>
                                        <select class="form-control text-uppercase" name="edit-t_sexo" id="edit-t_sexo">
                                            <option value="">Seleccione</option>
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
                        <!-- Pestaña 3 - Información Matrícula -->
                        <div class="tab-pane fade" id="editar-tab3" role="tabpanel" aria-labelledby="editar-tab3-tab">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="edit-t_telefono" class="text-uppercase"><i class="fas fa-phone"></i> Teléfono</label>
                                        <input type="text" name="edit-t_telefono" class="form-control text-uppercase" id="edit-t_telefono" placeholder="Teléfono">
                                    </div>
                                        <div class="form-group">
                                            <label for="edit-anio_academico" class="text-uppercase"><i class="fas fa-calendar-alt"></i> Año Académico</label>
                                            <select class="form-control text-uppercase" name="edit-anio_academico" id="edit-anio_academico">
                                                <option value="">Seleccione</option>
                                                <?php
                                                $anioAcademico = ctrAnioAcademico::ctrComboAnioAcademico();
                                                foreach ($anioAcademico as $anioac) {
                                                ?>
                                                    <option value="<?php echo $anioac["idAnio_Academico"] ?>"><?php echo $anioac["Anio_Academico"] ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                         

                                        </div>
                                        <div class="form-group">
                                            <label for="edit-seccion" class="text-uppercase"><i class="fas fa-columns"></i> Sección</label>
                                            <select class="form-control text-uppercase" name="edit-seccion" id="edit-seccion">
                                                <option value="">Seleccione</option>
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
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="edit-turno" class="text-uppercase"><i class="fas fa-clock"></i> Turno</label>
                                            <select class="form-control text-uppercase" name="edit-turno" id="edit-turno">
                                                <option value="">Seleccione</option>
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
                                            <label for="edit-grado" class="text-uppercase" ><i class="fas fa-graduation-cap"></i> Grado</label>
                                            <select class="form-control text-uppercase" name="edit-grado" id="edit-grado">
                                                <option value="">Seleccione</option>
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
                        </div>
                    </div>
                    <div class="text-center mt-5">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save"></i> Guardar Cambios
                        </button>
                    </div>
                </form>
                <?php
      ctrMatricula::ctrEditarMatricula();
      ?>

            </div>
        </div>
    </div>
</div>