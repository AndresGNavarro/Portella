
<div class="container-fluid">
	<div class= "col-md-12 ">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">Add User</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="../../../controller/usuario/insert_usuario.php"  method="POST" autocomplete="off" >


                          <div class="form-group row">
            <div class="col-sm-4">
              <label for="perfil">Nombre:</label>
              <input type="input" class="form-control" id="nombre" name="nombre" required="true">
            </div>
            <div class="col-sm-4">
              <label for="perfil">Apellido Paterno:</label>
              <input type="input" class="form-control" id="apellido_paterno" name="apellido_paterno"  required="true">
            </div>
            <div class="col-sm-4">
              <label for="perfil">Apellido Materno:</label>
              <input type="input" class="form-control" id="apellido_materno" name="apellido_materno"  required="true">
            </div>
            
          </div>

            <div class="form-group row">
           <div class="col-sm-4">
              <label for="perfil">Email:</label>
              <input type="input" class="form-control" id="correo" name="correo" required="true" placeholder="ejemplo@gmail.com" required="" pattern="[^@\s]+@[^@\s]+\.[^@\s]+">
            </div> 
            <div class="col-sm-4">
              <label for="perfil">Username:</label>
              <input type="input" class="form-control" id="nombre_usuario" name="nombre_usuario"  required="true">
            </div>
            <div class="col-sm-4">
              <label for="perfil">Password:</label>
              <input type="password" class="form-control" id="password" name="password"  required="true">
            </div>
           

          </div>


    
            <div class="form-group row">
            
         <div class="col-sm-4">
              <label for="perfil">Type:</label>
             <select class="custom-select my-1 mr-sm-2" id="tipo" name="tipo"  required="true">
                                <option value="">Select an option</option>
                                <option value="0">PC</option>
                                <option value="1">Mobile</option>
                                <option value="2">Mobile and PC</option>
                              </select>         
            </div>
           
            <div class="col-sm-4">
              <label for="perfil">Profile:</label>
                   <select id="pkperfil" name="pkperfil" required="required" class="custom-select my-1 mr-sm-2"  required="true">
            <option value="0">Select a profile</option>
            <?php include('../../../controller/perfil/consulta_perfil.php');?>
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
