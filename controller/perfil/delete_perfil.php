<?php 

	$pk_perfil=base64_decode($_GET['a']);
	require_once '../../model/perfil.php';
    $perfil = new Perfil();
    $perfil->set('pkperfil', $pk_perfil);
	$respuesta = $perfil->deletePerfil();

	if ($respuesta) {
		echo"<script>window.location.href=\"../../view/pc/perfil/view_perfil.php?msg=4\"</script>";
	   		
	} else {

		echo"<script>window.location.href=\"../../view/pc/perfil/view_perfil.php?msg=3\"</script>";
	}
	
	

?>