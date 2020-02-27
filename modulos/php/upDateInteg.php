<?php
    //importamos clases
    include '../../class/database.php';
    include '../../class/update.php';
    
    //creamos objetos de las clases
    $update = new update();

    
    $nombre = ( $_POST['nombreInt'] !== "" ) ? $_POST['nombreInt'] : null ;
    $apellido = ( $_POST['apellidoInt'] !== "" ) ? $_POST['apellidoInt'] : null ;
    $telefono = ( $_POST['numeroInt'] !== "") ? $_POST['numeroInt'] : null;
    $telefonoEmergencia = ( $_POST['numeroIntE'] !== "") ? $_POST['numeroIntE'] : null;
    $activo = ( $_POST['UpLoadactivo'] !== "") ? $_POST['UpLoadactivo'] : null;
    $id = ( $_POST['IdInt'] !== "") ? $_POST['IdInt'] : null;

    $claseValidar = new validar();

    
    
    $errores = [];
    
    if($claseValidar->isName($nombre) === 0 ){
        $errores[] = "por favor ingresa un nombre valido";
    }
    if($claseValidar->isName($apellido) === 0 ){
        $errores[] = "por favor ingresa un apellido valido";
    }
    if ($claseValidar->isPhone( $telefono ) === 0) {
        $errores[] = "ingresa un numero valido";
    }
    if ($claseValidar->isPhone( $telefonoEmergencia ) === 0) {
        $errores[] = "ingresa un numero valido";
    }
    
    if(count($errores) === 0){
        $respuesta = null;
        $respuesta = $update->updateIntegrante($nombre, $apellido, $telefono, $telefonoEmergencia, $activo, $id);
       
        echo json_encode($respuesta);           
    }
    else{
        echo json_encode($errores);
    }


    class validar{
        
        public function isEmpty( $string ) {
            return isset($string);
        }

        public function isName( $string ) {
            $regex = "/^[a-z-A-Z\D]+$/";
            return preg_match( $regex , $string );
        }
        public function isPhone( $phone ) {
            $regex = "/^[0-9-]*$/";
            return preg_match( $regex , $phone );
        }

    }

   