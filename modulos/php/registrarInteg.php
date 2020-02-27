<?php
    //importamos clases
    include '../../class/database.php';
    include '../../class/inserciones.php';
    include '../../class/consultas.php';
    
    //creamos objetos de las clases
    $claseInserciones = new inserciones();
    $claseConsultas = new consultas();

    $nombre = ( $_POST['nombreInt'] !== "" ) ? $_POST['nombreInt'] : null ;
    $apellido = ( $_POST['apellidoInt'] !== "" ) ? $_POST['apellidoInt'] : null ;
    $telefono = ( $_POST['numeroInt'] !== "") ? $_POST['numeroInt'] : null;
    $telefonoEmergencia = ( $_POST['numeroIntE'] !== "") ? $_POST['numeroIntE'] : null;

    $claseValidar = new validar();

    $errores = [];
    
    if($claseValidar->isName($nombre) === 0 ){
        $errores[] = "por favor ingresa un nombre valido";
    }
    if($claseValidar->isName($apellido) === 0 ){
        $errores[] = "por favor ingresa un apellido valido";
    }
    if ( $claseValidar->isPhone( $telefono ) === 0 ){
        $errores[] = "ingresa un Numero personal valido ";
    }
    if ($claseValidar->isPhone( $telefonoEmergencia ) === 0) {
        $errores[] = "ingresa un Numero de emergencia valido";
    }
    
    if(count($errores) === 0){
        $validarUsuario = $claseConsultas->userIntLog($apellido , $telefono , $telefonoEmergencia);
        $respuesta = null;
        if(!$validarUsuario){
            $respuesta = $claseInserciones->registrarIntegrante($nombre, $apellido, $telefono, 1, $telefonoEmergencia, 1);
        }else{
            $respuesta["estatus"] = "error";
            $respuesta["mensaje"] = "el usuario ya existe";
        }
        echo json_encode($respuesta);           
    }else{
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