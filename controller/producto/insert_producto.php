<?php 
 require_once '../../model/producto.php';

$numeroparte = str_replace(array('\'', '"'), '', $_POST['numeroparte'] );
$descripcion = str_replace(array('\'', '"'), '', $_POST['descripcion'] );
$datoadicional1 = str_replace(array('\'', '"'), '', $_POST['datoadicional1'] );
$datoadicional2 = str_replace(array('\'', '"'), '', $_POST['datoadicional2'] );
$datoadicional3 = str_replace(array('\'', '"'), '', $_POST['datoadicional3'] );

 $producto = new Producto();
  $producto->set('no_parte', $numeroparte );
  $producto->set('pkorigen', $_POST['pkorigen']);
  $producto->set('descripcion', $descripcion);
  $producto->set('datoadicional1', $datoadicional1 );
  $producto->set('datoadicional2', $datoadicional2 );
  $producto->set('datoadicional3', $datoadicional3 );
  $producto->set('estado', 1 );





 $respuesta = $producto->validarNoParte();
 if ($respuesta != "0" ) {
 	echo"<script>window.location.href=\"../../view/pc/producto/add_producto.php?msg=1\"</script>";
 }else{

 	$inserta = $producto->addProducto();
 	 if ($inserta) {

      
      echo"<script>window.location.href=\"../../view/pc/producto/add_producto.php?msg=2\"</script>";
     }else{
        
        echo"<script>window.location.href=\"../../view/pc/producto/add_producto.php?msg=3\"</script>";
     }
 }
 ?>