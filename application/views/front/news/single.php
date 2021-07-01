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
                    <h2 class="section-title2"><?=$newsSingle["title_$lang"]?></h2> </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <?=$newsSingle["desc_$lang"]?>
                </div>
                <div class="col-md-4 sidebar-side">
                    <aside class="sidebar blog-sidebar">
                        <div class="sidebar-widget services">
                            <div class="widget-inner">
                                <div class="sidebar-title">
                                    <h4><?=$this->lang->line("current_news")?></h4> </div>
                                <ul>
                                    <?php $i=1; foreach ($news as $item) { ?>
                                        <li <?php if ($newsSingle["id"]==$item["id"]) { ?>class="active" <?php  }?>><a href="<?=base_url("$lang/news/").$item["id"]?>"><?=$item["title_$lang"] ?></a></li>
                                    <?php if ($i==5){break;} }?>
                                </ul>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>

            <div class="row mt-30 c_row">
                <?php   foreach ($gallery as $item) { ?>
                <div class="col-md-6 gallery-item c_col">
                    <a href="<?=base_url("uploads/news_gallery/").$item["file"]?>" title="Architecture" class="img-zoom" style="height: 100%">
                        <div class="gallery-box" style="height: 100%">
                            <div class="gallery-img" style="height: 100%"> <img src="<?=base_url("uploads/news_gallery/").$item["file"]?>" class="" style="height: 100%" alt="work-img"> </div>
                        </div>
                    </a>
                </div>
                 <?php $i++;  }?>
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

                        </div> <a href="<?=base_url("/".$lang)?>/news"><?=$this->lang->line("all_news")?></a>
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

        [class*="c_col"]{
            margin-bottom: -99999px;
            padding-bottom: 99999px;
        }

    </style>
