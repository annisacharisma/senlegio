<?php  $this->load->view('templates/header_admin');?>

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <img src="<?php echo base_url(); ?>assets/admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="<?php echo base_url(); ?>assets/admin/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a class="d-block"><?php echo $this->session->userdata("nama"); ?></a>
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
          <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
           <li class="nav-item menu-open">
            <a href="<?php echo base_url("c_admin2/index");?>" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Data Page
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Advertising</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url("c_data/data_animatedshorts");?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Animated Shorts</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url("c_data/data_visualeffects");?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Visual Effects</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url("c_data/data_digiceleb");?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Digital Celebrity</p>
                </a>
              </li>
            </ul>  
          </li>
          <?php  $this->load->view('templates/table_page');?>

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
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Data Advertising</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard v1</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Fixed Header Table</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: auto;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>Nomer</th>
                      <th>ID</th>
                      <th>Judul</th>
                      <th>Poster</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $no = 1;
                    foreach($datamu as $u){ 
                      ?>
                      <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $u->id_adv ?></td>
                        <td><?php echo $u->title_adv ?></td>
                        <td><img src="<?php echo base_url('assets/' . $u->poster_adv); ?>" alt="<?php echo $u->title_adv; ?>" style="width: 100px; height: auto;"></td>
                        <td>
                          <a href="<?php echo site_url('crud/edit/'.$u->id_adv); ?>" class="btn btn-warning a-btn-slide-text">
                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> 
                            <span><strong>Edit</strong></span>
                          </a>
                          <a href="<?php echo site_url('crud/hapus/'.$u->id_adv); ?>" class="btn btn-danger a-btn-slide-text">
                            <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> 
                            <span><strong>Hapus</strong></span>
                          </a>
                        </td>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- /.row -->
            <!-- Main row -->

            <!-- /.row (main row) -->
          </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
      </div>
