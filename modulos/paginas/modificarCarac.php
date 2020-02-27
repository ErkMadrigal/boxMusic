<?php 
$currentGrupo = $claseConsultas->getGrupo(0);

?>

<link rel="stylesheet" href="<?php echo $raizM;?>css/jquery-ui.css">
<script>
  $( function() {
        $( "#accordion" )
        .accordion({
            header: "> div > h3"
        })
        .sortable({
            axis: "y",
            handle: "h3",
            stop: function( event, ui ) {
            ui.item.children( "h3" ).triggerHandler( "focusout" );
    
            $( this ).accordion( "refresh" );
            }
        });
    } );
</script>
<div id="accordion">
    <div class="group">
        <h3>Modificar Portada</h3>
        <div>
        <div class="imagen-portada" id="coverPortadaImage" style="height: 100%; width:100%; background-image: url('<?php echo $raizM.$currentGrupo['img'];?>');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;">
            
            <label class="btn btn-primary cargar-imagen-portada" >
                <i class="fas fa-camera"></i>
                <input type="file"  id="uploadImage" class="d-none" >
            </label>
        </div>
        </div>
    </div>
    <div class="group">
        <h3>Modificar Caracteristicas Personales</h3>
        <div>
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
                                class="form-control" name="nombre" value="<?php echo $currentUser['NombreUsr'];?>"
                                placeholder="Nombre">
                            <div class="invalid-tooltip">
                                Por favor ingresa el nombre.
                            </div>
                        </div>
                        <div class="col-6">
                            <input required type="text"
                                style="background: white;border-radius: 3px; border: 1px solid #bdc7d8;"
                                class="form-control " name="apellido" value="<?php echo $currentUser['ApellidoUsr'];?>"
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
                            <input required type="password" class="form-control  mt-3" value="<?php echo $currentUser['contrasenia']?>"
                                style="background: white;border-radius: 3px; border: 1px solid #bdc7d8;" name="pass"
                                placeholder="password">
                            <div class="invalid-tooltip">
                                Por favor ingresa tu password.
                            </div>
                        </div>
                        <div class="col-12">
                        <!--Inicio Foto Perfil-->
                        <div class="imagen-portada" id="coverPerfileImage" style="margin-top: 1rem;height: 9rem;width: 9rem; background-image: url('<?php echo $raizM.$currentUser['avatar'];?>');
                            background-repeat: no-repeat;
                            background-position: center;
                            background-size: cover;">
                            
                            <label class="btn btn-primary cargar-imagen-portada text-white" style="background: rgba(0,0,0,0.6);
                                margin-top: 6.5rem; width: 9rem;">
                                <i class="fas fa-camera"> </i>
                                <input type="file"  id="uploadImageP" class="d-none" >Actualizar
                            </label>
                        </div>
                        <!--Final Foto Perfil-->
                        </div>
                        <div class="col-12">
                            <button class="btn btn-raised btn-outline-primary mt-3">Actualizar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="group">
        <h3>Modificar Caracteristicas Del Grupo</h3>
        <div>
            <div class="container-fluid">
                <div class="alert alert-success mt-4" id="respuestaCorrectaGrup" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="alert alert-danger" id="respuestaErroneaGrup"  role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="needs-validation Grup" novalidate id="registrarGrup">
                    <div class="row">
                        <div class="col-12">
                            <input required type="text"
                                style="background: white;border-radius: 3px; border: 1px solid #bdc7d8;"
                                class="form-control" name="nombreGru" value="<?php echo $currentGrupo['NombreGru'];?>"
                                placeholder="Nombre">
                            <div class="invalid-tooltip">
                                Por favor ingresa el nombre.
                            </div>
                        </div>
                        
                        <div class="col-12">
                            <input required type="text" class="form-control  mt-3" value="<?php echo $currentGrupo['TelefonoPrincipal'];?>"
                                style="background: white;border-radius: 3px; border: 1px solid #bdc7d8;"
                                name="numeroGru" placeholder="Número celular">
                            <div class="invalid-tooltip">
                                Por favor ingresa un telefono.
                            </div>
                        </div>
                        <div class="col-12">
                            <textarea required type="text" class="form-control  mt-3"
                                style="background: white;border-radius: 3px; border: 1px solid #bdc7d8;" name="dirGrup"
                                placeholder="direccion"><?php echo $currentGrupo['Direccion'];?></textarea>
                            <div class="invalid-tooltip">
                                Por favor ingresa una direccion.
                            </div>
                        </div>
                        <div class="col-12">
                            <textarea required type="text" class="form-control  mt-3"
                                style="background: white;border-radius: 3px; border: 1px solid #bdc7d8;" name="caractGrup"
                                placeholder="caracteristicas"><?php echo $currentGrupo['caracteristicas'];?></textarea>
                            <div class="invalid-tooltip">
                                Por favor ingresa las caracteristicas.
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-raised btn-outline-primary mt-3">Modificar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
  
</div>
<p>para poder modificar algo procura no dejar nada en blanco, y darle click para actualizar, seguido de eso saldra una alerta de error o exito</p>
<script src="<?php echo $raizM;?>js/upDateUser.js"></script>
<script src="<?php echo $raizM;?>js/upDateGrup.js"></script>

<script >
    var url = "<?php echo $raizM;?>";
    
    $('#uploadImage').change(function () {
        if( this.files[0] !== undefined){
            dataForm = new FormData();
            dataForm.append('imagen',this.files[0])
            fetch(url+'modulos/php/upDateImg.php?accion=portada',{
                method : "POST",
                body : dataForm
            })
            .then((response)=>response.json())
            .then((info)=>console.log(info))
            readURLPortada(this);
        }else{
            alert('Imgresa una imagen');
        }
        
    });
    
    function readURLPortada(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                console.log()
                $('#coverPortadaImage').css('background-image', 'url('+e.target.result+')');
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    $('#uploadImageP').change(function () {
        if( this.files[0] !== undefined){
            dataForm = new FormData();
            dataForm.append('imagen',this.files[0])
            fetch(url+'modulos/php/upDateImg.php?accion=usr',{
                method : "POST",
                body : dataForm
            })
            .then((response)=>response.json())
            .then((info)=>console.log(info))
            readURL(this);
        }else{
            alert('Imgresa una imagen');
        }
        
    });
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                console.log()
                $('#coverPerfileImage').css('background-image', 'url('+e.target.result+')');
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
