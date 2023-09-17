<?php
    require_once ('C:\xampp\htdocs\cursoPHP\proyecto_II\modelo\modelo_productos_pedido.php');
    require_once ('C:\xampp\htdocs\cursoPHP\proyecto_II\controlador\controlador_producto.php');
    class Controlador_productos_pedido{
        public static function registrar_productos_pedido($idpedido){
            for($i=0;$i<$_SESSION['contador'];$i++){
                Modelo_productos_pedido::insertar_producto($idpedido,$_SESSION['producto'][$i],1);
                Controlador_productos::actualizar_stock($_SESSION['producto'][$i],1);
            }
        }
    }
?>