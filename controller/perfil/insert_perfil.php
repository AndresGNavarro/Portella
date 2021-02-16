<?php 
 require_once '../../model/perfil.php';

 $perfil = new Perfil();
  $perfil->set('nombre_perfil', $_POST['perfil'] );
  $perfil->set('estado', 1 );


 $respuesta = $perfil->validarPerfil();
 if ($respuesta != "0" ) {
 	echo"<script>window.location.href=\"../../view/pc/perfil/view_perfil.php?msg=1\"</script>";
 }else{

 	$inserta = $perfil->addPerfil();
 	 if ($inserta) {

      
      echo"<script>window.location.href=\"../../view/pc/perfil/view_perfil.php?msg=2\"</script>";
     }else{
        
        echo"<script>window.location.href=\"../../view/pc/perfil/view_perfil.php?msg=3\"</script>";
     }
 }
 ?>