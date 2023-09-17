<?php
    class Caja_carrito{

        public static function obtener_productos_caja($p=null){
            include('C:\xampp\htdocs\cursoPHP\proyecto_II\controlador\controlador_producto.php');
            session_start();
            $suma=0;
            if(!isset($_SESSION['contador'])){
                $_SESSION['contador']=0;
            }
            if(isset($p)){
                $_SESSION['producto'][$_SESSION['contador']]=$_GET['p'];
                $_SESSION['contador']++;
            }  
            echo "<table border=2>";
            echo "<tr><th>Nombre</th><th>Precio</th></tr>";
            for($i=0;$i<($_SESSION['contador']);$i++){
                $producto=Controlador_productos::ctr_obtener_producto_datos('productos',$_SESSION['producto'][$i]);
                echo "<tr><td>".$producto['nombre']."</td><td>".$producto['precio']."</td></tr>";
                $suma=$producto['precio']+$suma;
                //$producto=Modelo_galeria::obtener_datos_producto('productos',$_SESSION['producto'][$i]);
                /*echo "<div class='producto_carrito_galeria'>
                    <p>
                        ".$producto['nombre']."<br>
                        ".$producto['precio']."<br>
                    </p>
                </div>";*/
            }
            $_SESSION['subtotal']=$suma;
            echo "<tr><td>Subtotal</td><td>".number_format($suma,2)."</td></tr>";
            echo "</table>";
            if(isset($_SESSION['descuento'])){
                $_SESSION['total']=$_SESSION['subtotal']-$_SESSION['descuento']*$suma;
                echo "<div id='descuento_caja_carrito'>Descuento".($_SESSION['descuento']*100)."%</div>";
                echo "<div id='total_descuento_caja_carrito' >Total con descuento".($_SESSION['total'])."</div>";
            }else{
                $_SESSION['total']=$_SESSION['subtotal'];

            }
        }
    }
?>