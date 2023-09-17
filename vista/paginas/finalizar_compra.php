<?php
echo '<div class="cupon_descuento">';
echo '<label for="cupon">Cupon de descuento:</label><br>';
echo '<p>Solo puede aplicar un cupon:</p><br>';
echo '<input type="text" placeholder="Ingrese el codigo de descuento:" id="cupon" name="cupon" class="input_pedido"><br>';

?>
<input type="button" id="aplicar_cupon" value="Aplicar cupon" name="aplicar_cupon" href="javascript:;"  
        onclick="aplicar_descuento($('#cupon').val());" >
<div id="confirma_cupon"></div>

<?php
echo '</div>';
echo '<div class="formulario">';
        echo '<label for="nombres">Nombres:</label><br>';
        echo '<input type="text" placeholder="Ingrese sus nombres:" id="nombres" name="nombres" class="input_pedido"><br>';
        echo '<label for="apellidos">Apellidos:</label><br>';
        echo '<input type="text" placeholder="Ingrese sus apellidos:" id="apellidos" name="apellidos" class="input_pedido"><br>';
        echo '<label for="correo">Correo electronico:</label><br>';
        echo '<input type="text" placeholder="Ingrese su correo:" name="correo" id="correo" class="input_pedido"><br>';
        echo '<label for="telefono">Telefono de contacto:</label><br>';
        echo '<input type="number" placeholder="Ingrese su telefono:" name="telefono_c" id="telefono_c" class="input_pedido"><br>';
        echo '<label for="telefono">Telefono de respaldo:</label><br>';
        echo '<input type="number" placeholder="Ingrese su respaldo:" name="telefono_r" id="telefono_r" class="input_pedido"><br>';
        echo '<label for="ci">CI:</label><br>';
        echo '<input type="text" placeholder="Ingrese su ci:" name="ci" id="ci" class="input_pedido"><br>';
        echo '<label for="direccion">Direccion:</label><br>';
        echo '<input type="text" placeholder="Ingrese su direccion:" id="direccion" name="direccion" class="input_pedido"><br>';

        echo '<div class="entrega_form">';
        echo '<label for="domicilio">Domicilio:</label><br>';
        echo '<input type="radio" id="domicilio" name="entrega" value="domicilio">';

        echo '</div>';

        echo '<div class="entrega_form">';
        echo '<label for="recojo">Recojo:</label><br>';
        echo '<input type="radio" id="recojo" name="entrega"  value="recojo">';

        echo '</div>';?>

        <input type="button" id="finalizar_compra" value="Enviar" name="enviar" href="javascript:;"  
        onclick="registrar_cliente($('#nombres').val(),$('#apellidos').val(),$('#correo').val(),$('#telefono_c').
        val(),$('#telefono_r').val(),$('#ci').val(),$('#direccion').val(),
        $('input:radio[name=entrega]:checked').val());" >
<?php
    echo '</div>';
    echo '<div id="resultado_pedido">Finalizar compra</div>'
?>