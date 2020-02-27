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

    include 'modulos/paginas/principal.php';

include 'modulos/componentes/footer.php'; ?>
