<!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="https://toreya.pleven-dev.fr/admin">
      <div class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="Toreya - Admin Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Toreya - Admin</span>
      </div>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="https://toreya.pleven-dev.fr/admin/dist/img/<?=$_SESSION['id']?>-admin.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?=$_SESSION['username']?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Services
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="list-services " class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Liste des services</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="add-service " class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ajouter un service</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="remove-service " class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Supprimer un service</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Avis
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="list-review " class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Liste des avis</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="add-review " class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ajouter un avis</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="remove-review " class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Supprimer un avis</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">Utilisateur</li>
          <li class="nav-item">
            <a href="logout " class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">Déconnexion</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->