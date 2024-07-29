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
                <a href="#" class="nav-link active">
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
              <h1 class="m-0">Digital Celebrity</h1>
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
                <?php 
                if(isset($error))
                {
                    echo "ERROR UPLOAD : <br/>";
                    print_r($error);
                    echo "<hr/>";
                }
                ?>
                <form method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>c_upload/proses_dc">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title_dc">Digiceleb name (use all capital letters)</label>
                            <input type="text" class="form-control" id="title_dc" name="title_dc" placeholder="Enter title" required>
                        </div>
                        <div class="form-group">
                            <label for="poster_dc">Poster</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="poster_dc" name="poster_dc" required>
                                    <label class="custom-file-label" for="poster_dc">Choose file</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="bg_dc">Background</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="bg_dc" name="bg_dc" required>
                                    <label class="custom-file-label" for="bg_dc">Choose file</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="description">Headline Project</label>
                            <textarea id="description_line1" class="form-control" rows="4" name="description_line1" placeholder="Enter description" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="description1">Digiceleb Description paragraph 1</label>
                            <textarea id="description_line2" class="form-control" rows="4" name="description_line2" placeholder="Enter description" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="description2">Digiceleb Description paragraph 2</label>
                            <textarea id="description_line3" class="form-control" rows="4" name="description_line3" placeholder="Enter description" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="image_dc1">Choose images 1</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="image_dc1" name="image_dc1" required>
                                    <label class="custom-file-label" for="image_dc1">Choose file</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="image_dc2">Choose images 2</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="image_dc2" name="image_dc2" required>
                                    <label class="custom-file-label" for="image_dc2">Choose file</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="instagram">Instagram link</label>
                            <input type="text" class="form-control" id="instagram" name="instagram" placeholder="Enter instagram link" required>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
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
