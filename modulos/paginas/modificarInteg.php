<?php 
    $id = $_GET['lirycs'];
    $claseConsultas = new consultas();
    $currentInte = $claseConsultas->getAllUserInte($id);
    $currentUser = $claseConsultas->getDataUser($id);
?>
<link rel="stylesheet" href="<?php echo $raizM;?>css/jquery-ui.css">
<!-- <button type="button" class="btn btn-primary h6 mb-5" style="width:10rem; font-size: 14px;height: 42px;" data-toggle="modal" data-target="#exampleModalLong">
    <i class="fas fa-user-check m-2"></i>Ingresar Usr
</button>
<button type="button" class="btn btn-primary h6 mb-5" style="width:13rem; font-size: 14px;height: 42px;" data-toggle="modal" data-target="#exampleModalLongInt">
    <i class="fas fa-user-check m-2"></i>Ingresar Integr
</button> -->

<?php if($_GET['upDateUsr']=='1'):?>
    <div class="row m-1 p-0">
        <div class="col-md-12 col-sm-12 p-0">
            <div class="alert alert-primary" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h1><?php echo $currentUser['NombreUsr'];?> <?php echo $currentUser['ApellidoUsr'];?></h1>
            </div>
        </div>
    </div>
        <div class="alert alert-success mt-4" id="respuestaCorrectaUser" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="alert alert-danger" id="respuestaErroneaUser"  role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form class="needs-validation User" novalidate id="registrarU">
            <div class="row">
                <div class="col-12">
                    <input required readonly="readonly" type="text"
                        style="background: white;border-radius: 3px; border: 1px solid #bdc7d8;"
                        class="form-control" name="id" value="<?php echo $currentUser['IdUsr'];?>">
                </div>
                <div class="col-6">
                    <input required type="text"
                        style="background: white;border-radius: 3px; border: 1px solid #bdc7d8;"
                        class="form-control mt-3" name="nombre" value="<?php echo $currentUser['NombreUsr'];?>"
                        placeholder="Nombre">
                    <div class="invalid-tooltip">
                        Por favor ingresa el nombre.
                    </div>
                </div>
                <div class="col-6">
                    <input required type="text"
                        style="background: white;border-radius: 3px; border: 1px solid #bdc7d8;"
                        class="form-control mt-3" name="apellido" value="<?php echo $currentUser['ApellidoUsr'];?>"
                        placeholder="Apellido">
                    <div class="invalid-tooltip">
                        Por favor ingresa el apellido.
                    </div>
                </div>
                <div class="col-12">
                    <select required class="custom-select form-control mt-3"
                    style="width: 20rem; background: white;border-radius: 3px; border: 1px solid #bdc7d8;"
                    name="cargo" placeholder="Selecciones una opcion">
                        <option value="<?php echo $currentUser['CargoUsr']?>"><?php echo $currentUser['CargoUsr']?></option>
                        <option value="Coordinador">Coordinador</option>
                        <option value="Reprecentante">Reprecentante</option>
                    </select>
                    <div class="invalid-tooltip">
                        Por favor seleccione una opcion.
                    </div> 
                </div>
                <div class="col-12">
                    <input required type="text" class="form-control  mt-3" value="<?php echo $currentUser['correo']; ?>"
                        style="background: white;border-radius: 3px; border: 1px solid #bdc7d8;"
                        name="correo" placeholder="Correo electrónico">
                    <div class="invalid-tooltip">
                        Por favor ingresa un correo.
                    </div>
                </div>
                <div class="col-12">
                    <input required type="text" class="form-control  mt-3" value="<?php echo $currentUser['telefono'];?>"
                        style="background: white;border-radius: 3px; border: 1px solid #bdc7d8;"
                        name="numero" placeholder="Número celular">
                    <div class="invalid-tooltip">
                        Por favor ingresa un telefono.
                    </div>
                </div>
                <div class="col-12">
                    <input required required readonly="readonly"  type="password" class="form-control  mt-3" value="<?php echo $currentUser['contrasenia']?>"
                        style="background: white;border-radius: 3px; border: 1px solid #bdc7d8;" name="pass"
                        placeholder="password">
                    <div class="invalid-tooltip">
                        Por favor ingresa tu password.
                    </div>
                </div>
                <div class="col-12">
                </div>
                <div class="col-12">
                    <button class="btn btn-raised btn-outline-primary mt-3">Actualizar</button>
                </div>
            </div>
        </form> 
    <script src="<?php echo $raizM;?>js/upDateIntegUsr.js"></script>

<?php elseif($_GET['upDateUsr']=='2'):?>
    <div class="alert alert-primary" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <h1><?php echo $currentInte['NombreInt'];?> <?php echo $currentInte['ApellidoInt'];?></h1>
    </div>
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
                <div class="col-12">
                    <input required readonly="readonly" type="text"  value="<?php echo $currentInte['IdIntegrante'];?>"
                        style="background: white;border-radius: 3px; border: 1px solid #bdc7d8;"
                        class="form-control mt-3" name="IdInt">
                </div>
                <div class="col-6">
                    <input required type="text" value="<?php echo $currentInte['NombreInt'];?>"
                        style="background: white;border-radius: 3px; border: 1px solid #bdc7d8;"
                        class="form-control mt-3" name="nombreInt"
                        placeholder="Nombre">
                    <div class="invalid-tooltip">
                        Por favor ingresa el nombre.
                    </div>
                </div>
                <div class="col-6">
                    <input required type="text" value="<?php echo $currentInte['ApellidoInt'];?>"
                        style="background: white;border-radius: 3px; border: 1px solid #bdc7d8;"
                        class="form-control mt-3" name="apellidoInt" 
                        placeholder="Apellido">
                    <div class="invalid-tooltip">
                        Por favor ingresa el apellido.
                    </div>
                </div>
                <div class="col-12">
                    <input required type="number" class="form-control  mt-3" value="<?php echo $currentInte['TelefonoInt'];?>"
                        style="background: white;border-radius: 3px; border: 1px solid #bdc7d8;"
                        name="numeroInt" placeholder="Número celular">
                    <div class="invalid-tooltip">
                        Por favor ingresa un telefono.
                    </div>
                </div>
                <div class="col-12">
                    <input required type="number" class="form-control  mt-3" value="<?php echo $currentInte['TelefonoEmergencia'];?>"
                        style="background: white;border-radius: 3px; border: 1px solid #bdc7d8;"
                        name="numeroIntE" placeholder="Número Telefono de emergencia">
                    <div class="invalid-tooltip">
                        Por favor ingresa un telefono en caso de emergencia.
                    </div>
                </div>
                <div class="col-6">
                    <select class="custom-select mt-3" required name="UpLoadactivo" id="activo">
                        <option value="<?php echo $currentInte['activo'];?>"><?php echo $currentInte['activo'];?></option>
                        <option value="1">Activo</option>
                        <option value="0">Inactivo</option>
                    </select>
                    <div class="invalid-tooltip">
                        Por favor selecciona una opcion.
                    </div> 
                </div>
                <div class="col-12">
                    <button class="btn btn-raised btn-outline-primary mt-3">Actualizar</button>
                </div>
            </div>
        </form>
    <script src="<?php echo $raizM;?>js/upDateInteg.js"></script>

<?php endif;?>

