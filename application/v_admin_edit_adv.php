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
          
          <?php  $this->load->view('templates/data_page');?>

          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                PROJECT PAGE
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Advertising</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url("c_data/table_animatedshorts");?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Animated Shorts</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url("c_data/table_visualeffects");?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Visual Effects</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url("c_data/table_digiceleb");?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Digital Celebrity</p>
                </a>
              </li>
            </ul>
          </li>
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
              <h1 class="m-0">Advertising</h1>
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
        <div class="row">
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Advertising</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <?php 
              if(isset($error))
              {
                echo "ERROR UPLOAD : <br/>";
                print_r($error);
                echo "<hr/>";
              }
              ?>
              <form method="post" enctype="multipart/form-data" action="<?php echo base_url('c_crud/edit_data_advertising'); ?>">
                <input type="hidden" name="id_adv" value="<?php echo $advertising->id_adv; ?>">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Judul</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name ="title_adv" value="<?php echo $advertising->title_adv; ?>" placeholder="Masukkan Judul">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Poster</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="poster_adv">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                    </div>
                    <img src="<?php echo base_url('assets/images/' . $advertising->poster_adv); ?>" alt="<?php echo $advertising->title_adv; ?>" style="width: 100px; height: auto;">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Background</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="bg_adv">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                    </div>
                    <img src="<?php echo base_url('assets/images/' . $advertising->bg_adv); ?>" alt="Background Title" style="width: 100px; height: auto;">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Description</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name ="description_adv" value="<?php echo $advertising->description_adv; ?>" placeholder="Masukkan Deskripsi">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Image 1</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="image_adv1">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                    </div>
                    <img src="<?php echo base_url('assets/images/' . $advertising->image_adv1); ?>" alt="Image 1" style="width: 100px; height: auto;">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Image 2</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="image_adv2">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                    </div>
                    <img src="<?php echo base_url('assets/images/' . $advertising->image_adv2); ?>" alt="Image 2" style="width: 100px; height: auto;">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Image 3</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="image_adv3">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                    </div>
                    <img src="<?php echo base_url('assets/images/' . $advertising->image_adv3); ?>" alt="Image 3" style="width: 100px; height: auto;">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Image 4</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="image_adv4">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                    </div>
                    <img src="<?php echo base_url('assets/images/' . $advertising->image_adv4); ?>" alt="Image 4" style="width: 100px; height: auto;">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Video</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="video_adv">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                    </div>
                    <video src="<?php echo base_url('assets/images/' . $advertising->video_adv); ?>" alt="video" style="width: 100px; height: auto;">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
        </section>
      </div>
    </section>
  </div>

   <!-- jQuery and Bootstrap JS script -->
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <!-- Custom JavaScript to update file input label -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var inputs = document.querySelectorAll('.custom-file-input');

            inputs.forEach(function(input) {
                input.addEventListener('change', function (event) {
                    var fileName = event.target.files[0].name;
                    var label = input.nextElementSibling;
                    label.textContent = fileName;
                });
            });
        });
    </script>
    
  <?php  $this->load->view('templates/footer_admin');?>