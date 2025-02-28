<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Planos Oficiales</title>

</head>
<body>

    <?php

        include("Modelo/conectar.php");
        
        //Método para conectar con la BD
        $base = Conectar::conexion();

        $id = $_GET["id"];
        $base->query("DELETE FROM planos WHERE id = '$id'");
        //header("Location:index.php");
        echo'<script type="text/javascript"> alert("Plano eliminado éxito"); window.location.href="index.php"; </script>';

    ?>
    
</body>
</html>