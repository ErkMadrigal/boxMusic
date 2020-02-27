<?php 

$id=$_GET['Id'];

$currentTocada = $claseConsultas->getTocada($id);
?>
<!--form-->
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
    <div class="row m-0 p-0">
    <div class="col-12">
            <input readonly="readonly" value="<?php echo $currentTocada['IdTocada'];?>"
                class="form-control" name="id">
        </div>
        <div class="col-12">
            <input required type="text" value="<?php echo $currentTocada['Nombre'];?>"
                style="background: white;border-radius: 3px; border: 1px solid #bdc7d8;"
                class="form-control mt-3" name="nomCli"
                placeholder="Nombre">
            <div class="invalid-tooltip">
                Por favor ingresa el nombre.
            </div>
        </div>
        <div class="col-6">
            <input required type="number" value="<?php echo $currentTocada['telefono'];?>" class="form-control  mt-3"
                style="background: white;border-radius: 3px; border: 1px solid #bdc7d8;"
                name="numCli" placeholder="Número celular">
            <div class="invalid-tooltip">
                Por favor ingresa un telefono.
            </div>
        </div>
        <div class="col-6 mt-3">
            <input required type="time" value="<?php echo $currentTocada['hora'];?>"
                style="background: white;border-radius: 3px; border: 1px solid #bdc7d8;" 
                class="form-control" id="startTime" name="hora" value="12:00"
                placeholder="Hora">
        </div>
        <div class="col-12">
            <textarea required class="form-control mt-3" 
                style="background: white;border-radius: 3px; border: 1px solid #bdc7d8;"
                name="Descripcion" placeholder="Descripcion"><?php echo $currentTocada['descripcion'];?></textarea>
            <div class="invalid-tooltip">
                Por favor ingresa una descripcion.
            </div>
        </div>
        <div class="col-6">
            <input required type="number" class="form-control  mt-3" value="<?php echo $currentTocada['precioTotal'];?>"
                style="background: white;border-radius: 3px; border: 1px solid #bdc7d8;"
                name="PrecioTotal" placeholder="Precio total">
            <div class="invalid-tooltip">
                Por favor ingresa Precio Total.
            </div>
        </div>
        <div class="col-6">
            <input required type="number" class="form-control  mt-3" value="<?php echo $currentTocada['aporte'];?>"
                style="background: white;border-radius: 3px; border: 1px solid #bdc7d8;"
                name="aporte" placeholder="Aporte">
            <div class="invalid-tooltip">
                Por favor ingresa un aporte.
            </div>
        </div>
        <div class="col-12">
            <textarea required class="form-control  mt-3" 
                style="background: white;border-radius: 3px; border: 1px solid #bdc7d8;"
                name="direccion" placeholder="Direccion"><?php echo $currentTocada['direccion'];?></textarea>
            <div class="invalid-tooltip">
                Por favor ingresa una direccion.
            </div>
        </div>
        <div class="col-6">
            <select required class="custom-select form-control mt-3"
            style="background: white;border-radius: 3px; border: 1px solid #bdc7d8;"
                name="tipoEvento" placeholder="Selecciones una opcion">
                <option value="<?php echo $currentTocada['tipo'];?>"><?php echo $currentTocada['tipo'];?></option>
                <option value="Ecleciastico">ecleciastico</option>
                <option value="Pagano">Pagano</option>
            </select>
            <div class="invalid-tooltip">
                Por favor seleccione una opcion.
            </div> 
        </div>
        <div class="col-6">
            <input required type="text" class="form-control  mt-3" value="<?php echo $currentTocada['cantidadHoras'];?>"
                style="background: white;border-radius: 3px; border: 1px solid #bdc7d8;"
                name="cantidadHoras" placeholder="cantidad de horas">
            <div class="invalid-tooltip">
                Por favor ingresa una cantidad de Horas.
            </div>
        </div>
        <div class="col-12">
            <input required type="date" class="form-control  mt-3" value="<?php echo $currentTocada['fecha'];?>"
                style="background: white;border-radius: 3px; border: 1px solid #bdc7d8;"
                name="fecha" placeholder="Introduce una Fecha">
            <div class="invalid-tooltip">
                Por favor ingresa una fecha.
            </div>
        </div>
        <div class="col-12">
            <button class="btn btn-raised btn-outline-primary mt-3">modificar</button>
        </div>
    </div>
</form>
<script src="<?php echo $raizM;?>js/modificarTocada.js"></script>
