<?php
    class Controlador_imagen{
        public static function ctr_obtener_imagen_producto($tabla,$id){
            return Modelo_galeria::obtener_img_principal_producto($tabla,$id);
        }
    }

?>