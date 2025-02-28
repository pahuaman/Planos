<!doctype html>
<html>
<head>
    
    <meta charset="utf-8">

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

    <h1><?php echo $Nombre = $_GET["nom"]; ?></h1>

    <?php

      require("Modelo/conectar.php");

      if(!isset($_POST["bot_actualizar"])) {

        $id          = $_GET["id"];
        $Clave       = $_GET["cla"];
        $Nombre      = $_GET["nom"];
        $Copias      = $_GET["cop"];
        $Actualizado = $_GET["act"];
        $ruta_img    = $_GET["subir"];
      
      }//if
      else {
    
        //Método para conectar con la BD
        $base = Conectar::conexion();

        $id          = $_POST["id"];
        $Clave       = $_POST["cla"];
        $Nombre      = $_POST["nom"];
        $Copias      = $_POST["cop"];
        $Actualizado = $_POST["act"];
        $ruta_img    = $_FILES['subir']['name'];

        //RUTA de la carpeta destino
        $carpeta_destino = $_SERVER['DOCUMENT_ROOT'] . '/CursoPHP/Prueba2-Planos/Pdf/';

        //movemos la imagen al directorio elegido
        move_uploaded_file($_FILES['subir']['tmp_name'], $carpeta_destino.$ruta_img);
      

        $sql = "UPDATE planos SET clave=:miclave, nombre=:minombre, copias=:micopias, actualizado=:miactualizado, pdf=:mipdf WHERE id=:miid";
        $resultado = $base->prepare($sql);
        $resultado->execute(array(":miid"=>$id, ":miclave"=>$Clave, ":minombre"=>$Nombre, ":micopias"=>$Copias, ":miactualizado"=>$Actualizado, ":mipdf"=>$ruta_img));
        //header("Location:index.php");
        echo'<script type="text/javascript"> alert("Plano actualizado con éxito"); window.location.href="index.php"; </script>';
    
      }//else

    ?>

    <div class="middle">
        
        <div class="plano">
            <embed src="/CursoPHP/Prueba2-Planos/Pdf/<?php echo $ruta_img;?>" type="application/pdf" >
        </div>
        <!--embed src="/CursoPHP/MVC-Planos/Pdf/<?php echo $ruta_img;?>#zoom=32&toolbar=0" type="application/pdf" -->

        <form name="form1" method="post" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <table>
                <tr>
                    <td colspan="2"><label>Información de este plano:</label></td>
                </tr>
                <tr>
                    <td>
                      <label for="id"></label>
                      <input type="hidden" name="id" id="id" value="<?php echo $id?>">
                    </td>
                </tr>
                <tr>
                    <td>Clave:</td>
                    <td><input type="text" name="cla" id="cla" value="<?php echo $Clave?>"></td>
                </tr>
                <tr>
                    <td>Nombre:</td>
                    <td><input type="text" name="nom" id="nom" value="<?php echo $Nombre?>"></td>
                </tr>
                <tr>
                    <td>Copias controladas</td>
                    <td><input type="text" name="cop" id="cop" value="<?php echo $Copias?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><textarea name="" id="controladas" cols="20" rows="10" readonly></textarea></td>
                </tr>
                <tr>
                    <td>Actualizado</td>
                    <td><input type="text" name="act" id="act" value="<?php echo $Actualizado?>"></td>
                </tr>
                <tr>
                    <td>Plano (pdf):</td>
                    <td><input type='file' name='subir' size='10' class='centrado'></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" class="btn" name="bot_actualizar" id="bot_actualizar" value="Actualizar"></td>
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
                Para hacer zoom en el plano, primero posicionarse con el cursor del mouse sobre el plano y después presione la tecla <b> CTRL + SCROLL </b> del mouse para ajustar al tamaño deseado <br>
                Utilizar el botón <b> "Volver" </b> para regresar al inicio del listado de planos.
            </p>
            
        </div>

        <div class="legend">

            <hr>
            <p>Todos los derechos reservados | <b>Empresa S.A. de C.V.</b> </p>

        </div>

    </footer>

    <!-- Custom js -->
    <script src="Js/main.js"></script>
  
</body>
</html>