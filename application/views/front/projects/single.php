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
    <!-- Project Page -->
    <section class="section-padding2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="section-title2"><?=$project["title_$lang"]?></h2> </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                   <?=$project["desc_$lang"]?>
                </div>
                <div class="col-md-4">
                    <p><b>Year : </b> <?=$project["year"]?></p>
                    <p><b>Company : </b> <?=$project["company"]?></p>
                    <p><b>Project Name : </b> <?=$project["project_name"]?></p>
                    <p><b>Location : </b> <?=$project["location"]?></p>
                </div>
            </div>
            <div class="row mt-30 c_row">
                <?php  foreach ($gallery as $item) { ?>
                <div class="col-md-6 gallery-item c_col">
                    <a href="<?=base_url("uploads/projects_gallery/").$item["file"]?>" title="Architecture" class="img-zoom">
                        <div class="gallery-box">
                            <div class="gallery-img"> <img src="<?=base_url("uploads/projects_gallery/").$item["file"]?>" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                        </div>
                    </a>
                </div>
                 <?php  }?>
            </div>
        </div>
    </section>
    <!-- Prev-Next Projects -->
    <section class="projects-prev-next">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="d-sm-flex align-items-center justify-content-between">
                        <div class="projects-prev-next-left">

                        </div> <a href="<?=base_url("/".$lang)?>/projects">All Projects</a>
                        <div class="projects-prev-next-right"> </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <style>

        .c_row{
            overflow: hidden;
        }

        div.c_col * {
            height: 100%!important;
        }

        [class*="c_col"]{
            margin-bottom: -99999px;
            padding-bottom: 99999px;
        }

    </style>