<body themebg-pattern="theme1">
    <section class="login-block">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <form method="post" class="md-float-material form-material">
                        <div class="text-center">
                            <img src="../../assets/dist/img/logo1.png" alt="logo.png">
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
    </section>