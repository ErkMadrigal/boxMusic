<?php
    class consultas{

        public function userValidate( $contrasenia, $telefono , $correo ){
            $response  = null;
            $concat1  = ( $telefono == '' ) ? '' : "telefono = '$telefono'";
            $concat2  = ( $correo == '' ) ? '' : "correo ='$correo'";
            
            $sql = "SELECT * FROM usuarios WHERE  ".$concat1." ". $concat2." AND contrasenia='$contrasenia'";
            try{
                $claseConexion = new database();
                $stmt = $claseConexion->obtenerConexion()->query($sql);
                $count = $stmt->rowCount();
                $response  = ( $count > 0  ) ? true : false;
            }catch(PDOEXCEPTION $e){
                $response =  '{"error":{"text":'. $e->getMessage() .'}}';
            }
            return $response;
        }   
        public function userValLog( $contrasenia, $telefono , $correo ){
            $response  = null;

            $sql = "SELECT * FROM usuarios WHERE telefono='$telefono' AND correo='$correo' AND contrasenia='$contrasenia'";
            try{
                $claseConexion = new database();
                $stmt = $claseConexion->obtenerConexion()->query($sql);
                $count = $stmt->rowCount();
                $response  = ( $count > 0  ) ? true : false;
            }catch(PDOEXCEPTION $e){
                $response =  '{"error":{"text":'. $e->getMessage() .'}}';
            }
            return $response;
        }
        public function userIntLog($apellido , $telefono , $telefonoEmergencia){
            $response  = null;

            $sql = "SELECT * FROM integrantes WHERE ApellidoInt='$apellido' AND TelefonoInt='$telefono' AND TelefonoEmergencia='$telefonoEmergencia'";
            try{
                $claseConexion = new database();
                $stmt = $claseConexion->obtenerConexion()->query($sql);
                $count = $stmt->rowCount();
                $response  = ( $count > 0  ) ? true : false;
            }catch(PDOEXCEPTION $e){
                $response =  '{"error":{"text":'. $e->getMessage() .'}}';
            }
            return $response;
        }
        public function userData( $contrasenia, $telefono , $correo ){
            $response  = null;
            $concat1  = ( $telefono == '' ) ? '' : "telefono = '$telefono'";
            $concat2  = ( $correo == '' ) ? '' : "correo='$correo'";

            $sql = "SELECT IdUsr FROM usuarios WHERE  ".$concat1." ". $concat2." AND contrasenia='$contrasenia'";
            try{
                $claseConexion = new database();
                $stmt = $claseConexion->obtenerConexion()->query($sql);
                $response  = $stmt->fetch();
            }catch(PDOEXCEPTION $e){
                $response =  '{"error":{"text":'. $e->getMessage() .'}}';
            }
            return $response;
        }   
        public function getDataUser( $idUser ) {
            $sql = "SELECT * FROM usuarios WHERE IdUsr = '$idUser'";
            $response = null;
            try{
                $claseConexion = new database();
                $stmt = $claseConexion->obtenerConexion()->query($sql);
                $response  = $stmt->fetch();
            }catch(PDOEXCEPTION $e){
                $response =  '{"error":{"text":'. $e->getMessage() .'}}';
            }
            return $response;
        }
        public function letraValidate( $titulo ){
            $response  = null;

            $sql = "SELECT * FROM canto WHERE Titulo='$titulo'";
            try{
                $claseConexion = new database();
                $stmt = $claseConexion->obtenerConexion()->query($sql);
                $count = $stmt->rowCount();
                $response  = ( $count > 0  ) ? true : false;
            }catch(PDOEXCEPTION $e){
                $response =  '{"error":{"text":'. $e->getMessage() .'}}';
            }
            return $response;
        }
        public function getAllUserInte($id){
            $sql = "SELECT * FROM integrantes WHERE IdIntegrante='$id'"; 
            $response = null;
            try{
                $claseConexion = new database();
                $stmt = $claseConexion->obtenerConexion()->query($sql);
                $response  = $stmt->fetch();
            }catch(PDOEXCEPTION $e){
                $response =  '{"error":{"text":'. $e->getMessage() .'}}';
            }
            return $response;
        }
        public function getAllLyrics($idLyr){
            $sql = "SELECT * FROM canto WHERE IdCanto='$idLyr'"; 
            $response = null;
            try{
                $claseConexion = new database();
                $stmt = $claseConexion->obtenerConexion()->query($sql);
                $response  = $stmt->fetch();
            }catch(PDOEXCEPTION $e){
                $response =  '{"error":{"text":'. $e->getMessage() .'}}';
            }
            return $response;
        }
        public function getTotalLet($tipo){
            $sql = "SELECT count(*) from canto WHERE Tipo='$tipo'"; 
            $response = null;
            try{
                $claseConexion = new database();
                $stmt = $claseConexion->obtenerConexion()->query($sql);
                $response  = $stmt->fetchColumn();
            }catch(PDOEXCEPTION $e){
                $response =  '{"error":{"text":'. $e->getMessage() .'}}';
            }
            return $response;
        }
        public function getTotalAdmin(){
            $sql = "SELECT count(*) from usuarios"; 
            $response = null;
            try{
                $claseConexion = new database();
                $stmt = $claseConexion->obtenerConexion()->query($sql);
                $response  = $stmt->fetchColumn();
            }catch(PDOEXCEPTION $e){
                $response =  '{"error":{"text":'. $e->getMessage() .'}}';
            }
            return $response;
        }
        public function getTotalInteg(){
            $sql = "SELECT count(*) FROM integrantes"; 
            $response = null;
            try{
                $claseConexion = new database();
                $stmt = $claseConexion->obtenerConexion()->query($sql);
                $response  = $stmt->fetchColumn();
            }catch(PDOEXCEPTION $e){
                $response =  '{"error":{"text":'. $e->getMessage() .'}}';
            }
            return $response;
        }
        public function getTotalEventos(){
            $sql = "SELECT count(*) FROM eventos"; 
            $response = null;
            try{
                $claseConexion = new database();
                $stmt = $claseConexion->obtenerConexion()->query($sql);
                $response  = $stmt->fetchColumn();
            }catch(PDOEXCEPTION $e){
                $response =  '{"error":{"text":'. $e->getMessage() .'}}';
            }
            return $response;
        }
        public function validateTocada($hora, $cantidadHoras, $fecha){
            $response  = null;

            $sql = "SELECT * FROM tocada WHERE hora='$hora' AND cantidadHoras='$cantidadHoras' AND fecha='$fecha'";
            try{
                $claseConexion = new database();
                $stmt = $claseConexion->obtenerConexion()->query($sql);
                $count = $stmt->rowCount();
                $response  = ( $count > 0  ) ? true : false;
            }catch(PDOEXCEPTION $e){
                $response =  '{"error":{"text":'. $e->getMessage() .'}}';
            }
            return $response;
        }
        public function getTocadas(){
            $response  = null;
            $sql = "SELECT * FROM tocada ORDER BY fecha ";
            try{
                $claseConexion = new database();
                $stmt = $claseConexion->obtenerConexion()->query($sql);
                $response = $stmt->fetchAll();
            }catch(PDOEXCEPTION $e){
                $response =  '{"error":{"text":'. $e->getMessage() .'}}';
            }
            
            return $response;
        }
        public function getTocada($IdTocada){
            $response  = null;
            $sql = "SELECT * FROM tocada WHERE IdTocada='$IdTocada'";
            try{
                $claseConexion = new database();
                $stmt = $claseConexion->obtenerConexion()->query($sql);
                $response = $stmt->fetch();
            }catch(PDOEXCEPTION $e){
                $response =  '{"error":{"text":'. $e->getMessage() .'}}';
            }
            
            return $response;
        }
        public function getGrupo( $id ){
            
            $sql = "SELECT * FROM Grupo WHERE  idGrupo='$id'";
            $response = null;
            try{
                $claseConexion = new database();
                $stmt = $claseConexion->obtenerConexion()->query($sql);
                $response  = $stmt->fetch();
            }catch(PDOEXCEPTION $e){
                $response =  '{"error":{"text":'. $e->getMessage() .'}}';
            }
            return $response;
    }
}