<?php 
    $idLyr = $_GET["lirycs"];
    $claseConsultas = new consultas();
    $currentLyrics = $claseConsultas->getAllLyrics($idLyr);
    
    ?>
<a style="margin-top:-3rem;" href="<?php echo $raizM."Managers.php?dir=modificarLetra&lirycs=".$idLyr?>" class="btn btn-primary mb-4">Modoficar</a> 

<div class="alert alert-primary w-100" role="alert" style="margin-top:0rem;">
     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
     </button>
     <h1><?php echo $currentLyrics['Titulo'];?></h1>
     <h6><?php echo $currentLyrics['Autor'];?></h6>
</div> 
<h6><?php echo $currentLyrics['Letra'];?></h6>
<!-- pdf -->
    <!-- <a type="button" class="btn btn-primary mt-2 mb-2" href="<?php echo $raizM;?>archivos/acorde.pdf"><i class="fas fa-compress mr-2"></i>Maximisar</a>

    <embed src="<?php echo $raizM;?>archivos/acorde.pdf" type="application/pdf" width="100%" height="600px" /> -->
    <!--<embed src="<?php echo $raizM;?>archivos/acorde.pdf#toolbar=0&navpanes=0&scrollbar=0" type="application/pdf" width="100%" height="600px" />-->

    <?php /*
        $archivo=fopen($raizM."archivos/letra.txt","r") or die ("Error al leer");
        while(!feof($archivo)){
            $linea=fgets($archivo);

            $saltoLinea=nl2br($linea);

            echo $saltoLinea;
        }
        fclose($archivo);*/
    ?> 
    <br>
    <!-- <a type="button" class="btn btn-primary mt-5" href="<?php echo $raizM;?>archivos/acorde.pdf"><i class="fas fa-file-download mr-2"></i></i>Descarga de la letra pdf</a> -->
<!-- end pfd -->
<div class="mt-5">
     <h2>Coro Semilleros</h2>
          <p>Un Semillero es un sitio donde se siembran los frutos o un lugar donde se guardan las semillas. Es un área de terreno preparado y acondicionado especialmente para colocar las semillas con la finalidad de producir su germinación bajo las menores condiciones y cuidados, a objeto de que pueda crecer sin dificultad hasta que la plántula este lista para el trasplante.El semillero es el sitio adecuado para que la semilla inicie su primera fase de desarrollo. Luego la planta crecerá y será trasplantada al terreno definitivo.</p>
</div>