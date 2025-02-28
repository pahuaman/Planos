<?php
  
  require_once("conectar.php");

  $base = Conectar::conexion();

  $tam = 10;

  if(isset($_GET["pagina"])) {
    if($_GET["pagina"] == 1) {
        //header("Location:index.php");
        $pagina = $_GET["pagina"];
    }//if
    else {
        $pagina = $_GET["pagina"];
    }//else
  }//if
  else {
    $pagina = 1;
  }//else

  $desde = ($pagina-1) * $tam;
  $sql_total = "SELECT * FROM planos";
  $resultado = $base->prepare($sql_total);
  $resultado->execute(array());
  $filas = $resultado->rowCount();
  $total_paginas = ceil($filas/$tam);

?>