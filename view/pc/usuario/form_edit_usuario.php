<?php 
//Carga de datos en base al pk
date_default_timezone_set('America/Monterrey');
require_once '../../../model/usuario.php';
$usuario = new Usuario();


$pkusuario = base64_decode($_GET['a']);

$usuario->set('pkusuario', $pkusuario);
$datos = $usuario->viewUsuarioByPk();

while ($row = mysqli_fetch_array($datos)) {
  $nombre = $row['nombre'];
  $apellido_paterno = $row['apellido_paterno'];
  $apellido_materno = $row['apellido_materno'];
  $correo = $row['correo'];
  $nombre_usuario = $row['nombre_usuario'];
  $nombre_perfil = $row['nombre_perfil'];
  $password = $row['password'];
  $estado = $row['estado'];
  $tipo = $row['tipo'];
  $perfil = $row['nombre_perfil'];
  $pkperfil = $row['pkperfil'];
}
//Info estado
if ($estado == 1) {
  $valueEstado = "Activo";
}elseif ($estado == 0) {
  $valueEstado = "Inactivo";
}

//Info tipo
if ($tipo == 0) {
  $valueTipo = "PC";
}elseif ($tipo == 1) {
  $valueTipo = "Mobile";
}elseif ($tipo == 2) {
  $valueTipo = "Mobile and PC ";
}

 ?>
<div class="container-fluid">
	<div class= "col-md-12 ">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">Add User</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="../../../controller/usuario/update_usuario.php"  method="POST" autocomplete="off" >

           <input type="hidden" id="pkusuario" name="pkusuario" value="<?=$pkusuario; ?>" >

            <div class="form-group row">
            <div class="col-sm-4">
              <label for="perfil">Nombre:</label>
              <input type="input" class="form-control" id="nombre" name="nombre" value="<?=$nombre; ?>" required="true">
            </div>
            <div class="col-sm-4">
              <label for="perfil">Apellido Paterno:</label>
              <input type="input" class="form-control" id="apellido_paterno" name="apellido_paterno" value="<?=$apellido_paterno; ?>"  required="true">
            </div>
            <div class="col-sm-4">
              <label for="perfil">Apellido Materno:</label>
              <input type="input" class="form-control" id="apellido_materno" name="apellido_materno" value="<?=$apellido_materno; ?>"  required="true">
            </div>
            
          </div>

            <div class="form-group row">
           <div class="col-sm-4">
              <label for="perfil">Email:</label>
              <input type="input" class="form-control" id="correo" name="correo" required="true" value="<?=$correo; ?>" required="" pattern="[^@\s]+@[^@\s]+\.[^@\s]+">
            </div> 
            <div class="col-sm-4">
              <label for="perfil">Username:</label>
              <input type="input" class="form-control" id="nombre_usuario" name="nombre_usuario" value="<?=$nombre_usuario; ?>"  required="true">
            </div>
            <div class="col-sm-4">
              <label for="perfil">Password:</label>
              <input type="password" class="form-control" id="password" name="password" value="<?=$password; ?>" required="true">
            </div>
           

          </div>


    
            <div class="form-group row">
            
         <div class="col-sm-4">
              <label for="perfil">Type:</label>
             <select class="custom-select my-1 mr-sm-2" id="tipo" name="tipo"  required="true">
                                <option value="<?=$tipo; ?>"><?=$valueTipo; ?></option>
                                <option value="0">PC</option>
                                <option value="1">Mobile</option>
                                <option value="2">Mobile and PC</option>
                              </select>         
            </div>
           
            <div class="col-sm-4">
              <label for="perfil">Profile:</label>
                   <select id="pkperfil" name="pkperfil" required="required" class="custom-select my-1 mr-sm-2"  required="true">
            <option value="<?=$pkperfil; ?>"><?=$perfil; ?></option>
            <?php include('../../../controller/perfil/consulta_perfil.php');?>
          </select>
            </div> 

            <div class="col-sm-4">
               <label for="perfil">Estado:</label>
                <select  class="custom-select my-1 mr-sm-2" id="estado" name="estado"  required="true" >

                          <option value="<?=$estado; ?>"><?=$valueEstado; ?></option>
                          <option value="1"> Activo</option>
                          <option value="0"> Inactivo</option>
                          
                          
                </select>
            </div> 
             
          </div>

        

                  

                    <div class="card-footer">
                  <button type="submit" class="btn btn-secondary">Guardar</button>
                </div>

                </form>
              </div>
              <!-- /.card-body -->
            </div>



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
