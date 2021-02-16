<?php 
//Carga de datos en base al pk
date_default_timezone_set('America/Monterrey');
require_once '../../../model/producto.php';
$producto = new Producto();


$pkproducto = base64_decode($_GET['a']);

$producto->set('pkproducto', $pkproducto);
$datos = $producto->viewProductoByPk();

while ($row = mysqli_fetch_array($datos)) {
  $numeroparte = $row['no_parte'];
  $descripcion = $row['descripcion'];
  $datoadicional1 = $row['dato_adicional1'];
  $datoadicional2 = $row['dato_adicional2'];
  $datoadicional3 = $row['dato_adicional3'];
  $origen = $row['origen'];
  $pkorigen = $row['pkorigen'];
  $estado = $row['estado'];
  
}
//Info estado
if ($estado == 1) {
  $valueEstado = "Activo";
}elseif ($estado == 0) {
  $valueEstado = "Inactivo";
}

 ?>
<div class="container-fluid">
	<div class= "col-md-12">
            <div class="card card-primary card-outline">
               <div class="card-header">
                <h3 class="card-title">Editar Producto</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="../../../controller/producto/update_producto.php"  id="formularioproducto"  name="formularioproducto" enctype="multipart/form-data" method="POST" autocomplete="off" >

            <input type="hidden" id="pkproducto" name="pkproducto" value="<?=$pkproducto; ?>" >

            <div class="form-group row">
            <div class="col-sm-4">
              <label for="perfil">Número de parte:</label>
              <input type="input" class="form-control" id="numeroparte" name="numeroparte" value="<?=$numeroparte; ?>" required="true">
            </div>
           
               
            <div class="col-sm-4">
              <label for="perfil">Descripción:</label>
              <input type="input" class="form-control" id="descripcion" name="descripcion" value="<?=$descripcion; ?>" required="true">
            </div>
           
             <div class="col-sm-2">
               <label for="perfil">Origen:</label>
                <select  class="form-control select2" id="pkorigen" name="pkorigen"  required="true" >
                          <option value="<?=$pkorigen; ?>"><?=$origen; ?></option>
                          <?php include('../../../controller/producto/combo_producto_origen.php');?>
                </select>
            </div> 
            <div class="col-sm-2">
               <label for="perfil">Estado:</label>
                <select  class="form-control select2" id="estado" name="estado"  required="true" >

                          <option value="<?=$estado; ?>"><?=$valueEstado; ?></option>
                          <option value="1"> Activo</option>
                          <option value="0"> Inactivo</option>
                          
                          
                </select>
            </div>   
             
            </div>
               <div class="form-group row">
            <div class="col-sm-4">
              <label for="perfil">Dato adicional 1:</label>
              <input type="input" class="form-control" id="datoadicional1" name="datoadicional1" value="<?=$datoadicional1; ?>" >
            </div>
           
               
            <div class="col-sm-4">
              <label for="perfil">Dato adicional 2:</label>
              <input type="input" class="form-control" id="datoadicional2" name="datoadicional2" value="<?=$datoadicional2; ?>" >
            </div>
           <div class="col-sm-4">
              <label for="perfil">Dato adicional 3:</label>
              <input type="input" class="form-control" id="datoadicional3" name="datoadicional3" value="<?=$datoadicional3; ?>" >
            </div>
           
             
            </div>
            
            </div>
            
           
                <div class="card-footer clearfix">
                <button type="submit" class="btn btn-sm btn-info float-left">Guardar</button>
                </form>
                <a href="add_producto.php">
                  <button  class="btn btn-sm btn-danger float-right">Cancelar</button>
                </a>
                
                </div>
         
            


         
                
            </div>
              <!-- /.card-body -->
  </div>


</div>




<script>
    function soloLetras(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
       especiales = "8-37-39-46";

       tecla_especial = false
       for(var i in especiales){
            if(key == especiales[i]){
                tecla_especial = true;
                break;
            }
        }

        if(letras.indexOf(tecla)==-1 && !tecla_especial){
            return false;
        }
    }
</script>

