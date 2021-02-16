<?php
  require_once '../../../model/perfil.php';
 
  $perfil = new Perfil();
  $datos = $perfil->combo_perfil();
  while ($row = mysqli_fetch_array($datos)) {
  	echo "<option value=".$row['pkperfil'].">".$row['nombre_perfil']." </option>";
  }
?>