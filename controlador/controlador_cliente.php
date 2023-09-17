<?php
    include ('C:\xampp\htdocs\cursoPHP\proyecto_II\modelo\modelo_cliente.php');

    class Controlador_clientes{
        public static function verificar_existencia_cliente($ci){
            return Modelo_cliente::verificar_existencia_cliente($ci);
        }
        public static function crear_cliente($nombre,$apellido,$correo,$telefono_c,$telefono_r,$direccion,$ci){
            return Modelo_cliente::crear_cliente($nombre,$apellido,$correo,$telefono_c,$telefono_r,$direccion,$ci);
            //return "$nombre $apellido $correo $telefono_c $telefono_r $direccion $ci";
        }
        public static function solicitar_id($ci){
            return Modelo_cliente::solicitar_id($ci);
        }

    }

?>