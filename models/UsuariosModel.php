<?php

require_once "conexion.php";

class claseModeloUsuarios{
    /*=======================================
    =           MOSTRAR USUARIOS            =
    =======================================*/
    static public function MostrarUsuarios($tabla, $item, $valor){
        $stmt = Conexion::conectar()->prepare("SELECT * FROM usuarios WHERE $item = :$item");
        
        $stmt->bindParam(":".$item, $valor, PDO::PARAM_STR);

        $stmt->execute();
        return $stmt ->fetch();

        $stmt -> close();
        $stmt = null;

        
    }
}


?>