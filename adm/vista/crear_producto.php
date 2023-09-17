<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/crear_producto.css">
    <title>Document</title>
</head>
<body>
    <div id="form_registrar_producto">
        <h3 id="sub_form">Ingrese sus datos para registro</h3>
        <input type="text" placeholder="Ingrese su nombre" name="nombre"" id="nombre">
        <input type="number" placeholder="Ingrese su stock" name="stock"" id="stock">
        <input type="number" step="any" placeholder="Ingrese su precio" name="precio"" id="precio">
        <input type="number" step="any" placeholder="Ingrese su precio descuento" name="precio_descuento"" id="precio_descuento">
        <input type="number" step="any" placeholder="Ingrese su peso" name="peso"" id="peso">
        <input type="number" step="any" placeholder="Ingrese su longitud" name="longitud"" id="longitud">
        <input type="number" step="any" placeholder="Ingrese su anchura" name="anchura"" id="anchura">
        <input type="number" step="any" placeholder="Ingrese su altura" name="altura"" id="altura">
        <input type="button" value="Crear producto" href="javascript:;" onclick="registrar_producto(
            $('#nombre').val(),
            $('#stock').val(),
            $('#precio').val(),
            $('#precio_descuento').val(),
            $('#peso').val(),
            $('#longitud').val(),
            $('#anchura').val(),
            $('#altura').val()
        )">
    </div>
    <div id="resp_registro_prod"></div>
</body>
</html>