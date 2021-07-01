<?php $lang = $this->session->userdata("lang")?>


<!-- Slider -->
<header class="header slider-fade">
    <div class="owl-carousel owl-theme">
        <!-- The opacity on the image is made with "data-overlay-dark="number". You can change it using the numbers 0-9. -->

        <?php foreach ($slides as $item) { ?>
            <div class="text-left item bg-img" data-overlay-dark="3" data-background="<?=base_url("uploads/slider/$item[img]")?>">
                <div class="v-middle caption mt-30">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="o-hidden">
                                    <h1><?=$item["title_$lang"]?></h1>
                                    <p>
                                        <?=$item["title2_$lang"]?>
                                    </p>
                                    <div class="butn-light mt-30 mb-30"> <a href="<?=$item["button_link"]?>" target="_blank"><span>
                                                <?=$item["button_text_$lang"]?>
                                    </span></a> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php }?>

    </div>
</header>


<!-- Content -->
<div class="content-wrapper">


    <!-- Lines -->
    <section class="content-lines-wrapper">
        <div class="content-lines-inner">
            <div class="content-lines"></div>
        </div>
    </section>


    <!-- About -->
    <section class="about section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-30 animate-box" data-animate-effect="fadeInUp">
                    <h2 class="section-title">
                        <?=$about["title_$lang"]?>
                    </h2>

                    <?=$about["desc_$lang"]?>

                </div>
                <div class="col-md-6 animate-box" data-animate-effect="fadeInUp">
                    <div class="about-img">
                        <div class="img"> <img src="<?=base_url("uploads/about/$about[img]")?>" class="img-fluid" alt=""> </div>
                        <div class="about-img-2 about-buro"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Projects -->
    <section class="projects section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="section-title">Our <span>Projects</span></h2> </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme">
                        <?php  foreach ($projects as $item) { ?>
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="<?=base_url("uploads/projects/").$item['img']?>" alt=""> </div>
                            <div class="con">
                                <h6><a href="<?=base_url("$lang/project/").$item["id"]?>"><?=$item["company"]?></a></h6>
                                <h5><a href="<?=base_url("$lang/project/").$item["id"]?>"><?=$item["title_$lang"]?></a></h5>
                                <div class="line"></div> <a href="<?=base_url("$lang/project/").$item["id"]?>"><i class="ti-arrow-right"></i></a> </div>
                        </div>
                        <?php  }?>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Services -->
    <section class="services section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="section-title">Our <span>Services</span></h2> </div>
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
                <?php $i++; if ($i==4) {break;} }?>
            </div>
        </div>
    </section>


    <!-- Blog -->
    <section class="bauen-blog section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="section-title">Current <span>News</span></h2> </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme">
                        <?php  foreach ($news as $item) { ?>
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="<?=base_url("uploads/news/").$item['img']?>" alt=""> </div>
                            <div class="con"> <span class="category">
                                        <a href="<?=base_url("$lang/news/").$item["id"]?>"><?=$item["title_$lang"]?> </a> -  <?=$item["date"]?>
                                    </span>
                                <h5><a href="<?=base_url("$lang/news/").$item["id"]?>"><?=$item["title_$lang"]?></a></h5> </div>
                        </div>
                        <?php  }?>
                    </div>
                </div>
            </div>
        </div>
    </section>


