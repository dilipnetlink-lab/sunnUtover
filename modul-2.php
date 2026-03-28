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
                                        <h1><?php echo __("modul2Page.main_title"); ?></h1>
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
                                                                        <h2><?php echo __("modul2Page.screens.screen_01.title"); ?></h2>
                                                                        <h6><?php echo __("modul2Page.screens.screen_01.subtitle"); ?> </h6>
                                                                        <ul>
                                                                            <?php
                                                                                $list = __("modul2Page.screens.screen_01.list_items1");
                                                                                if(is_array($list)){
                                                                                    foreach($list as $item){
                                                                                        echo "<li>$item</li>";
                                                                                    }   
                                                                                }
                                                                                ?>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6 align-self-end">
                                                                    <div class="step-slide-box-img">
                                                                        <figure><img src="images/box-modul-2-img-1.jpg" class="rounded"/></figure>
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
                                                <div class="step-slide-box-item">
                                                    <div class="slider-box-arrow sliderBoxUpArrow"><i class="bi bi-chevron-up"></i></div>
                                                    <div class="step-slide-box-description-con">
                                                        <div class="step-slide-box-description-wrapper">
                                                            <div class="row align-items-center">
                                                                <div class="col-sm-12 col-md-12 col-lg-12">
                                                                    <div class="step-slide-box-caption">
                                                                        <h2><?php echo __("modul2Page.screens.screen_02.title"); ?></h2>
                                                                        <p><?php echo __("modul2Page.screens.screen_02.description1"); ?></p>
                                                                        <h4><?php echo __("modul2Page.screens.screen_02.subtitle"); ?> </h4>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-6 col-lg-6">
                                                                    <div class="step-slide-box-img">
                                                                        <figure><img src="images/box-modul-2-img-2-a.svg" class="rounded"/></figure>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-6 col-lg-6">
                                                                    <div class="step-slide-box-img">
                                                                        <figure><img src="images/box-modul-2-img-2-b.svg" class="rounded"/></figure>
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
                                                                        <div class="icon-title-con">
                                                                            <div class="icon-title-left">
                                                                                <img src="images/icon-dyman.svg" alt="">
                                                                            </div>
                                                                            <div class="icon-title-right">
                                                                                <h2><?php echo __("modul2Page.screens.screen_03.title"); ?></h2>
                                                                            </div>
                                                                        </div>
                                                                        <p><?php echo __("modul2Page.screens.screen_03.description1"); ?></p>
                                                                        <h4 class="mb-0"><?php echo __("modul2Page.screens.screen_03.subtitle"); ?> </h4>
                                                                        <p><?php echo __("modul2Page.screens.screen_03.description2"); ?></p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6 align-self-end">
                                                                    <div class="step-slide-box-img">
                                                                        <figure><img src="images/box-modul-2-img-3.svg" class="rounded"/></figure>
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
                                                                        <div class="icon-title-con">
                                                                            <div class="icon-title-left">
                                                                                <img src="images/icon-dyman.svg" alt="">
                                                                            </div>
                                                                            <div class="icon-title-right">
                                                                                <h2><?php echo __("modul2Page.screens.screen_04.title"); ?></h2>
                                                                            </div>
                                                                        </div>
                                                                        <p><?php echo __("modul2Page.screens.screen_04.description1"); ?></p>
                                                                        <h4 class="mb-0"><?php echo __("modul2Page.screens.screen_04.subtitle"); ?> </h4>
                                                                        <p><?php echo __("modul2Page.screens.screen_04.description2"); ?></p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6 align-self-end">
                                                                    <div class="step-slide-box-img">
                                                                        <figure><img src="images/box-modul-2-img-4.svg" class="rounded"/></figure>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="bg-img-text-con">
                                                                        <div class="bg-img-text-full">
                                                                            <div class="bg-img-text-img">
                                                                                <figure><img src="images/light-bulb.svg"></figure>
                                                                            </div>
                                                                            <div class="bg-img-text-text">
                                                                                <p> <?php echo __("modul2Page.screens.screen_04.bg_info_box.title"); ?></p>
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
                                                    <div class="slider-box-arrow sliderBoxUpArrow"><i class="bi bi-chevron-up"></i></div>
                                                    <div class="step-slide-box-description-con">
                                                        <div class="step-slide-box-description-wrapper">
                                                            <div class="row align-items-center">
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-caption">
                                                                        <div class="icon-title-con">
                                                                            <div class="icon-title-left">
                                                                                <img src="images/icon-dyman.svg" alt="">
                                                                            </div>
                                                                            <div class="icon-title-right">
                                                                                <h2><?php echo __("modul2Page.screens.screen_05.title"); ?></h2>
                                                                            </div>
                                                                        </div>
                                                                        <p><?php echo __("modul2Page.screens.screen_05.description1"); ?></p>
                                                                        <h4 class="mb-0"><?php echo __("modul2Page.screens.screen_05.subtitle"); ?> </h4>
                                                                        <p><?php echo __("modul2Page.screens.screen_05.description2"); ?></p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6 align-self-end">
                                                                    <div class="step-slide-box-img">
                                                                        <figure><img src="images/box-modul-2-img-5.svg" class="rounded"/></figure>
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
                                                                        <div class="icon-title-con">
                                                                            <div class="icon-title-left">
                                                                                <img src="images/icon-dyman.svg" alt="">
                                                                            </div>
                                                                            <div class="icon-title-right">
                                                                                <h2><?php echo __("modul2Page.screens.screen_06.title"); ?></h2>
                                                                            </div>
                                                                        </div>
                                                                        <p><?php echo __("modul2Page.screens.screen_06.description1"); ?></p>
                                                                        <h4 class="mb-0"><?php echo __("modul2Page.screens.screen_06.subtitle"); ?> </h4>
                                                                        <p><?php echo __("modul2Page.screens.screen_06.description2"); ?></p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6 align-self-end">
                                                                    <div class="step-slide-box-img">
                                                                        <figure><img src="images/box-modul-2-img-6.svg" class="rounded"/></figure>
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
                                                                        <div class="icon-title-con">
                                                                            <div class="icon-title-left">
                                                                                <img src="images/icon-dyman.svg" alt="">
                                                                            </div>
                                                                            <div class="icon-title-right">
                                                                                <h2><?php echo __("modul2Page.screens.screen_07.title"); ?></h2>
                                                                            </div>
                                                                        </div>
                                                                        <p><?php echo __("modul2Page.screens.screen_07.description1"); ?></p>
                                                                        <h4 class="mb-0"><?php echo __("modul2Page.screens.screen_07.subtitle"); ?> </h4>
                                                                        <p><?php echo __("modul2Page.screens.screen_07.description2"); ?></p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6 align-self-end">
                                                                    <div class="step-slide-box-img">
                                                                        <figure><img src="images/box-modul-2-img-7.svg" class="rounded"/></figure>
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
                                                                        <div class="icon-title-con">
                                                                            <div class="icon-title-left">
                                                                                <img src="images/icon-dyman.svg" alt="">
                                                                            </div>
                                                                            <div class="icon-title-right">
                                                                                <h2><?php echo __("modul2Page.screens.screen_08.title"); ?></h2>
                                                                            </div>
                                                                        </div>
                                                                        <p><?php echo __("modul2Page.screens.screen_08.description1"); ?></p>
                                                                        <h4 class="mb-0"><?php echo __("modul2Page.screens.screen_08.subtitle"); ?> </h4>
                                                                        <p><?php echo __("modul2Page.screens.screen_08.description2"); ?></p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6 align-self-end">
                                                                    <div class="step-slide-box-img">
                                                                        <figure><img src="images/box-modul-2-img-8.svg" class="rounded"/></figure>
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
                                                                        <div class="icon-title-con">
                                                                            <div class="icon-title-left">
                                                                                <img src="images/icon-dyman.svg" alt="">
                                                                            </div>
                                                                            <div class="icon-title-right">
                                                                                <h2><?php echo __("modul2Page.screens.screen_09.title"); ?></h2>
                                                                            </div>
                                                                        </div>
                                                                        <p><?php echo __("modul2Page.screens.screen_09.description1"); ?></p>
                                                                        <h4 class="mb-0"><?php echo __("modul2Page.screens.screen_09.subtitle"); ?> </h4>
                                                                        <p><?php echo __("modul2Page.screens.screen_09.description2"); ?></p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6 align-self-end">
                                                                    <div class="step-slide-box-img">
                                                                        <figure><img src="images/box-modul-2-img-9.svg" class="rounded"/></figure>
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
                                                                        <div class="icon-title-con">
                                                                            <div class="icon-title-left">
                                                                                <img src="images/icon-dyman.svg" alt="">
                                                                            </div>
                                                                            <div class="icon-title-right">
                                                                                <h2><?php echo __("modul2Page.screens.screen_10.title"); ?></h2>
                                                                            </div>
                                                                        </div>
                                                                        <p><?php echo __("modul2Page.screens.screen_10.description1"); ?></p>
                                                                        <h4 class="mb-0"><?php echo __("modul2Page.screens.screen_10.subtitle"); ?> </h4>
                                                                        <p><?php echo __("modul2Page.screens.screen_10.description2"); ?></p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6 align-self-end">
                                                                    <div class="step-slide-box-img">
                                                                        <figure><img src="images/box-modul-2-img-10.svg" class="rounded"/></figure>
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
                                                                        <div class="icon-title-con">
                                                                            <div class="icon-title-left">
                                                                                <img src="images/icon-dyman.svg" alt="">
                                                                            </div>
                                                                            <div class="icon-title-right">
                                                                                <h2><?php echo __("modul2Page.screens.screen_11.title"); ?></h2>
                                                                            </div>
                                                                        </div>
                                                                        <p><?php echo __("modul2Page.screens.screen_11.description1"); ?></p>
                                                                        <h4 class="mb-0"><?php echo __("modul2Page.screens.screen_11.subtitle"); ?> </h4>
                                                                        <p><?php echo __("modul2Page.screens.screen_11.description2"); ?></p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6 align-self-end">
                                                                    <div class="step-slide-box-img">
                                                                        <figure><img src="images/box-modul-2-img-11.svg" class="rounded"/></figure>
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
                                                                        <div class="icon-title-con">
                                                                            <div class="icon-title-left">
                                                                                <img src="images/icon-dyman.svg" alt="">
                                                                            </div>
                                                                            <div class="icon-title-right">
                                                                                <h2><?php echo __("modul2Page.screens.screen_12.title"); ?></h2>
                                                                            </div>
                                                                        </div>
                                                                        <p><?php echo __("modul2Page.screens.screen_12.description1"); ?></p>
                                                                        <h4 class="mb-0"><?php echo __("modul2Page.screens.screen_12.subtitle"); ?> </h4>
                                                                        <p><?php echo __("modul2Page.screens.screen_12.description2"); ?></p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6 align-self-end">
                                                                    <div class="step-slide-box-img">
                                                                        <figure><img src="images/box-modul-2-img-12.svg" class="rounded"/></figure>
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
                                                                        <div class="icon-title-con">
                                                                            <div class="icon-title-left">
                                                                                <img src="images/icon-dyman.svg" alt="">
                                                                            </div>
                                                                            <div class="icon-title-right">
                                                                                <h2><?php echo __("modul2Page.screens.screen_13.title"); ?></h2>
                                                                            </div>
                                                                        </div>
                                                                        <p><?php echo __("modul2Page.screens.screen_13.description1"); ?></p>
                                                                        <h4 class="mb-0"><?php echo __("modul2Page.screens.screen_13.subtitle"); ?> </h4>
                                                                        <p><?php echo __("modul2Page.screens.screen_13.description2"); ?></p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6 align-self-end">
                                                                    <div class="step-slide-box-img">
                                                                        <figure><img src="images/box-modul-2-img-13.svg" class="rounded"/></figure>
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
                                                                        <div class="icon-title-con">
                                                                            <div class="icon-title-left">
                                                                                <img src="images/icon-dyman.svg" alt="">
                                                                            </div>
                                                                            <div class="icon-title-right">
                                                                                <h2><?php echo __("modul2Page.screens.screen_14.title"); ?></h2>
                                                                            </div>
                                                                        </div>
                                                                        <p><?php echo __("modul2Page.screens.screen_14.description1"); ?></p>
                                                                        <h4 class="mb-0"><?php echo __("modul2Page.screens.screen_14.subtitle"); ?> </h4>
                                                                        <p><?php echo __("modul2Page.screens.screen_14.description2"); ?></p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6 align-self-end">
                                                                    <div class="step-slide-box-img">
                                                                        <figure><img src="images/box-modul-2-img-14.svg" class="rounded"/></figure>
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
                                                                        <div class="icon-title-con">
                                                                            <div class="icon-title-left">
                                                                                <img src="images/icon-dyman.svg" alt="">
                                                                            </div>
                                                                            <div class="icon-title-right">
                                                                                <h2><?php echo __("modul2Page.screens.screen_15.title"); ?></h2>
                                                                            </div>
                                                                        </div>
                                                                        <p><?php echo __("modul2Page.screens.screen_15.description1"); ?></p>
                                                                        <h4 class="mb-0"><?php echo __("modul2Page.screens.screen_15.subtitle"); ?> </h4>
                                                                        <p><?php echo __("modul2Page.screens.screen_15.description2"); ?></p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6 align-self-end">
                                                                    <div class="step-slide-box-img">
                                                                        <figure><img src="images/box-modul-2-img-15.svg" class="rounded"/></figure>
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
                                                                        <div class="icon-title-con">
                                                                            <div class="icon-title-left">
                                                                                <img src="images/icon-dyman.svg" alt="">
                                                                            </div>
                                                                            <div class="icon-title-right">
                                                                                <h2><?php echo __("modul2Page.screens.screen_16.title"); ?></h2>
                                                                            </div>
                                                                        </div>
                                                                        <p><?php echo __("modul2Page.screens.screen_16.description1"); ?></p>
                                                                        <h4 class="mb-0"><?php echo __("modul2Page.screens.screen_16.subtitle"); ?> </h4>
                                                                        <ul>
                                                                            <?php
                                                                                $list = __("modul2Page.screens.screen_16.list_items1");
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
                                                                    <div class="step-slide-box-img align-self-center">
                                                                        <figure><img src="images/box-modul-2-img-16.svg" class="rounded"/></figure>
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
                                                                        <h2><?php echo __("modul2Page.screens.screen_17.title"); ?></h2>
                                                                        <p><?php echo __("modul2Page.screens.screen_17.question"); ?></p>
                                                                        <div class="radio-label-grop">
                                                                            <input class="radio-input" type="radio" name="sliderBoxSlide1Radio" id="sliderBoxSlide1Radio1">
                                                                            <label class="radio-label" for="sliderBoxSlide1Radio1">
                                                                            <?php echo __("modul2Page.screens.screen_17.options1"); ?>
                                                                            </label>
                                                                        </div>
                                                                        <div class="radio-label-grop">
                                                                            <input class="radio-input" type="radio" name="sliderBoxSlide1Radio" id="sliderBoxSlide1Radio2">
                                                                            <label class="radio-label" for="sliderBoxSlide1Radio2">
                                                                            <?php echo __("modul2Page.screens.screen_17.options2"); ?>
                                                                            </label>
                                                                        </div>
                                                                        <div class="radio-label-grop">
                                                                            <input class="radio-input" type="radio" name="sliderBoxSlide1Radio" id="sliderBoxSlide1Radio3">
                                                                            <label class="radio-label" for="sliderBoxSlide1Radio3">
                                                                            <?php echo __("modul2Page.screens.screen_17.options3"); ?>
                                                                            </label>
                                                                        </div>
                                                                        <div class="radio-label-grop">
                                                                            <input class="radio-input" type="radio" name="sliderBoxSlide1Radio" id="sliderBoxSlide1Radio4">
                                                                            <label class="radio-label" for="sliderBoxSlide1Radio4">
                                                                            <?php echo __("modul2Page.screens.screen_17.options4"); ?>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-12">
                                                                    <div class="step-slide-box-btn step-box-btn-form text-center"> 
                                                                        <button type="submit" class="btn btn-next-icon sliderBoxDownArrow"><span>  <?php echo __("common.next"); ?>  </span></button>
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
                                                                        <h2><?php echo __("modul2Page.screens.screen_18.title"); ?></h2>
                                                                        <p><?php echo __("modul2Page.screens.screen_18.question"); ?></p>
                                                                        <div class="radio-label-grop radio-error">
                                                                            <input class="radio-input" type="radio" name="sliderBoxSlide2Radio" id="sliderBoxSlide2Radio1">
                                                                            <label class="radio-label" for="sliderBoxSlide2Radio1">
                                                                            <?php echo __("modul2Page.screens.screen_18.options1"); ?>
                                                                            </label>
                                                                        </div>
                                                                        <div class="radio-label-grop radio-success">
                                                                            <input class="radio-input" type="radio" name="sliderBoxSlide2Radio" id="sliderBoxSlide2Radio2">
                                                                            <label class="radio-label" for="sliderBoxSlide2Radio2">
                                                                            <?php echo __("modul2Page.screens.screen_18.options2"); ?>
                                                                            </label>
                                                                        </div>
                                                                        <div class="radio-label-grop radio-error">
                                                                            <input class="radio-input" type="radio" name="sliderBoxSlide2Radio" id="sliderBoxSlide2Radio3">
                                                                            <label class="radio-label" for="sliderBoxSlide2Radio3">
                                                                            <?php echo __("modul2Page.screens.screen_18.options3"); ?>
                                                                            </label>
                                                                        </div>
                                                                        <div class="radio-label-grop radio-error">
                                                                            <input class="radio-input" type="radio" name="sliderBoxSlide2Radio" id="sliderBoxSlide2Radio4">
                                                                            <label class="radio-label" for="sliderBoxSlide2Radio4">
                                                                            <?php echo __("modul2Page.screens.screen_18.options4"); ?>
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