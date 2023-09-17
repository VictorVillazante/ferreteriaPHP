<?php
    require_once ('conexion.php');
    class Modelo_pedidos{
        public static function registrar_pedido($id_cliente,$id_entrega,$id_descuento,$estado,$fecha,$iva,$total_pedido,$total){
            //return "INSERT INTO pedido VALUE (null,'$estado',$fecha,$id_cliente,$id_descuento,$id_entrega,$iva,$total_pedido,$total)";
            $resultado=Conexion::conectar()->query("INSERT INTO pedido VALUE (null,'$estado','$fecha',$id_cliente,$id_descuento,$id_entrega,$iva,$total_pedido,$total)");
        }
        public static function obtener_id_pedido($id_cliente,$id_entrega,$id_descuento,$fecha){
            //return "SELECT idpedido FROM pedido where clientes_idclientes=$id_cliente  and entrega_idtransporte=$id_entrega and descuentos_iddescuentos=$id_descuento and fecha=$fecha";
            $resultado=Conexion::conectar()->query("SELECT idpedido FROM pedido where clientes_idclientes=$id_cliente  and entrega_idtransporte=$id_entrega and descuentos_iddescuentos=$id_descuento and fecha='$fecha'");
            $id=$resultado->fetch();
            return $id['idpedido'];
        }
    }

?>