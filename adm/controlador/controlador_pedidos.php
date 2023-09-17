<?php
    //echo "obteniendo pedidos";
    include ('C:\xampp\htdocs\cursoPHP\proyecto_II\adm\modelo\modelo_pedidos.php');
    switch($_POST['metodo']){
        case 'obtener_pedidos':
            Controlador_pedidos::obt_pedidos();
            break;
    }
    class Controlador_pedidos{
        public static function obt_pedidos(){
            $r= Modelo_pedidos::obtner_pedidos();
            $pedidos="<table border=2>";
            foreach($r as $fila){
                $pedidos.="<tr><td>".$fila['idpedido']."</td><td>".$fila['estado']."</td><td>".$fila['fecha']."</td></tr>";
            }
            $pedidos.="</table>";
            echo $pedidos;
            /*$r="";
            foreach($filas as $fila){
                $r+=$fila[0]+"<br>";
            }
            echo $r;*/
            //echo 'Obtener pedidos';
        }
    }
?>