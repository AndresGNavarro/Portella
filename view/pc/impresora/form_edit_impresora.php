<?php 
//Carga de datos en base al pk
date_default_timezone_set('America/Monterrey');
require_once '../../../model/impresora.php';
$impresora = new Impresora();


$pkimpresora = base64_decode($_GET['a']);

$impresora->set('pkimpresora', $pkimpresora);
$datos = $impresora->viewImpresoraByPk();

while ($row = mysqli_fetch_array($datos)) {
  $impresora = $row['nombre_impresora'];
  $pkimpresora = $row['pkimpresora'];
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
                <h3 class="card-title">Editar Impresora</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="../../../controller/impresora/update_impresora.php"  id="formularioproducto"  name="formularioproducto" enctype="multipart/form-data" method="POST" autocomplete="off" >

            <input type="hidden" id="pkimpresora" name="pkimpresora" value="<?=$pkimpresora; ?>" >

            <div class="form-group row">
            <div class="col-sm-4">
              <label for="perfil">Nombre impresora:</label>
              <input type="input" class="form-control" id="impresora" name="impresora" value="<?=$impresora; ?>" required="true">
            </div>
           
            <div class="col-sm-2">
               <label for="perfil">Estado:</label>
                <select  class="form-control select2" id="estado" name="estado"  required="true" >

                          
                          <option value="1"> Activo</option>
                          <option value="0"> Inactivo</option>
                          
                          
                </select>
            </div>   
             
            </div>
            
            </div>
            
           
                <div class="card-footer clearfix">
                <button type="submit" class="btn btn-sm btn-info float-left">Guardar</button>
                </form>
                <a href="view_impresora.php">
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

