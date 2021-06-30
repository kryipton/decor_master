<?php $lang = $this->session->userdata("lang")?>


<div class="content-wrapper">
    <!-- Lines -->
    <section class="content-lines-wrapper">
        <div class="content-lines-inner">
            <div class="content-lines"></div>
        </div>
    </section>
    <!-- Header Banner -->
    <section class="banner-header banner-img bg-img bg-fixed pb-0" data-background="<?=base_url("public/front/")?>img/banner.jpg" data-overlay-light="3"></section>
    <!-- Projects -->
    <section class="projects section-padding2">
        <div class="container">
            <div class="row">
                <div class="col-md-12 animate-box" data-animate-effect="fadeInUp">
                    <h2 class="section-title">Our <span>Projects</span></h2> </div>
            </div>
            <div class="row">

                <?php  foreach ($projects as $item) { ?>
                <div class="col-md-6 animate-box" data-animate-effect="fadeInUp">
                    <div class="item">
                        <div class="position-re o-hidden"> <img src="<?=base_url("uploads/services/").$item['img']?>" alt=""> </div>
                        <div class="con">
                            <h6><a href="cotton-house.html">Interior</a></h6>
                            <h5><a href="cotton-house.html"><?=$item["title_$lang"]?></a></h5>
                            <div class="line"></div> <a href="cotton-house.html"><i class="ti-arrow-right"></i></a> </div>
                    </div>
                </div>
               <?php  }?>

            </div>
        </div>
    </section>


