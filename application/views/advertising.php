<?php  $this->load->view('templates/Header');?>

<section data-bs-version="5.1" class="info1 cid-ui1kM5Tite" id="info1-y">




    <div class="align-center container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <h3 class="mbr-section-title mb-4 mbr-fonts-style display-1">
                    <strong>ADVERTISING</strong></h3>


                </div>
            </div>
        </div>
    </section>

    <section data-bs-version="5.1" class="article13 cid-ui1kM7o5QF" id="article13-z">



        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="card col-md-12 col-lg-10">
                    <div class="card-wrapper">
                        <div class="card-box align-left">

                            <p class="mbr-text mbr-fonts-style mt-4 display-7">At Senlegio Studio, we specialize in creating captivating and high-impact advertising animations. Our expertise in 3D animation allows us to produce visually stunning ads that effectively communicate your brand’s message. Whether it’s for television, online platforms, or social media, we tailor our services to fit your advertising needs.</p>

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
                        <a href="<?php echo site_url('c_senlegio/show_adv_project/'.$u->id_adv); ?>"><img src="<?php echo base_url('assets/images/'.$u->poster_adv); ?>" alt="Image" style="height: 19rem; width: 15rem; object-fit: cover;"></a>
                        <p class="mbr-text mbr-fonts-style mt-2 align-center display-7">
                            <strong><?php echo $u->title_adv ?></strong></p>
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
</section>

<!-- <section data-bs-version="5.1" class="image4 cid-ui1kM96aJl" id="image4-10">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-3 d-flex flex-column justify-content-center align-items-center">
                <div class="image-wrapper">
                    <img src="<?php echo base_url(); ?>assets/images/comingSoon.png" style="height: 19rem; width: 15rem; object-fit: cover;">
                    <p class="mbr-text mbr-fonts-style mt-2 align-center display-7">
                        <strong>COMING SOON</strong></p>
                    </div>
                </div>
                <div class="col-12 col-lg-3 d-flex flex-column justify-content-center align-items-center">
                    <div class="image-wrapper">
                        <a href="<?php echo base_url("c_senlegio/show_adv_project");?>"><img src="<?php echo base_url(); ?>assets/images/stills_1.1.1.png" style="height: 19rem; width: 15rem; object-fit: cover;"></a>
                        <p class="mbr-text mbr-fonts-style mt-2 align-center display-7">
                            <strong>TRUFF SAUCE</strong></p>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

        <?php  $this->load->view('templates/Footer');?>
