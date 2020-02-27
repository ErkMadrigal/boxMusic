<?php 
  $datosSuma = ($currentAdmin+$currentInteg);
  $totalInegrantes = ($currentInteg*100)/$datosSuma;
  $totalAdmin = ($currentAdmin*100)/$datosSuma;
?>
<div class="row m-1 p-0">
     <div class="col-xl-3 col-md-6 mb-4">
          <a href="<?php echo $raizM?>Usually.php?dir=contactos&tipoUsr=2&sizeI=1&btnImg=1">     
               <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                         <div class="row no-gutters align-items-center">
                              <div class="col mr-2">
                                   <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Administradores</div>
                                   <div class="row no-gutters align-items-center">
                                   <div class="col-auto">
                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo round($totalAdmin);?>%</div>
                                   </div>
                                   <div class="col">
                                        <div class="progress progress-sm mr-2">
                                             <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo round($totalAdmin);?>%"
                                                  aria-valuenow="<?php echo round($totalAdmin);?>" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                   </div>
                                   </div>
                              </div>
                              <div class="col-auto">
                                   <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                              </div>
                         </div>
                    </div>
               </div>
          </a>
     </div>
     <div class="col-xl-3 col-md-6 mb-4">
          <a href="<?php echo $raizM?>Usually.php?dir=contactos&tipoUsr=1&sizeI=1&btnImg=1">     
               <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                         <div class="row no-gutters align-items-center">
                              <div class="col mr-2">
                                   <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Integrantes</div>
                                   <div class="row no-gutters align-items-center">
                                   <div class="col-auto">
                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo round($totalInegrantes);?>%</div>
                                   </div>
                                   <div class="col">
                                        <div class="progress progress-sm mr-2">
                                             <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo $totalInegrantes;?>%"
                                                  aria-valuenow="<?php echo round($totalInegrantes);?>" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                   </div>
                                   </div>
                              </div>
                              <div class="col-auto">
                                   <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                              </div>
                         </div>
                    </div>
               </div>
          </a>
     </div>
     <div class="col-xl-3 col-md-6 mb-4">
          <a href="<?php echo $raizM?>Usually.php?dir=todosCantos&selectCantos=1&sizeI=1&btnImg=1&Tipo=1&Us=2">
               <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                         <div class="row no-gutters align-items-center">
                              <div class="col mr-2">
                                   <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Letras (Paganas)</div>
                                   <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $currentLetP;?></div>
                              </div>
                              <div class="col-auto">
                                   <i class="fas fa-comments fa-2x text-gray-300"></i>
                              </div>
                         </div>
                    </div>
               </div>
          </a>
     </div>
     <div class="col-xl-3 col-md-6 mb-4">
          <a href="<?php echo $raizM?>Usually.php?dir=todosCantos&selectCantos=2&sizeI=1&btnImg=1&Tipo=0&Us=2">
               <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                         <div class="row no-gutters align-items-center">
                              <div class="col mr-2">
                                   <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Letras (cantos)</div>
                                   <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $currentLetE;?></div>
                              </div>
                              <div class="col-auto">
                                   <i class="fas fa-comments fa-2x text-gray-300"></i>
                              </div>
                         </div>
                    </div>
               </div>
          </a>
     </div>
          
</div>

<div class="card text-center mt-5 p-0">
     <div class="card-header bg-primary">
          Misal Semanal
     </div>
     <div class="card-body">
          <h5 class="card-title">Misa</h5>
          <p class="card-text">Cantos Seleccionados</p>
          <a href="<?php echo $raizM;?>Usually.php?dir=seleccion" class="btn btn-primary">Cantos seleccionados</a>
     </div>
     <div class="card-footer text-muted">
          12 de enero del 2020
     </div>
</div>
<div id="consultas">
     
     
</div>
<div class="mt-5">
     <h2>Coro Semilleros</h2>
          <p>Un Semillero es un sitio donde se siembran los frutos o un lugar donde se guardan las semillas. Es un área de terreno preparado y acondicionado especialmente para colocar las semillas con la finalidad de producir su germinación bajo las menores condiciones y cuidados, a objeto de que pueda crecer sin dificultad hasta que la plántula este lista para el trasplante.El semillero es el sitio adecuado para que la semilla inicie su primera fase de desarrollo. Luego la planta crecerá y será trasplantada al terreno definitivo.</p>
</div>
<div class="alert alert-primary mt-5" role="alert">
     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
     </button>
     <h2>Corro Semilleros</h2>
          <p><strong>Ubicados</strong> en la colonia Santiaguito Tlalcilalcalli </p>
          <p><strong>Telefonos principales</strong> -72299754 & 7222666149</p>
          <p><strong>Horarios</strong> <br>-Viernes ensallos de 4pm-6pm <br>-Sabados ensallos de 4pm-6pm <br>-Domingo misa de 8:30am-9am </p>
          <samp>(ensallos & misa en la iglesia de Santiaguito )</samp>
</div>
     <script>
      var accion='<?php echo 'eventos';?>';
     </script>
     <script src="<?php echo $raizM;?>js/consultas.js"></script>
     <script>
       setInterval(()=>getEventos(), 1000);
     </script>
