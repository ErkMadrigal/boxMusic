<style>
     .button{
          margin-top: -2.3rem;
          margin-left: -8.19rem;
          margin-bottom: 3rem;
     }
     .boton{
          width:10rem;
          font-size: 14px;
          height: 52px;
     }
     .ocultatexto{
          margin-top: -.5rem;
     }
     @media (max-width: 827px){
          .button{
               margin-top: -12.4rem;
               margin-left: 0rem;
          }  
          
     }
     @media (max-width: 770px){
          .ocultatexto{
               display: none;
          }  
          
     }

     @media (min-width: 700px and max-width: 700px){
          .ocultatexto{
               display: none;
          } 
          .button{
               margin-top: -2.4rem;
               margin-left: 8.2rem;
               argin-bottom: 1rem;
          }
          .imagen-portada{
               margin-top:2rem;
               height: 22rem;
          }
          .boton{
               width:5.34rem;
               font-size: 14px;
               height: 52px;
          }
          .lertBtn{
               margin-top: -5rem;
          }
          
     }
     @media (max-width: 413px){
          .ocultatexto{
               display: none;
          } 
          .button{
               margin-top: -12.4rem;
               margin-left: 0rem;
               argin-bottom: 1rem;
          }
          .imagen-portada{
               margin-top:2rem;
               height: 22rem;
          }
          .boton{
               width:5.32rem;
               font-size: 14px;
               height: 52px;
          }
          .lertBtn{
               margin-top: -5rem;
          }
          
     }
</style>
<?php 
     $currentGrupo = $claseConsultas->getGrupo(0);
     $datosSuma = ($currentAdmin+$currentInteg);
     $totalInegrantes = ($currentInteg*100)/$datosSuma;
     $totalAdmin = ($currentAdmin*100)/$datosSuma;

?>
     <div class="imagen-portada" id="coverPortadaImage" style="height: 22rem; width:100%; background-image: url('<?php echo $raizM.$currentGrupo['img'];?>');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            margin-top: -5.6rem;">
    </div>
    <label class="btn btn-primary btn-file rounded-circle" style="height: 8rem;width: 8rem;background-image: url('<?php echo $raizM.$currentUser['avatar']?>');
                        background-repeat: no-repeat;
                        background-position: center;
                        background-size: cover;
                        border: 4px solid white;
                        position: relative;
                        top: -8.4rem;
                        padding: 0;">
                        <div class="nombre text-white h1" style="font-family: unset; margin-left: 9rem; margin-top: 1rem;">
                              <?php echo $currentUser['NombreUsr'];?> 
                              <?php echo $currentUser['ApellidoUsr'];?>
                        </div>
    </label>
    <div class="btn-group btn-group-toggle button">
          <button type="button" class="btn btn-primary h6 boton"  data-toggle="modal" data-target="#exampleModalLong">
               <i class="fas fa-user-check m-2"></i><p class="ocultatexto text-white">Ingresar Usr</p> 
          </button>
          <button type="button" class="btn btn-primary h6 boton"  data-toggle="modal" data-target="#exampleModalLongInt">
                <i class="fas fa-user-check m-2"></i><p class="ocultatexto text-white">Ingresar Integr</p>
          </button>
          <button type="button" class="btn btn-primary h6 boton" >
               <a href="<?php echo $raizM;?>Managers.php?dir=modificarCarac">

                    <i class="fas fa-wrench m-2"></i>
                    <p class="ocultatexto text-white">modificar</p>
               </a>
          </button>
          <button type="button" class="btn btn-primary h6 boton" >
               <a href="<?php echo $raizM;?>Managers.php?dir=clase">
               <i class="fas fa-users m-2"></i></i><p class="ocultatexto text-white">Clases</p>
               </a>
          </button>
          <div class="dropleft">
               <button type="button" class="btn btn-primary h6 nav-link dropdown-toggle boton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width:4.64rem; height: 52px;">
                    <i class="fad fa-users-class m-2"></i>
                    <p class="ocultatexto text-white">Evento</p>
               </button>
               <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" data-toggle="modal" data-target="#agregarTocada" href="#">
                         <i class="fab fa-itunes-note m-2"></i>Tocada
                    </a>
                    <a class="dropdown-item" href="<?php echo $raizM?>Managers.php?dir=calendario">
                         <i class="fab fa-itunes-note m-2"></i>buscar Tocada
                    </a>
                    <a class="dropdown-item" href="<?php echo $raizM?>Managers.php?dir=calendario">
                         <i class="fas fa-calendar-week m-2"></i>evento
                    </a>
               </div>
          </div>      
    </div>
     <div class="row m-1 p-0">

          <!-- Earnings (Monthly) Card Example -->
          <div class="col-xl-3 col-md-6 mb-4 lertBtn">
               <a href="<?php echo $raizM?>Managers.php?dir=calendario">
                    <div class="card border-left-primary shadow h-100 py-2">
                         <div class="card-body">
                              <div class="row no-gutters align-items-center">
                                   <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">pendientes</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $currentEvent;?></div>
                                   </div>
                                   <div class="col-auto">
                                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                   </div>
                              </div>
                         </div>
                    </div>
               </a>
          </div>
          <!-- Earnings (Monthly) Card Example -->
          <div class="col-xl-3 col-md-6 mb-4">
               <a href="uber">
                    <div class="card border-left-success shadow h-100 py-2">
                         <div class="card-body">
                              <div class="row no-gutters align-items-center">
                                   <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Precios (transportes)</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">$100</div>
                                   </div>
                                   <div class="col-auto">
                                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                   </div>
                              </div>
                         </div>
                    </div>
               </a>
          </div>

          <!-- Earnings (Monthly) Card Example -->
          <div class="col-xl-3 col-md-6 mb-4">
               <a href="<?php echo $raizM?>Managers.php?dir=contactos&tipoUsr=2&sizeI=1&btnImg=1">     
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
                                                       aria-valuenow="<?php echo round($totalAdmin);?>%" aria-valuemin="0" aria-valuemax="100"></div>
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
               <a href="<?php echo $raizM?>Managers.php?dir=contactos&tipoUsr=1&sizeI=1&btnImg=1">     
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
                                                  <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo round($totalInegrantes);?>%"
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

          <!-- Pending Requests Card Example -->
          <div class="col-xl-3 col-md-6 mb-4">
               <a href="<?php echo $raizM?>Managers.php?dir=todosCantos&selectCantos=1&sizeI=1&btnImg=1&Tipo=1&Us=2">
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
               <a href="<?php echo $raizM?>Managers.php?dir=todosCantos&selectCantos=2&sizeI=1&btnImg=1&Tipo=0&Us=2">
                    <div class="card border-left-warning shadow h-100 py-2">
                         <div class="card-body">
                              <div class="row no-gutters align-items-center">
                                   <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Letras (Cantos)</div>
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

<div class="card text-center mt-5">
     <div class="card-header bg-primary">
          Misal Semanal
     </div>
     <div class="card-body">
          <h5 class="card-title">Misa</h5>
          <p class="card-text">Cantos Seleccionados</p>
          <a  href="<?php echo $raizM;?>Managers.php?dir=seleccion" class="btn btn-primary">Cantos seleccionados</a>
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
      var accion='<?php echo 'contratos';?>';
     </script>
     <script src="<?php echo $raizM;?>js/consultas.js"></script>
     <script>
       setInterval(()=>getContratos(), 1000);
     </script>  
<?php include "modulos/componentes/crearUsr.php"; ?>
