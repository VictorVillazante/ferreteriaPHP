<?php
    require_once ('conexion.php');/*Cuando ya se incorpor en otro archivo este include nos dice que hay dos arhivos conexion
    el requiere_once previene que incluya dos veces*/
    class Modelo_cliente{
        public static function verificar_existencia_cliente($ci){
            $resultado=Conexion::conectar()->query('SELECT * FROM clientes where ci="'.$ci.'"');
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
        public static function crear_cliente($nombre,$apellido,$correo,$telefono_c,$telefono_r,$direccion,$ci){
            $resultado=Conexion::conectar()->query("INSERT INTO clientes value(null,'$nombre','$apellido','$correo',$telefono_c,$telefono_r,'$direccion','$ci')");
        }
        public static function solicitar_id($ci){
            $resultado=Conexion::conectar()->query('SELECT idclientes FROM clientes where ci="'.$ci.'"');
            $r=$resultado->fetch();
            return $r['idclientes'];
        }
    }

?>