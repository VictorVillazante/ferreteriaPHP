<?php
    class conexion{
        public static function conectar(){
            return new PDO('mysql:host=localhost;dbname=tienda_virtual_II','root','');
        }
    }
    
?>