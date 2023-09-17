<?php
    require_once ('conexion.php');
    class Modelo_cupon{
        public static function verifica_cupon($codigo){
            $resultado=Conexion::conectar()->query('SELECT * FROM descuentos where nombre="'.$codigo.'" AND habilitado=true ');
            $contador=0;
            foreach($resultado as $fila){
                $contador++;
            }
            if($contador>=1){
                return true;
            }else{
                return false;
            }
        }
        public static function buscar_descuento($codigo){
            $resultado=Conexion::conectar()->query('SELECT porcentaje FROM descuentos where nombre="'.$codigo.'" AND habilitado=true');
            return $resultado->fetch();
        }
        public static function buscar_id_cupon($codigo){
            $resultado=Conexion::conectar()->query('SELECT iddescuentos FROM descuentos where nombre="'.$codigo.'"');
            $r= $resultado->fetch();
            return $r['iddescuentos'];
        }
    }
?>