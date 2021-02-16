<?php 
	
	require_once '../../model/perfil.php';
    $perfil = new Perfil();
    $perfil->set('pkperfil', $_POST['pkperfil']);
  	$perfil->set('nombre_perfil', $_POST['perfil'] );
  	$perfil->set('estado', $_POST['estado'] );
	$respuesta = $perfil->updatePerfil();

	if ($respuesta) {
		echo"<script>window.location.href=\"../../view/pc/perfil/view_perfil.php?msg=2\"</script>";
	   		
	} else {

		echo"<script>window.location.href=\"../../view/pc/perfil/view_perfil.php?msg=3\"</script>";
	}
	
	

?>