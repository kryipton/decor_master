<?php $lang = $this->session->userdata("lang")?>


<!-- Content -->
<div class="content-wrapper">
    <!-- Lines -->
    <section class="content-lines-wrapper">
        <div class="content-lines-inner">
            <div class="content-lines"></div>
        </div>
    </section>
    <!-- Header Banner -->
    <section class="banner-header banner-img valign bg-img bg-fixed" data-overlay-light="3" data-background="<?=base_url("public/front/")?>img/banner.jpg"></section>
    <!-- About -->
    <section class="about section-padding2">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-30 animate-box" data-animate-effect="fadeInUp">
                    <h2 class="section-title">About <span><?=$about["title_$lang"]?></span></h2>
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
    <!-- Team -->
<!--    <section class="team section-padding">-->
<!--        <div class="container">-->
<!--            <div class="row">-->
<!--                <div class="col-md-12">-->
<!--                    <h2 class="section-title">Our <span>Team</span></h2> </div>-->
<!--            </div>-->
<!--            <div class="row">-->
<!--                <div class="col-md-12 owl-carousel owl-theme">-->
<!--                    <div class="item">-->
<!--                        <div class="img"> <img src="--><?//=base_url("public/front/")?><!--img/team/1.jpg" alt=""> </div>-->
<!--                        <div class="info">-->
<!--                            <h6>Jason Brown</h6>-->
<!--                            <p>Architect</p>-->
<!--                            <div class="social valign">-->
<!--                                <div class="full-width">-->
<!--                                    <p>dipl. Arch ETH/SIA</p> <a href="#"><i class="ti-facebook"></i></a> <a href="#"><i class="ti-twitter-alt"></i></a> <a href="#"><i class="ti-instagram"></i></a> </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="item">-->
<!--                        <div class="img"> <img src="--><?//=base_url("public/front/")?><!--img/team/2.jpg" alt=""> </div>-->
<!--                        <div class="info">-->
<!--                            <h6>Emily White</h6>-->
<!--                            <p>Architect</p>-->
<!--                            <div class="social valign">-->
<!--                                <div class="full-width">-->
<!--                                    <p>dipl. Arch FH</p> <a href="#"><i class="ti-facebook"></i></a> <a href="#"><i class="ti-twitter-alt"></i></a> <a href="#"><i class="ti-instagram"></i></a> </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="item">-->
<!--                        <div class="img"> <img src="--><?//=base_url("public/front/")?><!--img/team/3.jpg" alt=""> </div>-->
<!--                        <div class="info">-->
<!--                            <h6>Enrico Samara</h6>-->
<!--                            <p>Architect</p>-->
<!--                            <div class="social valign">-->
<!--                                <div class="full-width">-->
<!--                                    <p>M.A. FH in Architecture</p> <a href="#"><i class="ti-facebook"></i></a> <a href="#"><i class="ti-twitter-alt"></i></a> <a href="#"><i class="ti-instagram"></i></a> </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="item">-->
<!--                        <div class="img"> <img src="--><?//=base_url("public/front/")?><!--img/team/4.jpg" alt=""> </div>-->
<!--                        <div class="info">-->
<!--                            <h6>Jesica Smith</h6>-->
<!--                            <p>Architect</p>-->
<!--                            <div class="social valign">-->
<!--                                <div class="full-width">-->
<!--                                    <p>M.A. FH in Architecture</p> <a href="#"><i class="ti-facebook"></i></a> <a href="#"><i class="ti-twitter-alt"></i></a> <a href="#"><i class="ti-instagram"></i></a> </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->


