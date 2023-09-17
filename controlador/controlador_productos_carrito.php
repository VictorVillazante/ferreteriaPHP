<?php
    include ('C:\xampp\htdocs\cursoPHP\proyecto_II\vista\paginas\caja_carrito.php');
    class Controlador_productos_carrito{
        public static function cargar_contenedor_carrito(){
            if(isset($_GET['p'])){
                Caja_carrito::obtener_productos_caja($_GET['p']);

            }else{
                Caja_carrito::obtener_productos_caja();
            }
        }
        public static function destruir_carrito(){
            session_start();
            session_destroy();

            echo "<script>
                window.location('../index.php?pagina=galeria');
            </script>";
        }
    }
    switch($_GET['m']){
        case 'ac':
            Controlador_productos_carrito::cargar_contenedor_carrito();
            break;
        case 'vc':
            Controlador_productos_carrito::destruir_carrito();
            Controlador_productos_carrito::cargar_contenedor_carrito();
            break;
    }
?>