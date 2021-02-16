<?php 

	$pk_privilegio=base64_decode($_GET['a']);
	require_once '../../model/privilegio.php';
    $privilegio = new Privilegio();
    $privilegio->set('pkprivilegio', $pk_privilegio);
	$respuesta = $privilegio->deletePrivilegio();

	if ($respuesta) {
		echo"<script>window.location.href=\"../../view/pc/privilegio/view_privilegio.php?msg=4\"</script>";
	   		
	} else {

		echo"<script>window.location.href=\"../../view/pc/privilegio/view_privilegio.php?msg=3\"</script>";
	}
	
	

?>