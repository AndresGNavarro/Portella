<?php 
 require_once '../../model/origen.php';

 $origen = new Origen();
  $origen->set('origen', $_POST['origen'] );
  $origen->set('estado', 1 );


 $respuesta = $origen->validarOrigen();
 if ($respuesta != "0" ) {
 	echo"<script>window.location.href=\"../../view/pc/origen/view_origen.php?msg=1\"</script>";
 }else{

 	$inserta = $origen->addOrigen();
 	 if ($inserta) {

      
      echo"<script>window.location.href=\"../../view/pc/origen/view_origen.php?msg=2\"</script>";
     }else{
        
        echo"<script>window.location.href=\"../../view/pc/origen/view_origen.php?msg=3\"</script>";
     }
 }
 ?>