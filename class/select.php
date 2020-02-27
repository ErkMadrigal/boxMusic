<?php 
    include 'database.php';
    $claseConexion = new database();

    $accion=(isset($_GET['accion']))?$_GET['accion']:'leer';

    switch($accion){
        case 'contratos':
            $response  = null;
            $sql = "SELECT * FROM tocada ORDER BY fecha ";
            try{
                $stmt = $claseConexion->obtenerConexion()->query($sql);
                $response = $stmt->fetchAll();
            }catch(PDOEXCEPTION $e){
                $response =  '{"error":{"text":'. $e->getMessage() .'}}';
            }
            
            echo json_encode ($response);

        break;
        case 'eventos':
            $response  = null;
            $sql = "SELECT * FROM eventos ORDER BY start ";
            try{
                $stmt = $claseConexion->obtenerConexion()->query($sql);
                $response = $stmt->fetchAll();
            }catch(PDOEXCEPTION $e){
                $response =  '{"error":{"text":'. $e->getMessage() .'}}';
            }
            
            echo json_encode ($response);
        break;

    }    