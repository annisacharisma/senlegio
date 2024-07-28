<?php  $this->load->view('templates/Header');?>
<?php 
foreach($visualeffect as $u){ 
  ?>
<section data-bs-version="5.1" class="info1 cid-ui5QtcUUBP" id="info1-2i" style="background-image: url('<?php echo base_url('assets/images/'.$u->bg_ve); ?>');">
    

    
    <div class="align-center container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <h3 class="mbr-section-title mb-4 mbr-fonts-style display-1">
                    <strong><?php echo $u->title_ve ?></strong></h3>
                
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="article13 cid-ui5QtdcoCR" id="article13-2j">
    
    
    
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="card col-md-12 col-lg-10">
                <div class="card-wrapper">
                    <div class="card-box align-left">
                        
                        <p class="mbr-text mbr-fonts-style mt-4 display-7"><?php echo $u->description_ve ?></p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="image4 cid-ui5QtdwexV" id="image4-2k">

    <div class="container-fluid">
        <div id="imageCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
            <?php
                    $images = [
                        $u->image_ve1,
                        $u->image_ve2,
                        $u->image_ve3,
                        $u->image_ve4,
                    ];
                    $active_set = false;

                    for ($i = 0; $i < count($images); $i += 2) {
                        if (!empty($images[$i]) || !empty($images[$i + 1])) {
                            $active_class = !$active_set ? ' active' : '';
                            $active_set = true;
                            echo "<div class='carousel-item{$active_class}'>
                                    <div class='row d-flex justify-content-center align-items-center text-center'>";

                            if (!empty($images[$i])) {
                                echo "<div class='col-lg-6'>
                                        <div class='image-wrapper'>
                                            <img src='" . base_url('assets/images/' .$images[$i]) . "' alt='Loading Image' style='max-width: 80%; height: auto; margin-right:20%;'>
                                        </div>
                                    </div>";
                            }

                            if (!empty($images[$i + 1])) {
                                echo "<div class='col-lg-6'>
                                        <div class='image-wrapper'>
                                            <img src='" . base_url('assets/images/' .$images[$i + 1]) . "' alt='Loading Image' style='max-width: 80%; height: auto; margin-left:20%;'>
                                        </div>
                                    </div>";
                            }

                            echo "</div></div>";
                        }
                    }
                    ?>
                     </div>
                <div>
                <button class="carousel-control-prev" role="button" data-bs-target="#imageCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true" style="filter: invert(0) grayscale(100%) brightness(0); width: 20px; height: 20px;"></span>
                </button>
                <button class="carousel-control-next" role="button" data-bs-target="#imageCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true" style="filter: invert(0) grayscale(100%) brightness(0); width: 20px; height: 20px;"></span>
                </button>
            </div>                    
        </div>        
    </div>
    </section>

<section data-bs-version="5.1" class="video2 cid-ui64Cl95Pz" id="video2-2s">
    
    <div class="container-fluid">
        <div id="videoCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
            <?php
                $videos = [
                    $u->video_ve1,
                    $u->video_ve2,
                    $u->video_ve3,
                    $u->video_ve4,
                    $u->video_ve5,
                ];
                $active_set = false;

                
                foreach ($videos as $video) {
                    if (!empty($video)) {
                        $active_class = !$active_set ? ' active' : '';
                        $active_set = true;
                        echo "<div class='carousel-item{$active_class}'>
                                <div class='col-12 col-md-9 mx-auto video-block d-flex flex-column justify-content-center align-items-center'>
                                    <div class='video-wrapper'>
                                        <video class='video-play w-100' controls autoplay muted>
                                            <source src='" . base_url('assets/images/' . $video) . "' type='video/mp4'>
                                            Your browser does not support the video tag.
                                        </video>
                                    </div>
                                </div>
                              </div>";
                    }
                }
                ?>

            <button class="carousel-control-prev" type="button" data-bs-target="#videoCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true" style="filter: invert(0) grayscale(100%) brightness(0); top: 50%; transform: translateY(-50%); right: 30px; width: 20px; height: 20px; position: absolute;"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#videoCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true" style="filter: invert(0) grayscale(100%) brightness(0); top: 50%; transform: translateY(-50%); left: 30px; width: 20px; height: 20px; position: absolute;"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.0/js/bootstrap.bundle.min.js"></script>
</section>
<?php } ?>
<?php  $this->load->view('templates/Footer');?>
