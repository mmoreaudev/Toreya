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
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Ajouter un avis</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="./includes/add-review-checker.php">
                <div class="card-body">
                  <div class="form-group">
                    <label for="InputNom">Nom</label>
                    <input type="text" class="form-control" id="InputNom" name="InputNom" placeholder="Jouves Luc" required>
                  </div>
                  <div class="form-group">
                    <label for="InputDescription">Description</label>
                    <input type="text" class="form-control" id="InputDescription" name="InputDescription" placeholder="Toreya est un service très..." required>
                  </div>
                  <div class="form-group">
                    <label for="InputEtoiles">Étoiles</label>
                    <input type="number" class="form-control" id="InputEtoiles" min="1" max="5" name="InputEtoiles" placeholder="1 à 5" required>
                  </div>
                  <div class="form-group">
                    <label for="InputImage">Url de l'image</label>
                    <input type="text" class="form-control" id="InputImage" name="InputImage" placeholder="https://toreya.pleven-dev.fr/admin/dist/img/2-admin.jpg" required>
                  </div>
                  
               </div>
                <!-- /.card-body -->

                <div class="card-footer">
                <?php 
                  if(isset($_GET['msg'])){
                    if($_GET['msg']=='success'){
                      ?>
                      <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h5><i class="icon fas fa-check"></i> Succès !</h5>
                        Le service a bien été ajouté.
                      </div>
                      <?php
                    } 
                    if($_GET['msg']=='error'){
                      ?>
                      <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h5><i class="icon fas fa-ban"></i> Erreur !</h5>
                       Veuillez remplir correctement le formulaire !
                      </div>
                      <?php
                    }
                  }
                  ?>
                  <input type="submit" name="submit" class="btn btn-primary" value="submit"/>
                </div>
                
              </form>
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    
<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
</body>
</html>