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
    <!-- Services -->
    <section class="services section-padding2">
        <div class="container">
            <div class="row">
                <div class="col-md-12 animate-box" data-animate-effect="fadeInUp">
                    <h2 class="section-title"><?=$this->lang->line("our_services")?></span></h2> </div>
            </div>
            <div class="row">
                <?php $i=1; foreach ($services as $item) { ?>
                <div class="col-md-4">
                    <div class="item">
                        <a href="<?=base_url("$lang/service/").$item["id"]?>"> <img src="<?=base_url("uploads/services/").$item['img']?>" alt="">
                            <h5><?=$item["title_$lang"]?></h5>
                            <div class="line"></div>
                            <p><?=$item["desc_$lang"]?></p>
                            <div class="numb">0<?=$i?></div>
                        </a>
                    </div>
                </div>
                <?php $i++; }?>

            </div>
        </div>
    </section>


