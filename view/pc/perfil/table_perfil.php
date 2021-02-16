            <!-- TABLE: LATEST ORDERS -->
            <div class="card col-md-8 offset-md-2">
              <div class="card-header border-transparent">
                <h3 class="card-title">Lista de perfiles</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                 
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive  table-hover ">
                  <table class="table m-0">
                    <thead>
                    <tr>
                      <th>Nombre perfil</th>
                      <th>Priviegios</th>
                      <th>Estado</th>
                      <th >Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                  <?php
                  date_default_timezone_set('America/Monterrey');
                  require_once ('../../../model/perfil.php');
                  $perfil = new Perfil();
                  $datos = $perfil->viewPerfil();
                  while ($fila = mysqli_fetch_array($datos)) {                   
                    ?>
                      <tr>  
                          <td><?php echo $fila["nombre_perfil"]; ?></td>
                           <td>
                             <a style="color: black"  href="detalle_perfil.php?a=<?php echo base64_encode($fila['pkperfil']);?>" class="adn"> <button type='button' class='btn btn-info' ><span class="fas fa-layer-group"></span></button></a>
                           </td>
                          <?php 
                          //Validar estado del producto para mostrar como activo/inactivo
                          if ($fila["estado"] == 1) { ?>
                              <td><span class="badge badge-success">Activo</span></td>
                          <?php }elseif ($fila["estado"] == 0) {?>
                              <td><span class="badge badge-warning">Inactivo</span></td>
                          <?php } ?>
                           
                          <td>
                            <a style="color: black"  href="../../../controller/perfil/delete_perfil.php?a=<?php echo base64_encode($fila['pkperfil']);?>" class="adn"> <button type='button' class='btn btn-danger' ><span class="fas fa-times"></span></button></a>

                            <a style="color: black"  href="edit_perfil.php?a=<?php echo base64_encode($fila['pkperfil']);?>" class="adn"> <button type='button' class='btn btn-info' ><span class="fas fa-edit"></span></button></a>
                          </td>

     
                      </tr>
                  <?php
                    }
                  ?>
                    </tbody>
                  </table>
                </div>
                
                <!-- /.table-responsive -->
              </div>
                <div class="card-footer clearfix">
                
                <button type='button' class='btn btn-sm btn-info float-left' data-toggle="modal"  data-target="#modal-default"  onclick='agregarPerfil()'>
                Agregar perfil
                </button>
                
              </div>
              <!-- /.card-body -->
            
              
            </div>