<?php  $this->load->view('templates/Header');?>
<?php 
foreach($advertising as $u){ 
  ?>
  <section data-bs-version="5.1" class="info1 cid-ui5KXAvjPq" id="info1-1z" style="background-image: url('<?php echo base_url('assets/images/'.$u->bg_adv); ?>');">
  <div class="align-center container-fluid">
    <div class="row justify-content-center">
      <div class="col-12 col-lg-8">
        <h3 class="mbr-section-title mb-4 mbr-fonts-style display-1"><strong><?php echo $u->title_adv ?></strong></h3>
      </div>
    </div>
  </div>
  </section>


  <section data-bs-version="5.1" class="gallery3 cid-ui5LGHIJF4" id="gallery03-23">


    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-12 content-head">

        </div>
      </div>
      <div class="row">
        <div class="item features-image col-12 col-md-6 col-lg-3">
          <div class="item-wrapper">
            <div class="item-img">
              <img src="<?php echo base_url('assets/images/'.$u->image_adv1); ?>" title="" data-slide-to="0" data-bs-slide-to="0">
            </div>
            
          </div>
        </div>
        <div class="item features-image col-12 col-md-6 col-lg-3">
          <div class="item-wrapper">
            <div class="item-img">
              <img src="<?php echo base_url('assets/images/'.$u->image_adv2); ?>" title="" data-slide-to="1" data-bs-slide-to="1">
            </div>
            
          </div>
        </div>
        <div class="item features-image col-12 col-md-6 col-lg-3">
          <div class="item-wrapper">
            <div class="item-img">
              <img src="<?php echo base_url('assets/images/'.$u->image_adv3); ?>" title="" data-slide-to="2" data-bs-slide-to="2">
            </div>
            
          </div>
        </div>
        <div class="item features-image col-12 col-md-6 col-lg-3">
          <div class="item-wrapper">
            <div class="item-img">
              <img src="<?php echo base_url('assets/images/'.$u->image_adv4); ?>" title="" data-slide-to="3" data-bs-slide-to="3">
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </section>

  <section data-bs-version="5.1" class="image1 cid-ui5M78tW8c" id="image1-24">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-12 col-lg-6">
          <div class="image-wrapper">
            <video class="custom-video-size" controls autoplay muted>
              <source src="<?php echo base_url('assets/images/'.$u->video_adv); ?>" type="video/mp4">
                Your browser does not support the video tag.
              </video>
            </div>
          </div>
          <div class="col-12 col-lg">
            <div class="text-wrapper">
              <h3 class="mbr-section-title mbr-fonts-style mb-3 display-5">
                <strong><?php echo $u->title_adv ?></strong></h3>
                <p class="mbr-text mbr-fonts-style display-7">
                <?php echo $u->description_adv ?></p>
              </div>
            </div>
          </div>
        </div>
        
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.0/js/bootstrap.bundle.min.js"></script>
      </section>
      <?php } ?>
      <?php  $this->load->view('templates/Footer');?>
