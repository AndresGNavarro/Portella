            <!-- TABLE: LATEST ORDERS -->
            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">Lista de Embarques</h3>

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
                      <th>Folio</th>
                      <th>Folio Completo</th>
                      <th>Pedimento</th>
                      <th>Factura</th>
                      <th>Fecha</th>
                      <th>Hora</th>
                      <th>Usuario</th>
                      <th>Acciones (Pendiente)</th>
                    </tr>
                    </thead>
                    <tbody>
                  <?php
                  date_default_timezone_set('America/Monterrey');
                  require_once ('../../../model/embarque.php');
                  $embarque = new Embarque();
                  $datos = $embarque->viewEmbarque();
                  while ($fila = mysqli_fetch_array($datos)) {                   
                    ?>
                      <tr>  
                          <td><?php echo $fila["folio"]; ?></td>
                          <td><?php echo $fila["folio_completo"]; ?></td>
                          <td><?php echo $fila["pedimento"]; ?></td>
                          <td><?php echo $fila["factura"]; ?></td>
                          <td><?php echo $fila["fecha"]; ?></td>
                          <td><?php echo $fila["hora"]; ?></td>
                         <td><?php echo $fila["nombre_usuario"]; ?></td>
                           
                          <td>
                            <div class="form-group row">
                            <a style="color: black"  href="../../../controller/usuario/delete_usuario.php?a=<?php echo base64_encode($fila['pkembarque']);?>" class="adn"> <button type='button' class='btn btn-danger' ><span class="fas fa-times"></span></button></a>

                            <a style="color: black"  href="edit_usuario.php?a=<?php echo base64_encode($fila['pkembarque']);?>" class="adn"> <button type='button' class='btn btn-info' ><span class="fas fa-edit"></span></button></a>
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