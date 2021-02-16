<?php 
//include("../../model/seguridad_paginas.php"); 
require_once '../../model/usuario.php';
//se crea un objeto con la clase del producto(que se encuentra en producto.php)
//y se le asigna X nombre a la variable
  $usuario = new Usuario();
  $usuario->set('nombre', $_POST['nombre'] );
  $usuario->set('apellido_paterno', $_POST['apellido_paterno']);
  $usuario->set('apellido_materno', $_POST['apellido_materno']);
  $usuario->set('nombre_usuario', $_POST['nombre_usuario'] );
  $usuario->set('password', $_POST['password']);
  $usuario->set('correo', $_POST['correo'] );
  $usuario->set('tipo', $_POST['tipo']);
  $usuario->set('pkperfil', $_POST['pkperfil']);
  $estado = 1;
  $usuario->set('estado', $estado);
 
$respuesta = $usuario->validar();

if ($respuesta) {
// echo "1";
  echo"<script>window.location.href=\"../../view/pc/usuario/add_usuario.php?msg=1\"</script>";

  }else{ 

    
     $datos2 = $usuario->add();
     if ($datos2) {

     //   echo "4";
      echo"<script>window.location.href=\"../../view/pc/usuario/add_usuario.php?msg=2\"</script>";
     }else{
     //echo "5";
        echo"<script>window.location.href=\"../../view/pc/usuario/add_usuario.php?msg=3\"</script>";
     }

}
     

?>