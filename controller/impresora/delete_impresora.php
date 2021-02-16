<?php 

	$pk_impresora=base64_decode($_GET['a']);
	require_once '../../model/impresora.php';
    $impresora = new Impresora();
    $impresora->set('pkimpresora', $pk_impresora);
	$respuesta = $impresora->deleteImpresora();

	if ($respuesta) {
		echo"<script>window.location.href=\"../../view/pc/impresora/view_impresora.php?msg=4\"</script>";
	   		
	} else {

		echo"<script>window.location.href=\"../../view/pc/impresora/view_impresora.php?msg=3\"</script>";
	}
	
	

?>