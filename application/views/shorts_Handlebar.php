<?php $this->load->view('templates/Header'); ?>

<?php foreach($animated_shorts as $u) { ?>
    <section data-bs-version="5.1" class="info1 cid-ui5PTRMjSO" id="info1-2c" style="background-image: url('<?php echo base_url('assets/images/' . $u->bg_as); ?>');">
        <div class="align-center container-fluid">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <h3 class="mbr-section-title mb-4 mbr-fonts-style display-1"><strong><?php echo $u->title_as; ?></strong></h3>
                </div>
            </div>
        </div>
    </section>

    <section data-bs-version="5.1" class="article13 cid-ui5PTS9D3U" id="article13-2d">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="card col-md-12 col-lg-10">
                    <div class="card-wrapper">
                        <div class="card-box align-left">
                            <p class="mbr-text mbr-fonts-style mt-4 display-7"><?php echo $u->description_as; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section data-bs-version="5.1" class="image4 cid-ui5PTSsqjM" id="image4-2e">
        <div class="container-fluid">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <?php
                    $images = [
                        $u->image_as1,
                        $u->image_as2,
                        $u->image_as3,
                        $u->image_as4,
                        $u->image_as5,
                        $u->image_as6,
                        $u->image_as7,
                        $u->image_as8,
                    
                    ];
                    $active_set = false;

                    for ($i = 0; $i < count($images); $i += 2) {
                        if (!empty($images[$i]) || !empty($images[$i + 1])) {
                            $active_class = !$active_set ? ' active' : '';
                            $active_set = true;
                            echo "<div class='carousel-item{$active_class}'>
                                    <div class='row d-flex justify-content-center align-items-center text-center'>";

                            if (!empty($images[$i])) {
                                echo "<div class='col-lg-6 d-flex justify-content-center'>
                                        <div class='image-wrapper'>
                                            <img src='" . base_url('assets/images/' . $images[$i]) . "' alt='Loading Image' style='max-width: 80%; height: auto; margin-right:20%;'>
                                        </div>
                                    </div>";
                            }

                            if (!empty($images[$i + 1])) {
                                echo "<div class='col-lg-6 d-flex justify-content-center'>
                                        <div class='image-wrapper'>
                                            <img src='" . base_url('assets/images/' . $images[$i + 1]) . "' alt='Loading Image' style='max-width: 80%; height: auto; margin-left:20%;'>
                                        </div>
                                    </div>";
                            }

                            echo "</div></div>";
                        }
                    }
                    ?>
                </div>
                <div>
                    <button class="carousel-control-prev" role="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true" style="filter: invert(0) grayscale(100%) brightness(0); width: 20px; height: 20px;"></span>
                    </button>
                    <button class="carousel-control-next" role="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true" style="filter: invert(0) grayscale(100%) brightness(0); width: 20px; height: 20px;"></span>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section data-bs-version="5.1" class="video2 cid-ui5PTSOUsV" id="video2-2f">
        <div class="container">
            <div class="row justify-content-center mt-4">
                <div class="col-12 col-md-9 video-block d-flex flex-column justify-content-center align-items-center">
                    <div class="video-wrapper">
                    <video class="custom-video-size" controls autoplay muted>
              <source src="<?php echo base_url('assets/images/'.$u->video_as); ?>" type="video/mp4">
                Your browser does not support the video tag.
              </video>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php } ?>

<?php $this->load->view('templates/Footer'); ?>
