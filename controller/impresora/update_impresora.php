<?php 
	
	require_once '../../model/impresora.php';
    $impresora = new Impresora();
    $impresora->set('pkimpresora', $_POST['pkimpresora']);
  	$impresora->set('nombre_impresora', $_POST['impresora'] );
  	$impresora->set('estado', $_POST['estado'] );
	$respuesta = $impresora->updateImpresora();

	if ($respuesta) {
		echo"<script>window.location.href=\"../../view/pc/impresora/view_impresora.php?msg=2\"</script>";
	   		
	} else {

		echo"<script>window.location.href=\"../../view/pc/impresora/view_impresora.php?msg=3\"</script>";
	}
	
	

?>