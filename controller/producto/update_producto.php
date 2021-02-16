<?php 
	
	require_once '../../model/producto.php';
	$numeroparte = str_replace(array('\'', '"'), '', $_POST['numeroparte'] );
	$descripcion = str_replace(array('\'', '"'), '', $_POST['descripcion'] );
	$datoadicional1 = str_replace(array('\'', '"'), '', $_POST['datoadicional1'] );
	$datoadicional2 = str_replace(array('\'', '"'), '', $_POST['datoadicional2'] );
	$datoadicional3 = str_replace(array('\'', '"'), '', $_POST['datoadicional3'] );
    $producto = new Producto();
    $producto->set('pkproducto', $_POST['pkproducto'] );
    $producto->set('no_parte', $numeroparte );
    $producto->set('pkorigen', $_POST['pkorigen']);
  	$producto->set('descripcion', $descripcion );
  	$producto->set('datoadicional1', $datoadicional1 );
    $producto->set('datoadicional2', $datoadicional2 );
    $producto->set('datoadicional3', $datoadicional3 );
  	$producto->set('estado', $_POST['estado'] );
	$respuesta = $producto->updateProducto();

	if ($respuesta) {
		echo"<script>window.location.href=\"../../view/pc/producto/add_producto.php?msg=2\"</script>";
	   		
	} else {

		echo"<script>window.location.href=\"../../view/pc/producto/add_producto.php?msg=3\"</script>";
	}
	
	

?>