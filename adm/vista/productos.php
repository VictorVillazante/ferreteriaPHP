<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="../js/jquery-3.5.1.js"></script><!--Si no se incorpora no se podra ejecutar ningun metodo de javascript-->
        <script src="../js/script.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <title>Document</title>
    </head>
    <body>
    <div id="contenedor_interno">
        <aside>
            <h2>CONTROL PRODUCTOS</h2>
            <nav>
                <ul id="menu_aside">
                    <a href="#" onclick="crear_producto();">Crear</a>
                    <a href="#" onclick="modificar_producto();">Modificar</a>
                </ul>
            </nav>
        </aside>
        <article >
            <div id="cont_producto">
                <h3>Seleccione opcion</h3>
            </div>
        </article>
        
       
    </div>
    </body>
    </html>