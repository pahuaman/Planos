<?php

    class Conectar {

        public static function conexion() {

            try {
                
                $conexion = new PDO("mysql:host=localhost; dbname=test", "root", "");
                $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $conexion->exec("SET CHARACTER SET utf8");

            }catch(Exception $e) {

                die("Error: " . $e->getMessage() . "<br>");
                echo "Línea del error: " . $e->getLine();

            }//try-catch 

            return $conexion;

        }//conexion

    }//class

?>