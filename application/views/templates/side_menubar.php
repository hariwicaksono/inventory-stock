<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="./" class="brand-link">
    <span class="brand-image"><h3>INV</h3></span> <span class="brand-text">Inventory Stock</span>
    </a>
    <!-- sidebar: style can be found in sidebar.less -->
    <div class="sidebar">
      <nav class="mt-2">
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        
        <li class="nav-item" id="dashboardMainMenu">
          <a href="<?php echo base_url('dashboard') ?>" class="nav-link">
          <i class="nav-icon fas fa-tachometer-alt"></i> <p>Dashboard</p>
          </a>
        </li>

        <?php if(in_array('createProduct', $user_permission) || in_array('updateProduct', $user_permission) || in_array('viewProduct', $user_permission) || in_array('deleteProduct', $user_permission)): ?>
            <li class="nav-item has-treeview" id="mainProductNav">
              <a href="#" class="nav-link">
              <i class="fas fa-box-open nav-icon"></i>
                <p>Produk
                <i class="fa fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <?php if(in_array('createProduct', $user_permission)): ?>
                  <li id="addProductNav" class="nav-item"><a class="nav-link" href="<?php echo base_url('products/create') ?>"><i class="far fa-circle nav-icon"></i> Tambah Produk</a></li>
                <?php endif; ?>
                <?php if(in_array('updateProduct', $user_permission) || in_array('viewProduct', $user_permission) || in_array('deleteProduct', $user_permission)): ?>
                <li id="manageProductNav" class="nav-item"><a class="nav-link" href="<?php echo base_url('products') ?>"><i class="far fa-circle nav-icon"></i> Manage Produk</a></li>
                <?php endif; ?>
              </ul>
            </li>
          <?php endif; ?>


          <?php if(in_array('createOrder', $user_permission) || in_array('updateOrder', $user_permission) || in_array('viewOrder', $user_permission) || in_array('deleteOrder', $user_permission)): ?>
            <li class="nav-item has-treeview" id="mainOrdersNav">
              <a href="#" class="nav-link">
              <i class="fas fa-wallet nav-icon"></i>
                <p>Pesanan
                <i class="fa fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <?php if(in_array('createOrder', $user_permission)): ?>
                  <li id="addOrderNav" class="nav-item"><a class="nav-link" href="<?php echo base_url('orders/create') ?>"><i class="far fa-circle nav-icon"></i> Kasir</a></li>
                <?php endif; ?>
                <?php if(in_array('updateOrder', $user_permission) || in_array('viewOrder', $user_permission) || in_array('deleteOrder', $user_permission)): ?>
                <li id="manageOrdersNav" class="nav-item"><a class="nav-link" href="<?php echo base_url('orders') ?>"><i class="far fa-circle nav-icon"></i> Manage Pesanan</a></li>
                <?php endif; ?>
              </ul>
            </li>
          <?php endif; ?>

        <?php if($user_permission): ?>
          <?php if(in_array('createUser', $user_permission) || in_array('updateUser', $user_permission) || in_array('viewUser', $user_permission) || in_array('deleteUser', $user_permission)): ?>
            <li class="nav-item has-treeview" id="mainUserNav">
            <a href="#" class="nav-link">
              <i class="fa fa-users nav-icon"></i>
              <p>Member
              <i class="fa fa-angle-left right"></i>
              </p>
              
            </a>
            <ul class="nav nav-treeview">
              <?php if(in_array('createUser', $user_permission)): ?>
              <li class="nav-item" id="createUserNav"><a class="nav-link" href="<?php echo base_url('users/create') ?>"><i class="far fa-circle nav-icon"></i> Tambah Member</a></li>
              <?php endif; ?>

              <?php if(in_array('updateUser', $user_permission) || in_array('viewUser', $user_permission) || in_array('deleteUser', $user_permission)): ?>
              <li class="nav-item" id="manageUserNav"><a class="nav-link" href="<?php echo base_url('users') ?>"><i class="far fa-circle nav-icon"></i> Manage Member</a></li>
            <?php endif; ?>
            </ul>
          </li>
          <?php endif; ?>
         
          <?php if(in_array('createGroup', $user_permission) || in_array('updateGroup', $user_permission) || in_array('viewGroup', $user_permission) || in_array('deleteGroup', $user_permission)): ?>
            <li class="nav-item has-treeview" id="mainGroupNav">
              <a href="#" class="nav-link">
                <i class="fas fa-copy nav-icon"></i>
                <p>Grup
                <i class="fa fa-angle-left right"></i>
                </p>
                
              </a>
              <ul class="nav nav-treeview">
                <?php if(in_array('createGroup', $user_permission)): ?>
                  <li class="nav-item" id="addGroupNav"><a class="nav-link" href="<?php echo base_url('groups/create') ?>"><i class="far fa-circle nav-icon"></i> Tambah Grup</a></li>
                <?php endif; ?>
                <?php if(in_array('updateGroup', $user_permission) || in_array('viewGroup', $user_permission) || in_array('deleteGroup', $user_permission)): ?>
                <li class="nav-item" id="manageGroupNav"><a class="nav-link" href="<?php echo base_url('groups') ?>"><i class="far fa-circle nav-icon"></i> Manage Grup</a></li>
                <?php endif; ?>
              </ul>
            </li>
          <?php endif; ?>

          <li class="nav-item has-treeview" id="mainUserNav">
            <a href="#" class="nav-link">
            <i class="fas fa-cog nav-icon"></i>
              <p>Master
              <i class="fa fa-angle-left right"></i>
              </p>
              
            </a>
            <ul class="nav nav-treeview">
            <?php if(in_array('updateCompany', $user_permission)): ?>
            <li id="companyNav" class="nav-item"><a class="nav-link" href="<?php echo base_url('company/') ?>"><i class="far fa-circle nav-icon"></i> <span>Perusahaan</span></a></li>
            <?php endif; ?>

            <?php if(in_array('createBrand', $user_permission) || in_array('updateBrand', $user_permission) || in_array('viewBrand', $user_permission) || in_array('deleteBrand', $user_permission)): ?>
            <li class="nav-item" id="brandNav">
              <a href="<?php echo base_url('brands/') ?>" class="nav-link">
              <i class="far fa-circle nav-icon"></i> <span>Brand</span>
              </a>
            </li>
          <?php endif; ?>

          <?php if(in_array('createCategory', $user_permission) || in_array('updateCategory', $user_permission) || in_array('viewCategory', $user_permission) || in_array('deleteCategory', $user_permission)): ?>
            <li class="nav-item" id="categoryNav">
              <a href="<?php echo base_url('category/') ?>" class="nav-link">
              <i class="far fa-circle nav-icon"></i> <span>Kategori</span>
              </a>
            </li>
          <?php endif; ?>

          <?php if(in_array('createStore', $user_permission) || in_array('updateStore', $user_permission) || in_array('viewStore', $user_permission) || in_array('deleteStore', $user_permission)): ?>
            <li class="nav-item" id="storeNav">
              <a href="<?php echo base_url('stores/') ?>" class="nav-link">
              <i class="far fa-circle nav-icon"></i> <span>Toko</span>
              </a>
            </li>
          <?php endif; ?>

          <?php if(in_array('createAttribute', $user_permission) || in_array('updateAttribute', $user_permission) || in_array('viewAttribute', $user_permission) || in_array('deleteAttribute', $user_permission)): ?>
          <li class="nav-item" id="attributeNav">
            <a href="<?php echo base_url('attributes/') ?>" class="nav-link">
            <i class="far fa-circle nav-icon"></i> <span>Atribut</span>
            </a>
          </li>
          <?php endif; ?>
            </ul>
          </li>

          <?php if(in_array('viewReports', $user_permission)): ?>
            <li id="reportNav" class="nav-item">
              <a href="<?php echo base_url('reports/') ?>" class="nav-link">
              <i class="fas fa-chart-bar nav-icon"></i> <p>Laporan</p>
              </a>
            </li>
          <?php endif; ?>

          

        <!-- <li class="header">Settings</li> -->

        <?php if(in_array('viewProfile', $user_permission)): ?>
          <li class="nav-item"><a class="nav-link" href="<?php echo base_url('users/profile/') ?>"><i class="fas fa-user nav-icon"></i> <p>Profil</p></a></li>
        <?php endif; ?>
        <?php if(in_array('updateSetting', $user_permission)): ?>
          <li class="nav-item"><a class="nav-link" href="<?php echo base_url('users/setting/') ?>"><i class="fa fa-wrench nav-icon"></i> <p>Pengaturan</p></a></li>
        <?php endif; ?>

        <?php endif; ?>
        <!-- user permission info -->
        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('auth/logout') ?>"><i class="fas fa-sign-out-alt nav-icon"></i> <p>Keluar</p></a></li>

      </ul>
      </nav>
    </div>
    <!-- /.sidebar -->
  </aside>