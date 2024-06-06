<body themebg-pattern="theme1">
    <section class="login-block">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <form method="post" class="md-float-material form-material">
                        <div class="text-center">
                            <img src="../../assets/dist/img/icono.png" alt="logo.png">
                        </div>
                        <div class="auth-box card">
                            <div class="card-block">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h3 class="text-center">Iniciar sesión</h3>
                                    </div>
                                </div>
                                <div class="form-group form-primary">
                                    <input type="text" name="log_user" class="form-control" required>
                                    <span class="form-bar"></span>
                                    <label class="float-label">Usuario</label>
                                </div>
                                <div class="form-group form-primary">
                                    <input type="password" name="log_pass" class="form-control" required>
                                    <span class="form-bar"></span>
                                    <label class="float-label">Contraseña</label>
                                </div>
                                <div class="row m-t-25 text-left">
                                    <div class="col-12">
                                        <div class="checkbox-fade fade-in-primary d-">
                                            <label>
                                                <input type="checkbox" value="">
                                                <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                                <span class="text-inverse">Recuérdame</span>
                                            </label>
                                        </div>
                                        <div class="forgot-phone text-right f-right">
                                            <a href="auth-reset-password.html" class="text-right f-w-600">¿Olvidaste la contraseña?</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary btn-block">Entrar</button>
                                    </div>
                                </div>
                                <hr />
                                <div class="row">
                                    <div class="col-md-10">
                                        <p class="text-inverse text-left"><a href=""><b>Regresar al inicio</b></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php
                        $iniciarSecion = new ctrUsuarios();
                        $iniciarSecion->ctrIniciarSecion();
                        ?>
                    </form>
                </div>
            </div>
        </div>
        <!-- Required Fremwork -->
      <link rel="stylesheet" type="text/css" href="../../assets/dist/css/bootstrap.min.css">
      <!-- waves.css -->
      <link rel="stylesheet" href="../../assets/dist/css/waves.min.css" type="text/css" media="all">
      <!-- themify-icons line icon -->
      <link rel="stylesheet" type="text/css" href="../../assets/dist/css/themify-icons.css">
      <!-- ico font -->
      <link rel="stylesheet" type="text/css" href="../../assets/dist/css/icofont.css">
      <!-- Font Awesome -->
      <link rel="stylesheet" type="text/css" href="../../assets/dist/css/font-awesome.min.css">
      <!-- Style.css -->
      <link rel="stylesheet" type="text/css" href="../../assets/dist/css/stylelogin.css">

      <script type="text/javascript" src=""></script>
<script type="text/javascript" src="../../assets/dist/js/jquery.min.js"></script>
<script type="text/javascript" src="../../assets/dist/js/popper.min.js"></script>
<script type="text/javascript" src="../../assets/dist/js/bootstrap.min.js"></script>
<!-- waves js -->
<script src="../../assets/dist/js/waves.min.js"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="../../assets/dist/js/jquery-slimscroll/jquery.slimscroll.js"></script>
<script type="text/javascript" src="../../assets/dist/js/common-pages.js"></script>
    </section>
</body>