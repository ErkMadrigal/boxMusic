<?php
    //importamos clases
    include '../../class/database.php';
    include '../../class/update.php';
    
    //creamos objetos de las clases
    $update = new update();


    $titulo = ( $_POST['titulo'] !== "" ) ? $_POST['titulo'] : null ;
    $letra = ( $_POST['letra'] !== "" ) ? $_POST['letra'] : null ;
    $tipo = ( $_POST['tipo'] !== "") ? $_POST['tipo'] : null;
    $opcion1 = ( $_POST['opcion1'] !== "") ? $_POST['opcion1'] : null;
    $opcion2 = ( $_POST['opcion2'] !== "") ? $_POST['opcion2'] : null;
    $Autor = ( $_POST['autor'] !== "") ? $_POST['autor'] : null;
    $id = ( $_POST['IdLetra'] !== "") ? $_POST['IdLetra'] : null;

    $claseValidar = new validar();

    $errores = [];
    
    if($claseValidar->isName($titulo) === 0 ){
        $errores[] = "por favor ingresa un nombre valido";
    }
    
    if(count($errores) === 0){
        $respuesta = null;
        
        $respuesta = $update->updateLetra($titulo, $letra, $tipo, $opcion1, $opcion2, $Autor, 'archivos/ejemplo.pdf', $id);
        
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