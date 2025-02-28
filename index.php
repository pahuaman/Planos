<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Planos Oficiales</title>

    <!-- CSS -->
    <link rel="stylesheet" href="Css/style.css">

</head>
<body>
    
    <div class="head">
        <a href="index.php"><img src="Img/piramide.jpg" alt="logo" class="logo"></a>
        <h1>PLANOS OFICIALES DE LA EMPRESA</h1><br>
    </div>

    <?php

        require_once("Controlador/planos_controlador.php");
        
    ?>

</body>
</html>