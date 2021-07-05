<?php $lang = $this->session->userdata("lang")?>

<style>
    .c_services .item{
        position: relative;
        background-color: white;
        transition-duration: 0.3s!important;
    }

    .c_item_img{
        object-fit: cover;
        z-index: -1;
        top: 0px;
        left: 0px;
        position: absolute;
        width: 100% !important;
        height: 100% !important;
        visibility: visible;
    }

    .c_services .item:hover .c_item_img{
        /*visibility: visible;*/
    }

    .c_item:hover{
        background-color: rgba(255, 255, 255, 0.60);
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
    <section class="banner-header banner-img valign bg-img bg-fixed" data-overlay-light="3" data-background="<?=base_url("public/front/")?>img/banner.jpg"></section>
    <!-- Services -->
    <section class="services section-padding2">
        <div class="container">
            <div class="row">
                <div class="col-md-12 animate-box" data-animate-effect="fadeInUp">
                    <h2 class="section-title"><?=$this->lang->line("our_services")?></span></h2> </div>
            </div>
            <div class="row">
                <?php
                $test = 0;
                $i=1; foreach ($services as $item) { ?>
                <div class="col-md-4 c_services">
                    <div class="item c_item">
                        <img class="c_item_img" src="<?=base_url("uploads/services/").$item['overlay_img']?>" alt="">
                        <a href="<?=base_url("$lang/service/").$item["id"]?>"> <img src="<?=base_url("uploads/services/").$item['img']?>" alt="">
                            <h5><?=$item["title_$lang"]?></h5>
                            <div class="line"></div>
<!--                            <p>--><?//=$item["desc_$lang"]?><!--</p>-->
                            <div class="numb">0<?=$i?></div>
                        </a>
                    </div>
                </div>
                <?php $test++; $i++; }?>

            </div>
        </div>
    </section>


