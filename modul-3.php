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
                                    <a href="<?= base_url()?>" class="btn btn-light btn-exit-icon"> <span> <?php echo __("common.exit"); ?> </span></a>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="page-title-del-box-full">
                                    <div class="page-title-del-box-left">
                                        <h1><?php echo __("modul3Page.main_title"); ?></h1>
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
                                                                        <h2><?php echo __("modul3Page.screens.screen_01.title"); ?></h2>
                                                                        <h6><?php echo __("modul3Page.screens.screen_01.subtitle"); ?> </h6>
                                                                        <ul>
                                                                            <?php
                                                                                $list = __("modul3Page.screens.screen_01.list_items1");
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
                                                                        <figure><img src="images/box-modul-3-img-1.jpg" class="rounded"/></figure>
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
                                                                <div class="col-sm-12">
                                                                    <div class="icon-list-menu-con top-icon-list-menu top-first-icon-list-menu">
                                                                        <?php include 'commons/icon-list-menu.php'; ?>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-caption">
                                                                        <h2><?php echo __("modul3Page.screens.screen_03.title"); ?></h2>
                                                                        <p><?php echo __("modul3Page.screens.screen_03.description1"); ?> </p>
                                                                        <p><?php echo __("modul3Page.screens.screen_03.description2"); ?> </p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-img">
                                                                        <figure class="circle-img-box lg-circle"><img src="images/box-modul-3-img-3.jpg"></figure>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="bg-img-text-con">
                                                                        <div class="bg-img-text-full">
                                                                            <div class="bg-img-text-img">
                                                                                <figure><img src="images/light-bulb.svg"></figure>
                                                                            </div>
                                                                            <div class="bg-img-text-text">
                                                                                <h4 class="mb-1"><?php echo __("modul3Page.screens.screen_03.bg_info_box.title"); ?></h4>
                                                                                <ul>
                                                                                    <?php
                                                                                        $list = __("modul3Page.screens.screen_03.bg_info_box.list_items");
                                                                                        if (is_array($list)) {
                                                                                            foreach ($list as $item) {
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
                                                        </div>
                                                    </div>
                                                    <div class="slider-box-arrow sliderBoxDownArrow"><i class="bi bi-chevron-down"></i></div>
                                                </div>
                                                <div class="step-slide-box-item">
                                                    <div class="slider-box-arrow sliderBoxUpArrow"><i class="bi bi-chevron-up"></i></div>
                                                    <div class="step-slide-box-description-con">
                                                        <div class="step-slide-box-description-wrapper">
                                                            <div class="row align-items-center">
                                                                <div class="col-sm-12">
                                                                    <div class="icon-list-menu-con top-icon-list-menu top-first-icon-list-menu">
                                                                        <?php include 'commons/icon-list-menu.php'; ?>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-caption">
                                                                        <h2><?php echo __("modul3Page.screens.screen_04.title"); ?></h2>
                                                                        <p><?php echo __("modul3Page.screens.screen_04.description1"); ?></p>
                                                                        <p><?php echo __("modul3Page.screens.screen_04.description2"); ?> </p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-img">
                                                                        <figure><img src="images/box-modul-3-img-4.jpg" class="rounded"></figure>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="bg-img-text-con">
                                                                        <div class="bg-img-text-full">
                                                                            <div class="bg-img-text-img">
                                                                                <figure><img src="images/light-bulb.svg"></figure>
                                                                            </div>
                                                                            <div class="bg-img-text-text">
                                                                                <h4 class="mb-1"><?php echo __("modul3Page.screens.screen_03.bg_info_box.title"); ?></h4>
                                                                                <ul>
                                                                                    <?php
                                                                                        $list = __("modul3Page.screens.screen_03.bg_info_box.list_items");
                                                                                        if (is_array($list)) {
                                                                                            foreach ($list as $item) {
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
                                                        </div>
                                                    </div>
                                                    <div class="slider-box-arrow sliderBoxDownArrow"><i class="bi bi-chevron-down"></i></div>
                                                </div>
                                                <div class="step-slide-box-item">
                                                    <div class="slider-box-arrow sliderBoxUpArrow"><i class="bi bi-chevron-up"></i></div>
                                                    <div class="step-slide-box-description-con">
                                                        <div class="step-slide-box-description-wrapper">
                                                            <div class="row align-items-center">
                                                                <div class="col-sm-12">
                                                                    <div class="icon-list-menu-con top-icon-list-menu top-first-icon-list-menu">
                                                                        <?php include 'commons/icon-list-menu.php'; ?>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-caption">
                                                                        <h2><?php echo __("modul3Page.screens.screen_05.title"); ?></h2>
                                                                        <p><?php echo __("modul3Page.screens.screen_05.description1"); ?></p>
                                                                        <h4 class="mb-0"><?php echo __("modul3Page.screens.screen_05.subtitle"); ?></h4>
                                                                        <p> <?php echo __("modul3Page.screens.screen_05.description2"); ?></p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-img">
                                                                        <figure><img src="images/box-modul-3-img-5.jpg" class="rounded"></figure>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="bg-img-text-con">
                                                                        <div class="bg-img-text-full">
                                                                            <div class="bg-img-text-img">
                                                                                <figure><img src="images/light-bulb.svg"></figure>
                                                                            </div>
                                                                            <div class="bg-img-text-text">
                                                                                <h4 class="mb-1"> <?php echo __("modul3Page.screens.screen_05.bg_info_box.title"); ?></h4>
                                                                                <ul>
                                                                                    <?php
                                                                                        $list = __("modul3Page.screens.screen_05.bg_info_box.list_items");
                                                                                        if (is_array($list)) {
                                                                                            foreach ($list as $item) {
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
                                                        </div>
                                                    </div>
                                                    <div class="slider-box-arrow sliderBoxDownArrow"><i class="bi bi-chevron-down"></i></div>
                                                </div>
                                                <div class="step-slide-box-item">
                                                    <div class="slider-box-arrow sliderBoxUpArrow"><i class="bi bi-chevron-up"></i></div>
                                                    <div class="step-slide-box-description-con">
                                                        <div class="step-slide-box-description-wrapper">
                                                            <div class="row align-items-center">
                                                                <div class="col-sm-12">
                                                                    <div class="icon-list-menu-con top-icon-list-menu top-first-icon-list-menu">
                                                                        <?php include 'commons/icon-list-menu.php'; ?>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-caption">
                                                                        <h2><?php echo __("modul3Page.screens.screen_06.title"); ?></h2>
                                                                        <p><?php echo __("modul3Page.screens.screen_06.description1"); ?></p>
                                                                        <h4 class="mb-0"><?php echo __("modul3Page.screens.screen_05.subtitle"); ?></h4>
                                                                        <p><?php echo __("modul3Page.screens.screen_06.description2"); ?></p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-img">
                                                                        <figure><img src="images/box-modul-3-img-6.jpg" class="rounded"></figure>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="bg-img-text-con">
                                                                        <div class="bg-img-text-full">
                                                                            <div class="bg-img-text-img">
                                                                                <figure><img src="images/light-bulb.svg"></figure>
                                                                            </div>
                                                                            <div class="bg-img-text-text">
                                                                                <h4 class="mb-1"> <?php echo __("modul3Page.screens.screen_06.bg_info_box.title"); ?></h4>
                                                                                <ul>
                                                                                    <?php
                                                                                        $list = __("modul3Page.screens.screen_06.bg_info_box.list_items");
                                                                                        if (is_array($list)) {
                                                                                            foreach ($list as $item) {
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
                                                        </div>
                                                    </div>
                                                    <div class="slider-box-arrow sliderBoxDownArrow"><i class="bi bi-chevron-down"></i></div>
                                                </div>
                                                <div class="step-slide-box-item">
                                                    <div class="slider-box-arrow sliderBoxUpArrow"><i class="bi bi-chevron-up"></i></div>
                                                    <div class="step-slide-box-description-con">
                                                        <div class="step-slide-box-description-wrapper">
                                                            <div class="row align-items-center">
                                                                <div class="col-sm-12">
                                                                    <div class="icon-list-menu-con top-icon-list-menu top-first-icon-list-menu">
                                                                        <?php include 'commons/icon-list-menu.php'; ?>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-caption">
                                                                        <h2><?php echo __("modul3Page.screens.screen_07.title"); ?> </h2>
                                                                        <p><?php echo __("modul3Page.screens.screen_07.description1"); ?></p>
                                                                        <h4 class="mb-0"> <?php echo __("modul3Page.screens.screen_05.subtitle"); ?></h4>
                                                                        <p><?php echo __("modul3Page.screens.screen_07.description2"); ?></p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-img">
                                                                        <figure><img src="images/box-modul-3-img-7.jpg" class="rounded"></figure>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="bg-img-text-con">
                                                                        <div class="bg-img-text-full">
                                                                            <div class="bg-img-text-img">
                                                                                <figure><img src="images/light-bulb.svg"></figure>
                                                                            </div>
                                                                            <div class="bg-img-text-text">
                                                                                <h4 class="mb-0"><?php echo __("modul3Page.screens.screen_06.bg_info_box.title"); ?></h4>
                                                                                <ul>
                                                                                    <?php
                                                                                        $list = __("modul3Page.screens.screen_07.bg_info_box.list_items");
                                                                                        if (is_array($list)) {
                                                                                            foreach ($list as $item) {
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
                                                        </div>
                                                    </div>
                                                    <div class="slider-box-arrow sliderBoxDownArrow"><i class="bi bi-chevron-down"></i></div>
                                                </div>
                                                <div class="step-slide-box-item">
                                                    <div class="slider-box-arrow sliderBoxUpArrow"><i class="bi bi-chevron-up"></i></div>
                                                    <div class="step-slide-box-description-con">
                                                        <div class="step-slide-box-description-wrapper">
                                                            <div class="row align-items-center">
                                                                <div class="col-sm-12">
                                                                    <div class="icon-list-menu-con top-icon-list-menu top-first-icon-list-menu">
                                                                        <?php include 'commons/icon-list-menu.php'; ?>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-caption">
                                                                        <h2><?php echo __("modul3Page.screens.screen_08.title"); ?> </h2>
                                                                        <p><?php echo __("modul3Page.screens.screen_08.description1"); ?></p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-img">
                                                                        <figure><img src="images/box-modul-3-img-8.jpg" class="rounded"></figure>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="bg-img-text-con">
                                                                        <div class="bg-img-text-full">
                                                                            <div class="bg-img-text-img">
                                                                                <figure><img src="images/light-bulb.svg"></figure>
                                                                            </div>
                                                                            <div class="bg-img-text-text">
                                                                                <h4 class="mb-1"> <?php echo __("modul3Page.screens.screen_06.bg_info_box.title"); ?></h4>
                                                                                <ul>
                                                                                    <?php
                                                                                        $list = __("modul3Page.screens.screen_08.bg_info_box.list_items");
                                                                                        if (is_array($list)) {
                                                                                            foreach ($list as $item) {
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
                                                        </div>
                                                    </div>
                                                    <div class="slider-box-arrow sliderBoxDownArrow"><i class="bi bi-chevron-down"></i></div>
                                                </div>
                                                <div class="step-slide-box-item">
                                                    <div class="slider-box-arrow sliderBoxUpArrow"><i class="bi bi-chevron-up"></i></div>
                                                    <div class="step-slide-box-description-con">
                                                        <div class="step-slide-box-description-wrapper">
                                                            <div class="row align-items-center">
                                                                <div class="col-sm-12">
                                                                    <div class="icon-list-menu-con top-icon-list-menu top-first-icon-list-menu">
                                                                        <?php include 'commons/icon-list-menu.php'; ?>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-caption">
                                                                        <h2><?php echo __("modul3Page.screens.screen_09.title"); ?> </h2>
                                                                        <p><?php echo __("modul3Page.screens.screen_09.description1"); ?></p>
                                                                        <h4 class="mb-0"><?php echo __("modul3Page.screens.screen_05.subtitle"); ?></h4>
                                                                        <p><?php echo __("modul3Page.screens.screen_09.description2"); ?></p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-img">
                                                                        <figure><img src="images/box-modul-3-img-9.jpg" class="rounded"></figure>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="bg-img-text-con">
                                                                        <div class="bg-img-text-full">
                                                                            <div class="bg-img-text-img">
                                                                                <figure><img src="images/light-bulb.svg"></figure>
                                                                            </div>
                                                                            <div class="bg-img-text-text">
                                                                                <h4 class="mb-1"> <?php echo __("modul3Page.screens.screen_06.bg_info_box.title"); ?></h4>
                                                                                <ul>
                                                                                    <?php
                                                                                        $list = __("modul3Page.screens.screen_09.bg_info_box.list_items");
                                                                                        if (is_array($list)) {
                                                                                            foreach ($list as $item) {
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
                                                        </div>
                                                    </div>
                                                    <div class="slider-box-arrow sliderBoxDownArrow"><i class="bi bi-chevron-down"></i></div>
                                                </div>
                                                <div class="step-slide-box-item">
                                                    <div class="slider-box-arrow sliderBoxUpArrow"><i class="bi bi-chevron-up"></i></div>
                                                    <div class="step-slide-box-description-con">
                                                        <div class="step-slide-box-description-wrapper">
                                                            <div class="row align-items-center">
                                                                <div class="col-sm-12">
                                                                    <div class="icon-list-menu-con top-icon-list-menu top-first-icon-list-menu">
                                                                        <?php include 'commons/icon-list-menu.php'; ?>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-caption">
                                                                        <h2><?php echo __("modul3Page.screens.screen_10.title"); ?></h2>
                                                                        <p><?php echo __("modul3Page.screens.screen_10.description1"); ?></p>
                                                                        <h4 class="mb-0"><?php echo __("modul3Page.screens.screen_05.subtitle"); ?></h4>
                                                                        <p><?php echo __("modul3Page.screens.screen_10.description2"); ?></p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-img">
                                                                        <figure><img src="images/box-modul-3-img-10.jpg" class="rounded"></figure>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="bg-img-text-con">
                                                                        <div class="bg-img-text-full">
                                                                            <div class="bg-img-text-img">
                                                                                <figure><img src="images/light-bulb.svg"></figure>
                                                                            </div>
                                                                            <div class="bg-img-text-text">
                                                                                <h4 class="mb-1"><?php echo __("modul3Page.screens.screen_06.bg_info_box.title"); ?></h4>
                                                                                <ul>
                                                                                    <?php
                                                                                        $list = __("modul3Page.screens.screen_10.bg_info_box.list_items");
                                                                                        if (is_array($list)) {
                                                                                            foreach ($list as $item) {
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
                                                        </div>
                                                    </div>
                                                    <div class="slider-box-arrow sliderBoxDownArrow"><i class="bi bi-chevron-down"></i></div>
                                                </div>
                                                <div class="step-slide-box-item">
                                                    <div class="slider-box-arrow sliderBoxUpArrow"><i class="bi bi-chevron-up"></i></div>
                                                    <div class="step-slide-box-description-con">
                                                        <div class="step-slide-box-description-wrapper">
                                                            <div class="row align-items-center">
                                                                <div class="col-sm-12">
                                                                    <div class="icon-list-menu-con top-icon-list-menu top-second-icon-list-menu">
                                                                        <?php include 'commons/icon-list-menu.php'; ?>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-caption">
                                                                        <h2><?php echo __("modul3Page.screens.screen_11.title"); ?></h2>
                                                                        <p><?php echo __("modul3Page.screens.screen_11.description1"); ?></p>
                                                                        <h4 class="mb-0"><?php echo __("modul3Page.screens.screen_05.subtitle"); ?></h4>
                                                                        <p><?php echo __("modul3Page.screens.screen_11.description2"); ?></p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-img">
                                                                        <figure><img src="images/box-modul-3-img-11.jpg" class="rounded"></figure>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="bg-img-text-con">
                                                                        <div class="bg-img-text-full">
                                                                            <div class="bg-img-text-img">
                                                                                <figure><img src="images/light-bulb.svg"></figure>
                                                                            </div>
                                                                            <div class="bg-img-text-text">
                                                                                <h4 class="mb-1"><?php echo __("modul3Page.screens.screen_06.bg_info_box.title"); ?></h4>
                                                                                <ul>
                                                                                    <?php
                                                                                        $list = __("modul3Page.screens.screen_11.bg_info_box.list_items");
                                                                                        if (is_array($list)) {
                                                                                            foreach ($list as $item) {
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
                                                        </div>
                                                    </div>
                                                    <div class="slider-box-arrow sliderBoxDownArrow"><i class="bi bi-chevron-down"></i></div>
                                                </div>
                                                <div class="step-slide-box-item">
                                                    <div class="slider-box-arrow sliderBoxUpArrow"><i class="bi bi-chevron-up"></i></div>
                                                    <div class="step-slide-box-description-con">
                                                        <div class="step-slide-box-description-wrapper">
                                                            <div class="row align-items-center">
                                                                <div class="col-sm-12">
                                                                    <div class="icon-list-menu-con top-icon-list-menu top-second-icon-list-menu">
                                                                        <?php include 'commons/icon-list-menu.php'; ?>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-caption">
                                                                        <h2><?php echo __("modul3Page.screens.screen_12.title"); ?>  </h2>
                                                                        <p><?php echo __("modul3Page.screens.screen_12.description1"); ?></p>
                                                                        <h4 class="mb-0"><?php echo __("modul3Page.screens.screen_05.subtitle"); ?></h4>
                                                                        <p><?php echo __("modul3Page.screens.screen_12.description2"); ?></p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-img">
                                                                        <figure><img src="images/box-modul-3-img-12.jpg" class="rounded"></figure>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="bg-img-text-con">
                                                                        <div class="bg-img-text-full">
                                                                            <div class="bg-img-text-img">
                                                                                <figure><img src="images/light-bulb.svg"></figure>
                                                                            </div>
                                                                            <div class="bg-img-text-text">
                                                                                <h4 class="mb-1"> <?php echo __("modul3Page.screens.screen_06.bg_info_box.title"); ?></h4>
                                                                                <ul>
                                                                                    <?php
                                                                                        $list = __("modul3Page.screens.screen_12.bg_info_box.list_items");
                                                                                        if (is_array($list)) {
                                                                                            foreach ($list as $item) {
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
                                                        </div>
                                                    </div>
                                                    <div class="slider-box-arrow sliderBoxDownArrow"><i class="bi bi-chevron-down"></i></div>
                                                </div>
                                                <div class="step-slide-box-item">
                                                    <div class="slider-box-arrow sliderBoxUpArrow"><i class="bi bi-chevron-up"></i></div>
                                                    <div class="step-slide-box-description-con">
                                                        <div class="step-slide-box-description-wrapper">
                                                            <div class="row align-items-center">
                                                                <div class="col-sm-12">
                                                                    <div class="icon-list-menu-con top-icon-list-menu top-second-icon-list-menu">
                                                                        <?php include 'commons/icon-list-menu.php'; ?>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-caption">
                                                                        <h2><?php echo __("modul3Page.screens.screen_13.title"); ?></h2>
                                                                        <p><?php echo __("modul3Page.screens.screen_13.description1"); ?></p>
                                                                        <p><?php echo __("modul3Page.screens.screen_13.description2"); ?></p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-img">
                                                                        <figure><img src="images/box-modul-3-img-13.jpg" class="rounded"></figure>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="bg-img-text-con">
                                                                        <div class="bg-img-text-full">
                                                                            <div class="bg-img-text-img">
                                                                                <figure><img src="images/light-bulb.svg"></figure>
                                                                            </div>
                                                                            <div class="bg-img-text-text">
                                                                                <h4 class="mb-1"> <?php echo __("modul3Page.screens.screen_06.bg_info_box.title"); ?></h4>
                                                                                <ul>
                                                                                    <?php
                                                                                        $list = __("modul3Page.screens.screen_12.bg_info_box.list_items");
                                                                                        if (is_array($list)) {
                                                                                            foreach ($list as $item) {
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
                                                        </div>
                                                    </div>
                                                    <div class="slider-box-arrow sliderBoxDownArrow"><i class="bi bi-chevron-down"></i></div>
                                                </div>
                                                <div class="step-slide-box-item">
                                                    <div class="slider-box-arrow sliderBoxUpArrow"><i class="bi bi-chevron-up"></i></div>
                                                    <div class="step-slide-box-description-con">
                                                        <div class="step-slide-box-description-wrapper">
                                                            <div class="row align-items-center">
                                                                <div class="col-sm-12">
                                                                    <div class="icon-list-menu-con top-icon-list-menu top-second-icon-list-menu">
                                                                        <?php include 'commons/icon-list-menu.php'; ?>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-caption">
                                                                        <h2><?php echo __("modul3Page.screens.screen_14.title"); ?></h2>
                                                                        <p><?php echo __("modul3Page.screens.screen_14.description1"); ?> </p>
                                                                        <h4><?php echo __("modul3Page.screens.screen_14.subtitle"); ?> </h4>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-img">
                                                                        <figure><img src="images/box-modul-3-img-14.jpg" class="rounded"></figure>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="bg-img-text-con">
                                                                        <div class="bg-img-text-full">
                                                                            <div class="bg-img-text-img">
                                                                                <figure><img src="images/light-bulb.svg"></figure>
                                                                            </div>
                                                                            <div class="bg-img-text-text">
                                                                                <h4 class="mb-1"> <?php echo __("modul3Page.screens.screen_06.bg_info_box.title"); ?></h4>
                                                                                <ul>
                                                                                    <?php
                                                                                        $list = __("modul3Page.screens.screen_14.bg_info_box.list_items");
                                                                                        if (is_array($list)) {
                                                                                            foreach ($list as $item) {
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
                                                        </div>
                                                    </div>
                                                    <div class="slider-box-arrow sliderBoxDownArrow"><i class="bi bi-chevron-down"></i></div>
                                                </div>
                                                <div class="step-slide-box-item">
                                                    <div class="slider-box-arrow sliderBoxUpArrow"><i class="bi bi-chevron-up"></i></div>
                                                    <div class="step-slide-box-description-con">
                                                        <div class="step-slide-box-description-wrapper">
                                                            <div class="row align-items-center">
                                                                <div class="col-sm-12">
                                                                    <div class="icon-list-menu-con top-icon-list-menu top-second-icon-list-menu">
                                                                        <?php include 'commons/icon-list-menu.php'; ?>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-caption">
                                                                        <h2><?php echo __("modul3Page.screens.screen_15.title"); ?></h2>
                                                                        <p><?php echo __("modul3Page.screens.screen_15.description1"); ?> </p>
                                                                        <h4 class="mb-0"><?php echo __("modul3Page.screens.screen_15.subtitle"); ?></h4>
                                                                        <p><?php echo __("modul3Page.screens.screen_15.description2"); ?></p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-img">
                                                                        <figure><img src="images/box-modul-3-img-15.jpg" class="rounded"></figure>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="bg-img-text-con">
                                                                        <div class="bg-img-text-full">
                                                                            <div class="bg-img-text-img">
                                                                                <figure><img src="images/light-bulb.svg"></figure>
                                                                            </div>
                                                                            <div class="bg-img-text-text">
                                                                                <h4 class="mb-1"> <?php echo __("modul3Page.screens.screen_06.bg_info_box.title"); ?></h4>
                                                                                <ul>
                                                                                    <?php
                                                                                        $list = __("modul3Page.screens.screen_15.bg_info_box.list_items");
                                                                                        if (is_array($list)) {
                                                                                            foreach ($list as $item) {
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
                                                        </div>
                                                    </div>
                                                    <div class="slider-box-arrow sliderBoxDownArrow"><i class="bi bi-chevron-down"></i></div>
                                                </div>
                                                <div class="step-slide-box-item">
                                                    <div class="slider-box-arrow sliderBoxUpArrow"><i class="bi bi-chevron-up"></i></div>
                                                    <div class="step-slide-box-description-con">
                                                        <div class="step-slide-box-description-wrapper">
                                                            <div class="row align-items-center">
                                                                <div class="col-sm-12">
                                                                    <div class="icon-list-menu-con top-icon-list-menu top-second-icon-list-menu">
                                                                        <?php include 'commons/icon-list-menu.php'; ?>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-caption">
                                                                        <h2><?php echo __("modul3Page.screens.screen_16.title"); ?></h2>
                                                                        <p><?php echo __("modul3Page.screens.screen_16.description1"); ?></p>
                                                                        <p><?php echo __("modul3Page.screens.screen_16.description2"); ?></p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-img">
                                                                        <figure><img src="images/box-modul-3-img-16.jpg" class="rounded"></figure>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="bg-img-text-con">
                                                                        <div class="bg-img-text-full">
                                                                            <div class="bg-img-text-img">
                                                                                <figure><img src="images/light-bulb.svg"></figure>
                                                                            </div>
                                                                            <div class="bg-img-text-text">
                                                                                <h4 class="mb-1"><?php echo __("modul3Page.screens.screen_06.bg_info_box.title"); ?></h4>
                                                                                <ul>
                                                                                    <?php
                                                                                        $list = __("modul3Page.screens.screen_16.bg_info_box.list_items");
                                                                                        if (is_array($list)) {
                                                                                            foreach ($list as $item) {
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
                                                        </div>
                                                    </div>
                                                    <div class="slider-box-arrow sliderBoxDownArrow"><i class="bi bi-chevron-down"></i></div>
                                                </div>
                                                <div class="step-slide-box-item">
                                                    <div class="slider-box-arrow sliderBoxUpArrow"><i class="bi bi-chevron-up"></i></div>
                                                    <div class="step-slide-box-description-con">
                                                        <div class="step-slide-box-description-wrapper">
                                                            <div class="row align-items-center">
                                                                <div class="col-sm-12">
                                                                    <div class="icon-list-menu-con top-icon-list-menu top-second-icon-list-menu">
                                                                        <?php include 'commons/icon-list-menu.php'; ?>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-caption">
                                                                        <h2><?php echo __("modul3Page.screens.screen_17.title"); ?></h2>
                                                                        <p><?php echo __("modul3Page.screens.screen_17.description1"); ?></p>
                                                                        <p><?php echo __("modul3Page.screens.screen_17.description2"); ?></p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-img">
                                                                        <figure><img src="images/box-modul-3-img-17.jpg" class="rounded"></figure>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="bg-img-text-con">
                                                                        <div class="bg-img-text-full">
                                                                            <div class="bg-img-text-img">
                                                                                <figure><img src="images/light-bulb.svg"></figure>
                                                                            </div>
                                                                            <div class="bg-img-text-text">
                                                                                <h4> <?php echo __("modul3Page.screens.screen_06.bg_info_box.title"); ?></h4>
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
                                                                <div class="col-sm-12">
                                                                    <div class="icon-list-menu-con top-icon-list-menu top-second-icon-list-menu">
                                                                        <?php include 'commons/icon-list-menu.php'; ?>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-caption">
                                                                        <h2><?php echo __("modul3Page.screens.screen_18.title"); ?></h2>
                                                                        <p><?php echo __("modul3Page.screens.screen_18.description1"); ?></p>
                                                                        <div class="inner-step-box active">
                                                                            <div class="icon-text-con">
                                                                                <div class="icon-text-left">
                                                                                    <img src="images/icon-dna.svg" alt="">
                                                                                </div>
                                                                                <div class="icon-text-right">
                                                                                    <h4><?php echo __("modul3Page.screens.screen_18.inner_box1.title"); ?></h4>
                                                                                    <ul>
                                                                                        <?php
                                                                                            $list = __("modul3Page.screens.screen_18.inner_box1.list_items");
                                                                                            if (is_array($list)) {
                                                                                                foreach ($list as $item) {
                                                                                                    echo "<li>$item</li>";
                                                                                                }
                                                                                            }
                                                                                            ?>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="inner-step-box">
                                                                            <div class="icon-text-con">
                                                                                <div class="icon-text-left">
                                                                                    <img src="images/icon-calendar.svg" alt="">
                                                                                </div>
                                                                                <div class="icon-text-right">
                                                                                    <h4><?php echo __("modul3Page.screens.screen_18.inner_box2.title"); ?></h4>
                                                                                    <ul>
                                                                                        <?php
                                                                                            $list = __("modul3Page.screens.screen_18.inner_box1.list_items");
                                                                                            if (is_array($list)) {
                                                                                                foreach ($list as $item) {
                                                                                                    echo "<li>$item</li>";
                                                                                                }
                                                                                            }
                                                                                            ?>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="inner-step-box">
                                                                            <div class="icon-text-con">
                                                                                <div class="icon-text-left">
                                                                                    <img src="images/icon-users-three.svg" alt="">
                                                                                </div>
                                                                                <div class="icon-text-right">
                                                                                    <h4><?php echo __("modul3Page.screens.screen_18.inner_box3.title"); ?></h4>
                                                                                    <ul>
                                                                                        <?php
                                                                                            $list = __("modul3Page.screens.screen_18.inner_box3.list_items");
                                                                                            if (is_array($list)) {
                                                                                                foreach ($list as $item) {
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
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-img">
                                                                        <figure><img src="images/box-modul-3-img-18.jpg" class="rounded"></figure>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="slider-box-arrow sliderBoxDownArrow"><i class="bi bi-chevron-down"></i></div>
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

let innerIndex = 0;

document.addEventListener("click", function(e){

    if(e.target.closest(".sliderBoxDownArrow")){

        let currentSlide = document.querySelectorAll('.step-slide-box-item')[current];
        let innerBoxes = currentSlide.querySelectorAll('.inner-step-box');

        if(innerBoxes.length){

            if(innerIndex < innerBoxes.length - 1){

                e.stopImmediatePropagation(); // 🔥 MAIN FIX

                innerBoxes[innerIndex].classList.remove("active");
                innerIndex++;

                innerBoxes[innerIndex].classList.add("active");
                return;
            }

            innerIndex = 0;
        }
    }

});


document.addEventListener("click", function(e){

    if(e.target.closest(".sliderBoxUpArrow")){

        let currentSlide = document.querySelectorAll('.step-slide-box-item')[current];
        let innerBoxes = currentSlide.querySelectorAll('.inner-step-box');

        if(innerBoxes.length){

            if(innerIndex > 0){

                e.stopImmediatePropagation(); // 🔥 MAIN FIX

                innerBoxes[innerIndex].classList.remove("active");
                innerIndex--;

                innerBoxes[innerIndex].classList.add("active");
                return;
            }

            innerIndex = 0;
        }
    }

});
</script>