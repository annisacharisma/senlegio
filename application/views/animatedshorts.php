<?php  $this->load->view('templates/Header');?>
<section data-bs-version="5.1" class="info1 cid-ui1lzRtFkn" id="info1-13">
    

    
    
    <div class="align-center container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <h3 class="mbr-section-title mb-4 mbr-fonts-style display-1">
                    <strong>ANIMATED SHORTS</strong></h3>
                
                
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="article13 cid-ui1lzSkkLG" id="article13-14">
    
    
    
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="card col-md-12 col-lg-10">
                <div class="card-wrapper">
                    <div class="card-box align-left">
                        
                        <p class="mbr-text mbr-fonts-style mt-4 display-7">Senlegio Studio brings stories to life through our expertly crafted animated short films. We handle every aspect of production, from storytelling and character design to animation and post-production. Our animated shorts are perfect for: <br><br>- Entertainment: Original short films that captivate and entertain. <br><br>- Brand Storytelling: Using animation to tell your brand’s story in a compelling way. <br><br>- Educational Content: Engaging and informative animated shorts for educational purposes.</p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="gallery3 cid-ui5WWCnxYJ" id="gallery03-2q">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <?php 
                $no = 1;
                foreach($datamu as $u){ 
                  ?>
                  <div class="col-12 col-lg-3 d-flex flex-column justify-content-center align-items-center">
                    <div class="image-wrapper">
                        <a href="<?php echo site_url('c_senlegio/show_as_project/'.$u->id_as); ?>"><img src="<?php echo base_url('assets/images/'.$u->poster_as); ?>" alt="Image" style="height: 19rem; width: 15rem; object-fit: cover;"></a>
                        <p class="mbr-text mbr-fonts-style mt-2 align-center display-7">
                            <strong><?php echo $u->title_as ?></strong></p>
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
