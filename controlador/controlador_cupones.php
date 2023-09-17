<?php
    include ('C:\xampp\htdocs\cursoPHP\proyecto_II\modelo\modelo_cupon.php');
    class Controlador_cupones{
        public static function verifica_existencia_cupon($codigo){
            return Modelo_cupon::verifica_cupon($codigo);
        }
        public static function aplicar_cupon($codigo){
            if(Controlador_cupones::verifica_existencia_cupon($codigo)){
                $descuento=Modelo_cupon::buscar_descuento($codigo);
                session_start();
                $_SESSION['codigo_descuento']=$codigo;
                $_SESSION['descuento']=$descuento['porcentaje'];//fetch por mas que pida un valor siempre retorna un array
                echo "<div class='confirma_descuento' style='  background-color: rgb(165, 197, 161);
                ''>Se aplico el descuento</div>";
            }else{
                echo "<div class='confirma_descuento' style='background-color: rgb(197, 166, 161)''>No se aplico el descuento</div>";
            }
        }
        public static function buscar_id_cupon($codigo){
            return Modelo_cupon::buscar_id_cupon($codigo);
        }
    }
    switch($_POST['metodo']){
        case 'aplicar_cupon':
            Controlador_cupones::aplicar_cupon($_POST['codigo']);
        break;

    }
?>