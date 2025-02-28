<?php

    require_once("Modelo/planos_modelo.php");
    
    $plano = new Planos_modelo();
    $matrizPlanos = $plano->get_planos();

    require_once("Vista/planos_view.php");
    
?>
