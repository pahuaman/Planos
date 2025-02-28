<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Planos Oficiales</title>

    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="Css/style.css">

    <!-- JQuery -->
    <script src="Js/jquery-3.3.1.js"></script>

</head>
<body>
    
    <?php
        require("Modelo/paginacion.php");
    ?>
    
    
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <table width="80%" border="0" align="center">
        <tr>
            <!--td class="primera_fila">Id</td-->
            <td class="primera_fila">Clave</td>
            <td class="primera_fila">Nombre del plano</td>
            <td class="primera_fila">Copias controladas</td>
            <td class="primera_fila">Actualizado</td>
            <td class="primera_fila">Plano</td>
        </tr>
      
        <?php
            foreach($matrizPlanos as $registro):?>
            <tr>
                <!--td><?php echo $registro["id"]?></td-->
                <td><?php echo $registro["clave"]?></td>
                <td><?php echo $registro["nombre"]?></td>
                <td><?php echo $registro["copias"]?></td>
                <td><?php echo $registro["actualizado"]?></td>
                <td><?php echo $registro["pdf"]?></td>
                
 
                <td class="bot"><a href="borrar.php?id=<?php echo $registro['id']?>"><input type='button' class='btn' name='del' id='del' value='Borrar'></a></td>
                <td class='bot'><a href="editar.php?id=<?php echo $registro['id']?> & cla=<?php echo $registro['clave']?> & nom=<?php echo $registro['nombre']?> & cop=<?php echo $registro['copias']?> & act=<?php echo $registro['actualizado']?> & subir=<?php echo $registro['pdf']?>"><input type='button' class='btn' name='up' id='up' value='Ver Plano'></a></td>
            </tr>
        <?php
            endforeach;
        ?>
        <tr>
            <td><a href="insertar.php"><input type='button' class='btn' name='del' id='del' value='Insertar'></a></td>
        </tr>
      
        <tr><td>
            <?php
                /*----Paginación-----*/
                for($i = 1; $i <= $total_paginas; $i++) {
                echo "<a href='?pagina=" . $i . "'>" . $i . "</a>  ";
                }//for
            ?>
        </td></tr> 
        </table>
    </form>

    <footer>

        <div>

            <p>
                <b>INSTRUCCIONES:</b> <br>
                Dar "clic" en el botón <b>"Ver Plano"</b> para visualizar el plano que se desee ver <br>
                Dar "clic" en los números 1,2,3... etc de abajo para navegar entre las páginas hasta encontrar el plano deseado 
            </p>
            
        </div>

        <div class="legend">

            <hr>
            <p>Todos los derechos reservados | <b>Empresa S.A de C.V.</b> </p>

        </div>

    </footer>

    <!-- Custom js -->
    <script src="Js/main.js"></script>

</body>
</html>