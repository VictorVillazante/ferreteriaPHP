<?php
    require_once ('conexion.php');
    class Modelo_entregas{
        public static function verificar_tipo($nombre){
            $resultado=Conexion::conectar()->query('SELECT idtransporte FROM tipo_entrega where nombre="'.$nombre.'"');
            $r=$resultado->fetch();
            return $r['idtransporte'];//error .... bool ... es un error en la consulta o no existe las consultas especificadas y estas intentando acceder a un campo de la fila que devuelve
        }
    }
?>