<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/jquery-3.5.1.js"></script><!--Si no se incorpora no se podra ejecutar ningun metodo de javascript-->
    <script src="js/script.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:ital@1&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="   css/login.css">
    <title>Document</title>
</head>
<body>
    <div class="cuerpo_login">
        <div class="login">
            <label for="usuario">Usuario</label>
            <input type="text" placeholder="Ingrese su usuario" name="usuario"" id="usuario">
            <label for="contraseña">Contraseña:</label>
            <input type="password" name="contraseña" id="contraseña">
            <input type="hidden" name="metodo" value="verificar_existencia">
            <input type="button" value="Verificar" href="javascript:;" onclick="verificar_adm($('#usuario').val(),$('#contraseña').val());" >
        </div>
        <div id="respuesta_login"></div>
    </div>
</body>
</html>
