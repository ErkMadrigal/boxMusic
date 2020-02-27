            <!-- Modal Usr-->
<div class="modal fade" id="exampleModalLong"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h1 class="modal-title font-weight-bold h3" id="exampleModalLongTitle">Registrar Nuevo Usuario</h1>                                                
                <button type="button" class="close" data-dismiss="modal"
                    aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!--form-->
                <div class="container-fluid">
                    <div class="alert alert-success mt-4" id="respuestaCorrectaUsr" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="alert alert-danger" id="respuestaErroneaUsr"  role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form class="needs-validation Usr" novalidate id="registrar">
                        <div class="row">
                            <div class="col-6">
                                <input required type="text"
                                    style="background: white;border-radius: 3px; border: 1px solid #bdc7d8;"
                                    class="form-control" name="nombre"
                                    placeholder="Nombre">
                                <div class="invalid-tooltip">
                                    Por favor ingresa el nombre.
                                </div>
                            </div>
                            <div class="col-6">
                                <input required type="text"
                                    style="background: white;border-radius: 3px; border: 1px solid #bdc7d8;"
                                    class="form-control " name="apellido" 
                                    placeholder="Apellido">
                                <div class="invalid-tooltip">
                                    Por favor ingresa el apellido.
                                </div>
                            </div>
                            <div class="col-12">
                                <select required class="custom-select form-control mt-3"
                                style="width: 20rem; background: white;border-radius: 3px; border: 1px solid #bdc7d8;"
                                 name="cargo" placeholder="Selecciones una opcion">
                                    <option value="">Tipo</option>
                                    <option value="Coordinador">Coordinador</option>
                                    <option value="Reprecentante">Reprecentante</option>
                                </select>
                                <div class="invalid-tooltip">
                                    Por favor seleccione una opcion.
                                </div> 
                            </div>
                            <div class="col-12">
                                <input required type="text" class="form-control  mt-3"
                                    style="background: white;border-radius: 3px; border: 1px solid #bdc7d8;"
                                    name="correo" placeholder="Correo electrónico">
                                <div class="invalid-tooltip">
                                    Por favor ingresa un correo.
                                </div>
                            </div>
                            <div class="col-12">
                                <input required type="number" class="form-control  mt-3"
                                    style="background: white;border-radius: 3px; border: 1px solid #bdc7d8;"
                                    name="numero" placeholder="Número celular">
                                <div class="invalid-tooltip">
                                    Por favor ingresa un telefono.
                                </div>
                            </div>
                            <div class="col-12">
                                <input required type="password" class="form-control  mt-3"
                                    style="background: white;border-radius: 3px; border: 1px solid #bdc7d8;" name="pass"
                                    placeholder="password">
                                <div class="invalid-tooltip">
                                    Por favor ingresa tu password.
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-raised btn-outline-primary mt-3">Registrar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>    
</div> 
<script src="<?php echo $raizM;?>js/registroUsr.js"></script>

            <!-- Modal integrante-->
<div class="modal fade" id="exampleModalLongInt"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h1 class="modal-title font-weight-bold h3" id="exampleModalLongTitle">Registrar Nuevo Integrante</h1>                                                
                <button type="button" class="close" data-dismiss="modal"
                    aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!--form-->
                <div class="container-fluid">
                    <div class="alert alert-success mt-4" id="respuestaCorrectaInt" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="alert alert-danger" id="respuestaErroneaInt"  role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form class="needs-validation Inte" novalidate id="registrarInt">
                        <div class="row">
                            <div class="col-6">
                                <input required type="text"
                                    style="background: white;border-radius: 3px; border: 1px solid #bdc7d8;"
                                    class="form-control" name="nombreInt"
                                    placeholder="Nombre">
                                <div class="invalid-tooltip">
                                    Por favor ingresa el nombre.
                                </div>
                            </div>
                            <div class="col-6">
                                <input required type="text"
                                    style="background: white;border-radius: 3px; border: 1px solid #bdc7d8;"
                                    class="form-control " name="apellidoInt" 
                                    placeholder="Apellido">
                                <div class="invalid-tooltip">
                                    Por favor ingresa el apellido.
                                </div>
                            </div>
                            <div class="col-12">
                                <input required type="number" class="form-control  mt-3"
                                    style="background: white;border-radius: 3px; border: 1px solid #bdc7d8;"
                                    name="numeroInt" placeholder="Número celular">
                                <div class="invalid-tooltip">
                                    Por favor ingresa un telefono.
                                </div>
                            </div>
                            <div class="col-12">
                                <input required type="number" class="form-control  mt-3"
                                    style="background: white;border-radius: 3px; border: 1px solid #bdc7d8;"
                                    name="numeroIntE" placeholder="Número Telefono de emergencia">
                                <div class="invalid-tooltip">
                                    Por favor ingresa un telefono en caso de emergencia.
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-raised btn-outline-primary mt-3">Registrar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>    
</div>
<script src="<?php echo $raizM;?>js/registroInteg.js"></script>
            <!-- Modal Tocada-->
<link rel="stylesheet" href="<?php echo $raizM;?>css/bootstrap-clockpicker.css">
<script src="<?php echo $raizM;?>js/bootstrap-clockpicker.js"></script>
<div class="modal fade" id="agregarTocada"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h1 class="modal-title font-weight-bold h3" id="exampleModalLongTitle">Registrar Tocada</h1>                                                
                <button type="button" class="close" data-dismiss="modal"
                    aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!--form-->
                <div class="container-fluid">
                    <div class="alert alert-success mt-4" id="respuestaCorrectaT" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="alert alert-danger" id="respuestaErroneaT"  role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form class="needs-validation Tocada" novalidate id="Tocada">
                        <div class="row">
                            <div class="col-12">
                                <input required type="text"
                                    style="background: white;border-radius: 3px; border: 1px solid #bdc7d8;"
                                    class="form-control" name="nomCli"
                                    placeholder="Nombre">
                                <div class="invalid-tooltip">
                                    Por favor ingresa el nombre.
                                </div>
                            </div>
                            <div class="col-6">
                                <input required type="number" class="form-control  mt-3"
                                    style="background: white;border-radius: 3px; border: 1px solid #bdc7d8;"
                                    name="numCli" placeholder="Número celular">
                                <div class="invalid-tooltip">
                                    Por favor ingresa un telefono.
                                </div>
                            </div>
                            <div class="col-6 mt-3">
                                <input required type="time"
                                    style="background: white;border-radius: 3px; border: 1px solid #bdc7d8;" 
                                    class="form-control" id="startTime" name="hora" value="12:00"
                                    placeholder="Hora">
                            </div>
                            <!-- <script>
                                var startTime = document.getElementById("startTime");
                                var valueSpan = document.getElementById("value");

                                startTime.addEventListener("time", function() {
                                valueSpan.innerText = startTime.value;
                                }, false);
                            </script> -->
                            <div class="col-12">
                                <textarea required class="form-control  mt-3"
                                    style="background: white;border-radius: 3px; border: 1px solid #bdc7d8;"
                                    name="Descripcion" placeholder="Descripcion"></textarea>
                                <div class="invalid-tooltip">
                                    Por favor ingresa una descripcion.
                                </div>
                            </div>
                            <div class="col-6">
                                <input required type="number" class="form-control  mt-3"
                                    style="background: white;border-radius: 3px; border: 1px solid #bdc7d8;"
                                    name="PrecioTotal" placeholder="Precio total">
                                <div class="invalid-tooltip">
                                    Por favor ingresa Precio Total.
                                </div>
                            </div>
                            <div class="col-6">
                                <input required type="number" class="form-control  mt-3"
                                    style="background: white;border-radius: 3px; border: 1px solid #bdc7d8;"
                                    name="aporte" placeholder="Aporte">
                                <div class="invalid-tooltip">
                                    Por favor ingresa un aporte.
                                </div>
                            </div>
                            <div class="col-12">
                                <textarea required class="form-control  mt-3"
                                    style="background: white;border-radius: 3px; border: 1px solid #bdc7d8;"
                                    name="direccion" placeholder="Direccion"></textarea>
                                <div class="invalid-tooltip">
                                    Por favor ingresa una direccion.
                                </div>
                            </div>
                            <div class="col-6">
                                <select required class="custom-select form-control mt-3"
                                style="background: white;border-radius: 3px; border: 1px solid #bdc7d8;"
                                 name="tipoEvento" placeholder="Selecciones una opcion">
                                    <option value="#">Tipo</option>
                                    <option value="Ecleciastico">ecleciastico</option>
                                    <option value="Pagano">Pagano</option>
                                </select>
                                <div class="invalid-tooltip">
                                    Por favor seleccione una opcion.
                                </div> 
                            </div>
                            <div class="col-6">
                                <input required type="text" class="form-control  mt-3"
                                    style="background: white;border-radius: 3px; border: 1px solid #bdc7d8;"
                                    name="cantidadHoras" placeholder="cantidad de horas">
                                <div class="invalid-tooltip">
                                    Por favor ingresa una cantidad de Horas.
                                </div>
                            </div>
                            <div class="col-12">
                                <input required type="date" class="form-control  mt-3"
                                    style="background: white;border-radius: 3px; border: 1px solid #bdc7d8;"
                                    name="fecha" placeholder="Introduce una Fecha">
                                <div class="invalid-tooltip">
                                    Por favor ingresa una fecha.
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-raised btn-outline-primary mt-3">Registrar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>    
</div>
<script src="<?php echo $raizM;?>js/registroTocada.js"></script>

