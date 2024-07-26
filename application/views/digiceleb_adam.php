<?php  $this->load->view('templates/Header');?>
<?php 
foreach ($digiceleb as $u){
  ?>
<section data-bs-version="5.1" class="info1 cid-ui5JPqBsqg" id="info1-1t" style="background-image: url('<?php echo base_url('assets/images/'.$u->bg_dc); ?>');">
    <div class="align-center container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <h3 class="mbr-section-title mb-4 mbr-fonts-style display-1">
                <strong><?php echo $u->title_dc ?></strong></h3>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="image1 cid-ui5KqPrWQq" id="image1-1x">
    <div class="container">
        <div class="row justify-items-center">
            <div class="col-12 col-lg-5" style="padding-top: 2rem; padding-left: 5rem">
                <div class="image-wrapper">
                    <img src="<?php echo base_url('assets/images/'.$u->image_dc1); ?>" style="height: 38rem; width: 27rem; object-fit: cover;">
                </div>
            </div>
            <div class="col-12 col-lg-7">
                <div class="text-wrapper">
                    <h3 class="mbr-section-title mbr-fonts-style mb-1 display-4"><strong><?php echo $u->description_line1 ?></strong></h3>
                    <p class="mbr-text mbr-fonts-style display-7"><br><?php echo $u->description_line2 ?><br><br><?php echo $u->description_line3 ?></p>
                    <img src="<?php echo base_url('assets/images/'.$u->image_dc2); ?>" style="height: 17rem; width: 37rem; object-fit: cover;">
                    <span class="btn btn-social mailru m-2" style="padding: 0; gap:0;">
                        <a href="<?php echo $u->instagram ?>" style="display: flex; align-items: center; justify-content: center; width: 100%; height: 100%;">
                            <i class="socicon socicon-instagram"></i>
                        </a>
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>
<?php } ?>
<?php  $this->load->view('templates/Footer');?>
