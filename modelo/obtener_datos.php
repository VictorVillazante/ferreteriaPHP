<?php
    require_once 'conexion.php';
    class Modelo_galeria{
        static public function obtener_datos($tabla){
            $resultado=Conexion::conectar()->query('SELECT * FROM '.$tabla.' WHERE stock>0');
            return $resultado->fetchAll();
        }
        static public function obtener_img_principal_producto($tabla,$id){
            try{
                $resultado=Conexion::conectar()->query('SELECT * FROM '.$tabla.' WHERE productos_id='.$id.' AND tipo_imagen_idtipo_imagen=1');
                return $resultado->fetch();
            }catch(PDOException $e){
                return array("nombre"=>"sin_imagen.jpg");
            }

        }
        static public function obtener_datos_producto($tabla,$id){
            $resultado=Conexion::conectar()->query('SELECT * FROM '.$tabla.' WHERE id='.$id.'');
            return $resultado->fetch();
        }
        static  public function obtener_stock_producto($id_producto){
            $resultado=Conexion::conectar()->query("SELECT stock FROM productos WHERE id=$id_producto");
            $fila=$resultado->fetch();
            return $fila['stock'];
        }
        static public function actualizar_stock($nuevo_stock,$id_producto){
            $resultado=Conexion::conectar()->query("UPDATE productos SET stock=$nuevo_stock WHERE id=$id_producto");
        }
    }
?>