<?php
    include ('C:\xampp\htdocs\cursoPHP\proyecto_II\modelo\modelo_pedidos.php');
    include ('C:\xampp\htdocs\cursoPHP\proyecto_II\controlador\controlador_cliente.php');
    include ('C:\xampp\htdocs\cursoPHP\proyecto_II\controlador\controlador_entregas.php');
    include ('C:\xampp\htdocs\cursoPHP\proyecto_II\controlador\controlador_cupones.php');
    include ('C:\xampp\htdocs\cursoPHP\proyecto_II\controlador\controlador_productos_pedido.php');
    class Controlador_pedidos{
        public static function agregar_pedido($nombre,$apellido,$correo,$telefono_c,$telefono_r,$ci,$direccion){
            if($nombre!='' && $apellido!='' && $telefono_c!='' && $direccion!='' && $ci!=''){
                Controlador_pedidos::registrar_pedido($nombre,$apellido,$correo,$telefono_c,$telefono_r,$ci,$direccion);
            }else{
                echo '<div id="resultado_pedido" style="  background-color: rgb(226, 171, 171);
                ">Ingrese los datos obligatorios<div>';
            }
        }
        private static function registrar_pedido($nombre,$apellido,$correo,$telefono_c,$telefono_r,$ci,$direccion){
            if(!Controlador_clientes::verificar_existencia_cliente($_POST['ci'])){
                Controlador_clientes::crear_cliente($nombre,$apellido,$correo,$telefono_c,$telefono_r,$direccion,$ci);
            }
            
            $id_cliente=Controlador_clientes::solicitar_id($ci);
            $id_entrega=Controlador_entregas::verificar_tipo($_POST['entrega']);
            session_start();
            if(isset($_SESSION['codigo_descuento'])){
                //$id_descuento= $_SESSION['codigo_descuento'];
                $id_descuento=Controlador_cupones::buscar_id_cupon($_SESSION['codigo_descuento']);
            }else{
                $id_descuento=0;
            }
            $fecha=date("Y")."-".date("m")."-".date("d")." ".date("H").":".date("i").":".date("s");
            //echo $fecha;
            
            if(isset($_SESSION['producto'])>0){
                Modelo_pedidos::registrar_pedido($id_cliente,$id_entrega,$id_descuento,'A entregar',$fecha,(0.13*$_SESSION['total']),$_SESSION['total'],(1.13*$_SESSION['total']));
                $id_pedido=Modelo_pedidos::obtener_id_pedido($id_cliente,$id_entrega,$id_descuento,$fecha);
                Controlador_productos_pedido::registrar_productos_pedido($id_pedido);
                session_destroy();
                echo '<script>location.href="http://localhost/cursoPHP/proyecto_II/index.php?pagina=inicio"</script>';
            }else{
                echo '<div id="resultado_pedido" style="  background-color: rgb(226, 171, 171);
                ">Ingrese los datos obligatorios<div>';
            }
            
        }
    }
    switch($_POST['metodo']){
        case 'agregar_pedido':
            Controlador_pedidos::agregar_pedido($_POST['nombre'],$_POST['apellido'],$_POST['correo'],$_POST['telefono_contacto'],$_POST['telefono_referencia'],$_POST['ci'],$_POST['direccion']);
            break;
    }
?>