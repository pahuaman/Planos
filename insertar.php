<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
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
    
    <div class="head">
        <a href="index.php"><img src="Img/piramide.jpg" alt="logo" class="logo"></a>
    </div>

    <h1>INSERTAR NUEVO PLANO</h1>

    <?php

        require("Modelo/conectar.php");

        if(isset($_POST["cr"])) {
           
            //Método para conectar con la BD
            $base = Conectar::conexion();
            
            $id          = $_POST["id"];
            $Clave       = $_POST["cla"];
            $Nombre      = $_POST["nom"];
            $Copias      = $_POST["cop"];
            $Actualizado = $_POST["act"];

            //Recibimos datos del pdf
            $nombre_archivo = $_FILES['subir']['name'];
            
            //RUTA de la carpeta destino
            $carpeta_destino = $_SERVER['DOCUMENT_ROOT'] . '/CursoPHP/Prueba2-Planos/Pdf/';

            //movemos la imagen al directorio elegido
            move_uploaded_file($_FILES['subir']['tmp_name'], $carpeta_destino.$nombre_archivo);

            $sql = "INSERT INTO planos (id, clave, nombre, copias, actualizado, pdf) VALUES (:aid, :acla, :anom, :acop, :aact, :apdf)";
            $resultado = $base->prepare($sql);
            $resultado->execute(array(":aid"=>$id, ":acla"=>$Clave, ":anom"=>$Nombre, ":acop"=>$Copias, ":aact"=>$Actualizado, ":apdf"=>$nombre_archivo));

            //header("Location:index.php");
            
            echo'<script type="text/javascript"> alert("Plano insertado con éxito"); window.location.href="index.php"; </script>';
      
        }//if

    ?>

    <div class="middle">

        <form name="form1" method="post" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>">    
            <table>
                <tr>
                    <td><label for="id"></label></td>
                    <td><input type='hidden' name='id' size='20'></td>
                </tr>    
                <tr>
                    <td>Clave:</td>
                    <td><input type='text' name='cla' size='20' id="clave"></td>
                </tr>
                <tr>
                    <td>Nombre:</td>
                    <td><input type='text' name='nom' size='20'></td>
                </tr>
                <tr>
                    <td>Copias controladas:</td>
                    <td><input type='text' name='cop' size='5'></td>
                </tr>
                <tr>
                    <td>Actualizado (Fecha):</td>
                    <td><input type='text' name='act' size='20'></td>
                </tr>
                <tr>
                    <td>Plano (pdf):</td>
                    <td><input type='file' name='subir' size='20'></td>
                </tr>
                <tr>
                    <td class='bot'><input type='submit' class='btn' name='cr' id='cr' value='Insertar'></td>
                </tr>
                <tr>
                    <td colspan="2"><a href="index.php"><input type='button' class='btn' name='del' id='del' value='Volver'></a></td>
                </tr>
            </table>
        </form>

    </div>

    <footer>

        <div>

            <p>
                <b>INSTRUCCIONES:</b> <br>
                LLenar los campos de acuerdo a lo solicitado y subir el archivo .pdf correspondiente a cada plano nuevo; una vez cubiertos todos los campos dar "clic" en el botón <b>"Insertar</b> <br>
                Utilizar el botón <b> "Volver" </b> para regresar al inicio del listado de planos en caso de no querer subir ningún plano nuevo.
            </p>
            
        </div>

        <div class="legend">

            <hr>
            <p>Todos los derechos reservados | <b>Empresa S.A. de C.V</b> </p>

        </div>

    </footer>

    <!-- Custom js -->
    <script src="Js/main.js"></script>

</body>
</html>