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
    <!-- Contact -->
    <section class="section-padding2">
        <div class="container">
            <div class="row">
                <div class="col-md-12 animate-box" data-animate-effect="fadeInUp">
                    <h2 class="section-title"><?=$this->lang->line("contact")?></span></h2> </div>
            </div>
            <div class="row mb-90">
                <div class="col-md-4 mb-30 animate-box" data-animate-effect="fadeInUp">

                    <p><?=$contact["desc_$lang"]?></p>

                </div>
                <div class="col-md-4 mb-30 animate-box" data-animate-effect="fadeInUp">
                    <p><b><?=$this->lang->line("contact_details")?></b></p>
                    <p><b><?=$this->lang->line("phone")?> :</b> <?=$contact["phone"]?></p>
                    <p><b><?=$this->lang->line("email")?> :</b> <?=$contact["email"]?></p>
                    <p><b><?=$this->lang->line("address")?> :</b> <?=$contact["address_$lang"]?></p>
                </div>
                <div class="col-md-4 animate-box" data-animate-effect="fadeInUp">
                    <p><b><?=$this->lang->line("contact_form")?></b></p>
                    <form method="post" class="row" id="ajax_form">
                        <div class="col-md-12">
                            <input type="text" name="name" id="name" placeholder="<?=$this->lang->line("full_name")?>"> </div>
                        <div class="col-md-12">
                            <input type="email" name="email" id="email" placeholder="<?=$this->lang->line("your_email")?>" required=""> </div>
                        <div class="col-md-12">
                            <textarea name="message" id="message" cols="40" rows="4" placeholder="<?=$this->lang->line("your_message")?>"></textarea>
                        </div>
                        <div class="col-md-12">
                            <button  id="submit" class="butn-dark mt-15"><a ><span><?=$this->lang->line("send")?></span></a></button>
                        </div>
                        <div id="form-messages" class="alert" role="alert"></div>
                    </form>
                </div>
            </div>
            <!-- Map Section-->
            <div class="row">
                <div class="col-md-12 mb-30 animate-box" data-animate-effect="fadeInUp">
                    <div id="bauen-contactMap">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3038.88907600683!2d49.837403315170164!3d40.38915097936836!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDDCsDIzJzIwLjkiTiA0OcKwNTAnMjIuNSJF!5e0!3m2!1str!2s!4v1625227373962!5m2!1str!2s" style="border:0; width: 100%; min-height: 400px" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
