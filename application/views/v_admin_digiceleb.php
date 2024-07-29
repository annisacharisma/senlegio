<?php  $this->load->view('templates/header_admin');?>

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
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
            <a href="<?php echo base_url("c_admin2/");?>" class="nav-link">
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
                <a href="<?php echo base_url("c_data/data_advertising");?>" class="nav-link">
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
                <a href="#" class="nav-link active">
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
              <h1 class="m-0">Data Digital Celebrity</h1>
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
              <a href="<?php echo base_url("c_data/table_digiceleb");?>" class="btn btn-primary a-btn-slide-text">
                            <strong>Add new project</strong>
                        </a>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: auto;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>ID</th>
                      <th>Title</th>
                      <th>Poster</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php 
                $no = 1; // Initialize row number
                foreach ($datamu as $u) { 
            ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $u->id_dc; ?></td>
                    <td><?php echo $u->title_dc; ?></td>
                    <td>
                        <img src="<?php echo base_url('assets/images/' . $u->poster_dc); ?>" 
                             alt="<?php echo $u->title_dc; ?>" 
                             style="width: 100px; height: auto;"> </td>
                             <td>
                          <a href="<?php echo site_url('c_crud/edit_digiceleb/'.$u->id_dc); ?>" class="btn btn-warning a-btn-slide-text">
                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> 
                            <span><strong>Edit</strong></span>
                          </a>
                          <a href="<?php echo site_url('c_admin2/data_digiceleb?hapus_dc='.$u->id_dc); ?>" class="btn btn-danger a-btn-slide-text">
                          <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> 
                          <span><strong>Delete</strong></span>
                          </a>
                        </td>
                                        </tr>
                                        <?php 
                                    }
                                ?>
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
      <?php  $this->load->view('templates/footer_admin');?>
