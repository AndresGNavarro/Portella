<?php 

require_once '../../model/perfil.php';

$Modperfil = new Perfil();

$pkperfill = base64_decode($_GET['a']);
$pkprivilegio = $_POST['pkprivilegio'];

$Modperfil->set('pkperfil', $pkperfill);


$Modperfil->set('pkprivilegio', $pkprivilegio);
$respuesta = $Modperfil->validar_detalle();

if ($respuesta) {
	echo "<script>window.location.href=\"../../view/pc/perfil/detalle_perfil.php?a=".base64_encode($pkperfill)."&msg=1\"</script>";
}else{
	$respuesta = $Modperfil->add_detalle();

	if ($respuesta) {
		

		echo "<script>window.location.href=\"../../view/pc/perfil/detalle_perfil.php?a=".base64_encode($pkperfill)."&msg=2\"</script>";
	}else {
		
		echo "<script>window.location.href=\"../../view/pc/perfil/detalle_perfil.php?a=".base64_encode($pkperfill)."&msg=3\"</script>";
	}
}
?>