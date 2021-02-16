<?php 
	
	require_once '../../model/privilegio.php';
    $privilegio = new Privilegio();
    $privilegio->set('pkprivilegio', $_POST['pkprivilegio']);
    $privilegio->set('clave', $_POST['clave']);
  	$privilegio->set('nombre', $_POST['privilegio'] );
  	$privilegio->set('estado', $_POST['estado'] );
	$respuesta = $privilegio->updatePrivilegio();

	if ($respuesta) {
		echo"<script>window.location.href=\"../../view/pc/privilegio/view_privilegio.php?msg=2\"</script>";
	   		
	} else {

		echo"<script>window.location.href=\"../../view/pc/privilegio/view_privilegio.php?msg=3\"</script>";
	}
	
	

?>