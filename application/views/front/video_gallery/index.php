<?php $lang = $this->session->userdata("lang")?>


<div class="content-wrapper">
    <!-- Lines -->
    <section class="content-lines-wrapper">
        <div class="content-lines-inner">
            <div class="content-lines"></div>
        </div>
    </section>
    <!-- Header Banner -->
    <section class="banner-header banner-img valign bg-img bg-fixed" data-overlay-light="3" data-background="<?=base_url("public/front/")?>img/banner.jpg"> </section>
    <!--  Gallery -->
    <section class="section-padding2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="section-title">Video <span>Gallery</span></h2> </div>
            </div>
            <div class="row">

                <!-- 3 columns -->
                <?php  foreach ($gallery as $item) { ?>
                    <div class="col-md-4">
                        <div class="vid-area mb-30">
                            <div class="vid-icon"> <img src="<?=base_url("uploads/videos/").$item["img"]?>" alt="YouTube">
                                <a class="video-gallery-button vid" href="<?=$item["link"] ?>"> <span class="video-gallery-polygon">
										<i class="ti-control-play"></i>
									</span> </a>
                            </div>
                        </div>
                    </div>

                <?php  }?>

            </div>
        </div>
    </section>

