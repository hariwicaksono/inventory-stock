

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="container-fluid px-3">
        <div class="row">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Tambah Grup</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
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

            <form role="form" action="<?php base_url('groups/create') ?>" method="post">
              <div class="card-body">

                <?php echo validation_errors(); ?>

                <div class="form-group">
                  <label for="group_name">Nama Grup</label>
                  <input type="text" class="form-control" id="group_name" name="group_name" placeholder="Masukkan nama grup">
                </div>
                <div class="form-group">
                  <label for="permission">Hak Akses</label>

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
                        <td>Users</td>
                        <td><div class="icheck-primary"><input type="checkbox" name="permission[]" id="createUser" value="createUser"><label for="createUser"></label></div></td>
                        <td><div class="icheck-primary"><input type="checkbox" name="permission[]" id="updateUser" value="updateUser" ><label for="updateUser"></label</div></td>
                        <td><div class="icheck-primary"><input type="checkbox" name="permission[]" id="viewUser" value="viewUser"><label for="viewUser"></label</div></td>
                        <td><div class="icheck-primary"><input type="checkbox" name="permission[]" id="deleteUser" value="deleteUser"><label for="deleteUser"></label</div></td>
                      </tr>
                      <tr>
                        <td>Groups</td>
                        <td><div class="icheck-primary"><input type="checkbox" name="permission[]" id="createGroup" value="createGroup"><label for="createGroup"></label></div></td>
                        <td><div class="icheck-primary"><input type="checkbox" name="permission[]" id="updateGroup" value="updateGroup"><label for="updateGroup"></label></div></td>
                        <td><div class="icheck-primary"><input type="checkbox" name="permission[]" id="viewGroup" value="viewGroup"><label for="viewGroup"></label></div></td>
                        <td><div class="icheck-primary"><input type="checkbox" name="permission[]" id="deleteGroup" value="deleteGroup"><label for="deleteGroup"></label></div></td>
                      </tr>
                      <tr>
                        <td>Brands</td>
                        <td><div class="icheck-primary"><input type="checkbox" name="permission[]" id="createBrand" value="createBrand"><label for="createBrand"></label></div></td>
                        <td><div class="icheck-primary"><input type="checkbox" name="permission[]" id="updateBrand" value="updateBrand"><label for="updateBrand"></label></div></td>
                        <td><div class="icheck-primary"><input type="checkbox" name="permission[]" id="viewBrand" value="viewBrand"><label for="viewBrand"></label></div></td>
                        <td><div class="icheck-primary"><input type="checkbox" name="permission[]" id="deleteBrand" value="deleteBrand"><label for="deleteBrand"></label></div></td>
                      </tr>
                      <tr>
                        <td>Category</td>
                        <td><div class="icheck-primary"><input type="checkbox" name="permission[]" id="createCategory" value="createCategory"><label for="createCategory"></label></div></td>
                        <td><div class="icheck-primary"><input type="checkbox" name="permission[]" id="updateCategory" value="updateCategory"><label for="updateCategory"></label></div></td>
                        <td><div class="icheck-primary"><input type="checkbox" name="permission[]" id="viewCategory" value="viewCategory"><label for="viewCategory"></label></div></td>
                        <td><div class="icheck-primary"><input type="checkbox" name="permission[]" id="deleteCategory" value="deleteCategory"><label for="deleteCategory"></label></div></td>
                      </tr>
                      <tr>
                        <td>Stores</td>
                        <td><div class="icheck-primary"><input type="checkbox" name="permission[]" id="createStore" value="createStore"><label for="createStore"></label></div></td>
                        <td><div class="icheck-primary"><input type="checkbox" name="permission[]" id="updateStore" value="updateStore"><label for="updateStore"></label></div></td>
                        <td><div class="icheck-primary"><input type="checkbox" name="permission[]" id="viewStore" value="viewStore"><label for="viewStore"></label></div></td>
                        <td><div class="icheck-primary"><input type="checkbox" name="permission[]" id="deleteStore" value="deleteStore"><label for="deleteStore"></label></div></td>
                      </tr>
                      <tr>
                        <td>Attributes</td>
                        <td><div class="icheck-primary"><input type="checkbox" name="permission[]" id="createAttribute" value="createAttribute"><label for="createAttribute"></label></div></td>
                        <td><div class="icheck-primary"><input type="checkbox" name="permission[]" id="updateAttribute" value="updateAttribute"><label for="updateAttribute"></label></div></td>
                        <td><div class="icheck-primary"><input type="checkbox" name="permission[]" id="viewAttribute" value="viewAttribute"><label for="viewAttribute"></label></div></td>
                        <td><div class="icheck-primary"><input type="checkbox" name="permission[]" id="deleteAttribute" value="deleteAttribute"><label for="deleteAttribute"></label></div></td>
                      </tr>
                      <tr>
                        <td>Products</td>
                        <td><div class="icheck-primary"><input type="checkbox" name="permission[]" id="createProduct" value="createProduct"><label for="createProduct"></label></div></td>
                        <td><div class="icheck-primary"><input type="checkbox" name="permission[]" id="updateProduct" value="updateProduct"><label for="updateProduct"></label></div></td>
                        <td><div class="icheck-primary"><input type="checkbox" name="permission[]" id="viewProduct" value="viewProduct"><label for="viewProduct"></label></div></td>
                        <td><div class="icheck-primary"><input type="checkbox" name="permission[]" id="deleteProduct" value="deleteProduct"><label for="deleteProduct"></label></div></td>
                      </tr>
                      <tr>
                        <td>Orders</td>
                        <td><div class="icheck-primary"><input type="checkbox" name="permission[]" id="createOrder" value="createOrder"><label for="createOrder"></label></div></td>
                        <td><div class="icheck-primary"><input type="checkbox" name="permission[]" id="updateOrder" value="updateOrder"><label for="updateOrder"></label></div></td>
                        <td><div class="icheck-primary"><input type="checkbox" name="permission[]" id="viewOrder" value="viewOrder"><label for="viewOrder"></label></div></td>
                        <td><div class="icheck-primary"><input type="checkbox" name="permission[]" id="deleteOrder" value="deleteOrder"><label for="deleteOrder"></label></div></td>
                      </tr>
                      <tr>
                        <td>Reports</td>
                        <td> - </td>
                        <td> - </td>
                        <td><div class="icheck-primary"><input type="checkbox" name="permission[]" id="viewReports" value="viewReports"><label for="viewReports"></label></div></td>
                        <td> - </td>
                      </tr>
                      <tr>
                        <td>Company</td>
                        <td> - </td>
                        <td><div class="icheck-primary"><input type="checkbox" name="permission[]" id="updateCompany" value="updateCompany"><label for="updateCompany"></label></div></td>
                        <td> - </td>
                        <td> - </td>
                      </tr>
                      <tr>
                        <td>Profile</td>
                        <td> - </td>
                        <td> - </td>
                        <td><div class="icheck-primary"><input type="checkbox" name="permission[]" id="viewProfile" value="viewProfile"><label for="viewProfile"></label></div></td>
                        <td> - </td>
                      </tr>
                      <tr>
                        <td>Setting</td>
                        <td>-</td>
                        <td><div class="icheck-primary"><input type="checkbox" name="permission[]" id="updateSetting" value="updateSetting"><label for="updateSetting"></label></div></td>
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
      $("#addGroupNav .nav-link").addClass('active');

    $('input[type="checkbox"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    });
  });
</script>

