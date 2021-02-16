<?php
  require_once '../../../model/perfil.php';
  $marca = new Perfil();
  $datos = $marca->combo_privilegio();
  while ($row = mysqli_fetch_array($datos)) {
  	echo "<option value=".$row['pkprivilegio'].">".$row['nombre']." </option>";
  }
?>