<?php include 'commons/header.php'; ?>
<section>
    <div class="container-fluid section-padding step-box-con">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-top-caption">
                        <h1><?php echo __("homePage.title"); ?></h1>
                        <p><?php echo __("homePage.description"); ?></p>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="step-box">
                        <div class="row">
                            <div class="colo-sm-12">
                                <div class="step-box-caption">
                                    <h4><?php echo __("homePage.module_section_title"); ?></h4>
                                    <div class="progress modul-progressbar" role="progressbar" aria-label="Success example" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar" style="width: 20%"></div>
                                        <div class="modul-progressbar-count"> 20%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="colo-sm-12">
                                <div class="step-box-list-con">
                                    <div class="row">
                                        <div class="col-lg-6 d-flex">
                                            <div class="step-box-list-col same-box completed">
                                                <figure><img src="images/box-modul-1-img-1.jpg"/></figure>
                                                <div class="step-box-list-caption">
                                                    <div class="step-box-list-title">
                                                        <h5><?php echo __("homePage.module_1_title"); ?></h5>
                                                        <p><?php echo __("common.locked"); ?></p>
                                                    </div>
                                                    <div class="step-box-list-btn">
                                                        <a href="<?= base_url() ?>modul-1" class="btn"><?php echo __("common.try_again"); ?> <i class="bi bi-arrow-right-circle"></i> </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 d-flex">
                                            <div class="step-box-list-col same-box completed">
                                                <figure><img src="images/box-modul-2-img-1.jpg"/></figure>
                                                <div class="step-box-list-caption">
                                                    <div class="step-box-list-title">
                                                        <h5><?php echo __("homePage.module_2_title"); ?></h5>
                                                        <p><?php echo __("common.locked"); ?></p>
                                                    </div>
                                                    <div class="step-box-list-btn">
                                                        <a href="<?= base_url() ?>modul-2" class="btn"><?php echo __("common.try_again"); ?> <i class="bi bi-arrow-right-circle"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 d-flex">
                                            <div class="step-box-list-col same-box active">
                                                <figure><img src="images/box-modul-3-img-1.jpg"/></figure>
                                                <div class="step-box-list-caption">
                                                    <div class="step-box-list-title">
                                                        <h5><?php echo __("homePage.module_3_title"); ?></h5>
                                                        <p><?php echo __("common.locked"); ?></p>
                                                    </div>
                                                    <div class="step-box-list-btn">
                                                        <a href="<?= base_url() ?>modul-3" class="btn"><?php echo __("common.start_now"); ?> <i class="bi bi-arrow-right-circle"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 d-flex">
                                            <div class="step-box-list-col same-box active">
                                                <figure><img src="images/box-modul-4-img-1.jpg"/></figure>
                                                <div class="step-box-list-caption">
                                                    <div class="step-box-list-title">
                                                        <h5>
                                                            <h5><?php echo __("homePage.module_4_title"); ?></h5>
                                                        </h5>
                                                        <p><?php echo __("common.locked"); ?></p>
                                                    </div>
                                                    <div class="step-box-list-btn">
                                                        <a href="<?= base_url() ?>modul-4" class="btn"><?php echo __("common.start_now"); ?><i class="bi bi-arrow-right-circle"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 d-flex">
                                            <div class="step-box-list-col same-box active">
                                                <figure><img src="images/box-modul-5-img-1.jpg"/></figure>
                                                <div class="step-box-list-caption">
                                                    <div class="step-box-list-title">
                                                        <h5>
                                                            <h5><?php echo __("homePage.module_5_title"); ?></h5>
                                                        </h5>
                                                        <p><?php echo __("common.locked"); ?></p>
                                                    </div>
                                                    <div class="step-box-list-btn">
                                                        <a href="<?= base_url() ?>modul-5" class="btn"><?php echo __("common.start_now"); ?> <i class="bi bi-arrow-right-circle"></i></a>
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