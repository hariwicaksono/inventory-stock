<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="container-fluid px-3">
        <div class="row">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Grup</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item"><a href="<?php echo base_url('groups/') ?>">Grup</a></li>
            <li class="breadcrumb-item active">Tambah Grup</li>
          </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="container-fluid px-3 pb-3">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-md-12 col-xs-12">
          
          <?php if($this->session->flashdata('success')): ?>
            <div class="alert alert-success alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <?php echo $this->session->flashdata('success'); ?>
            </div>
          <?php elseif($this->session->flashdata('error')): ?>
            <div class="alert alert-error alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <?php echo $this->session->flashdata('error'); ?>
            </div>
          <?php endif; ?>
 
          <div class="card">
            <form role="form" action="<?php base_url('groups/update') ?>" method="post">
              <div class="card-body">

              <?php if(validation_errors()): ?>
                <div class="callout callout-danger">
                <?php echo validation_errors(); ?>
                </div>
                <?php endif; ?>

                <div class="form-group">
                  <label for="group_name">Nama Grup</label>
                  <input type="text" class="form-control" id="group_name" name="group_name" placeholder="Masukkan nama grup" value="<?php echo $group_data['group_name']; ?>">
                </div>
                <div class="form-group">
                  <label for="permission">Hak Akses</label>

                  <?php $serialize_permission = unserialize($group_data['permission']); ?>
                  
                  <table class="table table-responsive">
                    <thead>
                      <tr>
                        <th></th>
                        <th>Create</th>
                        <th>Update</th>
                        <th>View</th>
                        <th>Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Pengguna</td>
                        <td><div class="icheck-primary"><input type="checkbox" name="permission[]" id="createUser" value="createUser" <?php if($serialize_permission) {
                          if(in_array('createUser', $serialize_permission)) { echo "checked"; } 
                        } ?> ><label for="createUser"></label></div></td>
                        <td><div class="icheck-primary"><input type="checkbox" name="permission[]" id="updateUser" value="updateUser" <?php 
                        if($serialize_permission) {
                          if(in_array('updateUser', $serialize_permission)) { echo "checked"; } 
                        }
                        ?> ><label for="updateUser"></label</div></td>
                        <td><div class="icheck-primary"><input type="checkbox" name="permission[]" id="viewUser" value="viewUser" <?php 
                        if($serialize_permission) {
                          if(in_array('viewUser', $serialize_permission)) { echo "checked"; }   
                        }
                        ?> ><label for="viewUser"></label</div></td>
                        <td><div class="icheck-primary"><input type="checkbox" name="permission[]" id="deleteUser" value="deleteUser" <?php 
                        if($serialize_permission) {
                          if(in_array('deleteUser', $serialize_permission)) { echo "checked"; }  
                        }
                         ?> ><label for="deleteUser"></label</div></td>
                      </tr>
                      <tr>
                        <td>Grup</td>
                        <td><div class="icheck-primary"><input type="checkbox" name="permission[]" id="createGroup" value="createGroup" <?php 
                        if($serialize_permission) {
                          if(in_array('createGroup', $serialize_permission)) { echo "checked"; }  
                        }
                         ?> ><label for="createGroup"></label></div></td>
                        <td><div class="icheck-primary"><input type="checkbox" name="permission[]" id="permission" value="updateGroup" <?php 
                        if($serialize_permission) {
                          if(in_array('updateGroup', $serialize_permission)) { echo "checked"; }  
                        }
                         ?> ><label for="updateGroup"></label></div></td>
                        <td><div class="icheck-primary"><input type="checkbox" name="permission[]" id="viewGroup" value="viewGroup" <?php 
                        if($serialize_permission) {
                          if(in_array('viewGroup', $serialize_permission)) { echo "checked"; }  
                        }
                         ?> ><label for="viewGroup"></label></div></td>
                        <td><div class="icheck-primary"><input type="checkbox" name="permission[]" id="deleteGroup" value="deleteGroup" <?php 
                        if($serialize_permission) {
                          if(in_array('deleteGroup', $serialize_permission)) { echo "checked"; }  
                        }
                         ?> ><label for="deleteGroup"></label></div></td>
                      </tr>
                      <tr>
                        <td>Merek</td>
                        <td><div class="icheck-primary"><input type="checkbox" name="permission[]" id="createBrand" value="createBrand" <?php if($serialize_permission) {
                          if(in_array('createBrand', $serialize_permission)) { echo "checked"; } 
                        } ?> ><label for="createBrand"></label></div></td>
                        <td><div class="icheck-primary"><input type="checkbox" name="permission[]" id="updateBrand" value="updateBrand" <?php if($serialize_permission) {
                          if(in_array('updateBrand', $serialize_permission)) { echo "checked"; } 
                        } ?> ><label for="updateBrand"></label></div></td>
                        <td><div class="icheck-primary"><input type="checkbox" name="permission[]" id="viewBrand" value="viewBrand" <?php if($serialize_permission) {
                          if(in_array('viewBrand', $serialize_permission)) { echo "checked"; } 
                        } ?> ><label for="viewBrand"></label></div></td>
                        <td><div class="icheck-primary"><input type="checkbox" name="permission[]" id="deleteBrand" value="deleteBrand" <?php if($serialize_permission) {
                          if(in_array('deleteBrand', $serialize_permission)) { echo "checked"; } 
                        } ?> ><label for="deleteBrand"></label></div></td>
                      </tr>
                      <tr>
                        <td>Kategori</td>
                        <td><div class="icheck-primary"><input type="checkbox" name="permission[]" id="createCategory" value="createCategory" <?php if($serialize_permission) {
                          if(in_array('createCategory', $serialize_permission)) { echo "checked"; } 
                        } ?> ><label for="createCategory"></label></div></td>
                        <td><div class="icheck-primary"><input type="checkbox" name="permission[]" id="updateCategory" value="updateCategory" <?php if($serialize_permission) {
                          if(in_array('updateCategory', $serialize_permission)) { echo "checked"; } 
                        } ?> ><label for="updateCategory"></label></div></td>
                        <td><div class="icheck-primary"><input type="checkbox" name="permission[]" id="viewCategory" value="viewCategory" <?php if($serialize_permission) {
                          if(in_array('viewCategory', $serialize_permission)) { echo "checked"; } 
                        } ?> ><label for="viewCategory"></label></div></td>
                        <td><div class="icheck-primary"><input type="checkbox" name="permission[]" id="deleteCategory" value="deleteCategory" <?php if($serialize_permission) {
                          if(in_array('deleteCategory', $serialize_permission)) { echo "checked"; } 
                        } ?> ><label for="deleteCategory"></label></div></td>
                      </tr>
                      <tr>
                        <td>Suplier</td>
                        <td><div class="icheck-primary"><input type="checkbox" name="permission[]" id="createStore" value="createStore" <?php if($serialize_permission) {
                          if(in_array('createStore', $serialize_permission)) { echo "checked"; } 
                        } ?> ><label for="createStore"></label></div></td>
                        <td><div class="icheck-primary"><input type="checkbox" name="permission[]" id="updateStore" value="updateStore" <?php if($serialize_permission) {
                          if(in_array('updateStore', $serialize_permission)) { echo "checked"; } 
                        } ?> ><label for="updateStore"></label></div></td>
                        <td><div class="icheck-primary"><input type="checkbox" name="permission[]" id="viewStore" value="viewStore" <?php if($serialize_permission) {
                          if(in_array('viewStore', $serialize_permission)) { echo "checked"; } 
                        } ?> ><label for="viewStore"></label></div></td>
                        <td><div class="icheck-primary"><input type="checkbox" name="permission[]" id="deleteStore" value="deleteStore" <?php if($serialize_permission) {
                          if(in_array('deleteStore', $serialize_permission)) { echo "checked"; } 
                        } ?> ><label for="deleteStore"></label></div></td>
                      </tr>
                      <tr>
                        <td>Atribut</td>
                        <td><div class="icheck-primary"><input type="checkbox" name="permission[]" id="createAttribute" value="createAttribute" <?php if($serialize_permission) {
                          if(in_array('createAttribute', $serialize_permission)) { echo "checked"; } 
                        } ?> ><label for="createAttribute"></label></div></td>
                        <td><div class="icheck-primary"><input type="checkbox" name="permission[]" id="updateAttribute" value="updateAttribute" <?php if($serialize_permission) {
                          if(in_array('updateAttribute', $serialize_permission)) { echo "checked"; } 
                        } ?> ><label for="updateAttribute"></label></div></td>
                        <td><div class="icheck-primary"><input type="checkbox" name="permission[]" id="viewAttribute" value="viewAttribute" <?php if($serialize_permission) {
                          if(in_array('viewAttribute', $serialize_permission)) { echo "checked"; } 
                        } ?> ><label for="viewAttribute"></label></div></td>
                        <td><div class="icheck-primary"><input type="checkbox" name="permission[]" id="deleteAttribute" value="deleteAttribute" <?php if($serialize_permission) {
                          if(in_array('deleteAttribute', $serialize_permission)) { echo "checked"; } 
                        } ?> ><label for="deleteAttribute"></label></div></td>
                      </tr>
                      <tr>
                        <td>Produk</td>
                        <td><div class="icheck-primary"><input type="checkbox" name="permission[]" id="createProduct" value="createProduct" <?php if($serialize_permission) {
                          if(in_array('createProduct', $serialize_permission)) { echo "checked"; } 
                        } ?> ><label for="createProduct"></label></div></td>
                        <td><div class="icheck-primary"><input type="checkbox" name="permission[]" id="updateProduct" value="updateProduct" <?php if($serialize_permission) {
                          if(in_array('updateProduct', $serialize_permission)) { echo "checked"; } 
                        } ?> ><label for="updateProduct"></label></div></td>
                        <td><div class="icheck-primary"><input type="checkbox" name="permission[]" id="viewProduct" value="viewProduct" <?php if($serialize_permission) {
                          if(in_array('viewProduct', $serialize_permission)) { echo "checked"; } 
                        } ?> ><label for="viewProduct"></label></div></td>
                        <td><div class="icheck-primary"><input type="checkbox" name="permission[]" id="deleteProduct" value="deleteProduct" <?php if($serialize_permission) {
                          if(in_array('deleteProduct', $serialize_permission)) { echo "checked"; } 
                        } ?> ><label for="deleteProduct"></label></div></td>
                      </tr>
                      <tr>
                        <td>Pesanan</td>
                        <td><div class="icheck-primary"><input type="checkbox" name="permission[]" id="createOrder" value="createOrder" <?php if($serialize_permission) {
                          if(in_array('createOrder', $serialize_permission)) { echo "checked"; } 
                        } ?> ><label for="createOrder"></label></div></td>
                        <td><div class="icheck-primary"><input type="checkbox" name="permission[]" id="updateOrder" value="updateOrder" <?php if($serialize_permission) {
                          if(in_array('updateOrder', $serialize_permission)) { echo "checked"; } 
                        } ?> ><label for="updateOrder"></label></div></td>
                        <td><div class="icheck-primary"><input type="checkbox" name="permission[]" id="viewOrder" value="viewOrder" <?php if($serialize_permission) {
                          if(in_array('viewOrder', $serialize_permission)) { echo "checked"; } 
                        } ?> ><label for="viewOrder"></label></div></td>
                        <td><div class="icheck-primary"><input type="checkbox" name="permission[]" id="deleteOrder" value="deleteOrder" <?php if($serialize_permission) {
                          if(in_array('deleteOrder', $serialize_permission)) { echo "checked"; } 
                        } ?> ><label for="deleteOrder"></label></div></td>
                      </tr>
                      <tr>
                        <td>Laporan</td>
                        <td> - </td>
                        <td> - </td>
                        <td><div class="icheck-primary"><input type="checkbox" name="permission[]" id="viewReports" value="viewReports" <?php if($serialize_permission) {
                          if(in_array('viewReports', $serialize_permission)) { echo "checked"; } 
                        } ?> ><label for="viewReports"></label></div></td>
                        <td> - </td>
                      </tr>
                      <tr>
                        <td>Perusahaan</td>
                        <td> - </td>
                        <td><div class="icheck-primary"><input type="checkbox" name="permission[]" id="updateCompany" value="updateCompany" <?php if($serialize_permission) {
                          if(in_array('updateCompany', $serialize_permission)) { echo "checked"; } 
                        } ?> ><label for="updateCompany"></label></div></td>
                        <td> - </td>
                        <td> - </td>
                      </tr>
                      <tr>
                        <td>Profil</td>
                        <td> - </td>
                        <td> - </td>
                        <td><div class="icheck-primary"><input type="checkbox" name="permission[]" id="viewProfil" value="viewProfile" <?php if($serialize_permission) {
                          if(in_array('viewProfile', $serialize_permission)) { echo "checked"; } 
                        } ?> ><label for="viewProfil"></label></div></td>
                        <td> - </td>
                      </tr>
                      <tr>
                        <td>Pengaturan</td>
                        <td>-</td>
                        <td><div class="icheck-primary"><input type="checkbox" name="permission[]" id="updSetting" value="updateSetting" <?php if($serialize_permission) {
                          if(in_array('updateSetting', $serialize_permission)) { echo "checked"; } 
                        } ?> ><label for="updSetting"></label></div></td>
                        <td> - </td>
                        <td> - </td>
                      </tr>
                    </tbody>
                  </table>
                  
                </div>
              </div>
              <!-- /.box-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="<?php echo base_url('groups/') ?>" class="btn btn-warning">Kembali</a>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
        <!-- col-md-12 -->
      </div>
      <!-- /.row -->
      
</div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<script type="text/javascript">
  $(document).ready(function() {
    $("#mainGroupNav").addClass('menu-is-opening menu-open');
      $("#GroupNav").addClass('active');
      $("#manageGroupNav .nav-link").addClass('active');

    $('input[type="checkbox"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    });
  });
</script>
