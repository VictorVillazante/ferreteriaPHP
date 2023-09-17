<?php
    require_once ('conexion.php');
    class Modelo_pedidos{
        public static function obtner_pedidos(){
            $resultado=Conexion::conectar()->query("SELECT * FROM pedido");
            $r=$resultado->fetchAll();
            return $r;
            /*return "
                <pre>
                    ".print_r($r)."
                </pre>
            ";*/
        }
    }
?>