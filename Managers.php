<?php
include 'class/database.php';
include 'class/consultas.php';

session_start(); 
    if(isset($_SESSION["uid"])):
        
        $claseConsultas = new consultas();
        $currentUser = $claseConsultas->getDataUser($_SESSION["uid"]);
        
        $currentLetP = $claseConsultas->getTotalLet(1);
        $currentLetE = $claseConsultas->getTotalLet(0);
        $currentAdmin = $claseConsultas->getTotalAdmin();
        $currentInteg = $claseConsultas->getTotalInteg();
        $currentEvent = $claseConsultas->getTotalEventos();

        

        $menu=false; 
        $titulo  = "Bienvenido ".$currentUser['NombreUsr'];  
        include 'modulos/componentes/header.php';
   
 
        // $urlMan=$_GET['dir'];
        $urlMan=(isset($_GET['dir']))?$_GET['dir']:'index';
        switch ($urlMan) {
            case 'index':
                include 'modulos/paginas/principal-admin.php';
                break;
            case 'genero':
                include 'modulos/paginas/generos.php';
                break;
            case 'todosCantos':
                include 'modulos/paginas/todosCantos.php';
                break;
            case 'calendario':
                include 'modulos/paginas/calendario.php';
                break;
            case 'contactos':
                include 'modulos/paginas/contactos.php';
                break;
            case 'nuevo':
                include 'modulos/paginas/nuevo.php';
                break;
            case 'modificarCarac':
                include 'modulos/paginas/modificarCarac.php';
                break;  
            case 'modificarInteg':
                include 'modulos/paginas/modificarInteg.php';
                break;
            case 'todosCantos':
                include 'modulos/paginas/todosCantos.php';
                break; 
            case 'uniqueCancion':
                include 'modulos/paginas/uniqueCancion.php';
                break;
            case 'clase':
                include 'modulos/paginas/clase.php';
                break;
            case 'updateContrato':
                include 'modulos/paginas/updateContrato.php';
                break;
            case 'seleccion':
                include 'modulos/paginas/seleccion.php';
                break;
            case 'modificarLetra':
                include 'modulos/paginas/modificarLetra.php';
                break;
            default:
                include 'modulos/paginas/principal-admin.php';
                break;
        }
        include 'modulos/componentes/footer.php';

else:
    $menu=true; 
    $titulo  = "Uy, algo perdido!"; 
    include 'modulos/componentes/header.php';

        include "modulos/paginas/error-404.php";

    include 'modulos/componentes/footer.php';

endif;
?>