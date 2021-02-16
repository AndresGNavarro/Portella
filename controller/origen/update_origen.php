<?php 
	
	require_once '../../model/origen.php';
    $origen = new Origen();
    $origen->set('pkorigen', $_POST['pkorigen']);
  	$origen->set('origen', $_POST['origen'] );
  	$origen->set('estado', $_POST['estado'] );
	$respuesta = $origen->updateOrigen();

	if ($respuesta) {
		echo"<script>window.location.href=\"../../view/pc/origen/view_origen.php?msg=2\"</script>";
	   		
	} else {

		echo"<script>window.location.href=\"../../view/pc/origen/view_origen.php?msg=3\"</script>";
	}
	
	

?>