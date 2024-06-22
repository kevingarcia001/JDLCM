<!-- <a class="btn-editar mr-2" data-toggle="modal" data-target="#modal-editar-usuarios" idUsuario=" <?php echo ($roles["id"])  ?>" style="border: none">
    <i class="fas fa-pencil-alt text-lg text-success .no-border"></i>
</a> -->

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
                                            <!-- Aquí puedes cargar opciones desde PHP si es necesario -->
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
                                            <!-- Aquí puedes cargar opciones desde PHP si es necesario -->
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="edit-t_sexo" class="text-uppercase"><i class="fas fa-venus-mars"></i> Sexo</label>
                                        <select class="form-control text-uppercase" name="edit-t_sexo" id="edit-t_sexo">
                                            <option value="">Seleccione</option>
                                            <!-- Aquí puedes cargar opciones desde PHP si es necesario -->
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Pestaña 3 - Información Matrícula -->
                        <div class="tab-pane fade" id="editar-tab3" role="tabpanel" aria-labelledby="editar-tab3-tab">
                            <div class="form-group">
                                <label for="edit-codigo" class="text-uppercase"><i class="fas fa-id-card"></i> Código de Matrícula</label>
                                <input type="text" name="edit-codigo" class="form-control text-uppercase" id="edit-codigo" placeholder="Código de Matrícula">
                            </div>
                            <div class="form-group">
                                <label for="edit-fecha_matricula" class="text-uppercase"><i class="fas fa-calendar-alt"></i> Fecha de Matrícula</label>
                                <input type="date" name="edit-fecha_matricula" class="form-control text-uppercase" id="edit-fecha_matricula" placeholder="Fecha de Matrícula">
                            </div>
                            <div class="form-group">
                                <label for="edit-grado" class="text-uppercase"><i class="fas fa-graduation-cap"></i> Grado</label>
                                <select class="form-control text-uppercase" name="edit-grado" id="edit-grado">
                                    <option value="">Seleccione</option>
                                    <!-- Aquí puedes cargar opciones desde PHP si es necesario -->
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-5">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save"></i> Guardar Cambios
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>