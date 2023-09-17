<!doctype html>
<html class="" lang="">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="vista/css/plantilla.css">
    <script src="js/jquery-3.5.1.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <script src="js/codigo.js"></script>
</head>

<body>
    <header class="site-header">
      <div class="iniciar_sesion_adm">
        <!--<img id="icono_iniciar_sesion" src="C:\xampp\htdocs\cursoPHP\proyecto_II\img\icono_usuario_2.jpg" alt="">-->
        <a href="adm/index.php">Iniciar sesion</a>
      </div>
      <div class="contenido-cabezera">
          <div class="informacion-evento">
            <div class="localizacion">
              <p class="ciudad"><a href=""><i class="fas fa-map-marker-alt"></i></a>Chasquipampa, Calle 58</p>
            </div>

            <div>
              <h1 class="nombre-sitio">
                Ferreteria Bernabe
              </h1>
            </div>
            <div class="slogan">
              <p class="slogan">Compre puertas de todo precio o haga sus pedidos</p>
            </div>
          </div>
      </div><!--contenido-cabezera-->
    </header>
    <nav>
      <table id="nav">
          <tr>  
              <td class="elementos"><a href="index.php?pagina=inicio">Inicio</a></td>
              <td class="elementos"><a href="index.php?pagina=galeria">Galeria</a></td>
              <td class="elementos"><a href="index.php?pagina=carrito">Carrito</a></td>
              <td class="elementos"><a href="index.php?pagina=blog">Noticias</a></td>
              <td class="elementos"><a href="index.php?pagina=contactos">Contactos</a></td>
              <td class="elementos"><a href="index.php?pagina=nosotros">Nosotros</a></td>

          </tr>
      </table>
    </nav>
    <div id="carrito">
      
    </div>
    <a><button class='vaciar_carrito  buttons_carrito'>Vaciar carrito</button></a>
    <a href='index.php?pagina=finalizar_compra'><button class="buttons_carrito">Finalizar compra</button></a>

    <div class="contenido_cuerpo">
      <?php
        if(isset($_GET['pagina'])){
          if($_GET['pagina']=='inicio' ||
          $_GET['pagina']=='galeria' ||
          $_GET['pagina']=='carrito' ||
          $_GET['pagina']=='blog' ||
          $_GET['pagina']=='contactos' ||
          $_GET['pagina']=='descripcion' ||
          $_GET['pagina']=='finalizar_compra' ||
          $_GET['pagina']=='nosotros' 
          ){
            include('vista/paginas/'.$_GET['pagina'].'.php');
          }else{
            include('vista/paginas/error.php');
          }
        }else{
          include('vista/paginas/inicio.php');
        }
       
      ?>
    </div>
</body>

</html>
