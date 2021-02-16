<?php  
include('../parametrosmenu.php');
?>
 <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../inicio/index.php" class="brand-link">
      <img src="../../../dist/img/logo-portella.png" alt="AdminLTE Logo" class="brand-image" style="opacity: .8;  height: 45px; margin-left: 15%">
      <span class="brand-text font-weight-light"><b></b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../../dist/img/default_profile.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?=$nombreusuario;?></a>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-header" style="font-size: 19px;">Menú</li>
        
            <li class="nav-item has-treeview" style="display : <?php echo $MODULO_ENTRADAS; ?>;">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-fw fa-pallet"></i>
              <p>
                Entrada
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item"  style="display : <?php echo $AGREGAR_ENTRADAS; ?>;">
                <a href="../entrada/add_entrada.php" class="nav-link">
                  <i class="far fas fa-fw fa-plus"></i>
                  <p>Agregar Entrada</p>
                </a>
              </li>
              
              <li class="nav-item" style="display : <?php echo $LISTAR_ENTRADAS; ?>;">
                <a href="../entrada/view_entrada.php" class="nav-link">
                  <i class="far fas fa-fw fa-list-alt"></i>
                  <p>Lista de Entradas</p>
                </a>
              </li>

            </ul>
          </li>
           <li class="nav-item has-treeview" style="display : <?php echo $MODULO_EMBARQUES; ?>;">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-fw fa-pallet"></i>
              <p>
                Embarques
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item" style="display : <?php echo $AGREGAR_EMBARQUES; ?>;">
                <a href="../embarque/add_embarque.php" class="nav-link">
                  <i class="far fas fa-fw fa-plus"></i>
                  <p>Agregar Embarques</p>
                </a>
              </li>
              
              <li class="nav-item" style="display : <?php echo $LISTAR_EMBARQUES; ?>;">
                <a href="../embarque/view_embarque.php" class="nav-link">
                  <i class="far fas fa-fw fa-list-alt"></i>
                  <p>Lista de Embarques</p>
                </a>
              </li>

            </ul>
          </li>
          <li class="nav-item has-treeview" style="display : <?php echo $MODULO_PRODUCTOS; ?>;">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-fw fa-pallet"></i>
              <p>
                Productos
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item" style="display : <?php echo $AGREGAR_PRODUCTOS; ?>;">
                <a href="../producto/add_producto.php" class="nav-link">
                  <i class="far fas fa-fw fa-plus"></i>
                  <p>Agregar Producto</p>
                </a>
              </li>
             

            </ul>
          </li>
           <li class="nav-item has-treeview" style="display : <?php echo $MODULO_ORIGENES; ?>;">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-fw fa-pallet"></i>
              <p>
                Orígenes
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item" style="display : <?php echo $AGREGAR_ORIGENES; ?>;">
                <a href="../origen/view_origen.php" class="nav-link">
                  <i class="far fas fa-fw fa-plus"></i>
                  <p>Agregar Origen</p>
                </a>
              </li>
            

            </ul>
          </li>

          <li class="nav-item has-treeview" style="display : <?php echo $MODULO_IMPRESORAS; ?>;">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-fw fa-pallet"></i>
              <p>
                Impresoras
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item" style="display : <?php echo $AGREGAR_IMPRESORAS; ?>;">
                <a href="../impresora/view_impresora.php" class="nav-link">
                  <i class="far fas fa-fw fa-plus"></i>
                  <p>Agregar Impresora</p>
                </a>
              </li>

            </ul>
          </li>

          <li class="nav-item has-treeview" style="display : <?php echo $MODULO_JOBS; ?>;">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-fw fa-pallet"></i>
              <p>
                Jobs
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item" style="display : <?php echo $AGREGAR_JOBS; ?>;">
                <a href="../job/view_job.php" class="nav-link">
                  <i class="far fas fa-fw fa-plus"></i>
                  <p>Agregar Job</p>
                </a>
              </li>

            </ul>
          </li>


          <li class="nav-item has-treeview" style="display : <?php echo $MODULO_PERFILES; ?>;">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-fw fa-cog"></i>
              <p>
                Profile
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
             
              <li class="nav-item" style="display : <?php echo $AGREGAR_PERFILES; ?>;">
                <a href="../perfil/view_perfil.php" class="nav-link">
                  <i class="far fas fa-fw fa-list-alt"></i>
                  <p>Profiles List</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview" style="display : <?php echo $MODULO_USUARIOS; ?>;">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-fw fa-users"></i>
              <p>
                Usuario
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item" style="display : <?php echo $AGREGAR_USUARIOS; ?>;">
                <a href="../usuario/add_usuario.php" class="nav-link">
                  <i class="far fas fa-fw fa-plus"></i>
                  <p>Agregar Usuario</p>
                </a>
              </li>
              <li class="nav-item" style="display : <?php echo $LISTAR_USUARIOS; ?>;">
                <a href="../usuario/view_usuario.php" class="nav-link">
                  <i class="far fas fa-fw fa-list-alt"></i>
                  <p>User List</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview" style="display : <?php echo $MODULO_PRIVILEGIOS; ?>;">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-fw fa-users"></i>
              <p>
                Privilegios
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item" style="display : <?php echo $AGREGAR_PRIVILEGIOS; ?>;">
                <a href="../privilegio/view_privilegio.php" class="nav-link">
                  <i class="far fas fa-fw fa-plus"></i>
                  <p>Agregar Privilegio</p>
                </a>
              </li>
              
            </ul>
          </li>
        </ul>






      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
