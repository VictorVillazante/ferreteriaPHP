<?php
    include ('C:\xampp\htdocs\cursoPHP\proyecto_II\adm\modelo\modelo_productos.php');
    switch($_POST['metodo']){
        case 'registrar_producto';
            Controlador_productos::registrar_producto(
                $_POST['nombre'],
                $_POST['stock'],
                $_POST['precio'],
                $_POST['precio_descuento'],
                $_POST['peso'],
                $_POST['longitud'],
                $_POST['anchura'],
                $_POST['altura'],
            );
        break;
    }
    class Controlador_productos{
        public static function registrar_producto($nombre,$stock,$precio,$precio_d,$peso,$longitud,$anchura,$altura){
            Modelo_productos::registrar_producto($nombre,$stock,$precio,$precio_d,$peso,$longitud,$anchura,$altura);
            $id_prod=Modelo_productos::obtener_id();
            Modelo_productos::registrar_imagen($id_prod);
            echo "Producto registrado correctamente";
        }
    }
?>