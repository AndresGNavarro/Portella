            <!-- TABLE: LATEST ORDERS -->
            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">Lista de Usuarios</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                 
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive  table-hover ">
                  <table id="example1" class="table m-0">
                    <thead>
                    <tr>
                      <th>Nombre</th>
                      <th>Apellido Paterno</th>
                      <th>Apellido Materno</th>
                      <th>Usuario</th>
                      <th>Email</th>
                      <th>Tipo</th>
                      <th>Perfil</th>
                      <th>Estado</th>
                      <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                  <?php
                  date_default_timezone_set('America/Monterrey');
                  require_once ('../../../model/usuario.php');
                  $usuario = new Usuario();
                  $datos = $usuario->viewUsuario();
                  while ($fila = mysqli_fetch_array($datos)) {                   
                    ?>
                      <tr>  
                          <td><?php echo $fila["nombre"]; ?></td>
                          <td><?php echo $fila["apellido_paterno"]; ?></td>
                          <td><?php echo $fila["apellido_materno"]; ?></td>
                          <td><?php echo $fila["nombre_usuario"]; ?></td>
                          <td><?php echo $fila["correo"]; ?></td>
                          <td>
                          <?php
                              if ($fila["tipo"] == 2) {
                              echo"PC and Mobile";
                            }
                            if ($fila["tipo"] == 1) {
                              echo"Mobile";
                            }
                            if ($fila["tipo"] == 0) {
                                echo"PC";
                            }
                          ?>
                          </td>
              
                         <td><?php echo $fila["nombre_perfil"]; ?></td>
                          <?php 
                          //Validar estado del usuario para mostrar como activo/inactivo
                          if ($fila["estado"] == 1) { ?>
                              <td><span class="badge badge-success">Activo</span></td>
                          <?php }elseif ($fila["estado"] == 0) {?>
                              <td><span class="badge badge-warning">Inactivo</span></td>
                          <?php } ?>
                           
                          <td>
                            <div class="form-group row">
                            <a style="color: black"  href="../../../controller/usuario/delete_usuario.php?a=<?php echo base64_encode($fila['pkusuario']);?>" class="adn"> <button type='button' class='btn btn-danger' ><span class="fas fa-times"></span></button></a>

                            <a style="color: black"  href="edit_usuario.php?a=<?php echo base64_encode($fila['pkusuario']);?>" class="adn"> <button type='button' class='btn btn-info' ><span class="fas fa-edit"></span></button></a>
                            </div>
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
              <!-- /.card-body -->
            
              
            </div>