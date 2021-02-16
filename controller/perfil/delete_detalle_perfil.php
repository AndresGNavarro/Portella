<?php  
require_once '../../model/perfil.php';


$Modperfil = new Perfil();

$pkperfill = base64_decode($_GET['env']);
$pkdetalle_perfil = base64_decode($_GET['d']);

$Modperfil->set('pkperfil', $pkperfill);


$Modperfil->set('pkdetalle_perfil', $pkdetalle_perfil);
$datos5 = $Modperfil->delete_detalle();
if ($datos5) {
 
  echo "<script>window.location.href=\"../../view/pc/perfil/detalle_perfil.php?a=".base64_encode($pkperfill)."&msg=4\"</script>";
}else{
  echo "<script>window.location.href=\"../../view/pc/perfil/detalle_perfil.php?a=".base64_encode($pkperfill)."&msg=3\"</script>";
}
?>
