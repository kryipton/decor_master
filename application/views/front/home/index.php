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
                        <div class="about-img-2 about-buro">Canada Office</div>
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
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="<?=base_url("public/front/")?>img/projects/1.jpg" alt=""> </div>
                            <div class="con">
                                <h6><a href="<?=base_url("public/front/")?>cotton-house.html">Interior</a></h6>
                                <h5><a href="<?=base_url("public/front/")?>cotton-house.html">Cotton House</a></h5>
                                <div class="line"></div> <a href="<?=base_url("public/front/")?>cotton-house.html"><i class="ti-arrow-right"></i></a> </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="<?=base_url("public/front/")?>img/projects/2.jpg" alt=""> </div>
                            <div class="con">
                                <h6><a href="<?=base_url("public/front/")?>armada-center.html">Exterior</a></h6>
                                <h5><a href="<?=base_url("public/front/")?>armada-center.html">Armada Center</a></h5>
                                <div class="line"></div> <a href="<?=base_url("public/front/")?>armada-center.html"><i class="ti-arrow-right"></i></a> </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="<?=base_url("public/front/")?>img/projects/3.jpg" alt=""> </div>
                            <div class="con">
                                <h6><a href="<?=base_url("public/front/")?>stonya-villa.html">Urban</a></h6>
                                <h5><a href="<?=base_url("public/front/")?>stonya-villa.html">Stonya Villa</a></h5>
                                <div class="line"></div> <a href="<?=base_url("public/front/")?>stonya-villa.html"><i class="ti-arrow-right"></i></a> </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="<?=base_url("public/front/")?>img/projects/4.jpg" alt=""> </div>
                            <div class="con">
                                <h6><a href="<?=base_url("public/front/")?>prime-hotel.html">Interior</a></h6>
                                <h5><a href="<?=base_url("public/front/")?>prime-hotel.html">Prime Hotel</a></h5>
                                <div class="line"></div> <a href="<?=base_url("public/front/")?>prime-hotel.html"><i class="ti-arrow-right"></i></a> </div>
                        </div>
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
                <div class="col-md-4">
                    <div class="item">
                        <a href="<?=base_url("public/front/")?>architecture.html"> <img src="<?=base_url("public/front/")?>img/icons/icon-1.png" alt="">
                            <h5>Architecture</h5>
                            <div class="line"></div>
                            <p>Architecture bibendum eros eget lacus the vulputate sit amet vehicuta nibhen ulicera in the vitae miss.</p>
                            <div class="numb">01</div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item">
                        <a href="<?=base_url("public/front/")?>interior-design.html"> <img src="<?=base_url("public/front/")?>img/icons/icon-2.png" alt="">
                            <h5>Interior Design</h5>
                            <div class="line"></div>
                            <p>Architecture bibendum eros eget lacus the vulputate sit amet vehicuta nibhen ulicera in the vitae miss.</p>
                            <div class="numb">02</div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item">
                        <a href="<?=base_url("public/front/")?>urban-design.html"> <img src="<?=base_url("public/front/")?>img/icons/icon-3.png" alt="">
                            <h5>Urban Design</h5>
                            <div class="line"></div>
                            <p>Architecture bibendum eros eget lacus the vulputate sit amet vehicuta nibhen ulicera in the vitae miss.</p>
                            <div class="numb">03</div>
                        </a>
                    </div>
                </div>
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
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="<?=base_url("public/front/")?>img/slider/1.jpg" alt=""> </div>
                            <div class="con"> <span class="category">
                                        <a href="<?=base_url("public/front/")?>blog.html">Architecture </a> -  20.12.2021
                                    </span>
                                <h5><a href="<?=base_url("public/front/")?>post.html">Modern Architectural Structures</a></h5> </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="<?=base_url("public/front/")?>img/slider/2.jpg" alt=""> </div>
                            <div class="con"> <span class="category">
                                        <a href="<?=base_url("public/front/")?>blog.html">Interior</a> - 18.12.2021
                                    </span>
                                <h5><a href="<?=base_url("public/front/")?>post.html">Modernism in Architecture</a></h5> </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="<?=base_url("public/front/")?>img/slider/3.jpg" alt=""> </div>
                            <div class="con"> <span class="category">
                                        <a href="<?=base_url("public/front/")?>blog.html">Urban</a> - 16.12.2021
                                    </span>
                                <h5><a href="<?=base_url("public/front/")?>post.html">Postmodern Architecture</a></h5> </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="<?=base_url("public/front/")?>img/slider/4.jpg" alt=""> </div>
                            <div class="con"> <span class="category">
                                    <a href="<?=base_url("public/front/")?>blog.html">Planing</a> - 14.12.2021
                                </span>
                                <h5><a href="<?=base_url("public/front/")?>post.html">Modern Architecture Buildings</a></h5> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


