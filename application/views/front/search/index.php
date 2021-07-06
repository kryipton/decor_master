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
                    <h2 class="section-title"><?=$this->lang->line("news")?></span></h2> </div>
            </div>
            <div class="row c_row">
                <?php if (!empty($news)) { ?>

                <?php  foreach ($news as $item) { ?>
                <div class="col-md-6 animate-box c_col" data-animate-effect="fadeInUp" style="max-height: 300px!important;">
                    <div class="item">
                        <div class="position-re o-hidden"> <img src="<?=base_url("uploads/news/").$item['img']?>" alt=""> </div>
                        <div class="con">

                            <h5><a href="<?=base_url("$lang/news/").$item["id"]?>"><?=$item["title_$lang"]?></a></h5>
                            <div class="line"></div> <a href="<?=base_url("$lang/news/").$item["id"]?>"><i class="ti-arrow-right"></i></a> </div>
                    </div>
                </div>
               <?php  }?>


               <?php  }else {  ?>

                    <section class="projects-prev-next">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="d-sm-flex align-items-center justify-content-between">
                                        <div class="projects-prev-next-left">

                                        </div><p><?=$this->lang->line("no_data")?></p>
                                        <div class="projects-prev-next-right"> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                <?php  }?>
            </div>
        </div>
    </section>


    <style>
        .c_col * {
            height: 100%;
        }
    </style>