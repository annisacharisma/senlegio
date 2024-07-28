<?php  $this->load->view('templates/Header');?>

<section data-bs-version="5.1" class="info1 cid-ui1lIaq7mz" id="info1-18">
    

    
    
    <div class="align-center container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <h3 class="mbr-section-title mb-4 mbr-fonts-style display-1">
                    <strong>VISUAL EFFECTS</strong></h3>
                
                
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="article13 cid-ui1lIb4I6m" id="article13-19">
    
    
    
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="card col-md-12 col-lg-10">
                <div class="card-wrapper">
                    <div class="card-box align-left">
                        
                        <p class="mbr-text mbr-fonts-style mt-3 display-7">At Senlegio Studio, we specialize in creating captivating and high-impact advertising animations. Our expertise in 3D animation allows us to produce visually stunning ads that effectively communicate your brand’s message. Whether it’s for television, online platforms, or social media, we tailor our services to fit your advertising needs.</p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="gallery3 cid-ui5XRubJeu" id="gallery03-2r">
   
<div class="container-fluid">
    <div class="row justify-content-center" style="gap: 1;">
            <?php 
                $no = 1;
                foreach($datamu as $u){ 
                  ?>
        <div class="col-12 col-lg-3 d-flex flex-column justify-content-center align-items-center">
            <div class="image-wrapper">
              <a href="<?php echo site_url('c_senlegio/show_ve_project/'.$u->id_ve); ?>"><img src="<?php echo base_url('assets/images/'.$u->poster_ve); ?>" style="height: 19rem; width: 15rem; object-fit: cover;"></a>
                <p class="mbr-text mbr-fonts-style mt-2 align-center display-7">
                    <strong><?php echo $u->title_ve?></strong> </p>
            </div>
        </div>
        <?php } ?>
        <div class="col-12 col-lg-3 d-flex flex-column justify-content-center align-items-center">
                <div class="image-wrapper">
                    <img src="<?php echo base_url(); ?>assets/images/comingSoon.png" alt="Coming Soon" style="height: 19rem; width: 15rem; object-fit: cover;">
                    <p class="mbr-text mbr-fonts-style mt-2 align-center display-7">
                        <strong>COMING SOON</strong>
                    </p>
                </div>
            </div>
    </div>
</div>
  </section>
  <?php  $this->load->view('templates/Footer');?>
