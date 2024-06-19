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
              <table id="example1" class="table table-bordered table-striped tablaMatricula rounded-4">
                <thead>
                  <div class="col-md-6">
                    <button type="button" class="btn btn-primary btn-sm rounded " data-toggle="modal" data-target="#modal-lg"  style="background-color:#14173D"  >
                      <span class="fw-bold text-uppercase ">Agregar Alumno</span>
                    </button>
                  </div>
                  <tr class="text-bold text-uppercase text-white" style="background-color:#14173D">
                    <th>Id</th>
                    <th>Alumno</th>
                    <th>Seccion </th>
                    <th>Año Academico</th>
                    <th>Turno</th>
                    <th>Fechas</th>
                    <th>Acciones</th>
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
                          <a href="index.php?pagina=prueba.pdf.php" target="_blank" class="btnPdfMatricula"  style="border: none" >
                          <i class="fas fa-file-pdf text-lg text-danger"></i>
                           </a>
                          <button class="border-none btn-ver-perfil" data-profile="alumno" data-toggle="modal"  data-target="#modal-ver-matricula" style="border: none" >
                            <i class="fa fa-eye text-lg text-primary"></i>
                          </button>
                          <button type="button" class="btn-editar" data-toggle="modal" data-target="#modal-editar-usuarios" idUsuario=" <?php echo ($roles["id"])  ?>"   style="border: none"  >
                            <i class="fas fa-pencil-alt text-lg text-success .no-border"></i>
                          </button>

                          <button class="btnEliminarMatricula"  idMatriculaE="<?php echo ($value["idMatricula"])?>"  style="border: none" >
                            <i class="fas fa-trash-alt text-lg text-center text-danger .no-border"></i>
                          </button>
                        </div>
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

<div class="modal fade" id="modal-lg">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#14173D">
        <h4 class="modal-title text-white fw-bold">AGREGAR NUEVA MATRICULA</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span class="text-white" aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Pestañas -->
        <ul class="nav nav-pills nav-fill mt-3" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active text-uppercase fw-bold" id="tab1-tab" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="true"   style="background-color:#14173D"  >Datos Alumno</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-uppercase fw-bold" id="tab2-tab" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false">Datos Tutor</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-uppercase fw-bold" id="tab3-tab" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="false">Información Matricula</a>
          </li>
        </ul>
        
        <!-- Contenido de las pestañas -->
        <form action="" method="post" enctype="multipart/form-data">
          <div class="tab-content" id="myTabContent">
            <!-- Pestaña 1 -->
            <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
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
            </div>
            <!-- Pestaña 2 -->
            <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="t_pnombre">Primer Nombre</label>
                      <input type="text" name="t_pnombre" class="form-control" id="t_pnombre" placeholder="Primer Nombre">
                    </div>
                    <div class="form-group">
                      <label for="t_papellido">Primer Apellido</label>
                      <input type="text" name="t_papellido" class="form-control" id="t_papellido" placeholder="Primer Apellido">
                    </div>
                    <div class="form-group">
                      <label for="t_fecha">Fecha Nacimiento</label>
                      <input type="date" name="t_fecha" class="form-control" id="t_fecha" placeholder="Fecha Nacimiento">
                    </div>
                    <div class="form-group">
                      <label for="t_cedula">Cedula</label>
                      <input type="text" name="t_cedula" class="form-control" id="t_cedula" placeholder="Cedula">
                    </div>
                    <div class="form-group">
                      <label for="t_direccion">Dirección</label>
                      <input type="text" name="t_direccion" class="form-control" id="t_direccion" placeholder="Dirección">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="t_snombre">Segundo Nombre</label>
                      <input type="text" name="t_snombre" class="form-control" id="t_snombre" placeholder="Segundo Nombre">
                    </div>
                    <div class="form-group">
                      <label for="t_sapellido">Segundo Apellido</label>
                      <input type="text" name="t_sapellido" class="form-control" id="t_sapellido" placeholder="Segundo Apellido">
                    </div>
                    <div class="form-group">
                      <label for="t_telefono">Teléfono</label>
                      <input type="text" name="t_telefono" class="form-control" id="t_telefono" placeholder="Teléfono">
                    </div>
                    <div class="form-group">
                      <label for="t_parentesco">Parentesco</label>
                      <select class="form-control" name="t_parentesco" id="t_parentesco">
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
                      <label for="t_sexo">Sexo</label>
                      <select class="form-control" name="t_sexo" id="t_sexo">
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
            </div>
            <!-- Pestaña 3 -->
            <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="seccion">Año Academico</label>
                      <select class="form-control" name="anio_acdemico" id="anio_acdemico">
                        <option value="">seleccione</option>
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
                      <label for="seccion">Sección</label>
                      <select class="form-control" name="seccion" id="seccion">
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
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="turno">Turno</label>
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
                      <label for="grado">Grado</label>
                      <select class="form-control" name="grado" id="grado">
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
            </div>
          </div>
          <div class="text-center mt-5">
    <button type="submit" class="btn btn-primary">
        <i class="fas fa-save"></i> Guardar
    </button>
</div>
          <?php
          ctrMatricula::ctrCrearMatricula();
          ?>
        </form>
      </div>
    </div>
  </div>
</div>



<!-- Modal para ver información de la matrícula -->
<div class="modal fade" id="modal-ver-matricula" tabindex="-1" role="dialog" aria-labelledby="modal-ver-matriculaLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="modal-ver-matriculaLabel">Información de la Matrícula</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="alumno-tab" data-toggle="tab" href="#alumno" role="tab" aria-controls="alumno" aria-selected="true">Datos del Alumno</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="tutor-tab" data-toggle="tab" href="#tutor" role="tab" aria-controls="tutor" aria-selected="false">Datos del Tutor</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="matricula-tab" data-toggle="tab" href="#matricula" role="tab" aria-controls="matricula" aria-selected="false">Datos de la Matrícula</a>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="alumno" role="tabpanel" aria-labelledby="alumno-tab">
          <div class="row">
                    <div class="col-md-6">
                        <strong><i class="fas fa-user mr-1"></i> Alumno</strong>
                        <p class="text-muted"><span id="ver-pnombre"></span></p>

                        <strong><i class="fas fa-venus-mars mr-1"></i> Sexo</strong>
                         <p class="text-muted"><span id="ver-sexo"></span></span></p>

                        <strong><i class="fas fa-chalkboard-teacher mr-1"></i> Tutor</strong>
                        
                    </div>
                    <div class="col-md-6">
                        <strong><i class="fas fa-map-marker-alt mr-1"></i> Dirección</strong>
                        <p class="text-muted"><?php echo $alumno['Direccion']; ?></p>

                        <strong><i class="fas fa-pencil-alt mr-1"></i> Fecha de Nacimiento</strong>
                        <p class="text-muted"><?php echo $alumno['Fecha_Nacimiento']; ?></p>

                        <strong><i class="fas fa-phone-alt mr-1"></i> Teléfono</strong>
                        <p class="text-muted"><?php echo $alumno['Telefono']; ?></p>
                    </div>
                </div>
          </div>
          <div class="tab-pane fade" id="tutor" role="tabpanel" aria-labelledby="tutor-tab">
            <p><strong>Primer Nombre:</strong> <span id="ver-t-pnombre"></span></p>
            <p><strong>Segundo Nombre:</strong> <span id="ver-t-snombre"></span></p>
            <p><strong>Primer Apellido:</strong> <span id="ver-t-papellido"></span></p>
            <p><strong>Segundo Apellido:</strong> <span id="ver-t-sapellido"></span></p>
            <p><strong>Cédula:</strong> <span id="ver-t-cedula"></span></p>
            <p><strong>Dirección:</strong> <span id="ver-t-direccion"></span></p>
            <p><strong>Teléfono:</strong> <span id="ver-t-telefono"></span></p>
            <p><strong>Parentesco:</strong> <span id="ver-t-parentesco"></span></p>
          </div>
          <div class="tab-pane fade" id="matricula" role="tabpanel" aria-labelledby="matricula-tab">
            <p><strong>Año Académico:</strong> <span id="ver-anio-academico"></span></p>
            <p><strong>Grado:</strong> <span id="ver-grado"></span></p>
            <p><strong>Sección:</strong> <span id="ver-seccion"></span></p>
            <p><strong>Turno:</strong> <span id="ver-turno"></span></p>
            <p><strong>Fecha:</strong> <span id="ver-fecha-matricula"></span></p>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

