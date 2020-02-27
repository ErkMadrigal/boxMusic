<?php
    class update{
        
        public function updateUsuario($nombre, $apellido, $cargo, $correo, $telefono, $contrasenia, $id ){
            $respuesta = null;
            $sql= "UPDATE usuarios SET NombreUsr=:NombreUsr, ApellidoUsr=:ApellidoUsr, CargoUsr=:CargoUsr,
            telefono=:telefono, correo=:correo, contrasenia=:contrasenia WHERE IdUsr=:IdUsr";
            
            try {
                $claseConexion = new database();
                $db = $claseConexion->obtenerConexion();
                $stmt = $db->prepare($sql);
                $stmt->bindParam(":NombreUsr", $nombre);
                $stmt->bindParam(":ApellidoUsr", $apellido);
                $stmt->bindParam(":CargoUsr", $cargo);
                $stmt->bindParam(":telefono", $telefono);
                $stmt->bindParam(":correo", $correo);
                $stmt->bindParam(":contrasenia", $contrasenia);
                $stmt->bindParam("IdUsr", $id);
                $stmt->execute();
                $respuesta['estado'] = "ok";
                $respuesta['mensaje'] = "Se actualizo correctamente el usuario";
            } 
            catch (PDOEXCEPTION $e) {
                $respuesta['estado'] = "error";
                $respuesta['mensaje']  = $e->getMessage();
            }
            return $respuesta;
        }
        
        public function updateIntegrante($nombre, $apellido, $tel, $telE, $activo, $id ){
            $respuesta = null;
            $sql="UPDATE integrantes SET NombreInt=:NombreInt, ApellidoInt=:ApellidoInt, TelefonoInt=:TelefonoInt, 
            activo=:activo, TelefonoEmergencia=:TelefonoEmergencia WHERE IdIntegrante=:IdIntegrante";
            
            try {
                $claseConexion = new database();
                $db = $claseConexion->obtenerConexion();
                $stmt = $db->prepare($sql);
                $stmt->bindParam(":NombreInt", $nombre);
                $stmt->bindParam(":ApellidoInt", $apellido);
                $stmt->bindParam(":TelefonoInt", $tel);
                $stmt->bindParam(":TelefonoEmergencia", $telE);
                $stmt->bindParam(":activo", $activo);
                $stmt->bindParam(":IdIntegrante", $id);
                $stmt->execute();
                $respuesta['estado'] = "ok";
                $respuesta['mensaje'] = "Se actualizo correctamente el usuario";
            } 
            catch (PDOEXCEPTION $e) {
                $respuesta['estado'] = "error";
                $respuesta['mensaje']  = $e->getMessage();
            }
            return $respuesta;
        }
        public function updateLetra($titulo, $letra, $tipo, $opcion1, $opcion2, $Autor, $DireccionPDF, $id){
            $respuesta = null;
            $sql="UPDATE canto SET Titulo=:Titulo, Letra=:Letra, Tipo=:Tipo, opcion1=:opcion1, opcion2=:opcion2, 
            Autor=:Autor, DireccionPDF=:DireccionPDF WHERE IdCanto=:IdCanto";
            try {
                $claseConexion = new database();
                $db = $claseConexion->obtenerConexion();
                $stmt = $db->prepare($sql);
                $stmt->bindParam(":Titulo", $titulo);
                $stmt->bindParam(":Letra", $letra);
                $stmt->bindParam(":Tipo", $tipo);
                $stmt->bindParam(":opcion1", $opcion1);
                $stmt->bindParam(":opcion2", $opcion2);
                $stmt->bindParam(":Autor", $Autor);
                $stmt->bindParam(":DireccionPDF", $DireccionPDF);
                $stmt->bindParam(":IdCanto", $id);
                $stmt->execute();
                $respuesta['estado'] = "ok";
                $respuesta['mensaje'] = "Se actualizo correctamente :)";
            } 
            catch (PDOEXCEPTION $e) {
                $respuesta['estado'] = "error";
                $respuesta['mensaje']  = $e->getMessage();
            }
            return $respuesta;
        }
        public function updateTocada($nombre, $telefono, $hora, $descripcion, $precioTotal, $aporte, $direccion, $tipo, $cantidadHoras, $fecha, $id){
            $respuesta = null;
            $sql="UPDATE tocada SET Nombre=:Nombre, telefono=:telefono, hora=:hora, descripcion=:descripcion, 
            precioTotal=:precioTotal, aporte=:aporte, direccion=:direccion, tipo=:tipo, cantidadHoras=:cantidadHoras,
            fecha=:fecha WHERE IdTocada=:IdTocada";
            
            
            try {
                $claseConexion = new database();
                $db = $claseConexion->obtenerConexion();
                $stmt = $db->prepare($sql);
                $stmt->bindParam(":Nombre", $nombre);
                $stmt->bindParam(":telefono", $telefono);
                $stmt->bindParam(":hora", $hora);
                $stmt->bindParam(":descripcion", $descripcion);
                $stmt->bindParam(":precioTotal", $precioTotal);
                $stmt->bindParam(":aporte", $aporte);
                $stmt->bindParam(":direccion", $direccion);
                $stmt->bindParam(":tipo", $tipo);
                $stmt->bindParam(":cantidadHoras", $cantidadHoras);
                $stmt->bindParam(":fecha", $fecha);
                $stmt->bindParam(":IdTocada", $id);
                $stmt->execute();
                $respuesta['estado'] = "ok";
                $respuesta['mensaje'] = "Se aparto correctamente :)";
            } 
            catch (PDOEXCEPTION $e) {
                $respuesta['estado'] = "error";
                $respuesta['mensaje']  = $e->getMessage();
            }
            return $respuesta;
        }
        public function updateGrupo($nombre, $numero, $direccion, $caracteristicas, $id){
            $respuesta = null;
            $sql="UPDATE grupo SET NombreGru=:NombreGru, TelefonoPrincipal=:TelefonoPrincipal, 
            Direccion=:Direccion, caracteristicas=:caracteristicas WHERE idGrupo=:idGrupo";
            try {
                $claseConexion = new database();
                $db = $claseConexion->obtenerConexion();
                $stmt = $db->prepare($sql);
                $stmt->bindParam(":NombreGru", $nombre);
                $stmt->bindParam(":TelefonoPrincipal", $numero);
                $stmt->bindParam(":Direccion", $direccion);
                $stmt->bindParam(":caracteristicas", $caracteristicas);
                $stmt->bindParam(":idGrupo", $id);
                $stmt->execute();
                $respuesta['estado'] = "ok";
                $respuesta['mensaje'] = "Se Modifico correctamente :)";
            } 
            catch (PDOEXCEPTION $e) {
                $respuesta['estado'] = "error";
                $respuesta['mensaje']  = $e->getMessage();
            }
            return $respuesta;
        }
    }