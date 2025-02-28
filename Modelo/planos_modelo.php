<?php
    
    class Planos_modelo {
        
        private $db;
        private $planos;

        public function __construct() {

            require_once("Modelo/conectar.php");
            $this->db=Conectar::conexion();
            $this->planos=array();

        }//construct

        public function get_planos() {

            require("paginacion.php");
            
            $consulta=$this->db->query("SELECT * FROM planos LIMIT $desde,$tam");
              
              while($filas = $consulta->fetch(PDO::FETCH_ASSOC)) {
                  $this->planos[] = $filas;
              }//while

            return $this->planos;

        }//get_productos

    }//class

?>