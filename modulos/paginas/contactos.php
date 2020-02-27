<?php
    $claseDataBase = new database();
    
    $sql = "SELECT * FROM integrantes  ORDER BY IdIntegrante DESC";
    $lettersE = $claseDataBase->obtenerConexion()->query($sql);
    $lettersE = $lettersE->fetchAll();

    $sql1 = "SELECT * FROM usuarios ORDER BY IdUsr DESC";
    $lettersP = $claseDataBase->obtenerConexion()->query($sql1);
    $lettersP = $lettersP->fetchAll();
?>
<?php if($_GET['tipoUsr']=='1'):?>
    <div class="alert alert-primary" role="alert" style="margin-top:-2rem;">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <h1>Integrantes</h1>
    </div> 
    <div class="" style="margin-top:-1rem;">
        <?php if($_GET['btnImg']=='1'):?>
            <a href="<?php echo $raizM."Usually.php?dir=contactos&tipoUsr=1&sizeI=2&btnImg=1&"?>"><button type="button" class="m-1 btn btn-outline-primary">
                <span aria-hidden="true"><i class="fas fa-list"></i></span>
            </button></a>
            <a href="<?php echo $raizM."Usually.php?dir=contactos&tipoUsr=1&sizeI=1&btnImg=1&"?>"><button type="button"class="m-1 btn btn-outline-primary">
                <span aria-hidden="true"><i class="fas fa-image"></i></span>
            </button></a>
        <?php elseif($_GET['btnImg']=='2'):?>
            <a href="<?php echo $raizM."Managers.php?dir=contactos&tipoUsr=1&sizeI=2&btnImg=2&"?>"><button type="button" class="m-1 btn btn-outline-primary">
                <span aria-hidden="true"><i class="fas fa-list"></i></span>
            </button></a>
            <a href="<?php echo $raizM."Managers.php?dir=contactos&tipoUsr=1&sizeI=1&btnImg=2&"?>"><button type="button"class="m-1 btn btn-outline-primary">
                <span aria-hidden="true"><i class="fas fa-image"></i></span>
            </button></a>
        <?php endif; ?>     
    </div>  
    <?php if($_GET['sizeI']=='1'):?>
        <div class="row m-1 p-0" id="imag">
            <?php foreach($lettersE as $lyricsE):?>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-3 p-0">
                    <div class="card m-1">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $lyricsE['NombreInt'];?> <?php echo $lyricsE['ApellidoInt'];?></h5>
                            <p class="card-text">Telefono (<?php echo $lyricsE['TelefonoInt']?>)</p>
                            <p class="card-text">Tel. Emergencia (<?php echo $lyricsE['TelefonoEmergencia']?>)</p>
                            <a href="<?php echo $raizM."Managers.php?dir=modificarInteg&upDateUsr=2&lirycs=".$lyricsE['IdIntegrante']?>" class="btn btn-primary">Go...</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php elseif($_GET['sizeI']=='2'):?>
        <div class="row m-1 p-0" id="list">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Tel. Emergencia</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($lettersE as $lyricsE):?>
                        <tr>
                            <th scope="row"><?php echo $lyricsE['IdIntegrante'];?></th>
                            <td><?php echo $lyricsE['NombreInt'];?> <?php echo $lyricsE['ApellidoInt'];?></td>
                            <td><?php echo $lyricsE['TelefonoInt']?></td>
                            <td><?php echo $lyricsE['TelefonoEmergencia']?></td>
                        </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
        </div>
    <?php endif;?>
<?php elseif($_GET['tipoUsr']=='2'):?>
    <div class="alert alert-primary" role="alert" style="margin-top:-2rem;">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <h1>Encargados</h1>
    </div> 
    <div class="" style="margin-top:-1rem;">
        <?php if($_GET['btnImg']=='1'):?>
            <a href="<?php echo $raizM."Usually.php?dir=contactos&tipoUsr=2&sizeI=2&btnImg=1&"?>"><button type="button" class="m-1 btn btn-outline-primary">
                <span aria-hidden="true"><i class="fas fa-list"></i></span>
            </button></a>
            <a href="<?php echo $raizM."Usually.php?dir=contactos&tipoUsr=2&sizeI=1&btnImg=1&"?>"><button type="button"class="m-1 btn btn-outline-primary">
                <span aria-hidden="true"><i class="fas fa-image"></i></span>
            </button></a>
        <?php elseif($_GET['btnImg']=='2'):?>
            <a href="<?php echo $raizM."Managers.php?dir=contactos&tipoUsr=2&sizeI=2&btnImg=2&"?>"><button type="button" class="m-1 btn btn-outline-primary">
                <span aria-hidden="true"><i class="fas fa-list"></i></span>
            </button></a>
            <a href="<?php echo $raizM."Managers.php?dir=contactos&tipoUsr=2&sizeI=1&btnImg=2&"?>"><button type="button"class="m-1 btn btn-outline-primary">
                <span aria-hidden="true"><i class="fas fa-image"></i></span>
            </button></a>
        <?php endif; ?>     
    </div>  
    <?php if($_GET['sizeI']=='1'):?>
        <div class="row m-1 p-0" id="imag">
            <?php foreach($lettersP as $lyricsP):?>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-3 p-0">
                    <div class="card m-1">
                        <div class="card-body">
                        <label class="btn btn-primary btn-file rounded-circle" style="height: 6rem;width: 6rem;background-image: url('<?php echo $raizM.$lyricsP['avatar'];?>');
										background-repeat: no-repeat;
										background-position: center;
										background-size: cover;
										border: 2px solid white;
										position: relative;
										top: 0rem;
										left: 6.2rem;
										padding: 0;">
									</label>
                            <h5 class="card-title text-center"><?php echo $lyricsP['NombreUsr'];?> <?php echo $lyricsP['ApellidoUsr'];?></h5>
                            <p class="card-text"><?php echo $lyricsP['CargoUsr']?></p>
                            <p class="card-text"><?php echo $lyricsP['telefono']?></p>
                            <p class="card-text"><?php echo $lyricsP['correo']?></p>
                            <a href="<?php echo $raizM."Managers.php?dir=modificarInteg&upDateUsr=1&lirycs=".$lyricsP['IdUsr']?>" class="btn btn-primary float-right">Go...</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php elseif($_GET['sizeI']=='2'):?>
        <div class="row m-1 p-0" id="list">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">avatar</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Cargo</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Correo</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($lettersP as $lyricsP):?>
                        <tr>
                            <th scope="row"><?php echo $lyricsP['IdUsr'];?></a></th>
                            <td>
                                <label class="btn btn-primary btn-file rounded-circle" style="height: 6rem;width: 6rem;background-image: url('<?php echo $raizM.$lyricsP['avatar'];?>');
                                    background-repeat: no-repeat;
                                    background-position: center;
                                    background-size: cover;
                                    border: 2px solid white;
                                    position: relative;">
                                </label>
                            </td>
                            <td><?php echo $lyricsP['NombreUsr'];?> <?php echo $lyricsP['ApellidoUsr'];?></td>
                            <td><?php echo $lyricsP['CargoUsr']?></td>
                            <td><?php echo $lyricsP['telefono']?></td>
                            <td><?php echo $lyricsP['correo']?></td>
                        </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
        </div>
    <?php endif;?>
<?php endif;?>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat molestias itaque neque aut facilis quidem totam cumque tempore provident ipsum?</p>

