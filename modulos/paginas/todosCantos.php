<?php
    $claseDataBase = new database();

    $idLyr = $_GET["Tipo"];

    $sql = "SELECT * FROM `canto` WHERE Tipo='$idLyr' ORDER BY IdCanto DESC";
    $lettersE = $claseDataBase->obtenerConexion()->query($sql);
    $lettersE = $lettersE->fetchAll();

    $sql1 = "SELECT * FROM `canto` WHERE Tipo='$idLyr' ORDER BY IdCanto DESC";
    $lettersP = $claseDataBase->obtenerConexion()->query($sql1);
    $lettersP = $lettersP->fetchAll();
?>
<?php if($_GET['selectCantos']=='1'):?>
    <div class="alert alert-primary" role="alert" style="margin-top:-2rem;">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <h1>Letras Paganas</h1>
    </div> 
    <div class="" style="margin-top:-1rem;">
        <?php if($_GET['btnImg']=='1'):?>
            <a href="<?php echo $raizM."Usually.php?dir=todosCantos&selectCantos=1&sizeI=2&btnImg=1&Tipo=1&Letra=".$idLyr?>&Us=1"><button type="button" class="m-1 btn btn-outline-primary">
                <span aria-hidden="true"><i class="fas fa-list"></i></span>
            </button></a>
            <a href="<?php echo $raizM."Usually.php?dir=todosCantos&selectCantos=1&sizeI=1&btnImg=1&Tipo=1&Letra=".$idLyr?>&Us=1"><button type="button"class="m-1 btn btn-outline-primary">
                <span aria-hidden="true"><i class="fas fa-image"></i></span>
            </button></a>
        <?php elseif($_GET['btnImg']=='2'):?>
            <a href="<?php echo $raizM."Managers.php?dir=todosCantos&selectCantos=1&sizeI=2&btnImg=2&Tipo=1&Letra=".$idLyr?>&Us=2"><button type="button" class="m-1 btn btn-outline-primary">
                <span aria-hidden="true"><i class="fas fa-list"></i></span>
            </button></a>
            <a href="<?php echo $raizM."Managers.php?dir=todosCantos&selectCantos=1&sizeI=1&btnImg=2&Tipo=1&Letra=".$idLyr?>&Us=2"><button type="button"class="m-1 btn btn-outline-primary">
                <span aria-hidden="true"><i class="fas fa-image"></i></span>
            </button></a>
        <?php endif; ?>     
    </div>  
    <?php if($_GET['sizeI']=='1'):?>
        <div class="row m-1 p-0" id="imag">
            <?php if($_GET['Us']==1):?>
                <?php foreach($lettersE as $lyricsE):?>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-3 p-0">
                        <div class="card m-1">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $lyricsE['Titulo'];?></h5>
                                <p class="card-text"><?php echo $lyricsE['Autor']?></p>
                                <p class="card-text"><?php echo $lyricsE['opcion2']?></p>
                                <a href="<?php echo $raizM."Usually.php?dir=uniqueCancion&lirycs=".$lyricsE['IdCanto']?>" class="btn btn-primary">Go...</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php elseif($_GET['Us']==2):?>
                <?php foreach($lettersE as $lyricsE):?>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-3 p-0">
                        <div class="card m-1">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $lyricsE['Titulo'];?></h5>
                                <p class="card-text"><?php echo $lyricsE['Autor']?></p>
                                <p class="card-text"><?php echo $lyricsE['opcion2']?></p>
                                <a href="<?php echo $raizM."Managers.php?dir=uniqueCancion&lirycs=".$lyricsE['IdCanto']?>" class="btn btn-primary">Go...</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif;?>
        </div>
    <?php elseif($_GET['sizeI']=='2'):?>
        <div class="row m-1 p-0" id="list">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Autor</th>
                    <th scope="col">Genero</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if($_GET['Us']==1):?>
                        <?php foreach($lettersE as $lyricsE):?>
                            <tr>
                                <th scope="row"><a href="<?php echo $raizM."Usually.php?dir=uniqueCancion&lirycs=".$lyricsE['IdCanto']?>"><?php echo $lyricsE['IdCanto'];?></a></th>
                                <td><a href="<?php echo $raizM."Usually.php?dir=uniqueCancion&lirycs=".$lyricsE['IdCanto']?>"><?php echo $lyricsE['Titulo'];?></a></td>
                                <td><a href="<?php echo $raizM."Usually.php?dir=uniqueCancion&lirycs=".$lyricsE['IdCanto']?>"><?php echo $lyricsE['Autor']?></a></td>
                                <td><a href="<?php echo $raizM."Usually.php?dir=uniqueCancion&lirycs=".$lyricsE['IdCanto']?>"><?php echo $lyricsE['opcion2']?></a></td>
                            </tr>
                        <?php endforeach;?>
                    <?php elseif($_GET['Us']==2):?>
                        <?php foreach($lettersE as $lyricsE):?>
                            <tr>
                                <th scope="row"><a href="<?php echo $raizM."Usually.php?dir=uniqueCancion&lirycs=".$lyricsE['IdCanto']?>"><?php echo $lyricsE['IdCanto'];?></a></th>
                                <td><a href="<?php echo $raizM."Managers.php?dir=uniqueCancion&lirycs=".$lyricsE['IdCanto']?>"><?php echo $lyricsE['Titulo'];?></a></td>
                                <td><a href="<?php echo $raizM."Managers.php?dir=uniqueCancion&lirycs=".$lyricsE['IdCanto']?>"><?php echo $lyricsE['Autor']?></a></td>
                                <td><a href="<?php echo $raizM."Managers.php?dir=uniqueCancion&lirycs=".$lyricsE['IdCanto']?>"><?php echo $lyricsE['opcion2']?></a></td>
                            </tr>
                        <?php endforeach;?>    
                    <?php endif; ?>  
                </tbody>
            </table>
        </div>
    <?php endif;?>
<?php elseif($_GET['selectCantos']=='2'):?>
    <div class="alert alert-primary" role="alert" style="margin-top:-2rem;">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <h1>Letras Eclecisticas</h1>
    </div> 
    <div class="" style="margin-top:-1rem;">
        <?php if($_GET['btnImg']=='1'):?>
            <a href="<?php echo $raizM."Usually.php?dir=todosCantos&selectCantos=2&sizeI=2&btnImg=1&Tipo=0&Letra=".$idLyr?>&Us=1"><button type="button" class="m-1 btn btn-outline-primary">
                <span aria-hidden="true"><i class="fas fa-list"></i></span>
            </button></a>
            <a href="<?php echo $raizM."Usually.php?dir=todosCantos&selectCantos=2&sizeI=1&btnImg=1&Tipo=0&Letra=".$idLyr?>&Us=1"><button type="button"class="m-1 btn btn-outline-primary">
                <span aria-hidden="true"><i class="fas fa-image"></i></span>
            </button></a>
        <?php elseif($_GET['btnImg']=='2'):?>
            <a href="<?php echo $raizM."Managers.php?dir=todosCantos&selectCantos=2&sizeI=2&btnImg=2&Tipo=0&Letra=".$idLyr?>&Us=2"><button type="button" class="m-1 btn btn-outline-primary">
                <span aria-hidden="true"><i class="fas fa-list"></i></span>
            </button></a>
            <a href="<?php echo $raizM."Managers.php?dir=todosCantos&selectCantos=2&sizeI=1&btnImg=2&Tipo=0&Letra=".$idLyr?>&Us=2"><button type="button"class="m-1 btn btn-outline-primary">
                <span aria-hidden="true"><i class="fas fa-image"></i></span>
            </button></a>
        <?php endif; ?>     
    </div>  
    <?php if($_GET['sizeI']=='1'):?>
        <div class="row m-1 p-0" id="imag">
            <?php if($_GET['Us']==1):?>
                <?php foreach($lettersE as $lyricsE):?>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-3 p-0">
                        <div class="card m-1">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $lyricsE['Titulo'];?></h5>
                                <p class="card-text"><?php echo $lyricsE['Autor']?></p>
                                <p class="card-text"><?php echo $lyricsE['opcion1']?></p>
                                <a href="<?php echo $raizM."Usually.php?dir=uniqueCancion&lirycs=".$lyricsE['IdCanto']?>" class="btn btn-primary">Go...</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php elseif($_GET['Us']==2):?>
                <?php foreach($lettersE as $lyricsE):?>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                        <div class="card m-1">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $lyricsE['Titulo'];?></h5>
                                <p class="card-text"><?php echo $lyricsE['Autor']?></p>
                                <p class="card-text"><?php echo $lyricsE['opcion1']?></p>
                                <a href="<?php echo $raizM."Managers.php?dir=uniqueCancion&lirycs=".$lyricsE['IdCanto']?>" class="btn btn-primary">Go...</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif;?>
        </div>
    <?php elseif($_GET['sizeI']=='2'):?>
        <div class="row m-1 p-0" id="list">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Autor</th>
                    <th scope="col">Genero</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if($_GET['Us']==1):?>
                        <?php foreach($lettersE as $lyricsE):?>
                            <tr>
                                <th scope="row"><a href="<?php echo $raizM."Usually.php?dir=uniqueCancion&lirycs=".$lyricsE['IdCanto']?>"><?php echo $lyricsE['IdCanto'];?></a></th>
                                <td><a href="<?php echo $raizM."Usually.php?dir=uniqueCancion&lirycs=".$lyricsE['IdCanto']?>"><?php echo $lyricsE['Titulo'];?></a></td>
                                <td><a href="<?php echo $raizM."Usually.php?dir=uniqueCancion&lirycs=".$lyricsE['IdCanto']?>"><?php echo $lyricsE['Autor']?></a></td>
                                <td><a href="<?php echo $raizM."Usually.php?dir=uniqueCancion&lirycs=".$lyricsE['IdCanto']?>"><?php echo $lyricsE['opcion2']?></a></td>
                            </tr>
                        <?php endforeach;?>
                    <?php elseif($_GET['Us']==2):?>
                        <?php foreach($lettersE as $lyricsE):?>
                            <tr>
                                <th scope="row"><a href="<?php echo $raizM."Managers.php?dir=uniqueCancion&lirycs=".$lyricsE['IdCanto']?>"><?php echo $lyricsE['IdCanto'];?></a></th>
                                <td><a href="<?php echo $raizM."Managers.php?dir=uniqueCancion&lirycs=".$lyricsE['IdCanto']?>"><?php echo $lyricsE['Titulo'];?></a></td>
                                <td><a href="<?php echo $raizM."Managers.php?dir=uniqueCancion&lirycs=".$lyricsE['IdCanto']?>"><?php echo $lyricsE['Autor']?></a></td>
                                <td><a href="<?php echo $raizM."Managers.php?dir=uniqueCancion&lirycs=".$lyricsE['IdCanto']?>"><?php echo $lyricsE['opcion2']?></a></td>
                            </tr>
                        <?php endforeach;?>    
                    <?php endif; ?> 
                </tbody>
            </table>
        </div>
    <?php endif;?>
<?php endif;?>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat molestias itaque neque aut facilis quidem totam cumque tempore provident ipsum?</p>

