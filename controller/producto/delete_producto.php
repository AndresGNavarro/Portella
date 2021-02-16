<?php 

	$pk_producto=base64_decode($_GET['a']);
	require_once '../../model/producto.php';
    $producto = new Producto();
    $producto->set('pkproducto', $pk_producto );
	$respuesta = $producto->deleteProducto();

	if ($respuesta) {
		echo"<script>window.location.href=\"../../view/pc/producto/add_producto.php?msg=4\"</script>";
	   		
	} else {

		echo"<script>window.location.href=\"../../view/pc/producto/add_producto.php?msg=3\"</script>";
	}
	
	

?>