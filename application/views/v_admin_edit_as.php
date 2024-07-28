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
            <a href="<?php echo base_url("c_admin2/");?>" class="nav-link">
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
                  <a href="<?php echo base_url("c_data/table_advertising");?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Advertising</p>
                  </a>
                </li>
                <li class="nav-item">
                <a href="#" class="nav-link active">
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
              <h1 class="m-0">Edit Animated Shorts</h1>
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
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Please fill out this form:</h3>
                </div>
              <form method="post" enctype="multipart/form-data" action="<?php echo base_url('c_crud/edit_data_animatedshorts'); ?>">
                <input type="hidden" name="id_as" value="<?php echo $animated_shorts->id_as; ?>">
                  <div class="card-body">
                        <div class="form-group">
                            <label for="title_as">Project Title (use all capital letters)</label>
                            <input type="text" class="form-control" id="title_as" name="title_as" value="<?php echo $animated_shorts->title_as; ?>" placeholder="Enter title" required>
                        </div>
                        <div class="form-group">
                            <label for="poster_as">Poster</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="poster_as" name="poster_as">
                                    <label class="custom-file-label" for="poster_as">Choose file</label>
                                </div>
                            </div>
                            <img src="<?php echo base_url('assets/images/' . $animated_shorts->poster_as); ?>" alt="<?php echo $animated_shorts->title_as; ?>" style="width: 100px; height: auto;">
                        </div>
                        <div class="form-group">
                            <label for="bg_as">Background</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="bg_as" name="bg_as">
                                    <label class="custom-file-label" for="bg_as">Choose file</label>
                                </div>
                            </div>
                            <img src="<?php echo base_url('assets/images/' . $animated_shorts->bg_as); ?>" alt="Background Title" style="width: 100px; height: auto;">
                        </div>
                        <div class="form-group">
                            <label for="description_as">Project description</label>
                            <textarea id="description_as" class="form-control" rows="4" name="description_as" placeholder="Enter description" required><?php echo $animated_shorts->description_as; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="image_as1">Choose image 1</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="image_as1" name="image_as1">
                                    <label class="custom-file-label" for="image_as1">Choose file</label>
                                </div>
                            </div>
                            <img src="<?php echo base_url('assets/images/' . $animated_shorts->image_as1); ?>" alt="Image 1" style="width: 100px; height: auto;">
                        </div>
                        <div class="form-group">
                            <label for="image_as2">Choose image 2</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="image_as2" name="image_as2">
                                    <label class="custom-file-label" for="image_as2">Choose file</label>
                                </div>
                            </div>
                            <img src="<?php echo base_url('assets/images/' . $animated_shorts->image_as2); ?>" alt="Image 2" style="width: 100px; height: auto;">
                        </div>
                        <div class="form-group">
                            <label for="image_as3">Choose image 3</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="image_as3" name="image_as3">
                                    <label class="custom-file-label" for="image_as3">Choose file</label>
                                </div>
                            </div>
                            <img src="<?php echo base_url('assets/images/' . $animated_shorts->image_as3); ?>" alt="Image 3" style="width: 100px; height: auto;">
                        </div>
                        <div class="form-group">
                            <label for="image_as4">Choose image 4</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="image_as4" name="image_as4">
                                    <label class="custom-file-label" for="image_as4">Choose file</label>
                                </div>
                            </div>
                            <img src="<?php echo base_url('assets/images/' . $animated_shorts->image_as4); ?>" alt="Image 4" style="width: 100px; height: auto;">
                        </div>
                        <div class="form-group">
                            <label for="image_as5">Choose image 5</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="image_as5" name="image_as5">
                                    <label class="custom-file-label" for="image_as5">Choose file</label>
                                </div>
                            </div>
                            <img src="<?php echo base_url('assets/images/' . $animated_shorts->image_as5); ?>" alt="Image 5" style="width: 100px; height: auto;">
                        </div>
                        <div class="form-group">
                            <label for="image_as6">Choose image 6</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="image_as6" name="image_as6" >
                                    <label class="custom-file-label" for="image_as6">Choose file</label>
                                </div>
                            </div>
                            <img src="<?php echo base_url('assets/images/' . $animated_shorts->image_as6); ?>" alt="Image 6" style="width: 100px; height: auto;">
                        </div>
                        <div class="form-group">
                            <label for="image_as7">Choose image 7</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="image_as7" name="image_as7" >
                                    <label class="custom-file-label" for="image_as7">Choose file</label>
                                </div>
                            </div>
                            <img src="<?php echo base_url('assets/images/' . $animated_shorts->image_as7); ?>" alt="Image 7" style="width: 100px; height: auto;">
                        </div>
                        <div class="form-group">
                            <label for="image_as8">Choose image 8</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="image_as8" name="image_as8" >
                                    <label class="custom-file-label" for="image_as8">Choose file</label>
                                </div>
                            </div>
                            <img src="<?php echo base_url('assets/images/' . $animated_shorts->image_as8); ?>" alt="Image 8" style="width: 100px; height: auto;">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Choose video (make sure format is .mp4)</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="video_as" name="video_as">
                                    <label class="custom-file-label" for="video_as">Choose file</label>
                                </div>
                            </div>
                            <video src="<?php echo base_url('assets/images/' . $animated_shorts->video_as); ?>" alt="video" style="width: 100px; height: auto;">
                        </div>
                        <div class="card-footer">
                          <button type="submit" class="btn btn-primary">Save Changes</button>
                        </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
      </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
      </div>
<script>
document.addEventListener('DOMContentLoaded', function () {
    var inputs = document.querySelectorAll('.custom-file-input');
    Array.prototype.forEach.call(inputs, function(input) {
        input.addEventListener('change', function (e) {
            var fileName = e.target.files[0].name;
            var label = e.target.nextElementSibling;
            label.innerText = fileName;
        });
    });
});
</script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
      
      <?php  $this->load->view('templates/footer_admin');?>