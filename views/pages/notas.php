<?php
$notas = ctrNotas::ctrlistarNotas();
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="text-uppercase" style="font-weight: bold;">Notas</h1>
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
                            <table id="example1" class="table table-bordered table-striped rounded-4  tablaAsignatura">
                                <thead>
                                    <div class="col-md-6">
                                        <button type="button" class="btn btn-sm text-white text-uppercase " data-toggle="modal" data-target="#modal-asignaturas" style="font-weight: bold; background-color: #388E3C;">
                                            <span class="fw-bold text-uppercase ">Agregar Notas</span>
                                        </button>
                                    </div>
                                    <tr class="text-bold text-uppercase text-white" style="background-color:#14173D">
                                        <th>Id</th>
                                        <th>ASIGNATURA</th>
                                        <th>NOTAS</th>
                                        <th>MATRICULA</th>

                                        <th style="width: 5%">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody class="text-bold text-uppercase" id="resultado-matricula">
                                    <?php   ?>

                                    <?php
                                    foreach ($notas as $key => $value) {

                                        $item = "idAsignatura";
                                        $valor = $value["Asignatura_idAsignatura"];
                                        $asignatura = ctrAsignaturas::ctrMostrarAlsignatura($item, $valor);

                                        $item = "idMatricula";
                                        $valor = $value["Matricula_idMatricula"];
                                        $matricula = ctrMatricula::ctrMostrarMatricula($item, $valor);
                                    ?>
                                        <tr>
                                            <td> <?php echo ($key + 1)  ?></td>
                                            <td><?php echo ($asignatura["Asignatura"])  ?> </td>
                                            <td><?php echo ($value["Nota"])  ?> </td>
                                            <td><?php echo ($matricula["CodMatricula"])  ?> </td>

                                            <td>

                                                <div class="btn-group">
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


<div class="modal fade" id="modal-notas">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="background-color:#14173D">
                <h4 class="modal-title text-white text-uppercase" style="font-weight: bold">Agregar Notas</h4>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close" style="font-weight: bold">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post" enctype="multipart/form-data" id="#quickForm">
                    <div class="card-body">

                        <div class="form-group">
                            <label for="asignatura-mat" class="text-uppercase"> Matematica</label>
                            <input type="num" name="asignatura-mat" class="form-control text-uppercase" id="asignatura-mat" placeholder="Matematica" require>
            
                        </div>
                        <div class="form-group">
                            <label for="asignatura-lengua" class="text-uppercase"> Lengua</label>
                            <input type="num" name="asignatura-mat" class="form-control text-uppercase" id="asignatura-mat" placeholder="Lengua" require>
            
                        </div>
                        <div class="form-group">
                            <label for="asignatura-quimica" class="text-uppercase"> Quimica</label>
                            <input type="num" name="asignatura-quimica" class="form-control text-uppercase" id="asignatura-quimica" placeholder="Quimica" require>
            
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