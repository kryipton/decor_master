<?php $lang = $this->session->userdata("lang")?>

<style>

    .c_col * {
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
    <section class="banner-header banner-img bg-img bg-fixed pb-0" data-background="<?=base_url("public/front/")?>img/banner.jpg" data-overlay-light="3"></section>
    <!-- Projects -->
    <section class="projects section-padding2">
        <div class="container">
            <div class="row">
                <div class="col-md-12 animate-box" data-animate-effect="fadeInUp">
                    <h2 class="section-title"><?=$this->lang->line("our_projects")?></span></h2> </div>
            </div>
            <div class="row">

                <?php  foreach ($projects as $item) { ?>
                <div class="col-md-6 animate-box c_col" data-animate-effect="fadeInUp" style="margin-top: 15px;max-height: 300px!important;">
                    <div class="item" >
                        <div class="position-re o-hidden"> <img src="<?=base_url("uploads/projects/").$item['img']?>" alt=""> </div>
                        <div class="con">
                            <h6><a href="<?=base_url("$lang/project/").$item["id"]?>"><?=$item["company"]?></a></h6>
                            <h5><a href="<?=base_url("$lang/project/").$item["id"]?>"><?=$item["title_$lang"]?></a></h5>
                            <div class="line"></div> <a href="<?=base_url("$lang/project/").$item["id"]?>"><i class="ti-arrow-right"></i></a> </div>
                    </div>
                </div>
               <?php  }?>

            </div>
        </div>
    </section>


