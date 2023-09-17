<?php
    session_start();
    if(!isset($_SESSION['contador'])){
        $_SESSION['contador']=0; 
    }
    
    echo '<div id="galeria_contenedor">';
        $registros=Controlador_productos::ctr_obtener_productos('productos');
        foreach($registros as $fila){
            echo '<div class="galeria_producto">';
                $imagen=Controlador_imagen::ctr_obtener_imagen_producto('imagenes',$fila['id']);
                echo "<img class='galeria_imagen' src='img/".$imagen['nombre']."'>";
                echo "<h3 class='galeria_producto_titulo'>".$fila['nombre']."</h3>";
                echo "<a href='index.php?pagina=descripcion&id=".$fila['id']."'><button>"."Mas informacion"."</button></a>";
                echo "<a ><button class='boton_carrito' value=".$fila['id'].">"."Añadir al carrito"."</button></a>";

            echo '</div>';
        }
    echo '</div>';
?>