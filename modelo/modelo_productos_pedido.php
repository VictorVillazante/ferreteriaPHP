<?php
    require_once ('conexion.php');
    class Modelo_productos_pedido{
        public static function insertar_producto($idpedido,$idproducto,$cantidad){
            $conexion=Conexion::conectar()->query("INSERT INTO pedidos_productos value (null,$cantidad,$idproducto,$idpedido)");
        }
    }

?>