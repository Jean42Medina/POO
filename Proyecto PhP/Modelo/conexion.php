<?php
    class Conexion{
        public function get_conexion(){
            $user = "postgres";
            $pass = "1234";
            $host = "localhost";
            $db = "Pedido";
            $conexion = new PDO("pgsql:host = $host;dbname = $db;",$user,$pass);
            return $conexion;
        }           
    }
    $pruebacon=new Conexion();
       $con = $pruebacon->get_conexion();
       if($con){
           echo " Se conecto exitosamente";
       }else{
           echo "Error no se puede conectar";
       }
?>