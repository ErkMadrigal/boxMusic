    
    <section id='contenedor_general'  style="background-image: url(<?php echo $raizM;?>img/bg.jpg);"></section>
        <?php include "modulos/componentes/reloj.php";?>

        <section id='body'>
            <section id='scrolldown'>
                <p id='titulo'>Inicio de Sesion</p>
                <p id='menorque'><</p>
            </section>
                    <div class="card" style="border-radius:1rem; width:100%;">
                        <div class="card-header h4">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-12">Inicia Sesion </div>
                                <div class="col-lg-8 col-md-8 col-sm-12">
                                    <div class="alert alert-danger h6" id="respuestaErroneaLog" role="alert"></div>
                                </div>
                            </div>
                         </div>
                        
                        <form id="loginUser" class="login-validation mt-5" novalidate class="mb-0">
                            <div class="row m-4" >
                                <div class="col-lg-1 col-md-11 col-sm-1"><i class="fas fa-sign-in-alt" style=" margin-left:-1rem; font-size: 2rem; color: rgba(0,0,0,0.3);"></i></div>
                                    <div class="col-lg-11 col-md-11 col-sm-11">
                                    
                                        <input type="text" style="background: white;border-radius: 3px; border: 1px solid #bdc7d8; margin-left:-1rem;"
                                            name="correoTelefonoLogin" class="form-control w-100" required placeholder="Correo electrónico o teléfono" >
                                        <div class="invalid-tooltip">
                                            Por favor ingresa tu correo o tu telefono.
                                        </div>
                                    </div>
                                    <div class="col-lg-1 col-md-11 col-sm-1 mt-3"><i class="fas fa-key" style=" margin-left:-1rem; font-size: 2rem; color: rgba(0,0,0,0.3);"></i></div>
                                    <div class="col-lg-11 col-md-11 col-sm-11 mt-3">
                                        <input type="password" style="background: white;border-radius: 3px; border: 1px solid #bdc7d8;margin-left:-1rem;" 
                                        name="paswordLogin"  class="form-control w-100" required placeholder="Contraseña" >
                                        <div class="invalid-tooltip">
                                            Por favor ingresa tu contraseña.
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-12 col-sm-12 mt-5 mb-5">
                                        <button class="btn btn-primary float-right mr-5">Entrar</button>
                                    </div>

                                </div>
                            </div> 
                        </form> 

                    </div>
            <script>
                var raiz = "<?php echo $raizM;?>";
            </script>
            <script src="<?php echo $raizM?>js/login-usr.js"></script>
        </section>