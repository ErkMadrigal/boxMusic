<?php 
    include '../../class/database.php';
    $claseDataBase = new database();
    
    $accion=(isset($_GET['accion']))?$_GET['accion']:'leer';

    switch($accion){
        case 'usr':
             session_start();
             $idUsuario = $_SESSION['uid'];
             $imagen = $_FILES['imagen'];
            $path = "../../img/users/";
            $mensaje = "";
            if(!file_exists($path)){
                mkdir($path);
            }
            $targetImg = $path.basename($imagen["name"]);
            if(move_uploaded_file($imagen["tmp_name"],$targetImg)){
                $url = "img/users/".basename($imagen["name"]);
                $sql = "UPDATE `usuarios` SET avatar='$url' WHERE IdUsr='$idUsuario'";
                try{
                    $claseDataBase->obtenerConexion()->query($sql);
                    $mensaje = "se actualizo correctamente";
                }catch(PDOEXCEPTION $e){
                    echo $e->getMessage();
                }
            }else{
                $mensaje = "no se pudo subir tu imagen";
            }
            echo json_encode( $mensaje );
        break;
        case 'portada':
            session_start();
            $imagen = $_FILES['imagen'];
            $path = "../../img/grup/";
            $mensaje = "";
            if(!file_exists($path)){
                mkdir($path);
            }
            $targetImg = $path.basename($imagen["name"]);
            if(move_uploaded_file($imagen["tmp_name"],$targetImg)){
                $url = "img/grup/".basename($imagen["name"]);
                $sql = "UPDATE grupo SET img='$url' WHERE idGrupo=0;";
                try{
                    $claseDataBase->obtenerConexion()->query($sql);
                    $mensaje = "se actualizo correctamente";
                }catch(PDOEXCEPTION $e){
                    echo $e->getMessage();
                }
            }else{
                $mensaje = "no se pudo subir tu imagen";
            }
            echo json_encode( $mensaje );
        break;

    }    