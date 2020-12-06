

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
  <div class="container-fluid px-3">
        <div class="row">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Pesanan Baru</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item active">Pesanan</li>
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

        <div id="messages"></div>

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

          <!-- /.box-header -->
          <form role="form" action="<?php base_url('orders/create') ?>" method="post" class="form-horizontal">
              <div class="card-body">

              <?php if(validation_errors()): ?>
                <div class="callout callout-danger">
                <?php echo validation_errors(); ?>
                </div>
                <?php endif; ?>

                <div class="form-group">
                  <label class="control-label">Tanggal: <?php echo date('Y-m-d') ?> Jam: <?php echo date('H:i') ?></label>
                </div>

                <div class="row">
                <div class="col">
                <div class="form-group">
                    <label for="" class="control-label" style="text-align:left;">Nama Pelanggan</label>
                    
                      <input type="text" class="form-control form-control-sm" id="customer_name" name="customer_name" placeholder="Nama Pelanggan" autocomplete="off" />
                    </div>
                </div>
                <div class="col">
                <div class="form-group">
                    <label for="" class="control-label" style="text-align:left;">Alamat Pelanggan</label>
                  
                      <input type="text" class="form-control form-control-sm" id="customer_address" name="customer_address" placeholder="Alamat Pelanggan" autocomplete="off">
                    </div>
                </div>
                <div class="col">
                <div class="form-group">
                    <label for="" class="control-label" style="text-align:left;">Telepon Pelanggan</label>
                   
                      <input type="text" class="form-control form-control-sm" id="customer_phone" name="customer_phone" placeholder="Telepon Pelanggan" autocomplete="off">
                    </div>
                </div>
               
                </div>
                
                
                <table class="table table-bordered" id="product_info_table">
                  <thead>
                    <tr>
                      <th style="width:50%">Produk</th>
                      <th style="width:10%">Qty</th>
                      <th style="width:10%">Harga</th>
                      <th style="width:20%">Total</th>
                      <th style="width:10%"><button type="button" id="add_row" class="btn btn-default"><i class="fa fa-plus"></i></button></th>
                    </tr>
                  </thead>

                   <tbody>
                     <tr id="row_1">
                       <td>
                        <select class="form-control select_group product" data-row-id="row_1" id="product_1" name="product[]" style="width:100%;" onchange="getProductData(1)" required>
                            <option value=""></option>
                            <?php foreach ($products as $k => $v): ?>
                              <option value="<?php echo $v['id'] ?>"><?php echo $v['name'] ?></option>
                            <?php endforeach ?>
                          </select>
                        </td>
                        <td><input type="text" name="qty[]" id="qty_1" class="form-control form-control-sm" required onkeyup="getTotal(1)"></td>
                        <td>
                          <input type="text" name="rate[]" id="rate_1" class="form-control form-control-sm" disabled autocomplete="off">
                          <input type="hidden" name="rate_value[]" id="rate_value_1" class="form-control" autocomplete="off">
                        </td>
                        <td>
                          <input type="text" name="amount[]" id="amount_1" class="form-control form-control-sm" disabled autocomplete="off">
                          <input type="hidden" name="amount_value[]" id="amount_value_1" class="form-control" autocomplete="off">
                        </td>
                        <td><button type="button" class="btn btn-default" onclick="removeRow('1')"><i class="fas fa-trash"></i></button></td>
                     </tr>
                   </tbody>
                </table>
              

                <div class="row">
                <div class="col-md-4 ml-auto">
                  <div class="form-group">
                    <label for="gross_amount" class="control-label">Jumlah</label>
                    
                      <input type="text" class="form-control form-control-sm" id="gross_amount" name="gross_amount" disabled autocomplete="off">
                      <input type="hidden" class="form-control form-control-sm" id="gross_amount_value" name="gross_amount_value" autocomplete="off">
                   
                  </div>
                  <?php if($is_service_enabled == true): ?>
                  <div class="form-group">
                    <label for="service_charge" class="control-label">Biaya Layanan <?php echo $company_data['service_charge_value'] ?> %</label>
                    
                      <input type="text" class="form-control form-control-sm" id="service_charge" name="service_charge" disabled autocomplete="off">
                      <input type="hidden" class="form-control form-control-sm" id="service_charge_value" name="service_charge_value" autocomplete="off">
                    
                  </div>
                  <?php endif; ?>
                  <?php if($is_vat_enabled == true): ?>
                  <div class="form-group">
                    <label for="vat_charge" class="control-label">PPN <?php echo $company_data['vat_charge_value'] ?> %</label>
                    
                      <input type="text" class="form-control form-control-sm" id="vat_charge" name="vat_charge" disabled autocomplete="off">
                      <input type="hidden" class="form-control form-control-sm" id="vat_charge_value" name="vat_charge_value" autocomplete="off">
                   
                  </div>
                  <?php endif; ?>
                  <div class="form-group">
                    <label for="discount" class="control-label">Diskon</label>
                    
                      <input type="text" class="form-control form-control-sm" id="discount" name="discount" placeholder="Diskon" onkeyup="subAmount()" autocomplete="off">
                    
                  </div>
                  <div class="form-group">
                    <label for="net_amount" class="control-label">Total Harga</label>
                    
                      <input type="text" class="form-control form-control-sm" id="net_amount" name="net_amount" disabled autocomplete="off">
                      <input type="hidden" class="form-control form-control-sm" id="net_amount_value" name="net_amount_value" autocomplete="off">
                   
                  </div>
                </div>
                </div>
              </div>
              <!-- /.box-body -->
      
              <div class="card-footer">
                <input type="hidden" name="service_charge_rate" value="<?php echo $company_data['service_charge_value'] ?>" autocomplete="off">
                <input type="hidden" name="vat_charge_rate" value="<?php echo $company_data['vat_charge_value'] ?>" autocomplete="off">
                <button type="submit" class="btn btn-primary">Buat Pesanan</button>
                <a href="<?php echo base_url('orders/') ?>" class="btn btn-warning">Kembali</a>
              </div>
            </form>
          <!-- /.box-body -->
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
  var base_url = "<?php echo base_url(); ?>";

  $(document).ready(function() {
    $(".select_group").select2({
      theme: 'bootstrap4'
    })
    // $("#description").wysihtml5();

    $("#mainOrdersNav").addClass('menu-is-opening menu-open');
    $("#OrdersNav").addClass('active');
    $("#addOrderNav .nav-link").addClass('active');
    
    var btnCust = '<button type="button" class="btn btn-secondary" title="Tambahkan tag gambar" ' + 
        'onclick="alert(\'Hubungi kode kustom Anda di sini.\')">' +
        '<i class="glyphicon glyphicon-tag"></i>' +
        '</button>'; 
  
    // Add new row in the table 
    $("#add_row").unbind('click').bind('click', function() {
      var table = $("#product_info_table");
      var count_table_tbody_tr = $("#product_info_table tbody tr").length;
      var row_id = count_table_tbody_tr + 1;

      $.ajax({
          url: base_url + '/orders/getTableProductRow/',
          type: 'post',
          dataType: 'json',
          success:function(response) {
            
              // console.log(reponse.x);
               var html = '<tr id="row_'+row_id+'">'+
                   '<td>'+ 
                    '<select class="form-control select_group product" data-row-id="'+row_id+'" id="product_'+row_id+'" name="product[]" style="width:100%;" onchange="getProductData('+row_id+')">'+
                        '<option value=""></option>';
                        $.each(response, function(index, value) {
                          html += '<option value="'+value.id+'">'+value.name+'</option>';             
                        });
                        
                      html += '</select>'+
                    '</td>'+ 
                    '<td><input type="number" name="qty[]" id="qty_'+row_id+'" class="form-control form-control-sm" onkeyup="getTotal('+row_id+')"></td>'+
                    '<td><input type="text" name="rate[]" id="rate_'+row_id+'" class="form-control form-control-sm" disabled><input type="hidden" name="rate_value[]" id="rate_value_'+row_id+'" class="form-control"></td>'+
                    '<td><input type="text" name="amount[]" id="amount_'+row_id+'" class="form-control form-control-sm" disabled><input type="hidden" name="amount_value[]" id="amount_value_'+row_id+'" class="form-control form-control-sm"></td>'+
                    '<td><button type="button" class="btn btn-default" onclick="removeRow(\''+row_id+'\')"><i class="fas fa-trash"></i></button></td>'+
                    '</tr>';

                if(count_table_tbody_tr >= 1) {
                $("#product_info_table tbody tr:last").after(html);  
              }
              else {
                $("#product_info_table tbody").html(html);
              }

              $(".product").select2({
                theme: 'bootstrap4'
              });

          }
        });

      return false;
    });

  }); // /document

  function getTotal(row = null) {
    if(row) {
      var total = Number($("#rate_value_"+row).val()) * Number($("#qty_"+row).val());
      total = total.toFixed(2);
      $("#amount_"+row).val(total);
      $("#amount_value_"+row).val(total);
      
      subAmount();

    } else {
      alert('no row !! please refresh the page');
    }
  }

  // get the product information from the server
  function getProductData(row_id)
  {
    var product_id = $("#product_"+row_id).val();    
    if(product_id == "") {
      $("#rate_"+row_id).val("");
      $("#rate_value_"+row_id).val("");

      $("#qty_"+row_id).val("");           

      $("#amount_"+row_id).val("");
      $("#amount_value_"+row_id).val("");

    } else {
      $.ajax({
        url: base_url + 'orders/getProductValueById',
        type: 'post',
        data: {product_id : product_id},
        dataType: 'json',
        success:function(response) {
          // setting the rate value into the rate input field
          
          $("#rate_"+row_id).val(response.price);
          $("#rate_value_"+row_id).val(response.price);

          $("#qty_"+row_id).val(1);
          $("#qty_value_"+row_id).val(1);

          var total = Number(response.price) * 1;
          total = total.toFixed(2);
          $("#amount_"+row_id).val(total);
          $("#amount_value_"+row_id).val(total);
          
          subAmount();
        } // /success
      }); // /ajax function to fetch the product data 
    }
  }

  // calculate the total amount of the order
  function subAmount() {
    var service_charge = <?php echo ($company_data['service_charge_value'] > 0) ? $company_data['service_charge_value']:0; ?>;
    var vat_charge = <?php echo ($company_data['vat_charge_value'] > 0) ? $company_data['vat_charge_value']:0; ?>;

    var tableProductLength = $("#product_info_table tbody tr").length;
    var totalSubAmount = 0;
    for(x = 0; x < tableProductLength; x++) {
      var tr = $("#product_info_table tbody tr")[x];
      var count = $(tr).attr('id');
      count = count.substring(4);

      totalSubAmount = Number(totalSubAmount) + Number($("#amount_"+count).val());
    } // /for

    totalSubAmount = totalSubAmount.toFixed(2);

    // sub total
    $("#gross_amount").val(totalSubAmount);
    $("#gross_amount_value").val(totalSubAmount);

    // vat
    var vat = (Number($("#gross_amount").val())/100) * vat_charge;
    vat = vat.toFixed(2);
    $("#vat_charge").val(vat);
    $("#vat_charge_value").val(vat);

    // service
    var service = (Number($("#gross_amount").val())/100) * service_charge;
    service = service.toFixed(2);
    $("#service_charge").val(service);
    $("#service_charge_value").val(service);
    
    // total amount
    var totalAmount = (Number(totalSubAmount) + Number(vat) + Number(service));
    totalAmount = totalAmount.toFixed(2);
    // $("#net_amount").val(totalAmount);
    // $("#totalAmountValue").val(totalAmount);

    var discount = $("#discount").val();
    if(discount) {
      var grandTotal = Number(totalAmount) - Number(discount);
      grandTotal = grandTotal.toFixed(2);
      $("#net_amount").val(grandTotal);
      $("#net_amount_value").val(grandTotal);
    } else {
      $("#net_amount").val(totalAmount);
      $("#net_amount_value").val(totalAmount);
      
    } // /else discount 

  } // /sub total amount

  function removeRow(tr_id)
  {
    $("#product_info_table tbody tr#row_"+tr_id).remove();
    subAmount();
  }
</script>