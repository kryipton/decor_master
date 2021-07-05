<?php $lang = $this->session->userdata("lang")?>

<style>

    .c_col *{
        height: 100%;
    }


</style>



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
                    <h2 class="section-title"><span><?=$this->lang->line("gallery")?></span></h2> </div>
            </div>
            <div class="row">

                <!-- 3 columns -->
                <?php  foreach ($gallery as $item) { ?>

                <div class="col-md-4 gallery-item c_col" style="max-height: 300px;">
                    <a href="<?=base_url("uploads/gallery/").$item["file"]?>" title="" class="img-zoom" style="height: 100%;">
                        <div class="gallery-box" style="height: 100%;">
                            <div class="gallery-img" style="height: 100%;"> <img style="height: 100%;" src="<?=base_url("uploads/gallery/").$item["file"]?>" class="" alt="work-img"> </div>
                        </div>
                    </a>
                </div>

                <?php  }?>

            </div>
        </div>
    </section>

