<?php
    class Conexion{
        public static function conectar(){
            try{
                $conexion=new PDO('mysql:host=localhost;dbname=tienda_virtual_II','root','');
                return $conexion;
            }catch(PDOException $e){
                echo 'Error en la conexion con el servidor';
            } 
        }
    }
?>