<link rel="stylesheet" href="<?php echo $raizM;?>css/site.css">
<link rel="stylesheet" href="<?php echo $raizM;?>css/richtext.min.css">
<script src="<?php echo $raizM;?>js/jquery.richtext.js"></script>
<script defer src="<?php echo $raizM;?>js/all.js"></script>
<form class="needs-validation clase" novalidate id="registrarClase">
    <div class="row m-1 p-0">
        <div class="col-lg-12 col-md-12 col-sm-12 mt-3 mb-5 p-0">
            <?php include "modulos/componentes/boardLetra.php"; ?>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 mt-4">
            <input required type="text" style="background: white;border-radius: 3px; border: 1px solid #bdc7d8; height: 2.5rem;"
                class="form-control" name="titulo"  placeholder="Titulo">
            <div class="invalid-tooltip">
                Por favor ingresa el Titulo.
            </div> 
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 mt-4">
            <select class="custom-select" required name="formato">
                <option value="">Tipo</option>
                <option value="Video">Viedo</option>
                <option value="Imagen">Imagen</option>
            </select>
            <div class="invalid-tooltip">
                Por favor selecciona un tipo.
            </div> 
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 mt-4">
            <select class="custom-select" required name="tipoClase">
                <option value="">Tipo</option>
                <option value="Guitarra">Guitarra</option>
                <option value="Pandero">Pandero</option>
                <option value="Canto">Canto</option>
                <option value="Piano/teclado">Piano/teclado</option>
            </select>
            <div class="invalid-tooltip">
                Por favor selecciona un tipo.
            </div> 
        </div>
        <div class="col-12  mt-5 mb-5">
            <button class="btn btn-raised btn-outline-primary mt-3 mb-5">Registrar</button>
        </div>
    </div>
</form> 
    <div class="alert alert-primary mt-3"  id="respuestaCorrectaLet" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        exit
    </div>
    <div class="alert alert-danger mt-3" id="respuestaErroneaLet"  role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        error
    </div>
<script src="<?php echo $raizM;?>js/registroCanto.js"></script>
 
    <p>
        Para poder subir una letra necesitas escribirla en el campo de texto que se encuentra en la parte superior despues de ello podras 
        subirla en pdf 
    </p>
