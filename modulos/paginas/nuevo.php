<link rel="stylesheet" href="<?php echo $raizM;?>css/site.css">
<link rel="stylesheet" href="<?php echo $raizM;?>css/richtext.min.css">
<script src="<?php echo $raizM;?>js/jquery.richtext.js"></script>
<script defer src="<?php echo $raizM;?>js/all.js"></script>
<form class="needs-validation letra" novalidate id="registrarLetra">
    <div class="row m-1 p-0">
        <div class="col-lg-12 col-md-12 col-sm-12 mt-3 mb-5 p-0">
            <?php include "modulos/componentes/boardLetra.php"; ?>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 mt-5">
            <input required type="text" style="background: white;border-radius: 3px; border: 1px solid #bdc7d8; height: 2.5rem;"
                class="form-control" name="titulo"  placeholder="Titulo">
            <div class="invalid-tooltip">
                Por favor ingresa el Titulo.
            </div> 
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 mt-5">
            <input required type="text" style="background: white;border-radius: 3px; border: 1px solid #bdc7d8; height: 2.5rem;"
                class="form-control" name="autor"  placeholder="Autor">
            <div class="invalid-tooltip">
                Por favor ingresa un autor.
            </div> 
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 mt-4">
            <select class="custom-select" required name="tipo" id="tipo"  onchange="RelPagChange(this)">
                <option value="">Tipo</option>
                <option value="0">Religiosa</option>
                <option value="1">Profana</option>
            </select>
            <div class="invalid-tooltip">
                Por favor selecciona un tipo.
            </div> 
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 p-0 mt-4" id="religiosa">
            <select class="custom-select" name="opcion1" id="opcion" >
                <option value="0">Tipo</option>
                <option value="Alavanza">Alavanza</option>
                <option value="Avivamiento">Avivamiento</option>
                <option value="Reflexion">Reflexion</option>
                <option value="Misal">Misal</option>
                <option value="Otro">otro</option>
            </select>  
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 p-0 mt-4" id="profana">
            <select class="custom-select" name="opcion2" id="genero">
                <option value="0">Tipo</option>
                <option value="Rock-Pop">Rock-pop</option>
                <option value="Clasico">Clasico</option>
                <option value="Sureños">Sureño</option>
                <option value="Rock">Rock</option>
                <option value="Pop">Pop</option>
                <option value="Otro">otro</option>
            </select>  
        </div>
        <div class="col-12  mt-5 mb-5">
            <button class="btn btn-raised btn-outline-primary mt-3 mb-5">Registrar Letra</button>
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
<script>        
        
         
        var religiosa= document.getElementById('religiosa');
        var profana= document.getElementById('profana');
            religiosa.style.display='none';
            profana.style.display='none';
        
            
        const RelPagChange=(sel)=>{
           if(sel.value==="#"){
            religiosa.style.display='none';
            profana.style.display='none';
           }else if(sel.value==="0"){
            religiosa.style.display='block';
            profana.style.display='none';
           }else if(sel.value==="1"){
            religiosa.style.display='none';
            profana.style.display='block';
           }
        }
</script>  
    <p>
        Para poder subir una letra necesitas escribirla en el campo de texto que se encuentra en la parte superior despues de ello podras 
        subirla en pdf 
    </p>

   