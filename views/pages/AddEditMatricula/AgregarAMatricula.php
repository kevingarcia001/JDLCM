<style>
    .active {
        color: #14173D;
    }

    /* Estilo para el borde inferior activo */
    .nav-pillss .nav-link {
        border-bottom: 3px solid transparent;
        /* Inicialmente borde transparente */
        transition: border-color 0.3s;
        /* Transición suave para el borde */
    }

    .nav-pillss .nav-link.active {
        border-bottom-color: #14173D;
        /* Color del borde activo */
    }
</style>


<button type="button" class="btn btn-sm text-white text-uppercase " data-toggle="modal" data-target="#modal-lg" style="font-weight: bold; background-color: #388E3C;">
<span class="fw-bold text-uppercase ">Agregar Matrícula</span>
</button>

<div class="modal fade" id="modal-lg">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="background-color:#14173D">
                <h4 class="modal-title text-white fw-bold" style="font-weight: bold;">AGREGAR NUEVA MATRÍCULA</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="text-white" aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Pestañas -->
                <ul class="nav nav-pillss nav-fill mt-1" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active text-uppercase fw-bold" id="tab1-tab" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="true">Datos Alumno</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase fw-bold" id="tab2-tab" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false">Datos Tutor</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase fw-bold" id="tab3-tab" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="false">Información Matrícula</a>
                    </li>
                </ul>

                <!-- Contenido de las pestañas -->
                <form action="" method="post" enctype="multipart/form-data" class="mt-3" id="quickForm">
                    <div class="tab-content" id="myTabContent">
                        <!-- Pestaña 1 - Datos Alumno -->
                        <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="pnombre" class="text-uppercase"><i class="fas fa-user"></i> Primer Nombre</label>
                                            <input type="text" name="pnombre" class="form-control text-uppercase" id="pnombre" placeholder="Primer Nombre">
                                            <div class="invalid-feedback" id="error-apnombre"></div>
                                        </div>
                                        <div class="form-group">
                                            <label for="papellido" class="text-uppercase"><i class="fas fa-user"></i> Primer Apellido</label>
                                            <input type="text" name="papellido" class="form-control text-uppercase" id="papellido" placeholder="Primer Apellido">
                                            <div class="invalid-feedback" id="error-aprimerapellido"></div>

                                        </div>
                                        <div class="form-group">
                                            <label for="fecha" class="text-uppercase"><i class="fas fa-calendar-alt"></i> Fecha Nacimiento</label>
                                            <input type="date" name="fecha" class="form-control text-uppercase " id="fecha" placeholder="Fecha Nacimiento">
                                            <div class="invalid-feedback" id="error-fecha"></div>

                                        </div>
                                        <div class="form-group">
                                            <label for="direccion" class="text-uppercase"><i class="fas fa-map-marker-alt"></i> Dirección</label>
                                            <input type="text" name="direccion" class="form-control text-uppercase" id="direccion" placeholder="Dirección">
                                            <div class="invalid-feedback" id="error-adireccion"></div>

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="snombre" class="text-uppercase"><i class="fas fa-user"></i> Segundo Nombre</label>
                                            <input type="text" name="snombre" class="form-control text-uppercase" id="snombre" placeholder="Segundo Nombre">
                                            <div class="invalid-feedback" id="error-asegunnombre"></div>

                                        </div>
                                        <div class="form-group">
                                            <label for="sapellido" class="text-uppercase"><i class="fas fa-user"></i> Segundo Apellido</label>
                                            <input type="text" name="sapellido" class="form-control text-uppercase" id="sapellido" placeholder="Segundo Apellido">
                                            <div class="invalid-feedback" id="error-asegundoapellido"></div>

                                        </div>
                                        <div class="form-group">
                                            <label for="telefono" class="text-uppercase"><i class="fas fa-phone"></i> Teléfono</label>
                                            <input type="number" name="telefono" class="form-control text-uppercase" id="telefono" placeholder="Teléfono">
                                            <div class="invalid-feedback" id="error-atelefono"></div>

                                        </div>
                                        <div class="form-group">
                                            <label for="sexo" class="text-uppercase"><i class="fas fa-venus-mars"></i> Sexo</label>
                                            <select class="form-control text-uppercase"  name="sexo" id="sexo">
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
                                            <div class="invalid-feedback" id="error-asexo"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Pestaña 2 - Datos Tutor -->
                        <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="t_pnombre" class="text-uppercase"><i class="fas fa-user"></i> Primer Nombre</label>
                                            <input type="text" name="t_pnombre" class="form-control text-uppercase" id="t_pnombre" placeholder="Primer Nombre">
                                            <div class="invalid-feedback" id="error-tprimernombre"></div>

                                        </div>
                                        <div class="form-group">
                                            <label for="t_papellido" class="text-uppercase"><i class="fas fa-user"></i> Primer Apellido</label>
                                            <input type="text" name="t_papellido" class="form-control text-uppercase" id="t_papellido" placeholder="Primer Apellido">
                                            <div class="invalid-feedback" id="error-tprimerapellido"></div>

                                        </div>
                                        <div class="form-group">
                                            <label for="t_cedula" class="text-uppercase"><i class="fas fa-id-card"></i> Cédula</label>
                                            <input type="text" name="t_cedula" class="form-control text-uppercase" id="t_cedula" placeholder="Cédula">
                                            <div class="invalid-feedback" id="error-tcedula"></div>

                                        </div>
                                        <div class="form-group">
                                            <label for="t_direccion" class="text-uppercase"><i class="fas fa-map-marker-alt"></i> Dirección</label>
                                            <input type="text" name="t_direccion" class="form-control text-uppercase" id="t_direccion" placeholder="Dirección">
                                            <div class="invalid-feedback" id="error-tdireccion"></div>

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="t_snombre" class="text-uppercase"><i class="fas fa-user"></i> Segundo Nombre</label>
                                            <input type="text" name="t_snombre" class="form-control text-uppercase" id="t_snombre" placeholder="Segundo Nombre">
                                            <div class="invalid-feedback" id="error-tsegudnombre"></div>

                                        </div>
                                        <div class="form-group">
                                            <label for="t_sapellido" class="text-uppercase"><i class="fas fa-user"></i> Segundo Apellido</label>
                                            <input type="text" name="t_sapellido" class="form-control text-uppercase" id="t_sapellido" placeholder="Segundo Apellido">
                                            <div class="invalid-feedback" id="error-tsegundoapellido"></div>

                                        </div>
                                        <div class="form-group">
                                            <label for="t_telefono" class="text-uppercase"><i class="fas fa-phone"></i> Teléfono</label>
                                            <input type="number" name="t_telefono" class="form-control text-uppercase" id="t_telefono" placeholder="Teléfono">
                                            <div class="invalid-feedback" id="error-ttelefono"></div>

                                        </div>
                                        <div class="form-group">
                                            <label for="t_parentesco" class="text-uppercase"><i class="fas fa-users"></i> Parentesco</label>
                                            <select class="form-control text-uppercase" name="t_parentesco" id="t_parentesco">
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
                                            <div class="invalid-feedback" id="error-parentesco"></div>

                                        </div>
                                        <div class="form-group">
                                            <label for="t_sexo" class="text-uppercase"><i class="fas fa-venus-mars"></i> Sexo</label>
                                            <select class="form-control text-uppercase" name="t_sexo" id="t_sexo">
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
                                            <div class="invalid-feedback" id="error-tsexo"></div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Pestaña 3 - Información Matrícula -->
                        <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="CodMatricula" class="text-uppercase"><i class="">#</i> Código Matrícula</label>
                                        <input type="text" name="CodMatricula" class="form-control text-uppercase" id="CodMatricula" placeholder="Código Matrícula">
                                    </div>
                                        <div class="form-group">
                                            <label for="anio_academico" class="text-uppercase"><i class="fas fa-calendar-alt"></i> Año Académico</label>
                                            <select class="form-control text-uppercase" name="anio_academico" id="anio_academico">
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
                                            <div class="invalid-feedback" id="error-anioac"></div>

                                        </div>
                                        <div class="form-group">
                                            <label for="seccion" class="text-uppercase"><i class="fas fa-columns"></i> Sección</label>
                                            <select class="form-control text-uppercase" name="seccion" id="seccion">
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
                                            <div class="invalid-feedback" id="error-seccion"></div>

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="turno" class="text-uppercase"><i class="fas fa-clock"></i> Turno</label>
                                            <select class="form-control text-uppercase" name="turno" id="turno">
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
                                            <div class="invalid-feedback" id="error-turno"></div>

                                        </div>
                                        <div class="form-group">
                                            <label for="grado" class="text-uppercase" ><i class="fas fa-graduation-cap"></i> Grado</label>
                                            <select class="form-control text-uppercase" name="grado" id="grado">
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
                                            <div class="invalid-feedback" id="error-grado"></div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-5">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary" id="btn-guardar">Guardar</button>
                    </div>
                    <?php
                   ctrMatricula::ctrCrearMatricula();
                    ?>
                </form>
            </div>
        </div>
    </div>
</div>