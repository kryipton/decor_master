<?php $lang = $this->session->userdata("lang")?>


<div class="content-wrapper">
    <!-- Lines -->
    <section class="content-lines-wrapper">
        <div class="content-lines-inner">
            <div class="content-lines"></div>
        </div>
    </section>
    <!-- Header Banner -->
    <section class="banner-header banner-img valign bg-img bg-fixed" data-overlay-light="3" data-background="<?=base_url("public/front/")?>img/banner.jpg"></section>
    <!-- Services Page -->
    <section class="section-padding2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="section-title2"><?=$service["title_$lang"] ?></h2> </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                     <?=$service["desc_$lang"] ?>
                    <div class="row mb-30">

                        <?php foreach ($gallery as $item) { ?>
                            <div class="col-md-6 gallery-item">
                                <a href="<?=base_url("uploads/services_gallery/").$item["file"]?>" title="Architecture" class="img-zoom">
                                    <div class="gallery-box">
                                        <div class="gallery-img"> <img src="<?=base_url("uploads/services_gallery/").$item["file"]?>" class="img-fluid mx-auto d-block" alt="Architecture"> </div>
                                    </div>
                                </a>
                            </div>
                        <?php }?>

                    </div>
                </div>
                <div class="col-md-4 sidebar-side">
                    <aside class="sidebar blog-sidebar">
                        <div class="sidebar-widget services">
                            <div class="widget-inner">
                                <div class="sidebar-title">
                                    <h4><?=$this->lang->line("sub_services")?></h4> </div>
                                <ul>
                                    <?php  foreach ($sub_services as $item) { ?>
                                    <li <?php if ($service["id"]==$item["id"]) { ?>class="active" <?php  }?>><a href="<?=base_url("$lang/sub_service/$service[id]/").$item["id"]?>"><?=$item["title_$lang"] ?></a></li>
                                    <?php  }?>
                                </ul>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>

