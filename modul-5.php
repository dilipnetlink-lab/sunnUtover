<?php include 'commons/header.php'; ?>
<section>
    <div class="container-fluid section-padding page-box-con">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-box-full-con">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-back-btn"> 
                                    <a href="<?= base_url() ?>" class="btn btn-light btn-exit-icon"> <span> <?php echo __("common.exit"); ?> </span></a>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="page-title-del-box-full">
                                    <div class="page-title-del-box-left">
                                        <h1><?php echo __("modul5Page.main_title"); ?></h1>
                                    </div>
                                    <div class="page-title-del-box-right">
                                        <p id="slideCounter"><?php echo __("common.slide_part"); ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="step-slide-box-con">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="step-slide-box-slider">
                                                <div class="step-slide-box-item">
                                                    <div class="step-slide-box-description-con p-0">
                                                        <div class="step-slide-box-description-wrapper">
                                                            <div class="row align-items-center">
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-caption top-slide-caption">
                                                                        <h2><?php echo __("modul5Page.screens.screen_01.title"); ?></h2>
                                                                        <h6><?php echo __("modul5Page.screens.screen_01.subtitle"); ?> </h6>
                                                                        <ul>
                                                                            <?php
                                                                                $list = __("modul5Page.screens.screen_01.list_items1");
                                                                                if(is_array($list)){
                                                                                    foreach($list as $item){
                                                                                        echo "<li>$item</li>";
                                                                                    }   
                                                                                }
                                                                                ?>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-img">
                                                                        <figure><img src="images/box-modul-5-img-1.jpg" class="rounded"/></figure>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-12">
                                                                    <div class="step-slide-box-btn">
                                                                        <a href="javascript:void(0)" class="btn btn-next-icon sliderBoxDownArrow"> <span> <?php echo __("common.next"); ?>  </span> </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="step-slide-box-item" id="role-selection-slide">
                                                    <div class="slider-box-arrow sliderBoxUpArrow"><i class="bi bi-chevron-up"></i></div>
                                                    <div class="step-slide-box-description-con">
                                                        <div class="step-slide-box-description-wrapper">
                                                            <div class="row align-items-center">
                                                                <div class="col-sm-12 col-md-12 col-lg-12">
                                                                    <div class="step-slide-box-caption">
                                                                        <h2><?php echo __("modul5Page.screens.screen_02.title"); ?></h2>
                                                                        <h3 class="fw-normal"><?php echo __("modul5Page.screens.screen_02.subtitle"); ?></h3>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-12">
                                                                    <div class="step-slide-box-img">
                                                                        <div class="row align-items-center justify-content-around">
                                                                            <div class="col-sm-6 col-md-4 col-lg-3 text-center">
                                                                                <div class="circle-img-caption-box-con open-box-1">
                                                                                    <figure class="circle-img-caption-box-img">
                                                                                        <img src="images/box-modul-5-img-2-a.jpg"/>                                                                                        
                                                                                    </figure>
                                                                                    <div class="circle-img-caption-box-caption">
                                                                                        <h3><?php echo __("modul5Page.screens.screen_02.cir_text_img_list.title1"); ?></h3>
                                                                                        <p><?php echo __("common.click_to_see"); ?></p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-6 col-md-4 col-lg-3 text-center">
                                                                                <div class="circle-img-caption-box-con open-box-2">
                                                                                    <figure class="circle-img-caption-box-img">
                                                                                        <img src="images/box-modul-5-img-2-b.jpg"/>                                                                                        
                                                                                    </figure>
                                                                                    <div class="circle-img-caption-box-caption">
                                                                                        <h3><?php echo __("modul5Page.screens.screen_02.cir_text_img_list.title2"); ?></h3>
                                                                                        <p><?php echo __("common.click_to_see"); ?></p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-6 col-md-4 col-lg-3 text-center">
                                                                                <div class="circle-img-caption-box-con open-box-3 circle-img-caption-img-not">
                                                                                    <figure class="circle-img-caption-box-img"> </figure>
                                                                                    <div class="circle-img-caption-box-caption">
                                                                                        <h3><?php echo __("modul5Page.screens.screen_02.cir_text_img_list.title3"); ?></h3>
                                                                                        <p><?php echo __("common.click_to_see"); ?></p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="step-slide-box-item box-slide" id="box-1-slide">
                                                    <div class="slider-box-arrow sliderBoxUpArrow"><i class="bi bi-chevron-up"></i></div>
                                                    <div class="step-slide-box-description-con">
                                                        <div class="step-slide-box-description-wrapper">
                                                            <div class="row align-items-center">
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-caption">
                                                                        <h2><?php echo __("modul5Page.screens.screen_03.title"); ?></h2>
                                                                        <h4 class="mb-1 mt-3"><?php echo __("modul5Page.screens.screen_03.subtitle1"); ?></h4>
                                                                        <ul>
                                                                            <?php
                                                                                $list = __("modul5Page.screens.screen_03.list_items1");
                                                                                if(is_array($list)){
                                                                                    foreach($list as $item){
                                                                                        echo "<li>$item</li>";
                                                                                    }   
                                                                                }
                                                                                ?>
                                                                        </ul>
                                                                        <h4 class="mb-1 mt-3"><?php echo __("modul5Page.screens.screen_03.subtitle2"); ?></h4>
                                                                        <ul>
                                                                            <?php
                                                                                $list = __("modul5Page.screens.screen_03.list_items2");
                                                                                if(is_array($list)){
                                                                                    foreach($list as $item){
                                                                                        echo "<li>$item</li>";
                                                                                    }   
                                                                                }
                                                                                ?>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-img">
                                                                        <figure class="circle-img-box"><img src="images/box-modul-5-img-2-a.jpg"/></figure>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="slider-box-arrow sliderBoxDownArrow"><i class="bi bi-chevron-down"></i></div>
                                                </div>
                                                <div class="step-slide-box-item box-slide" id="box-2-slide">
                                                    <div class="slider-box-arrow sliderBoxUpArrow"><i class="bi bi-chevron-up"></i></div>
                                                    <div class="step-slide-box-description-con">
                                                        <div class="step-slide-box-description-wrapper">
                                                            <div class="row align-items-center">
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-caption">
                                                                        <h2><?php echo __("modul5Page.screens.screen_04.title"); ?></h2>
                                                                        <h4 class="mb-1 mt-3"><?php echo __("modul5Page.screens.screen_04.subtitle1"); ?></h4>
                                                                        <ul>
                                                                            <?php
                                                                                $list = __("modul5Page.screens.screen_04.list_items1");
                                                                                if(is_array($list)){
                                                                                    foreach($list as $item){
                                                                                        echo "<li>$item</li>";
                                                                                    }   
                                                                                }
                                                                                ?>
                                                                        </ul>
                                                                        <h4 class="mb-1 mt-3"><?php echo __("modul5Page.screens.screen_04.subtitle2"); ?></h4>
                                                                        <ul>
                                                                            <?php
                                                                                $list = __("modul5Page.screens.screen_04.list_items2");
                                                                                if(is_array($list)){
                                                                                    foreach($list as $item){
                                                                                        echo "<li>$item</li>";
                                                                                    }   
                                                                                }
                                                                                ?>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-caption">
                                                                        <h4 class="mb-1 mt-3"><?php echo __("modul5Page.screens.screen_04.subtitle3"); ?></h4>
                                                                        <ul>
                                                                            <?php
                                                                                $list = __("modul5Page.screens.screen_04.list_items3");
                                                                                if(is_array($list)){
                                                                                    foreach($list as $item){
                                                                                        echo "<li>$item</li>";
                                                                                    }   
                                                                                }
                                                                                ?>
                                                                        </ul>
                                                                        <h4 class="mb-1 mt-3"><?php echo __("modul5Page.screens.screen_04.subtitle4"); ?></h4>
                                                                        <ul>
                                                                            <?php
                                                                                $list = __("modul5Page.screens.screen_04.list_items4");
                                                                                if(is_array($list)){
                                                                                    foreach($list as $item){
                                                                                        echo "<li>$item</li>";
                                                                                    }   
                                                                                }
                                                                                ?>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="bg-img-text-con">
                                                                        <div class="bg-img-text-full">
                                                                            <div class="bg-img-text-img">
                                                                                <figure><img src="images/light-bulb.svg"></figure>
                                                                            </div>
                                                                            <div class="bg-img-text-text">
                                                                                <h4> <strong> <?php echo __("modul5Page.screens.screen_04.bg_info_box.title"); ?></strong></h4>
                                                                                <h4> <?php echo __("modul5Page.screens.screen_04.bg_info_box.description"); ?></h4>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="slider-box-arrow sliderBoxDownArrow"><i class="bi bi-chevron-down"></i></div>
                                                </div>
                                                <div class="step-slide-box-item box-slide" id="box-3-slide">
                                                    <div class="slider-box-arrow sliderBoxUpArrow"><i class="bi bi-chevron-up"></i></div>
                                                    <div class="step-slide-box-description-con">
                                                        <div class="step-slide-box-description-wrapper">
                                                            <div class="row align-items-center">
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-caption">
                                                                        <h2 class="mb-1"><?php echo __("modul5Page.screens.screen_05.title"); ?></h2>
                                                                        <h4><i> <?php echo __("modul5Page.screens.screen_05.description"); ?></i></h4>
                                                                        <h4 class="mb-1 mt-3"><?php echo __("modul5Page.screens.screen_05.subtitle1"); ?></h4>
                                                                        <ul>
                                                                            <?php
                                                                                $list = __("modul5Page.screens.screen_05.list_items1");
                                                                                if(is_array($list)){
                                                                                    foreach($list as $item){
                                                                                        echo "<li>$item</li>";
                                                                                    }   
                                                                                }
                                                                                ?>
                                                                        </ul>
                                                                        <h4 class="mb-1 mt-3"><?php echo __("modul5Page.screens.screen_05.subtitle2"); ?></h4>
                                                                        <ul>
                                                                            <?php
                                                                                $list = __("modul5Page.screens.screen_05.list_items2");
                                                                                if(is_array($list)){
                                                                                    foreach($list as $item){
                                                                                        echo "<li>$item</li>";
                                                                                    }   
                                                                                }
                                                                                ?>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-caption">
                                                                        <h4 class="mb-1 mt-3"><?php echo __("modul5Page.screens.screen_05.subtitle3"); ?></h4>
                                                                        <ul>
                                                                            <?php
                                                                                $list = __("modul5Page.screens.screen_05.list_items3");
                                                                                if(is_array($list)){
                                                                                    foreach($list as $item){
                                                                                        echo "<li>$item</li>";
                                                                                    }   
                                                                                }
                                                                                ?>
                                                                        </ul>
                                                                        <h4 class="mb-1 mt-3"><?php echo __("modul5Page.screens.screen_05.subtitle4"); ?></h4>
                                                                        <ul>
                                                                            <?php
                                                                                $list = __("modul5Page.screens.screen_05.list_items4");
                                                                                if(is_array($list)){
                                                                                    foreach($list as $item){
                                                                                        echo "<li>$item</li>";
                                                                                    }   
                                                                                }
                                                                                ?>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="slider-box-arrow sliderBoxDownArrow"><i class="bi bi-chevron-down"></i></div>
                                                </div>
                                                <div class="step-slide-box-item">
                                                    <div class="slider-box-arrow sliderBoxUpArrow"><i class="bi bi-chevron-up"></i></div>
                                                    <div class="step-slide-box-description-con">
                                                        <div class="step-slide-box-description-wrapper">
                                                            <div class="row align-items-center">
                                                                <div class="col-sm-12 col-md-12 col-lg-12">
                                                                    <div class="step-slide-box-caption">
                                                                        <h2><?php echo __("modul5Page.screens.screen_06.title"); ?></h2>
                                                                        <p><?php echo __("modul5Page.screens.screen_06.description"); ?></p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-12">
                                                                    <div class="step-slide-box-img img-top-fixed">
                                                                        <figure><img src="<?php echo __("modul5Page.screens.screen_06.image_url"); ?>" class="rounded"/></figure>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="slider-box-arrow sliderBoxDownArrow"><i class="bi bi-chevron-down"></i></div>
                                                </div>
                                                <div class="step-slide-box-item">
                                                    <div class="slider-box-arrow sliderBoxUpArrow"><i class="bi bi-chevron-up"></i></div>
                                                    <div class="step-slide-box-description-con">
                                                        <div class="step-slide-box-description-wrapper">
                                                            <div class="row align-items-center">
                                                                <div class="col-sm-12 col-md-12 col-lg-12">
                                                                    <div class="step-slide-box-caption">
                                                                        <h2><?php echo __("modul5Page.screens.screen_07.title"); ?></h2>
                                                                        <p><?php echo __("modul5Page.screens.screen_07.description"); ?></p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-12">
                                                                    <div class="step-slide-box-img img-top-fixed">
                                                                          <figure><img src="<?php echo __("modul5Page.screens.screen_07.image_url"); ?>" class="rounded"/></figure>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="slider-box-arrow sliderBoxDownArrow"><i class="bi bi-chevron-down"></i></div>
                                                </div>
                                                <div class="step-slide-box-item" id="role-selection-slide-2">
                                                    <div class="slider-box-arrow sliderBoxUpArrow"><i class="bi bi-chevron-up"></i></div>
                                                    <div class="step-slide-box-description-con">
                                                        <div class="step-slide-box-description-wrapper">
                                                            <div class="row align-items-center">
                                                                <div class="col-sm-12 col-md-12 col-lg-12">
                                                                    <div class="step-slide-box-caption">
                                                                        <h2><?php echo __("modul5Page.screens.screen_08.title"); ?></h2>
                                                                        <h3 class="fw-normal"><?php echo __("modul5Page.screens.screen_08.subtitle"); ?></h3>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-12">
                                                                    <div class="step-slide-box-img">
                                                                        <div class="row align-items-center">
                                                                            <div class="col-sm-6 col-md-6 col-lg-3 text-center">
                                                                                <div class="circle-img-caption-box-con open-box-4">
                                                                                    <figure class="circle-img-caption-box-img">
                                                                                        <img src="images/box-modul-5-img-6-a.jpg"/>                                                                                        
                                                                                    </figure>
                                                                                    <div class="circle-img-caption-box-caption">
                                                                                        <h3><?php echo __("modul5Page.screens.screen_08.cir_text_img_list.title1"); ?></h3>
                                                                                        <p><?php echo __("common.click_to_see"); ?></p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-6 col-md-6 col-lg-3 text-center">
                                                                                <div class="circle-img-caption-box-con open-box-5">
                                                                                    <figure class="circle-img-caption-box-img">
                                                                                        <img src="images/box-modul-5-img-6-b.jpg"/>                                                                                        
                                                                                    </figure>
                                                                                    <div class="circle-img-caption-box-caption">
                                                                                        <h3><?php echo __("modul5Page.screens.screen_08.cir_text_img_list.title2"); ?></h3>
                                                                                        <p><?php echo __("common.click_to_see"); ?></p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-6 col-md-6 col-lg-3 text-center">
                                                                                <div class="circle-img-caption-box-con open-box-6">
                                                                                    <figure class="circle-img-caption-box-img">
                                                                                        <img src="images/box-modul-5-img-6-c.jpg"/>                                                                                        
                                                                                    </figure>
                                                                                    <div class="circle-img-caption-box-caption">
                                                                                        <h3><?php echo __("modul5Page.screens.screen_08.cir_text_img_list.title3"); ?></h3>
                                                                                        <p><?php echo __("common.click_to_see"); ?></p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-6 col-md-6 col-lg-3 text-center">
                                                                                <div class="circle-img-caption-box-con open-box-7  circle-img-caption-img-not">
                                                                                    <figure class="circle-img-caption-box-img"> </figure>
                                                                                    <div class="circle-img-caption-box-caption">
                                                                                        <h3><?php echo __("modul5Page.screens.screen_08.cir_text_img_list.title4"); ?></h3>
                                                                                        <p><?php echo __("common.click_to_see"); ?></p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="step-slide-box-item box-slide" id="box-4-slide">
                                                    <div class="slider-box-arrow sliderBoxUpArrow"><i class="bi bi-chevron-up"></i></div>
                                                    <div class="step-slide-box-description-con">
                                                        <div class="step-slide-box-description-wrapper">
                                                            <div class="row align-items-center">
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-caption">
                                                                        <h2><?php echo __("modul5Page.screens.screen_09.title"); ?></h2>
                                                                        <ul>
                                                                            <?php
                                                                                $list = __("modul5Page.screens.screen_09.list_items1");
                                                                                if(is_array($list)){
                                                                                    foreach($list as $item){
                                                                                        echo "<li>$item</li>";
                                                                                    }   
                                                                                }
                                                                                ?>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-img">
                                                                        <figure class="circle-img-box"><img src="images/box-modul-5-img-6-a.jpg"/></figure>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="slider-box-arrow sliderBoxDownArrow"><i class="bi bi-chevron-down"></i></div>
                                                </div>
                                                <div class="step-slide-box-item box-slide" id="box-5-slide">
                                                    <div class="slider-box-arrow sliderBoxUpArrow"><i class="bi bi-chevron-up"></i></div>
                                                    <div class="step-slide-box-description-con">
                                                        <div class="step-slide-box-description-wrapper">
                                                            <div class="row align-items-center">
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-caption">
                                                                        <h2><?php echo __("modul5Page.screens.screen_10.title"); ?></h2>
                                                                        <ul>
                                                                            <?php
                                                                                $list = __("modul5Page.screens.screen_10.list_items1");
                                                                                if(is_array($list)){
                                                                                    foreach($list as $item){
                                                                                        echo "<li>$item</li>";
                                                                                    }   
                                                                                }
                                                                                ?>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-img">
                                                                        <figure class="circle-img-box"><img src="images/box-modul-5-img-6-b.jpg"/></figure>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="slider-box-arrow sliderBoxDownArrow"><i class="bi bi-chevron-down"></i></div>
                                                </div>
                                                <div class="step-slide-box-item box-slide" id="box-6-slide">
                                                    <div class="slider-box-arrow sliderBoxUpArrow"><i class="bi bi-chevron-up"></i></div>
                                                    <div class="step-slide-box-description-con">
                                                        <div class="step-slide-box-description-wrapper">
                                                            <div class="row align-items-center">
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-caption">
                                                                        <h2><?php echo __("modul5Page.screens.screen_11.title"); ?></h2>
                                                                        <ul>
                                                                            <?php
                                                                                $list = __("modul5Page.screens.screen_11.sub_list_items1");
                                                                                
                                                                                foreach($list as $item){
                                                                                
                                                                                    if(is_string($item)){
                                                                                        echo "<li>$item</li>";
                                                                                    }
                                                                                
                                                                                    if(is_array($item)){
                                                                                        echo "<li>{$item['text']}";
                                                                                
                                                                                        if(isset($item['sub_items'])){
                                                                                            echo "<ul>";
                                                                                            foreach($item['sub_items'] as $sub){
                                                                                                echo "<li>$sub</li>";
                                                                                            }
                                                                                            echo "</ul>";
                                                                                        }
                                                                                
                                                                                        echo "</li>";
                                                                                    }
                                                                                }
                                                                                ?>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-img">
                                                                        <figure class="circle-img-box"><img src="images/box-modul-5-img-6-c.jpg"/></figure>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="slider-box-arrow sliderBoxDownArrow"><i class="bi bi-chevron-down"></i></div>
                                                </div>
                                                <div class="step-slide-box-item box-slide" id="box-7-slide">
                                                    <div class="slider-box-arrow sliderBoxUpArrow"><i class="bi bi-chevron-up"></i></div>
                                                    <div class="step-slide-box-description-con">
                                                        <div class="step-slide-box-description-wrapper">
                                                            <div class="row align-items-center">
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-caption">
                                                                        <h2><?php echo __("modul5Page.screens.screen_12.title"); ?></h2>
                                                                        <h4 class="mb-2"><?php echo __("modul5Page.screens.screen_12.subtitle1"); ?></h4>
                                                                        <ul>
                                                                            <?php
                                                                                $list = __("modul5Page.screens.screen_12.list_items1");
                                                                                if(is_array($list)){
                                                                                    foreach($list as $item){
                                                                                        echo "<li>$item</li>";
                                                                                    }   
                                                                                }
                                                                                ?>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-caption">
                                                                        <h4 class="mb-2"><?php echo __("modul5Page.screens.screen_12.subtitle2"); ?></h4>
                                                                        <ul>
                                                                            <?php
                                                                                $parentList = __("modul5Page.screens.screen_12.sub_list_items1");
                                                                                
                                                                                if (is_array($parentList)) {
                                                                                    foreach ($parentList as $item) {
                                                                                
                                                                                        echo "<li>";
                                                                                
                                                                                        // Main text
                                                                                        if (isset($item['text'])) {
                                                                                            echo $item['text'];
                                                                                        }
                                                                                
                                                                                        // Sub list (if exists)
                                                                                        if (!empty($item['sub_items']) && is_array($item['sub_items'])) {
                                                                                            echo "<ul>";
                                                                                            foreach ($item['sub_items'] as $subItem) {
                                                                                                echo "<li>$subItem</li>";
                                                                                            }
                                                                                            echo "</ul>";
                                                                                        }
                                                                                
                                                                                        echo "</li>";
                                                                                    }
                                                                                }
                                                                                ?>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="slider-box-arrow sliderBoxDownArrow"><i class="bi bi-chevron-down"></i></div>
                                                </div>
                                                <div class="step-slide-box-item">
                                                    <div class="slider-box-arrow sliderBoxUpArrow"><i class="bi bi-chevron-up"></i></div>
                                                    <div class="step-slide-box-description-con">
                                                        <div class="step-slide-box-description-wrapper">
                                                            <div class="row align-items-center">
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-caption">
                                                                        <h2><?php echo __("modul5Page.screens.screen_13.title"); ?></h2>
                                                                        <h4 class="mb-1"><?php echo __("modul5Page.screens.screen_13.subtitle1"); ?></h4>
                                                                        <p><?php echo __("modul5Page.screens.screen_13.description"); ?></p>
                                                                        <ul>
                                                                            <?php
                                                                                $list = __("modul5Page.screens.screen_13.list_items1");
                                                                                if(is_array($list)){
                                                                                    foreach($list as $item){
                                                                                        echo "<li>$item</li>";
                                                                                    }   
                                                                                }
                                                                                ?>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-caption">
                                                                        <h4 class="mb-1"><?php echo __("modul5Page.screens.screen_13.subtitle2"); ?></h4>
                                                                        <ul>
                                                                            <?php
                                                                                $list = __("modul5Page.screens.screen_13.list_items2");
                                                                                if(is_array($list)){
                                                                                    foreach($list as $item){
                                                                                        echo "<li>$item</li>";
                                                                                    }   
                                                                                }
                                                                                ?>
                                                                        </ul>
                                                                        <h4 class="mb-1"><?php echo __("modul5Page.screens.screen_13.subtitle3"); ?></h4>
                                                                        <ul>
                                                                            <?php
                                                                                $list = __("modul5Page.screens.screen_13.list_items3");
                                                                                if(is_array($list)){
                                                                                    foreach($list as $item){
                                                                                        echo "<li>$item</li>";
                                                                                    }   
                                                                                }
                                                                                ?>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-12">
                                                                    <div class="step-slide-box-img">
                                                                        <div class="row align-items-center">
                                                                            <div class="col-4 text-center">
                                                                                <figure class="circle-img-box sm-circle-img"><img src="images/box-modul-5-img-8-a.jpg" /></figure>
                                                                            </div>
                                                                            <div class="col-4 text-center">
                                                                                <figure class="circle-img-box sm-circle-img"><img src="images/box-modul-5-img-8-b.jpg" /></figure>
                                                                            </div>
                                                                            <div class="col-4 text-center">
                                                                                <figure class="circle-img-box sm-circle-img"><img src="images/box-modul-5-img-8-c.jpg" /></figure>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="slider-box-arrow sliderBoxDownArrow"><i class="bi bi-chevron-down"></i></div>
                                                </div>
                                                <div class="step-slide-box-item">
                                                    <div class="step-slide-box-description-con">
                                                        <div class="step-slide-box-description-wrapper">
                                                            <div class="row align-items-center">
                                                                <div class="col-sm-12 col-md-11 col-lg-10 col-xl-9 col-xxl-8">
                                                                    <div class="step-slide-box-caption">
                                                                        <h2><?php echo __("modul5Page.screens.screen_14.title"); ?></h2>
                                                                        <p><?php echo __("modul5Page.screens.screen_14.question"); ?></p>
                                                                        <div class="radio-label-grop">
                                                                            <input class="radio-input" type="radio" name="sliderBoxSlide1Radio" id="sliderBoxSlide1Radio1">
                                                                            <label class="radio-label" for="sliderBoxSlide1Radio1">
                                                                            <?php echo __("modul5Page.screens.screen_14.options1"); ?>
                                                                            </label>
                                                                        </div>
                                                                        <div class="radio-label-grop">
                                                                            <input class="radio-input" type="radio" name="sliderBoxSlide1Radio" id="sliderBoxSlide1Radio2">
                                                                            <label class="radio-label" for="sliderBoxSlide1Radio2">
                                                                            <?php echo __("modul5Page.screens.screen_14.options2"); ?>
                                                                            </label>
                                                                        </div>
                                                                        <div class="radio-label-grop">
                                                                            <input class="radio-input" type="radio" name="sliderBoxSlide1Radio" id="sliderBoxSlide1Radio3">
                                                                            <label class="radio-label" for="sliderBoxSlide1Radio3">
                                                                            <?php echo __("modul5Page.screens.screen_14.options3"); ?>
                                                                            </label>
                                                                        </div>
                                                                        <div class="radio-label-grop">
                                                                            <input class="radio-input" type="radio" name="sliderBoxSlide1Radio" id="sliderBoxSlide1Radio4">
                                                                            <label class="radio-label" for="sliderBoxSlide1Radio4">
                                                                            <?php echo __("modul5Page.screens.screen_14.options4"); ?>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-12">
                                                                    <div class="step-slide-box-btn step-box-btn-form text-center"> 
                                                                        <button type="submit" class="btn btn-next-icon sliderBoxDownArrow"><span> <?php echo __("common.next"); ?> </span></button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="step-slide-box-item">
                                                    <div class="step-slide-box-description-con">
                                                        <div class="step-slide-box-description-wrapper">
                                                            <div class="row align-items-center">
                                                                <div class="col-sm-12 col-md-11 col-lg-10 col-xl-9 col-xxl-8">
                                                                    <div class="step-slide-box-caption">
                                                                        <h2><?php echo __("modul5Page.screens.screen_15.title"); ?></h2>
                                                                        <p><?php echo __("modul5Page.screens.screen_15.question"); ?></p>
                                                                        <div class="radio-label-grop radio-error">
                                                                            <input class="radio-input" type="radio" name="sliderBoxSlide2Radio" id="sliderBoxSlide2Radio1">
                                                                            <label class="radio-label" for="sliderBoxSlide2Radio1">
                                                                            <?php echo __("modul5Page.screens.screen_15.options1"); ?>
                                                                            </label>
                                                                        </div>
                                                                        <div class="radio-label-grop radio-success">
                                                                            <input class="radio-input" type="radio" name="sliderBoxSlide2Radio" id="sliderBoxSlide2Radio2">
                                                                            <label class="radio-label" for="sliderBoxSlide2Radio2">
                                                                            <?php echo __("modul5Page.screens.screen_15.options2"); ?>
                                                                            </label>
                                                                        </div>
                                                                        <div class="radio-label-grop radio-error">
                                                                            <input class="radio-input" type="radio" name="sliderBoxSlide2Radio" id="sliderBoxSlide2Radio3">
                                                                            <label class="radio-label" for="sliderBoxSlide2Radio3">
                                                                            <?php echo __("modul5Page.screens.screen_15.options3"); ?>
                                                                            </label>
                                                                        </div>
                                                                        <div class="radio-label-grop radio-error">
                                                                            <input class="radio-input" type="radio" name="sliderBoxSlide2Radio" id="sliderBoxSlide2Radio4">
                                                                            <label class="radio-label" for="sliderBoxSlide2Radio4">
                                                                            <?php echo __("modul5Page.screens.screen_15.options4"); ?>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-12">
                                                                    <div class="step-slide-box-btn step-box-btn-form text-center"> 
                                                                        <button type="submit" class="btn btn-next-icon sliderBoxDownArrow"><span> <?php echo __("common.next"); ?> </span></button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'commons/footer.php'; ?>


<script>
let lastSelectedBox = null;

document.addEventListener("click", function(e){

    if(e.target.closest('.open-box-1')){
        lastSelectedBox = 'box-1-slide';
        goToSlideById('box-1-slide');
    }
    if(e.target.closest('.open-box-2')){
        lastSelectedBox = 'box-2-slide';
        goToSlideById('box-2-slide');
    }
    if(e.target.closest('.open-box-3')){
        lastSelectedBox = 'box-3-slide';
        goToSlideById('box-3-slide');
    }

    if(e.target.closest('.open-box-4')){
        lastSelectedBox = 'box-4-slide';
        goToSlideById('box-4-slide');
    }
    if(e.target.closest('.open-box-5')){
        lastSelectedBox = 'box-5-slide';
        goToSlideById('box-5-slide');
    }
    if(e.target.closest('.open-box-6')){
        lastSelectedBox = 'box-6-slide';
        goToSlideById('box-6-slide');
    }
    if(e.target.closest('.open-box-7')){
        lastSelectedBox = 'box-7-slide';
        goToSlideById('box-7-slide');
    }

});

function goToSlideById(id){
    let slides = document.querySelectorAll('.step-slide-box-item');
    slides.forEach((slide, index) => {
        if(slide.id === id){
            changeSlide(index, 1);
        }
    });
}

document.addEventListener("click", function(e){
    if (e.target.closest(".sliderBoxDownArrow")) {
        let slides = document.querySelectorAll('.step-slide-box-item');
        let currentSlide = slides[current];

        if (currentSlide.classList.contains('box-slide')) {
            let nextIndex = current + 1;

            while (slides[nextIndex] && slides[nextIndex].classList.contains('box-slide')) {
                nextIndex++;
            }

            changeSlide(nextIndex, 1);
            return;
        }
    }
});

document.addEventListener("click", function(e){
    if (e.target.closest(".sliderBoxUpArrow")) {
        let slides = document.querySelectorAll('.step-slide-box-item');
        let currentSlide = slides[current];

        if (currentSlide.classList.contains('box-slide')) {

            let id = currentSlide.id;

            if (id === 'box-1-slide' || id === 'box-2-slide' || id === 'box-3-slide') {
                goToSlideById('role-selection-slide');
                return;
            }

            if (id === 'box-4-slide' || id === 'box-5-slide' || id === 'box-6-slide' || id === 'box-7-slide') {
                goToSlideById('role-selection-slide-2');
                return;
            }
        }

        let prevSlide = slides[current - 1];

        if (prevSlide && prevSlide.classList.contains('box-slide') && lastSelectedBox) {
            goToSlideById(lastSelectedBox);
            lastSelectedBox = null;
            return;
        }
    }
});
</script>