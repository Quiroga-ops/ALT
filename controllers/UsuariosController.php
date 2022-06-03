<?php

class ClaseControladorUsuarios{
    /*=======================================
    =           INGRESO DE USUARIOS         =
    ========================================*/
    static public function MetodoControladorIngresoUsuario(){
        if(isset($_POST["ingresousuario"])){
            
            if(preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingresousuario"]) &&
                preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingresopassword"])){
                
                $tabla = "usuarios";

                $item = "usuario";
                $valor = $_POST["ingresousuario"];

                $respuesta = claseModeloUsuarios::MostrarUsuarios($tabla, $item, $valor);

                if($respuesta["usuario"] == $_POST["ingresousuario"] && 
                    $respuesta["password"] == $_POST["ingresopassword"]){

                        
                    $_SESSION["iniciarSesion"] = "ok";

                    echo '<script>
                        window.location = "inicio";
                        </script>';




                    
                    echo '<br><div class="alert alert-success">Bienvenido al sistema!</div>';


                }else{
                    echo '<br><div class="alert alert-danger">Error al ingresar, vuelve a intentarlo.</div>';
                }
            }
        }
    }
/*=======================================
=           REGISTRO DE USUARIOS         =
========================================*/

    static public function MetodoCrearUsuario(){
        if(isset($_POST["nuevousuario"])){
            if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/',$_POST["nuevonombre"]) &&
                preg_match('/^[a-zA-Z0-9]+$/',$_POST["nuevonombre"]) && 
                preg_match('/^[a-zA-Z0-9]+$/',$_POST["nuevopassword"])){

                }else{
                    echo "<script>
                        swal({
                                type: 'error',
                                tittle: '¡El usuario no puede ir vacio o llevar caracteres especiales',
                                showConfirmButton: true,
                                confirmButtonText: 'Cerrar',
                                closeOnConfirm: false
                            }).then((result)=>{
                                if(resultado.value){
                                    window.location = 'usuarios';
                                }
                            })
                    </script>";
                }






        }





    }


}

?>