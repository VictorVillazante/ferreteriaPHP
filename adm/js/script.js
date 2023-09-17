$(document).ready(inicio)
function inicio(){
    $(".boton_carrito").click(aniade)
   
}
function verificar_adm(usuario,contraseña) {
    parametros={
        "usuario":usuario,
        "contraseña":contraseña,
        "metodo":"verificar_existencia"
    };
    $.ajax({
        data:parametros,
        type:"post",
        url:"controlador/controlador_adm.php",
        beforeSend:function(){
            $('#respuesta_login').html('Verificando los datos');
        },
        success:function(response){
            $('#respuesta_login').html(response);
        }
    });
}
function cargar1(){
    xhr = new XMLHttpRequest();
    xhr.open("GET","../vista/productos.php",false);
    xhr.send();
    con = document.getElementById("cont");
    con.innerHTML = xhr.responseText;
}
function cargar2(){
    location.href ="http://localhost/cursoPHP/proyecto_II/";
}
function cargar3(){
    xhr=new XMLHttpRequest();
    xhr.open("GET","../vista/pedidos.php",false);
    xhr.send();
    con=document.getElementById("cont");
    con.innerHTML = xhr.responseText;
}
/**/ 
function crear_producto(){
    xhr = new XMLHttpRequest();
    xhr.open("GET","../vista/crear_producto.php",false);
    xhr.send();
    con = document.getElementById("cont_producto");
    con.innerHTML = xhr.responseText;
}
function modificar_producto(){
    xhr = new XMLHttpRequest();
    xhr.open("GET","../vista/modificar_producto.php",false);
    xhr.send();
    con = document.getElementById("cont_producto");
    con.innerHTML = xhr.responseText;
}

/**/ 
function crear_categoria(){
    xhr = new XMLHttpRequest();
    xhr.open("GET","../vista/crear_categoria.php",false);
    xhr.send();
    con = document.getElementById("cont_categoria");
    con.innerHTML = xhr.responseText;
}
function modificar_categoria(){
    xhr = new XMLHttpRequest();
    xhr.open("GET","../vista/modificar_categoria.php",false);
    xhr.send();
    con = document.getElementById("cont_categoria");
    con.innerHTML = xhr.responseText;
}
/**/ 
function msotrar_pedidos(){
    //alert('mostrar pedidos');
    var parametros={
        "metodo":"obtener_pedidos"
    }
    $.ajax({
        data:parametros,
        url:'../controlador/controlador_pedidos.php',
        type:'post',
        beforeSend:function(){
            $('#cont_pedidos').html('Buscando pedidos...')
        },
        success:function(r){
            $('#cont_pedidos').html(r)
        }
    });
}


function registrar_producto(nombre,stock,precio,precio_descuento,peso,longitud,anchura,altura){
    var parametros={
        "nombre":nombre,
        "stock":stock,
        "precio":precio,
        "precio_descuento":precio_descuento,
        "peso":peso,
        "longitud":longitud,
        "anchura":anchura,
        "altura":altura,
        "metodo":"registrar_producto",
    }
    $.ajax({
        data:parametros,
        url:'../controlador/controlador_producto.php',
        type:'post',
        beforeSend:function(){
            $('#resp_registro_prod').html('Añadiendo producto...')
        },
        success:function(r){
            $('#resp_registro_prod').html(r)
        }
    });
}