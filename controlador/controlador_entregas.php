<?php
    include ('C:\xampp\htdocs\cursoPHP\proyecto_II\modelo\modelo_entregas.php');
    class Controlador_entregas{
        public static function verificar_tipo($entrega){
            return Modelo_entregas::verificar_tipo($entrega);
        }
    }
?>