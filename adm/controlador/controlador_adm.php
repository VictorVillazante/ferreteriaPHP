<?php
    include ('C:\xampp\htdocs\cursoPHP\proyecto_II\adm\modelo\modelo_adm.php');
    switch($_POST['metodo']){
        case 'verificar_existencia':
            Controlador_adm::verificar_existencia($_POST['usuario'],$_POST['contraseña']);
        break;
    }
    class Controlador_adm{
        public static function verificar_existencia($usuario,$contraseña){
            if(Modelo_adm::verificar_existencia($usuario,$contraseña)){
                //header("Status:301 Moved Permanently");
                //echo header("Location: ../vista/plantilla.php"); puede incluir a la otra pagina abajo de la primera
                echo "<script> window.location='../adm/vista/plantilla.php'; </script>";//nos redirige a la pagina no la incluye
                //exit;
            }else{
                echo "No existe verifica tus datos";
            }
        }
    }
?>