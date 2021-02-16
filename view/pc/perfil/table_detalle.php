<table class="table table-hover dataTable table-striped width-full" id="dataTable">
  <thead>
    <tr>
      <th>Privilegio</th>           
      <th>Eliminar</th>
    </tr>
  </thead>
  <tbody>
    <?php
    date_default_timezone_set('America/Monterrey');
    require_once ('../../../model/perfil.php');
    $dato = new Perfil();
    $dato->set('pkperfil', $pkperfil); 
    $datos = $dato->view_detalle();
    foreach ($datos as $key => $fila) {
      ?>
      <!--datos exactamente como se encuentran los campos en la base de datos -->
      <tr class="news">
        <?php $pkdetalle_perfil = $fila["pkdetalle_perfil"]; ?>
        <td><?php echo $fila["nombre"]; ?></td>
        <td>
          <a  onclick='return eliminar()' href="../../../controller/perfil/delete_detalle_perfil.php?d=<?php echo base64_encode($fila['pkdetalle_perfil']); ?>&env=<?php echo base64_encode($pkperfil); ?>" class="adn"><button type='button' class='btn btn-outline-danger'><span class="far fa-trash-alt"></span></button></a>
        </td>
      </tr>
      <?php
    }
    ?>  
  </tbody>
</table>
<script>
  function eliminar(){
    if(confirm('¿Desea eliminar este privilegio?')){
      return true;
    }else{
      return false;
    }
  }
</script>