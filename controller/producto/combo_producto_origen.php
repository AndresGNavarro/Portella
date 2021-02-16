<?php
  require_once '../../../model/producto.php';
  
  $producto = new Producto();
  $datos = $producto->comboProductoOrigen();
  while ($row = mysqli_fetch_array($datos)) {
  	echo "<option value=".$row['pkorigen'].">".$row['origen']." </option>";
  }
?> 