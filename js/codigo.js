$(document).ready(inicio)
function inicio(){
    $(".boton_carrito").click(aniade)
    $("#carrito").load('controlador/controlador_productos_carrito.php?m=ac');//Colocar .php en los includes
    $(".vaciar_carrito").click(vaciar_carrito);
    $('#aplicar_cupon').click(aplicar_descuento);
}
function vaciar_carrito(){
    //alert('Vaciando carrito');
    $("#carrito").load('controlador/controlador_productos_carrito.php?m=vc');

}
function aniade(){
    //alert($(this).val());
    //$("#carrito").append($(this).val());
    $("#carrito").load('controlador/controlador_productos_carrito.php?p='+$(this).val()+'&m=ac');
}
function registrar_cliente(nombre,apellidos,correo,telefono_c,telefono_r,ci,direccion,entrega){
    /*alert("Nombre:"+nombre+"\nApellidos:"+apellidos+
    "\nCorreo:"+correo+"\nTelefono contacto:"
    +telefono_c+"\nTelefono referencia:"+
    telefono_r+"CI:"+ci+
    "\nDireccion:"+direccion+"\nEntrega:"+entrega);*/
    
    var parametros={
        "nombre":nombre,
        "apellido":apellidos,
        "correo":correo,
        "telefono_contacto":telefono_c,
        "telefono_referencia":telefono_r,
        "ci":ci,
        "direccion":direccion,
        "entrega":entrega,
        "metodo":"agregar_pedido"
    };
    $.ajax({
        data:parametros,
        url:"controlador/controlador_pedidos.php",
        type:'post',
        beforeSend:function(){
            $("#resultado_pedido").html('Ingrese sus datos para procesar su pedido')
        },
        success:function(response){
            $("#resultado_pedido").html(response);
        }
    });
}
function aplicar_descuento(codigo){
    var parametros={
        "codigo":codigo,
        "metodo":"aplicar_cupon"
    };
    $.ajax({
        data: parametros,
        url: "controlador/controlador_cupones.php",
        type: 'post',
        beforeSend:function(){
            $('#confirma_cupon').html('Verificando cupon');
        },
        success:function(response){
            $("#carrito").load('controlador/controlador_productos_carrito.php?m=ac');//Colocar .php en los includes
            $('#confirma_cupon').html(response);
        }
    });
}

/*function registrar_cliente(saludo){
    alert('registrando ooo'+saludo);
    //alert('registrando al '+nombres);
}*/