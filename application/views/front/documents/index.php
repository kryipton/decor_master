<?php $lang = $this->session->userdata("lang")?>

<style>

    .row{
        overflow: hidden;
    }

    [class*="col-"]{
        margin-bottom: -99999px;
        padding-bottom: 99999px;
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
                    <h2 class="section-title"><span>Documents</span></h2> </div>
            </div>
            <div class="row">

                <!-- 3 columns -->
                <?php  foreach ($gallery as $item) { ?>

                <div class="col-md-4 gallery-item" >
                    <a href="<?=base_url("uploads/documents/").$item["file"]?>" title="" class="img-zoom" style="height: 100%">
                        <div class="gallery-box" style="height: 100%;">
                            <div class="gallery-img" style="height: 100%"> <img style="height: 100%; object-fit: cover" src="<?=base_url("uploads/documents/").$item["file"]?>" alt="work-img"> </div>
                        </div>
                    </a>
                </div>

                <?php  }?>

            </div>
        </div>
    </section>


