<?php 
 require_once '../../model/privilegio.php';

 $privilegio = new Privilegio();
  $clave =  1;
  $privilegio->set('nombre', $_POST['privilegio'] );
  $privilegio->set('clave', $clave );
  $privilegio->set('estado', 1 );


 $respuesta = $privilegio->validarPrivilegio();
 if ($respuesta != "0" ) {
 	echo"<script>window.location.href=\"../../view/pc/privilegio/view_privilegio.php?msg=1\"</script>";
 }else{

 	$inserta = $privilegio->addPrivilegio();
 	 if ($inserta) {

      
      echo"<script>window.location.href=\"../../view/pc/privilegio/view_privilegio.php?msg=2\"</script>";
     }else{
        
        echo"<script>window.location.href=\"../../view/pc/privilegio/view_privilegio.php?msg=3\"</script>";
     }
 }
 ?>