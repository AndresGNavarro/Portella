<div>
  <div class="row">
    <div class="col-md-12">
      <div class="input_container" >
        <label for="nombreprivilegio" class="field file">Privilegios: </label>  
        <label>                              
          <select id="pkprivilegio" name="pkprivilegio" required="required" class="form-control" data-live-search='true' data-size="5">
            <option value="0">Seleccione un privilegio</option>
            <?php include('../../../controller/perfil/consulta_privilegio.php');?>
          </select>
        </label>  
      </div>
    </div>
  </div>
</div>
<div class="row" align="left">  
  <div class="col-md-12" >
    <button type="submit" class="btn btn-success" name="Submit"> 
      Guardar
    </button>
  </div>
</div>