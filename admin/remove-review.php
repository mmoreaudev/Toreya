<?php
$url = '../includes/review.json';
$json = file_get_contents($url);
$jo = json_decode($json);
?>
<?php
include('./includes/head.php'); 
?>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

<?php include('./includes/navbar.php'); ?>

<?php include('./includes/sidebar.php'); ?>
 <!-- Main content -->
 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
              <?php 
                  if(isset($_GET['msg'])){
                    if($_GET['msg']=='success'){
                      ?>
                      <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h5><i class="icon fas fa-check"></i> Succès !</h5>
                        Le service a bien été supprimé.
                      </div>
                      <?php
                    } 
                    if($_GET['msg']=='error'){
                      ?>
                      <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h5><i class="icon fas fa-ban"></i> Erreur !</h5>
                       Une erreur est survenue, veuillez contacter l'admininstateur !
                      </div>
                      <?php
                    }
                  }
                  ?>
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Description</th>
                    <th>Étoiles</th>
                    <th>Supprimer</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($jo->retour as $je) {
                    echo "<tr>";
                    echo "<td>$je->id</td>";
                    echo "<td>$je->nom</td>";
                    echo "<td>$je->description</td>";
                    echo "<td>$je->etoiles</td>";
                    echo "<td><a href=\"./includes/remove-review-checker.php?id=$je->id\" name=\"submit\">Supprimer \"$je->nom\"</a></td>";
                    echo "</tr>";
                  }
                  ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Description</th>
                    <th>Étoiles</th>
                    <th>Supprimer</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": true,
      "responsive": true,
    });
  });
</script>
</body>
</html>
