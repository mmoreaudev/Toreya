<?php 
session_start();
if(isset($_SESSION['username'])){
  header('location:home');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Toreya - Développement | ADMIN</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="./dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page  dark-mode" >
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="https://toreya.pleven-dev.fr" class="h1"><b>Toreya</b> ADMIN</a>
    </div>
    <div class="card-body">
      <?php
      if(isset($_GET['msg'])){
        if($_GET['msg']=='error'){
          ?>
          <div class="alert alert-danger alert-dismissible">
            <h5><i class="fa-solid fa-exclamation"></i> Erreur !</h5>
           Le mot de passe ou l'identifiant est invalide !
          </div>
          <?php
        }
      }
      ?>
      <p class="login-box-msg">Connectez-vous pour démarrer votre session !</p>

      <form action="./includes/check.php" method="post">
        <div class="input-group mb-3">
          <input type="email" class="form-control"  name="email" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" name="login" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->
<!-- Font Awesome CDN -->
<script src="https://kit.fontawesome.com/ac2f7dafa4.js" crossorigin="anonymous"></script>
<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="./plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="./dist/js/adminlte.min.js"></script>
</body>
</html>
