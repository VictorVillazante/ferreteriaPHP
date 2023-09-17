<?php
    include ('C:\xampp\htdocs\cursoPHP\proyecto_II\modelo\obtener_datos.php');
    class Controlador_productos{
        public static function ctr_obtener_productos($tabla){
            return Modelo_galeria::obtener_datos($tabla);
        }   
        public static function ctr_obtener_producto($tabla,$id){
            return Modelo_galeria::obtener_img_principal_producto($tabla,$id);
        }
        public static function ctr_obtener_producto_datos($tabla,$id){
            return Modelo_galeria::obtener_datos_producto($tabla,$id);
        }
        public static function actualizar_stock($id_producto,$cantidad){
            $stock_actual=Modelo_galeria::obtener_stock_producto($id_producto);
            Modelo_galeria::actualizar_stock($stock_actual-$cantidad,$id_producto);
        }
    }
?>