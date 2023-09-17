<?php
    require_once ('conexion.php');
    class Modelo_productos{
        public static function registrar_producto($nombre,$stock,$precio,$precio_d,$peso,$longitud,$anchura,$altura){
            $resultado=Conexion::conectar()->query("INSERT INTO productos value (null,'$nombre',$stock,$precio,$precio_d,$peso,$longitud,$anchura,$altura,'',true,2) ");
            /*return "
                <pre>
                    ".print_r($r)."
                </pre>
            ";*/
        }
        public static function obtener_id(){
            $resultado=Conexion::conectar()->query("SELECT id from productos ORDER BY id asc ");
            $r=$resultado->fetchAll();
            $ultimo=0;
            foreach($r as $fila){
                $ultimo=$fila['id'];
            }
            return $ultimo;
        }
        public static function registrar_imagen($id_prod){
            $resultado=Conexion::conectar()->query("INSERT INTO imagenes value (null,'sin imagen','sin_imagen.jpg','sin imagen',$id_prod,1)");
        }
    }   

?>