<?php
    require_once ('conexion.php');
    class Modelo_adm{
        public static function verificar_existencia($usuario,$contraseña){
            $resultado=Conexion::conectar()->query("SELECT * FROM administradores WHERE usuario='$usuario' AND contraseña='$contraseña'");
            $r=$resultado->fetchAll();
            $contador=0;
            foreach($r as $fila){
                $contador++;
            }
            if($contador>=1){
                return true;
            }else{
                return false;
            }

        }
    }
?>