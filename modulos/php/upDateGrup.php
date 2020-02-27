<?php
    //importamos clases
    include '../../class/database.php';
    include '../../class/update.php';
    
    //creamos objetos de las clases
    $update = new update();

    $nombreGru = ( $_POST['nombreGru'] !== "" ) ? $_POST['nombreGru'] : null ;
    $numeroGru = ( $_POST['numeroGru'] !== "" ) ? $_POST['numeroGru'] : null ;
    $direccionGru = ( $_POST['dirGrup'] !== "" ) ? $_POST['dirGrup'] : null ;
    $caracteristicasGru = ( $_POST['caractGrup'] !== "") ? $_POST['caractGrup'] : null;
    
    $respuesta = null;
        
    $respuesta = $update->updateGrupo($nombreGru, $numeroGru, $direccionGru, $caracteristicasGru, 0);
    echo json_encode($respuesta);           
    

