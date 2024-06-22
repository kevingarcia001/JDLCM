<?php
$asignaturas = ctrAsignaturas::ctrlistarAsignaturas();
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 style="font-weight: bold;">Agregar Asignaturas</h1>
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
                                        <button type="button" class="btn btn-sm text-white text-uppercase " data-toggle="modal" data-target="#modal-asignaturas" style="font-weight: bold; background-color: #388E3C;">
                                            <span class="fw-bold text-uppercase ">Agregar Asignaturas</span>
                                        </button>
                                    </div>
                                    <tr class="text-bold text-uppercase text-white" style="background-color:#14173D">
                                        <th>Id</th>
                                        <th>NOMBRE ASIGNATURA</th>
                                        <th style="width: 10%">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody class="text-bold text-uppercase" id="resultado-matricula">
                                    <?php   ?>

                                    <?php
                                    foreach ($asignaturas as $key => $value) {
                                    ?>
                                        <tr>
                                            <td> <?php echo ($key + 1)  ?></td>
                                            <td><?php echo ($value["Asignatura"])  ?> </td>

                                            <td>

                                                <div class="btn-group">
                                                    <a href="pdf.php" target="_blank" class="btnPdfMatricula mr-2" style="border: none">
                                                        <i class="fas fa-file-pdf text-lg text-danger"></i>
                                                    </a>
                                                    <a class="border-none btn-ver-perfil mr-2" data-profile="alumno" data-toggle="modal" data-target="#modal-view-matricula" style="border: none">
                                                        <i class="fa fa-eye text-lg text-primary"></i>
                                                    </a>
                                                    <a class="btnEditarmatricula mr-2" data-toggle="modal" data-target="#modal-editar-matricula" style="border: none">
                                                        <i class="fas fa-pencil-alt text-lg text-success .no-border"></i>
                                                    </a>

                                                    <a class="btnEliminarMatricula mr-2" style="border: none">
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


<div class="modal fade" id="modal-asignaturas">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="background-color:#14173D">
                <h4 class="modal-title text-white text-uppercase" style="font-weight: bold">Agregar Asignatura</h4>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close" style="font-weight: bold">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post" enctype="multipart/form-data" id="quickForm">
                    <div class="card-body">

                        <div class="form-group">
                            <label for="nom-asignatura" class="text-uppercase"> Nombre Asignatura</label>
                            <input type="text" name="nom-asignatura" class="form-control text-uppercase" id="nom-asignatura" placeholder="Nombre Asignatura" require>
                            <div class="invalid-feedback" id="error-nom-asignatura"></div>
                        </div>
                    </div>
                    <div class="text-right">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary" id="btn-guardar">Guardar</button>
                    </div>
                </form>
            </div>

            <?php

            $guardarAsignatura = new ctrAsignaturas();
            $guardarAsignatura->ctrCrearAsignatura();
            ?>

        </div>
    </div>
</div>