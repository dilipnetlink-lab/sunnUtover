<?php include 'commons/header.php'; ?>
<section>
    <div class="container-fluid section-padding page-box-con">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-box-full-con">
                        <div class="page-box-full-col">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="page-back-btn"> 
                                        <a href="<?= base_url() ?>" class="btn btn-light btn-exit-icon"> <span> <?php echo __("common.exit"); ?> </span></a>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="page-title-del-box-full">
                                        <div class="page-title-del-box-left">
                                            <h1><?php echo __("modul4Page.main_title"); ?></h1>
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
                                                                            <h2><?php echo __("modul4Page.screens.screen_01.title"); ?></h2>
                                                                            <p> <?php echo __("modul4Page.screens.screen_01.description1"); ?> </p>
                                                                            <ul>
                                                                                <?php
                                                                                    $list = __("modul4Page.screens.screen_01.list_items1");
                                                                                    if(is_array($list)){
                                                                                        foreach($list as $item){
                                                                                            echo "<li>$item</li>";
                                                                                        }   
                                                                                    }
                                                                                    ?>
                                                                            </ul>
                                                                            <p><?php echo __("modul4Page.screens.screen_01.description2"); ?></p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12 col-md-12 col-lg-6">
                                                                        <div class="step-slide-box-img">
                                                                            <figure><img src="images/box-modul-4-img-1.jpg" class="rounded"/></figure>
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
                                                                    <div class="col-sm-12 col-md-12 col-lg-6">
                                                                        <div class="step-slide-box-caption"> 
                                                                            <h2><?php echo __("modul4Page.screens.screen_02.title"); ?></h2>
                                                                            <ul>
                                                                                <?php
                                                                                    $list = __("modul4Page.screens.screen_02.list_items1");
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
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="bg-img-text-con">
                                                                            <div class="bg-img-text-full">
                                                                                <div class="bg-img-text-img">
                                                                                    <figure><img src="images/light-bulb.svg"></figure>
                                                                                </div>
                                                                                <div class="bg-img-text-text">
                                                                                    <h4><strong><?php echo __("modul4Page.screens.screen_02.bg_info_box.title"); ?></strong></h4>
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
                                                                    <div class="col-sm-12 col-md-12 col-lg-5">
                                                                        <div class="step-slide-box-caption">
                                                                            <h2><?php echo __("modul4Page.screens.screen_03.title"); ?></h2>
                                                                            <p> <?php echo __("modul4Page.screens.screen_03.description1"); ?> </p> 
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12 col-md-12 col-lg-7">
                                                                        <div class="step-slide-box-img">
                                                                            <div class="table-line-white-bg"> 
                                                                                <div class="table-responsive">
                                                                                    <table>
                                                                                        <tbody>
                                                                                            <?php
                                                                                            $table = __("modul4Page.screens.screen_03.table");

                                                                                            if(isset($table['headers'])){
                                                                                                echo '<tr>';
                                                                                                echo '<th class="w-35">'.$table['headers'][0].'</th>';
                                                                                                echo '<th class="w-65">'.$table['headers'][1].'</th>';
                                                                                                echo '</tr>';
                                                                                            }

                                                                                            if(isset($table['rows']) && is_array($table['rows'])){
                                                                                                foreach($table['rows'] as $row){
                                                                                                    echo '<tr>';
                                                                                                    echo '<td>'.$row['col1'].'</td>';
                                                                                                    echo '<td>'.$row['col2'].'</td>';
                                                                                                    echo '</tr>';
                                                                                                }
                                                                                            }
                                                                                            ?>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="bg-img-text-con">
                                                                            <div class="bg-img-text-full">
                                                                                <div class="bg-img-text-img">
                                                                                    <figure><img src="images/light-bulb.svg"></figure>
                                                                                </div>
                                                                                <div class="bg-img-text-text">
                                                                                    <h4><strong><?php echo __("modul4Page.screens.screen_03.bg_info_box.title"); ?></strong></h4>
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
                                                                    <div class="col-sm-12 col-md-12 col-lg-5">
                                                                        <div class="step-slide-box-caption">
                                                                            <h2><?php echo __("modul4Page.screens.screen_04.title"); ?></h2>
                                                                            <p> <?php echo __("modul4Page.screens.screen_04.description1"); ?> </p> 
                                                                            <ul>
                                                                                <?php
                                                                                    $list = __("modul4Page.screens.screen_04.list_items1");
                                                                                    if(is_array($list)){
                                                                                        foreach($list as $item){
                                                                                            echo "<li>$item</li>";
                                                                                        }   
                                                                                    }
                                                                                ?>
                                                                            </ul> 
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12 col-md-12 col-lg-7">
                                                                        <div class="step-slide-box-img">
                                                                            <div class="table-line-white-bg"> 
                                                                                <div class="table-responsive">
                                                                                    <table>
                                                                                        <tbody>
                                                                                            <?php
                                                                                            $table = __("modul4Page.screens.screen_04.table");

                                                                                            if(isset($table['headers'])){
                                                                                                echo '<tr>';
                                                                                                echo '<th class="w-35">'.$table['headers'][0].'</th>';
                                                                                                echo '<th class="w-65">'.$table['headers'][1].'</th>';
                                                                                                echo '</tr>';
                                                                                            }

                                                                                            if(isset($table['rows']) && is_array($table['rows'])){
                                                                                                foreach($table['rows'] as $row){
                                                                                                    echo '<tr>';
                                                                                                    echo '<td>'.$row['col1'].'</td>';
                                                                                                    echo '<td>'.$row['col2'].'</td>';
                                                                                                    echo '</tr>';
                                                                                                }
                                                                                            }
                                                                                            ?>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="bg-img-text-con">
                                                                            <div class="bg-img-text-full">
                                                                                <div class="bg-img-text-img">
                                                                                    <figure><img src="images/light-bulb.svg"></figure>
                                                                                </div>
                                                                                <div class="bg-img-text-text">
                                                                                    <h4><strong> <?php echo __("modul4Page.screens.screen_04.bg_info_box.title"); ?> </strong></h4>
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
                                                                        <div class="step-slide-box-caption chackbox-list-ul">
                                                                            <h2><?php echo __("modul4Page.screens.screen_05.title"); ?></h2> 
                                                                            <h4><?php echo __("modul4Page.screens.screen_05.subtitle"); ?></h4>
                                                                            <ul>
                                                                                <?php
                                                                                $leftList = __("modul4Page.screens.screen_05.checkbox_list.left");

                                                                                if(is_array($leftList)){
                                                                                    $i = 1;
                                                                                    foreach($leftList as $item){
                                                                                        echo '<li class="form-check">
                                                                                                <input class="form-check-input" type="checkbox" id="forebygging-check-'.$i.'">
                                                                                                <label for="forebygging-check-'.$i.'">'.$item.'</label>
                                                                                            </li>';
                                                                                        $i++;
                                                                                    }
                                                                                }
                                                                                ?>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12 col-md-12 col-lg-6">
                                                                        <div class="step-slide-box-caption chackbox-list-ul">
                                                                            <ul>
                                                                                <?php
                                                                                $rightList = __("modul4Page.screens.screen_05.checkbox_list.right");

                                                                                if(is_array($rightList)){
                                                                                    $i = count($leftList) + 1;
                                                                                    foreach($rightList as $item){
                                                                                        echo '<li class="form-check">
                                                                                                <input class="form-check-input" type="checkbox" id="forebygging-check-'.$i.'">
                                                                                                <label class="form-check-label" for="forebygging-check-'.$i.'">'.$item.'</label>
                                                                                            </li>';
                                                                                        $i++;
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
                                                                                    <h4><strong> <?php echo __("modul4Page.screens.screen_05.bg_info_box.title"); ?></strong></h4>
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
                                                                    <div class="col-sm-12 col-md-12 col-lg-7">
                                                                        <div class="step-slide-box-caption">
                                                                            <h2><?php echo __("modul4Page.screens.screen_06.title"); ?></h2> 
                                                                            <p><?php echo __("modul4Page.screens.screen_06.description1"); ?></p>
                                                                            <p><?php echo __("modul4Page.screens.screen_06.description2"); ?></p>
                                                                            <p><?php echo __("modul4Page.screens.screen_06.description3"); ?></p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12 col-md-12 col-lg-5">
                                                                        <div class="step-slide-box-img">
                                                                            <figure><img src="images/box-modul-4-img-6.png"/></figure>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="bg-img-text-con">
                                                                            <div class="bg-img-text-full">
                                                                                <div class="bg-img-text-img">
                                                                                    <figure><img src="images/light-bulb.svg"></figure>
                                                                                </div>
                                                                                <div class="bg-img-text-text">
                                                                                    <h4><strong> <?php echo __("modul4Page.screens.screen_06.bg_info_box.title"); ?></strong></h4>
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
                                                                    <div class="col-sm-12 col-md-12 col-lg-5 col-xl-4">
                                                                        <div class="step-slide-box-caption">
                                                                            <h2><?php echo __("modul4Page.screens.screen_07.title"); ?></h2>
                                                                            <p class="mb-1"><?php echo __("modul4Page.screens.screen_07.description1"); ?></p>
                                                                            <ul>
                                                                                <?php
                                                                                    $list = __("modul4Page.screens.screen_07.list_items1");
                                                                                    if(is_array($list)){
                                                                                        foreach($list as $item){
                                                                                            echo "<li>$item</li>";
                                                                                        }   
                                                                                    }
                                                                                    ?>
                                                                            </ul> 
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12 col-md-12 col-lg-7 col-xl-8">
                                                                        <div class="step-slide-box-img">
                                                                            <div class="table-line-white-bg"> 
                                                                                <div class="table-responsive">
                                                                                    <?php
                                                                                        $table = __("modul4Page.screens.screen_07.weekly_table");

                                                                                        if($table){
                                                                                            echo '<table><tbody>';

                                                                                            // HEADER
                                                                                            if(isset($table['headers'])){
                                                                                                echo '<tr>';
                                                                                                foreach($table['headers'] as $head){
                                                                                                    echo '<th class="w-10">'.$head.'</th>';
                                                                                                }
                                                                                                echo '</tr>';
                                                                                            }

                                                                                            // ROWS
                                                                                            if(isset($table['rows'])){
                                                                                                foreach($table['rows'] as $row){
                                                                                                    echo '<tr>';

                                                                                                    foreach($row as $cell){

                                                                                                        echo '<td>';

                                                                                                        // If cell is object (energy block)
                                                                                                        if(is_array($cell) && isset($cell['text'])){
                                                                                                            echo 'Energibehov:<br/>
                                                                                                                <div class="text-center mt-2">
                                                                                                                    <strong>'.$cell['text'].'</strong><br/>
                                                                                                                    <img class="mt-1" src="'.$cell['icon'].'" />
                                                                                                                </div>';
                                                                                                        }
                                                                                                        // normal text
                                                                                                        else{
                                                                                                            echo $cell;
                                                                                                        }

                                                                                                        echo '</td>';
                                                                                                    }

                                                                                                    echo '</tr>';
                                                                                                }
                                                                                            }

                                                                                            echo '</tbody></table>';
                                                                                        }
                                                                                        ?>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="bg-img-text-con">
                                                                            <div class="bg-img-text-full">
                                                                                <div class="bg-img-text-img">
                                                                                    <figure><img src="images/light-bulb.svg"></figure>
                                                                                </div>
                                                                                <div class="bg-img-text-text">
                                                                                    <h4><strong> <?php echo __("modul4Page.screens.screen_07.bg_info_box.title"); ?></strong></h4>
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
                                                                            <h2><?php echo __("modul4Page.screens.screen_08.title"); ?></h2>
                                                                            <p class="mb-1"><?php echo __("modul4Page.screens.screen_08.description1"); ?> </p>
                                                                            <ul>
                                                                                <?php
                                                                                    $list = __("modul4Page.screens.screen_08.list_items1");
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
                                                                        <div class="step-slide-box-caption icon-text-ul">
                                                                            <ul>
                                                                                <?php
                                                                                $iconList = __("modul4Page.screens.screen_08.icon_list_items");

                                                                                if(is_array($iconList)){
                                                                                    foreach($iconList as $item){
                                                                                        $icon = $item['icon'];
                                                                                        $text = $item['text'];

                                                                                        echo '<li>
                                                                                                <span class="icon-text-img">
                                                                                                    <img src="'.$icon.'">
                                                                                                </span>
                                                                                                <span class="icon-text-title">'.$text.'</span>
                                                                                            </li>';
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
                                                                                    <h4><strong> <?php echo __("modul4Page.screens.screen_08.bg_info_box.title"); ?></strong></h4>
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
                                                                            <h2><?php echo __("modul4Page.screens.screen_09.title"); ?></h2>
                                                                            <ul>
                                                                                <?php
                                                                                    $list = __("modul4Page.screens.screen_09.sub_list_items1");
                                                                                    
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
                                                                            <figure><img class="rounded" src="images/box-modul-4-img-9.jpg"/></figure>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="bg-img-text-con">
                                                                            <div class="bg-img-text-full">
                                                                                <div class="bg-img-text-img">
                                                                                    <figure><img src="images/light-bulb.svg"></figure>
                                                                                </div>
                                                                                <div class="bg-img-text-text">
                                                                                    <h4><strong><?php echo __("modul4Page.screens.screen_09.bg_info_box.title"); ?></strong></h4>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="slider-box-arrow sliderBoxDownArrow"><i class="bi bi-chevron-down"></i></div>
                                                    </div>
                                                    <div class="step-slide-box-item" id="role-selection-slide">
                                                        <div class="slider-box-arrow sliderBoxUpArrow"><i class="bi bi-chevron-up"></i></div>
                                                        <div class="step-slide-box-description-con">
                                                            <div class="step-slide-box-description-wrapper">
                                                                <div class="row align-items-center">
                                                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                                                        <div class="step-slide-box-caption">
                                                                            <h2><?php echo __("modul4Page.screens.screen_10.title"); ?></h2> 
                                                                            <h3 class="fw-normal"><?php echo __("modul4Page.screens.screen_10.subtitle"); ?></h3>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                                                        <div class="step-slide-box-img">
                                                                            <div class="row align-items-center justify-content-around">
                                                                                <div class="col-sm-6 col-md-4 col-lg-3 text-center">
                                                                                    <div class="circle-img-caption-box-con open-utover">
                                                                                        <figure class="circle-img-caption-box-img">
                                                                                            <img src="images/box-modul-4-img-10-a.jpg"/>                                                                                        
                                                                                        </figure>
                                                                                        <div class="circle-img-caption-box-caption">
                                                                                            <h3><?php echo __("modul4Page.screens.screen_10.cir_text_img_list.title1"); ?></h3>
                                                                                            <p>(<?php echo __("common.tap_to_see_tips"); ?>)</p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-6 col-md-4 col-lg-3 text-center">
                                                                                    <div class="circle-img-caption-box-con open-trener">
                                                                                        <figure class="circle-img-caption-box-img">
                                                                                            <img src="images/box-modul-4-img-10-b.jpg"/>                                                                                        
                                                                                        </figure>
                                                                                        <div class="circle-img-caption-box-caption">
                                                                                            <h3><?php echo __("modul4Page.screens.screen_10.cir_text_img_list.title2"); ?></h3>
                                                                                            <p>(<?php echo __("common.tap_to_see_tips"); ?>)</p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-6 col-md-4 col-lg-3 text-center">
                                                                                    <div class="circle-img-caption-box-con open-forelder circle-img-caption-img-not">
                                                                                        <figure class="circle-img-caption-box-img"> </figure>
                                                                                        <div class="circle-img-caption-box-caption">
                                                                                            <h3><?php echo __("modul4Page.screens.screen_10.cir_text_img_list.title3"); ?></h3>
                                                                                            <p>(<?php echo __("common.tap_to_see_tips"); ?>)</p>
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
                                                    <div class="step-slide-box-item" id="utover-slide">
                                                        <div class="slider-box-arrow go-to-role"><i class="bi bi-chevron-up"></i></div>
                                                        <div class="step-slide-box-description-con">
                                                            <div class="step-slide-box-description-wrapper">
                                                                <div class="row align-items-center">
                                                                    <div class="col-sm-12 col-md-12 col-lg-6">
                                                                        <div class="step-slide-box-caption">
                                                                            <h2><?php echo __("modul4Page.screens.screen_11.title"); ?></h2>  
                                                                            <ul>
                                                                                <?php
                                                                                    $list = __("modul4Page.screens.screen_11.list_items1");
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
                                                                            <figure class="circle-img-box"><img src="images/box-modul-4-img-10-a.jpg"></figure>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="bg-img-text-con">
                                                                            <div class="bg-img-text-full">
                                                                                <div class="bg-img-text-img">
                                                                                    <figure><img src="images/light-bulb.svg"></figure>
                                                                                </div>
                                                                                <div class="bg-img-text-text">
                                                                                    <h4><strong> <?php echo __("modul4Page.screens.screen_11.bg_info_box.title"); ?></strong></h4>
                                                                                    <h4> <?php echo __("modul4Page.screens.screen_11.bg_info_box.description"); ?></h4>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="slider-box-arrow go-to-quiz"><i class="bi bi-chevron-down"></i></div>
                                                    </div>
                                                    <div class="step-slide-box-item" id="trener-slide">
                                                        <div class="slider-box-arrow go-to-role"><i class="bi bi-chevron-up"></i></div>
                                                        <div class="step-slide-box-description-con">
                                                            <div class="step-slide-box-description-wrapper">
                                                                <div class="row align-items-center">
                                                                    <div class="col-sm-12 col-md-12 col-lg-6">
                                                                        <div class="step-slide-box-caption">
                                                                            <h2 class="mb-1"><?php echo __("modul4Page.screens.screen_12.title"); ?></h2> 
                                                                            <h4><i><?php echo __("modul4Page.screens.screen_12.subtitle"); ?></i></h4>
                                                                            <ul>
                                                                                <?php
                                                                                    $list = __("modul4Page.screens.screen_12.list_items1");
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
                                                                            <figure class="circle-img-box"><img src="images/box-modul-4-img-10-b.jpg"></figure>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="bg-img-text-con">
                                                                            <div class="bg-img-text-full">
                                                                                <div class="bg-img-text-img">
                                                                                    <figure><img src="images/light-bulb.svg"></figure>
                                                                                </div>
                                                                                <div class="bg-img-text-text">
                                                                                    <h4><strong> <?php echo __("modul4Page.screens.screen_12.bg_info_box.title"); ?></strong></h4>
                                                                                    <h4> <?php echo __("modul4Page.screens.screen_12.bg_info_box.description"); ?></h4>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="slider-box-arrow go-to-quiz"><i class="bi bi-chevron-down"></i></div>
                                                    </div>
                                                    <div class="step-slide-box-item" id="forelder-slide">
                                                        <div class="slider-box-arrow go-to-role"><i class="bi bi-chevron-up"></i></div>
                                                        <div class="step-slide-box-description-con">
                                                            <div class="step-slide-box-description-wrapper">
                                                                <div class="row align-items-center">
                                                                    <div class="col-sm-12 col-md-12 col-lg-7 col-xl-8">
                                                                        <div class="step-slide-box-caption">
                                                                            <h2><?php echo __("modul4Page.screens.screen_13.title"); ?></h2>  
                                                                            <h4> <i><?php echo __("modul4Page.screens.screen_13.subtitle"); ?>  </i> </h4>
                                                                            <ul>
                                                                                <?php
                                                                                    $list = __("modul4Page.screens.screen_13.list_items1");
                                                                                    if(is_array($list)){
                                                                                        foreach($list as $item){
                                                                                            echo "<li>$item</li>";
                                                                                        }   
                                                                                    }
                                                                                    ?>
                                                                            </ul> 
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12 col-md-12 col-lg-5 col-xl-4">
                                                                        <div class="step-slide-box-img">
                                                                            <figure class="circle-img-box"></figure>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="bg-img-text-con">
                                                                            <div class="bg-img-text-full">
                                                                                <div class="bg-img-text-img">
                                                                                    <figure><img src="images/light-bulb.svg"></figure>
                                                                                </div>
                                                                                <div class="bg-img-text-text">
                                                                                    <h4><strong> <?php echo __("modul4Page.screens.screen_13.bg_info_box.title"); ?></strong></h4>
                                                                                    <h4> <?php echo __("modul4Page.screens.screen_13.bg_info_box.description"); ?></h4>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="slider-box-arrow go-to-quiz"><i class="bi bi-chevron-down"></i></div>
                                                    </div>
                                                    <div class="step-slide-box-item" id="quiz-slide-1">
                                                        <div class="slider-box-arrow quiz-prev"><i class="bi bi-chevron-up"></i></div>
                                                        <div class="step-slide-box-description-con">
                                                            <div class="step-slide-box-description-wrapper">
                                                                <div class="row align-items-center">
                                                                    <div class="col-sm-12 col-md-11 col-lg-10 col-xl-9 col-xxl-8">
                                                                        <div class="step-slide-box-caption">
                                                                            <h2><?php echo __("modul4Page.screens.screen_14.title"); ?></h2>
                                                                            <p><?php echo __("modul4Page.screens.screen_14.question"); ?></p>
                                                                            <div class="radio-label-grop">
                                                                                <input class="radio-input" type="radio" name="sliderBoxSlide1Radio" id="sliderBoxSlide1Radio1">
                                                                                <label class="radio-label" for="sliderBoxSlide1Radio1">
                                                                                    <?php echo __("modul4Page.screens.screen_14.options1"); ?>
                                                                                </label>
                                                                            </div>
                                                                            <div class="radio-label-grop">
                                                                                <input class="radio-input" type="radio" name="sliderBoxSlide1Radio" id="sliderBoxSlide1Radio2">
                                                                                <label class="radio-label" for="sliderBoxSlide1Radio2">
                                                                                    <?php echo __("modul4Page.screens.screen_14.options2"); ?>
                                                                                </label>
                                                                            </div>
                                                                            <div class="radio-label-grop">
                                                                                <input class="radio-input" type="radio" name="sliderBoxSlide1Radio" id="sliderBoxSlide1Radio3">
                                                                                <label class="radio-label" for="sliderBoxSlide1Radio3">
                                                                                    <?php echo __("modul4Page.screens.screen_14.options3"); ?>
                                                                                </label>
                                                                            </div>
                                                                            <div class="radio-label-grop">
                                                                                <input class="radio-input" type="radio" name="sliderBoxSlide1Radio" id="sliderBoxSlide1Radio4">
                                                                                <label class="radio-label" for="sliderBoxSlide1Radio4">
                                                                                    <?php echo __("modul4Page.screens.screen_14.options4"); ?>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                                                        <div class="step-slide-box-btn step-box-btn-form text-center"> 
                                                                            <button type="submit" class="btn quiz-next"><span>  <?php echo __("common.next"); ?> </span></button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="step-slide-box-item">
                                                        <div class="slider-box-arrow quiz-prev"><i class="bi bi-chevron-up"></i></div>
                                                        <div class="step-slide-box-description-con">
                                                            <div class="step-slide-box-description-wrapper">
                                                                <div class="row align-items-center">
                                                                    <div class="col-sm-12 col-md-11 col-lg-10 col-xl-9 col-xxl-8">
                                                                        <div class="step-slide-box-caption">
                                                                            <h2><?php echo __("modul4Page.screens.screen_15.title"); ?></h2>
                                                                            <p><?php echo __("modul4Page.screens.screen_15.question"); ?></p>
                                                                            <div class="radio-label-grop">
                                                                                <input class="radio-input" type="radio" name="sliderBoxSlide2Radio" id="sliderBoxSlide2Radio1">
                                                                                <label class="radio-label" for="sliderBoxSlide2Radio1">
                                                                                    <?php echo __("modul4Page.screens.screen_15.options1"); ?>
                                                                                </label>
                                                                            </div>
                                                                            <div class="radio-label-grop">
                                                                                <input class="radio-input" type="radio" name="sliderBoxSlide2Radio" id="sliderBoxSlide2Radio2">
                                                                                <label class="radio-label" for="sliderBoxSlide2Radio2">
                                                                                    <?php echo __("modul4Page.screens.screen_15.options2"); ?>
                                                                                </label>
                                                                            </div>
                                                                            <div class="radio-label-grop">
                                                                                <input class="radio-input" type="radio" name="sliderBoxSlide2Radio" id="sliderBoxSlide2Radio3">
                                                                                <label class="radio-label" for="sliderBoxSlide2Radio3">
                                                                                    <?php echo __("modul4Page.screens.screen_15.options3"); ?>
                                                                                </label>
                                                                            </div>
                                                                            <div class="radio-label-grop">
                                                                                <input class="radio-input" type="radio" name="sliderBoxSlide2Radio" id="sliderBoxSlide2Radio4">
                                                                                <label class="radio-label" for="sliderBoxSlide2Radio4">
                                                                                    <?php echo __("modul4Page.screens.screen_15.options4"); ?>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                                                        <div class="step-slide-box-btn step-box-btn-form text-center"> 
                                                                            <button type="submit" class="btn quiz-next"><span>  <?php echo __("common.next"); ?> </span></button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="step-slide-box-item" >
                                                        <div class="slider-box-arrow quiz-prev"><i class="bi bi-chevron-up"></i></div>
                                                        <div class="step-slide-box-description-con">
                                                            <div class="step-slide-box-description-wrapper">
                                                                <div class="row align-items-center">
                                                                    <div class="col-sm-12 col-md-11 col-lg-10 col-xl-9 col-xxl-8">
                                                                        <div class="step-slide-box-caption">
                                                                            <h2><?php echo __("modul4Page.screens.screen_16.title"); ?></h2>
                                                                            <p><?php echo __("modul4Page.screens.screen_16.question"); ?></p>
                                                                            <div class="radio-label-grop radio-error">
                                                                                <input class="radio-input" type="radio" name="sliderBoxSlide3Radio" id="sliderBoxSlide3Radio1">
                                                                                <label class="radio-label" for="sliderBoxSlide3Radio1">
                                                                                    <?php echo __("modul4Page.screens.screen_16.options1"); ?>
                                                                                </label>
                                                                            </div>
                                                                            <div class="radio-label-grop radio-success">
                                                                                <input class="radio-input" type="radio" name="sliderBoxSlide3Radio" id="sliderBoxSlide3Radio2">
                                                                                <label class="radio-label" for="sliderBoxSlide3Radio2">
                                                                                    <?php echo __("modul4Page.screens.screen_16.options2"); ?>
                                                                                </label>
                                                                            </div>
                                                                            <div class="radio-label-grop radio-error">
                                                                                <input class="radio-input" type="radio" name="sliderBoxSlide3Radio" id="sliderBoxSlide3Radio3">
                                                                                <label class="radio-label" for="sliderBoxSlide3Radio3">
                                                                                    <?php echo __("modul4Page.screens.screen_16.options3"); ?>
                                                                                </label>
                                                                            </div>
                                                                            <div class="radio-label-grop radio-error">
                                                                                <input class="radio-input" type="radio" name="sliderBoxSlide3Radio" id="sliderBoxSlide3Radio4">
                                                                                <label class="radio-label" for="sliderBoxSlide3Radio4">
                                                                                    <?php echo __("modul4Page.screens.screen_16.options4"); ?>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                                                        <div class="step-slide-box-btn step-box-btn-form text-center"> 
                                                                            <button type="submit" class="btn quiz-next"><span>  <?php echo __("common.next"); ?> </span></button>
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
    </div>
</section>
<?php include 'commons/footer.php'; ?>

<script>
$(document).ready(function(){

    // ===== GLOBAL STATE =====
    let slideHistory = [];
    let selectedRole = null;

    // ===== SHOW SLIDE =====
    function showSlide(index, isBack = false){

        let currentIndex = $('.step-slide-box-item:visible').index();

        if(!isBack && currentIndex !== -1){
            slideHistory.push(currentIndex);
        }

        $('.step-slide-box-item').hide();
        $('.step-slide-box-item').eq(index).show();

        $('html, body').animate({
            scrollTop: $('.step-slide-box-slider').offset().top
        }, 60);
    }

    // ===== INITIAL LOAD =====
    showSlide(0);

    // ===== IMAGE CLICK =====
    $('.open-utover').click(function(){
        selectedRole = 'utover';
        showSlide($('#utover-slide').index());
    });

    $('.open-trener').click(function(){
        selectedRole = 'trener';
        showSlide($('#trener-slide').index());
    });

    $('.open-forelder').click(function(){
        selectedRole = 'forelder';
        showSlide($('#forelder-slide').index());
    });

    // ===== GO TO QUIZ =====
    $('.go-to-quiz').click(function(){
        showSlide($('#quiz-slide-1').index());
    });

    // ===== QUIZ PREV (🔥 MAIN FIX) =====
    $(document).on('click', '.quiz-prev', function(){
        goBack();
    });

    function goBack(){
        if(slideHistory.length > 0){
            let prevIndex = slideHistory.pop();
            showSlide(prevIndex, true);
        }
    }

    // ===== ROLE BACK (KEEP SEPARATE) =====
    $('.go-to-role').click(function(){
        showSlide($('#role-selection-slide').index());
    });

    // ===== QUIZ NEXT =====
    $('.quiz-next').click(function(){

        let totalSlides = $('.step-slide-box-item').length;
        let current = $(this).closest('.step-slide-box-item').index();

        if (current === totalSlides - 1) {

            let path = window.location.pathname;

            if (path.includes('/no/')) {
                window.location.href = "/sunnUtover/no/";
            } else if (path.includes('/en/')) {
                window.location.href = "/sunnUtover/en/";
            } else {
                window.location.href = "/sunnUtover/";
            }

            return;
        }

        showSlide(current + 1);
    });

});
</script>