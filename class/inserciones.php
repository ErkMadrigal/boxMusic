<?php
    class inserciones{
        
        public function registrarUsuario($nombre, $apellido, $cargo, $correo, 
                                                $telefono, $contrasenia, $avatar, $grupo ){
            $respuesta = null;
            $sql = "INSERT INTO usuarios (NombreUsr, ApellidoUsr, CargoUsr, telefono, correo, contrasenia, avatar, idGrupo)
             VALUES (:NombreUsr, :ApellidoUsr, :CargoUsr, :telefono, :correo, :contrasenia, :avatar, :idGrupo)";
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
                $stmt->bindParam(":avatar", $avatar);
                $stmt->bindParam(":idGrupo", $grupo);
                $stmt->execute();
                $respuesta['estado'] = "ok";
                $respuesta['mensaje'] = "Se creo correctamente el usuario";
            } 
            catch (PDOEXCEPTION $e) {
                $respuesta['estado'] = "error";
                $respuesta['mensaje']  = $e->getMessage();
            }
            return $respuesta;
        }
        public function registrarIntegrante($nombre, $apellido, $telefono, $activo, $TelefonoEmergencia, $grupo ){
            
            $respuesta = null;
            $sql = "INSERT INTO integrantes (NombreInt, ApellidoInt, TelefonoInt, activo, TelefonoEmergencia, idGrupo) 
                            VALUES (:NombreInt, :ApellidoInt, :TelefonoInt, :activo, :TelefonoEmergencia, :idGrupo)";
            try {
                $claseConexion = new database();
                $db = $claseConexion->obtenerConexion();
                $stmt = $db->prepare($sql);
                $stmt->bindParam(":NombreInt", $nombre);
                $stmt->bindParam(":ApellidoInt", $apellido);
                $stmt->bindParam(":TelefonoInt", $telefono);
                $stmt->bindParam(":activo", $activo);
                $stmt->bindParam(":TelefonoEmergencia", $TelefonoEmergencia);
                $stmt->bindParam(":idGrupo", $grupo);
                $stmt->execute();
                $respuesta['estado'] = "ok";
                $respuesta['mensaje'] = "Se creo correctamente el usuario";
            } 
            catch (PDOEXCEPTION $e) {
                $respuesta['estado'] = "error";
                $respuesta['mensaje']  = $e->getMessage();
            }
            return $respuesta;
        }
        public function registrarLetra($titulo, $letra, $tipo, $opcion1, $opcion2, $Autor, $DireccionPDF, $grupo){
            $respuesta = null;
            $sql = "INSERT INTO canto(Titulo, Letra, Tipo, opcion1, opcion2, Autor, DireccionPDF, idGrupo)
            VALUES(:Titulo, :Letra, :Tipo, :opcion1, :opcion2, :Autor, :DireccionPDF, :idGrupo)";
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
                $stmt->bindParam(":idGrupo", $grupo);
                $stmt->execute();
                $respuesta['estado'] = "ok";
                $respuesta['mensaje'] = "Se registro correctamente :)";
            } 
            catch (PDOEXCEPTION $e) {
                $respuesta['estado'] = "error";
                $respuesta['mensaje']  = $e->getMessage();
            }
            return $respuesta;
        }
        public function registrarTocada($nombre, $telefono, $hora, $descripcion, $precioTotal, $aporte, $direccion, $tipo, $cantidadHoras, $fecha){
            $respuesta = null;
            $sql = "INSERT INTO tocada(Nombre, telefono, hora, descripcion, precioTotal, aporte, direccion, tipo, cantidadHoras, fecha) 
            VALUES(:Nombre, :telefono, :hora, :descripcion, :precioTotal, :aporte, :direccion, :tipo, :cantidadHoras, :fecha)";
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
    }