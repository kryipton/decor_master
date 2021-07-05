<?php $lang = $this->session->userdata("lang")?>


<!-- Promo video - Testiominals -->
<section class="testimonials">
    <div class="background bg-img bg-fixed section-padding pb-0" data-background="<?=base_url("public/front/")?>img/banner2.jpg" data-overlay-dark="3">
        <div class="container">
            <div class="row">
                <!-- Promo video -->
                <div class="col-md-6">
                    <div class="vid-area">
                        <div class="vid-icon">
                            <a class="play-button vid" href="https://youtu.be/RziCmLzpFNY">
                                <svg class="circle-fill">
                                    <circle cx="43" cy="43" r="39" stroke="#fff" stroke-width=".5"></circle>
                                </svg>
                                <svg class="circle-track">
                                    <circle cx="43" cy="43" r="39" stroke="none" stroke-width="1" fill="none"></circle>
                                </svg> <span class="polygon">
											<i class="ti-control-play"></i>
										</span> </a>
                        </div>
                        <div class="cont mt-15 mb-30">
                            <h5><?=$this->lang->line("promo_video")?></h5> </div>
                    </div>
                </div>
                <!-- Testiominals -->
            </div>
        </div>
    </div>
</section>
<!-- Clients -->
<section class="clients">
    <div class="container">
        <div class="row">
            <div class="col-md-7 owl-carousel owl-theme">
                <div class="clients-logo">
                    <a href="#0"><img src="<?=base_url("public/front/")?>img/clients/1.png" alt=""></a>
                </div>
                <div class="clients-logo">
                    <a href="#0"><img src="<?=base_url("public/front/")?>img/clients/2.png" alt=""></a>
                </div>
                <div class="clients-logo">
                    <a href="#0"><img src="<?=base_url("public/front/")?>img/clients/3.png" alt=""></a>
                </div>
                <div class="clients-logo">
                    <a href="#0"><img src="<?=base_url("public/front/")?>img/clients/4.png" alt=""></a>
                </div>
                <div class="clients-logo">
                    <a href="#0"><img src="<?=base_url("public/front/")?>img/clients/5.png" alt=""></a>
                </div>
                <div class="clients-logo">
                    <a href="#0"><img src="<?=base_url("public/front/")?>img/clients/6.png" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</section>




<!-- Footer -->
<footer class="main-footer dark">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-30">
                <div class="item fotcont">
                    <div class="fothead">
                        <h6><?=$this->lang->line("phone")?></h6> </div>
                    <p><?=$contact["phone"]?></p>
                </div>
            </div>
            <div class="col-md-4 mb-30">
                <div class="item fotcont">
                    <div class="fothead">
                        <h6><?=$this->lang->line("email")?></h6> </div>
                    <p><?=$contact["email"]?></p>
                </div>
            </div>
            <div class="col-md-4 mb-30">
                <div class="item fotcont">
                    <div class="fothead">
                        <h6><?=$this->lang->line("address")?></h6> </div>
                    <p><?=$contact["address_$lang"]?></p>
                </div>
            </div>
        </div>
    </div>
    <div class="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="text-left">
                        <p><?=$contact["copyright_$lang"]?></p>
                    </div>
                </div>
                <div class="col-md-4 abot">
                    <div class="social-icon"> <a href="<?=$social["facebook"]?>"><i class="ti-facebook"></i></a> <a href="<?=$social["you_tube"]?>"><i class="ti-youtube"></i></a> <a href="<?=$social["instagram"]?>"><i class="ti-instagram"></i></a>  </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>