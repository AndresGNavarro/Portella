<div class="container-fluid">
	<div class= "col-md-12">
            <div class="card card-primary card-outline">
               <div class="card-header">
                <h3 class="card-title">Agregar Producto</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="../../../controller/producto/insert_producto.php"  id="formularioproducto"  name="formularioproducto" enctype="multipart/form-data" method="POST" autocomplete="off" >

            
            <div class="form-group row">
            <div class="col-sm-4">
              <label for="perfil">Número de parte:</label>
              <input type="input" class="form-control" id="numeroparte" name="numeroparte" required="true">
            </div>
           
               
            <div class="col-sm-4">
              <label for="perfil">Descripción:</label>
              <input type="input" class="form-control" id="descripcion" name="descripcion" required="true">
            </div>
           
           
            <div class="col-sm-4">
               <label for="perfil">Origen:</label>
                <select  class="form-control" id="pkorigen" name="pkorigen"  required="true" >
                          <option value="">Selecciona una opción</option>
                          <?php include('../../../controller/producto/combo_producto_origen.php');?>
                </select>
            </div>    
            </div>
              <div class="form-group row">
            <div class="col-sm-4">
              <label for="perfil">Dato adicional 1:</label>
              <input type="input" class="form-control" id="datoadicional1" name="datoadicional1" >
            </div>
           
               
            <div class="col-sm-4">
              <label for="perfil">Dato adicional 2:</label>
              <input type="input" class="form-control" id="datoadicional2" name="datoadicional2" >
            </div>

             <div class="col-sm-4">
              <label for="perfil">Dato adicional 3:</label>
              <input type="input" class="form-control" id="datoadicional3" name="datoadicional3" >
            </div>
           
           
             
            </div>
            
            </div>
            
           
                <div class="card-footer clearfix">
                <button type="submit" class="btn btn-sm btn-info float-left">Guardar</button>
                </div>
         
            


         
                </form>
            </div>
              <!-- /.card-body -->
      <?php 
      include('table_producto.php');
       ?> 
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

