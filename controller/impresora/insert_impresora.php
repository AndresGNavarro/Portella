<?php 
 require_once '../../model/impresora.php';

 $impresora = new Impresora();
  $impresora->set('nombre_impresora', $_POST['impresora'] );
  $impresora->set('estado', 1 );


 $respuesta = $impresora->validarImpresora();
 if ($respuesta != "0" ) {
 	echo"<script>window.location.href=\"../../view/pc/impresora/view_impresora.php?msg=1\"</script>";
 }else{

 	$inserta = $impresora->addImpresora();
 	 if ($inserta) {

      
      echo"<script>window.location.href=\"../../view/pc/impresora/view_impresora.php?msg=2\"</script>";
     }else{
        
        echo"<script>window.location.href=\"../../view/pc/impresora/view_impresora.php?msg=3\"</script>";
     }
 }
 ?>