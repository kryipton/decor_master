<?php $lang = $this->session->userdata("lang")?>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <!-- Logo -->
        <a class="logo" href="<?=base_url("public/front/")?>index.html">
<!--            <img src="--><?php //echo base_url("public/front/img/logo.png")?><!--" alt="asd">-->
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="icon-bar"><i class="ti-line-double"></i></span> </button>
        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">


            <?php if ($this->uri->segment(2) == "home" || $this->uri->segment(2) == "") {?>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link active" href="<?=base_url("/".$lang)?>/home"><?=$this->lang->line("home")?></a></li>
                    <li class="nav-item"><a class="nav-link" href="<?=base_url("/".$lang)?>/about"><?=$this->lang->line("about")?></a></li>
                    <li class="nav-item"><a class="nav-link" href="<?=base_url("/".$lang)?>/services"><?=$this->lang->line("services")?></a></li>
                    <li class="nav-item"><a class="nav-link" href="<?=base_url("/".$lang)?>/projects"><?=$this->lang->line("projects")?></a></li>
                    <li class="nav-item dropdown"> <span class="nav-link nav-color"> <?=$this->lang->line("media")?> <i class="ti-angle-down"></i></span>
                        <ul class="dropdown-menu last">
                            <li class="dropdown-item"><a href="<?=base_url("/".$lang)?>/gallery"><?=$this->lang->line("gallery")?></a></li>
                            <li class="dropdown-item"><a href="<?=base_url("/".$lang)?>/documents"><?=$this->lang->line("documents")?></a></li>
                            <li class="dropdown-item"><a href="<?=base_url("/".$lang)?>/videos"><?=$this->lang->line("videos")?></a></li>
                            <li class="dropdown-item"><a href="<?=base_url("/".$lang)?>/news"><?=$this->lang->line("news")?></a></li>
                        </ul>
                    </li>


                    <li class="nav-item"><a class="nav-link" href="<?=base_url("/".$lang)?>/contact"><?=$this->lang->line("contact")?></a></li>

                    <li class="nav-item dropdown"> <span class="nav-link"> <?=$lang?> <i class="ti-angle-down"></i></span>
                        <ul class="dropdown-menu last">
                            <li class="dropdown-item"><a href="<?php

                                $segment2 = $this->uri->segment(2);
                                $segment3 = $this->uri->segment(3);
                                $segment4 = $this->uri->segment(4);

                                if (!empty($this->uri->segment(2)) && !empty($this->uri->segment(3)) && !empty($this->uri->segment(4))){
                                    echo base_url("az/" . $segment2   . "/" .  $segment3  . "/" . $segment4);
                                }elseif(!empty($this->uri->segment(2)) && !empty($this->uri->segment(3))){
                                    echo base_url("az/" . $segment2   . "/" .  $segment3);
                                }elseif(!empty($this->uri->segment(2))){
                                    echo base_url("az/" . $segment2);
                                }else{
                                    echo base_url("az/home");
                                }

                                ?>">Az</a></li>
                            <li class="dropdown-item"><a href="<?php

                                if (!empty($this->uri->segment(2)) && !empty($this->uri->segment(3)) && !empty($this->uri->segment(4))){
                                    echo base_url("en/" . $segment2   . "/" .  $segment3  . "/" . $segment4);
                                }elseif(!empty($this->uri->segment(2)) && !empty($this->uri->segment(3))){
                                    echo base_url("en/" . $segment2   . "/" .  $segment3);
                                }elseif(!empty($this->uri->segment(2))){
                                    echo base_url("en/" . $segment2);
                                }else{
                                    echo base_url("en/home");
                                }

                                ?>">En</a></li>
                            <li class="dropdown-item"><a href="<?php

                                if (!empty($this->uri->segment(2)) && !empty($this->uri->segment(3)) && !empty($this->uri->segment(4))){
                                    echo base_url("ru/" . $segment2   . "/" .  $segment3  . "/" . $segment4);
                                }elseif(!empty($this->uri->segment(2)) && !empty($this->uri->segment(3))){
                                    echo base_url("ru/" . $segment2   . "/" .  $segment3);
                                }elseif(!empty($this->uri->segment(2))){
                                    echo base_url("ru/" . $segment2);
                                }else{
                                    echo base_url("ru/home");
                                }

                                ?>">Ru</a></li>
                        </ul>
                    </li>
                </ul>
            <?php }else{ ?>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link active" href="<?=base_url("/".$lang)?>/home"><?=$this->lang->line("home")?></a></li>
                    <li class="nav-item"><a class="nav-link nav-color" href="<?=base_url("/".$lang)?>/about"><?=$this->lang->line("about")?></a></li>
                    <li class="nav-item"><a class="nav-link nav-color" href="<?=base_url("/".$lang)?>/services"><?=$this->lang->line("services")?></a></li>
                    <li class="nav-item"><a class="nav-link nav-color" href="<?=base_url("/".$lang)?>/projects"><?=$this->lang->line("projects")?></a></li>
                    <li class="nav-item dropdown"> <span class="nav-link nav-color"> Media <i class="ti-angle-down"></i></span>
                        <ul class="dropdown-menu last">
                            <li class="dropdown-item"><a href="<?=base_url("/".$lang)?>/gallery"><?=$this->lang->line("gallery")?></a></li>
                            <li class="dropdown-item"><a href="<?=base_url("/".$lang)?>/documents"><?=$this->lang->line("documents")?></a></li>
                            <li class="dropdown-item"><a href="<?=base_url("/".$lang)?>/videos"><?=$this->lang->line("videos")?></a></li>
                            <li class="dropdown-item"><a href="<?=base_url("/".$lang)?>/news"><?=$this->lang->line("news")?></a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link nav-color" href="<?=base_url("/".$lang)?>/contact"><?=$this->lang->line("contact")?></a></li>

                    <li class="nav-item dropdown"> <span class="nav-link nav-color"> <?=$lang?> <i class="ti-angle-down"></i></span>
                        <ul class="dropdown-menu last">
                            <li class="dropdown-item"><a href="<?php

                                $segment2 = $this->uri->segment(2);
                                $segment3 = $this->uri->segment(3);
                                $segment4 = $this->uri->segment(4);

                                if (!empty($this->uri->segment(2)) && !empty($this->uri->segment(3)) && !empty($this->uri->segment(4))){
                                    echo base_url("az/" . $segment2   . "/" .  $segment3  . "/" . $segment4);
                                }elseif(!empty($this->uri->segment(2)) && !empty($this->uri->segment(3))){
                                    echo base_url("az/" . $segment2   . "/" .  $segment3);
                                }elseif(!empty($this->uri->segment(2))){
                                    echo base_url("az/" . $segment2);
                                }else{
                                    echo base_url("az/home");
                                }

                                ?>">Az</a></li>
                            <li class="dropdown-item"><a href="<?php

                                if (!empty($this->uri->segment(2)) && !empty($this->uri->segment(3)) && !empty($this->uri->segment(4))){
                                    echo base_url("en/" . $segment2   . "/" .  $segment3  . "/" . $segment4);
                                }elseif(!empty($this->uri->segment(2)) && !empty($this->uri->segment(3))){
                                    echo base_url("en/" . $segment2   . "/" .  $segment3);
                                }elseif(!empty($this->uri->segment(2))){
                                    echo base_url("en/" . $segment2);
                                }else{
                                    echo base_url("en/home");
                                }

                                ?>">En</a></li>
                            <li class="dropdown-item"><a href="<?php

                                if (!empty($this->uri->segment(2)) && !empty($this->uri->segment(3)) && !empty($this->uri->segment(4))){
                                    echo base_url("ru/" . $segment2   . "/" .  $segment3  . "/" . $segment4);
                                }elseif(!empty($this->uri->segment(2)) && !empty($this->uri->segment(3))){
                                    echo base_url("ru/" . $segment2   . "/" .  $segment3);
                                }elseif(!empty($this->uri->segment(2))){
                                    echo base_url("ru/" . $segment2);
                                }else{
                                    echo base_url("ru/home");
                                }

                                ?>">Ru</a></li>
                        </ul>
                    </li>
                </ul>
            <?php }?>


        </div>
    </div>
</nav>