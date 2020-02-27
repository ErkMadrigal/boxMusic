<?php
    //importamos clases
    include '../../class/database.php';
    include '../../class/inserciones.php';
    include '../../class/consultas.php';
    
    //creamos objetos de las clases
    $claseInserciones = new inserciones();
    $claseConsultas = new consultas();

    $titulo = ( $_POST['titulo'] !== "" ) ? $_POST['titulo'] : null ;
    $letra = ( $_POST['letra'] !== "" ) ? $_POST['letra'] : null ;
    $tipo = ( $_POST['tipo'] !== "") ? $_POST['tipo'] : null;
    $opcion1 = ( $_POST['opcion1'] !== "") ? $_POST['opcion1'] : null;
    $opcion2 = ( $_POST['opcion2'] !== "") ? $_POST['opcion2'] : null;
    $Autor = ( $_POST['autor'] !== "") ? $_POST['autor'] : null;

    $claseValidar = new validar();

    $errores = [];
    
    if($claseValidar->isName($titulo) === 0 ){
        $errores[] = "por favor ingresa un nombre valido";
    }
    
    if(count($errores) === 0){
        $validarUsuario = $claseConsultas->letraValidate( $titulo );
        $respuesta = null;
        if(!$validarUsuario){
            $respuesta = $claseInserciones->registrarLetra($titulo, $letra, $tipo, $opcion1, $opcion2, $Autor, 'archivos/ejemplo.pdf', 1);
        }else{
            $respuesta["estatus"] = "error";
            $respuesta["mensaje"] = "La letra ya existe";
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


    }