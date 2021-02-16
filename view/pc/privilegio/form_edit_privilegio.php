<?php 
//Carga de datos en base al pk
date_default_timezone_set('America/Monterrey');
require_once '../../../model/privilegio.php';
$privilegio = new Privilegio();


$pkprivilegio = base64_decode($_GET['a']);

$privilegio->set('pkprivilegio', $pkprivilegio);
$datos = $privilegio->viewPrivilegioByPk();

while ($row = mysqli_fetch_array($datos)) {
  $privilegio = $row['nombre'];
  $clave = $row['clave'];
  $pkprivilegio = $row['pkprivilegio'];
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
                <h3 class="card-title">Editar Privilegio</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="../../../controller/privilegio/update_privilegio.php"  id="formularioproducto"  name="formularioproducto" enctype="multipart/form-data" method="POST" autocomplete="off" >

            <input type="hidden" id="pkprivilegio" name="pkprivilegio" value="<?=$pkprivilegio; ?>" >

            <div class="form-group row">
            <div class="col-sm-4">
              <label for="perfil">Nombre privilegio:</label>
              <input type="input" class="form-control" id="privilegio" name="privilegio" value="<?=$privilegio; ?>" required="true">
            </div>
            <div class="col-sm-2">
              <label for="perfil">Clave:</label>
              <input type="input" class="form-control" id="clave" name="clave" value="<?=$clave; ?>" required="true">
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
                <a href="view_privilegio.php">
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

