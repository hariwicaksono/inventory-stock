
  <footer class="main-footer">
    <div class="float-right hidden-xs">
      <b>Version</b> 1.0
    </div>
    <strong>Copyright &copy; IT Shop Purwokerto. <?php echo date('Y') ?>.</strong> All rights reserved.
  </footer>

  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

 <!-- AdminLTE for demo purposes -->
 <script src="<?php echo base_url('assets/adminlte/dist/js/demo.js') ?>"></script>

 <script type="text/javascript">
    $(document).ready(function() {
      function update() {
        $('#clock').html(moment().format('D MMMM YYYY H:mm:ss'));
      }
      setInterval(update, 1000);
    }); 
  </script>

</body>
</html>
