<?php 

	$pk_origen=base64_decode($_GET['a']);
	require_once '../../model/origen.php';
    $origen = new Origen();
    $origen->set('pkorigen', $pk_origen);
	$respuesta = $origen->deleteOrigen();

	if ($respuesta) {
		echo"<script>window.location.href=\"../../view/pc/origen/view_origen.php?msg=4\"</script>";
	   		
	} else {

		echo"<script>window.location.href=\"../../view/pc/origen/view_origen.php?msg=3\"</script>";
	}
	
	

?>