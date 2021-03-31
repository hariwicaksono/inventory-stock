<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="shortcut icon" href="<?php echo base_url('assets/images/favicon.png'); ?>" type="image/x-icon"><!-- X -->
  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets/adminlte/plugins/fontawesome-free/css/all.min.css') ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/adminlte/dist/css/adminlte.min.css') ?>">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
<style>
html{font-size: 100%}
</style>
</head>
<body class="hold-transition login-page">
<div class="login-box" style="margin-top: -150px">
  <div class="login-logo">
    <a href="<?php echo base_url('auth/login'); ?>"><b>INV STOCK</b> Login</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
    <p class="login-box-msg">Masuk untuk memulai sesi anda</p>

    <?php if(!empty(validation_errors()))
    echo "<div class='callout callout-danger'>".validation_errors()."</div>"; 
    ?>  
    
    <?php if(!empty($errors)) {
      echo "<div class='callout callout-danger'>".$errors."</div>";
    } ?>

    <form action="<?php echo base_url('auth/login') ?>" method="post">
      <div class="input-group mb-3">
        <input type="email" class="form-control" name="email" id="email" placeholder="Email" autocomplete="on">
        <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
      </div>
      <div class="input-group mb-3">
        <input type="password" class="form-control" name="password" id="password" placeholder="Password" autocomplete="off">
        <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
      </div>
      <div class="row">
        <!-- /.col -->
        <div class="col-12">
          <button type="submit" class="btn btn-default btn-lg bg-indigo btn-block">Masuk</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
  </div>
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="<?php echo base_url('assets/adminlte/plugins/jquery/jquery.min.js') ?>"></script>
<!-- Bootstrap -->
<script src="<?php echo base_url('assets/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<script src="<?php echo base_url('assets/adminlte/dist/js/adminlte.min.js') ?>"></script>
</body>
</html>
