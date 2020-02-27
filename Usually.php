<?php 

    $menu=true; 
    $titulo  = "Bienvenido ";  
    include 'modulos/componentes/header.php';
    include 'class/database.php';
    include 'class/consultas.php';
    $claseConsultas = new consultas();
        
    $currentLetP = $claseConsultas->getTotalLet(1);
    $currentLetE = $claseConsultas->getTotalLet(0);
    $currentAdmin = $claseConsultas->getTotalAdmin();
    $currentInteg = $claseConsultas->getTotalInteg();

    $url=$_GET['dir'];
    switch ($url) {
        case 'index':
            include 'modulos/paginas/principal.php';
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
        case 'login':
            include 'modulos/paginas/login.php';
            break; 
        case 'todosCantos':
            include 'modulos/paginas/todosCantos.php';
            break; 
        case 'uniqueCancion':
            include 'modulos/paginas/uniqueCancion.php';
            break;
        case 'seleccion':
            include 'modulos/paginas/seleccion.php';
            break;                                                                       
        default:
            include 'modulos/paginas/principal.php';
            break;
    }

    include 'modulos/componentes/footer.php'; 
?>
