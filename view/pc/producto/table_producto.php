            <!-- TABLE: LATEST ORDERS -->
            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">Lista de productos</h3>

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
                      <th>Numero de parte</th>
                      <th>Descripción</th>
                      <th>Origen</th>
                      <th>Dato Adicional 1</th>
                      <th>Dato Adicional 2</th>
                      <th>Dato Adicional 3</th>
                      <th>Estado</th>
                      <th >Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                  <?php
                  date_default_timezone_set('America/Monterrey');
                  require_once ('../../../model/producto.php');
                  $producto = new Producto();
                  $datos = $producto->viewProducto();
                  while ($fila = mysqli_fetch_array($datos)) {                   
                    ?>
                      <tr>  
                          <td><?php echo $fila["no_parte"]; ?></td>
                          <td><?php echo $fila["descripcion"]; ?></td>
                          <td><?php echo $fila["origen"]; ?></td>
                          <td><?php echo $fila["dato_adicional1"]; ?></td>
                          <td><?php echo $fila["dato_adicional2"]; ?></td>
                          <td><?php echo $fila["dato_adicional3"]; ?></td>
                          <?php 
                          //Validar estado del producto para mostrar como activo/inactivo
                          if ($fila["estado"] == 1) { ?>
                              <td><span class="badge badge-success">Activo</span></td>
                          <?php }elseif ($fila["estado"] == 0) {?>
                              <td><span class="badge badge-warning">Inactivo</span></td>
                          <?php } ?>
                           
                          <td>
                            <a style="color: black"  href="../../../controller/producto/delete_producto.php?a=<?php echo base64_encode($fila['pkproducto']);?>" class="adn"> <button type='button' class='btn btn-danger' ><span class="fas fa-times"></span></button></a>

                            <a style="color: black"  href="edit_producto.php?a=<?php echo base64_encode($fila['pkproducto']);?>" class="adn"> <button type='button' class='btn btn-info' ><span class="fas fa-edit"></span></button></a>
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