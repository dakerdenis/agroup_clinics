<?php // Template Name: List of clinics ?>

<!DOCTYPE html>
<html>

<body>

    <!-- class loc = list of clinics -->

    <?php get_header(); ?>

    <section class="main loc-main">
        <div class="main-cover loc-main-cover" style='background: url("<?php the_post_thumbnail_url() ?>");'></div>
    </section>
    <section class="list-detail loc-list-detail">
        <div class="container">
            <div class="container-list loc-container-list">
                <div class="row" style="margin:0px;">
                    <div class="col-sm-12">
                        <div class="page-title loc-page-title">
                            <h1><?php the_title() ?></h1>
                        </div>
                    </div>
                    
                    <ul class="nav nav-tabs loc-nav-tabs">
                        <li class="<?= $_GET['section'] == '1' ? 'active' : '' ?>"><a data-toggle="tab" href="#pharmacylist"><b><?php pll_e('List of pharmacies') ?></b></a></li>
                        <li class="<?= $_GET['section'] == '2' ? 'active' : '' ?>"><a data-toggle="tab" href="#clinicslist"><b><?php pll_e('List of clinics') ?></b></a></li>
                        <li class="<?= $_GET['section'] == '3' ? 'active' : '' ?>"><a data-toggle="tab" href="#opticianlist"><b><?php pll_e('List of optics') ?></b></a></li>
                    </ul>


                    <?php $pharmacies = Api::getObjects('10') ?>
                    <?php $clinics = Api::getObjects('11') ?>
                    <?php $opticians = Api::getObjects('12') ?>

                    <div class="tab-content loc-tab-content">
                        <div id="pharmacylist" class="tab-pane fade in active">
                            <div class="panel-group loc-panel-group" id="accordion">
                                
                                <?php foreach ($pharmacies as $pharmacy) : ?>
                                    <div class="panel panel-default loc-panel" data-lng="<?php echo $pharmacy['LNG'] ?>" data-lat="<?php echo $pharmacy['LAT'] ?>">
                                        <div class="panel-heading loc-page-title">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse_<?php echo $pharmacy['ID']  ?>"><b><?php echo $pharmacy['NAME'] ?></b><span class="caret loc-panel-group"></span></a>
                                            </h4>
                                        </div>
                                        <div id="collapse_<?php echo $pharmacy['ID']  ?>" class="panel-collapse collapse loc-panel-collapse">
                                            <ul class="panel-body loc-panel-body">
                                        
                                                <?php //var_dump($pharmacy['LAT']); echo "<br>"; ?>
                                                <?php //var_dump($pharmacy['LNG']); echo "<br>"; ?>


                                                <?php if (!empty($pharmacy['SCHEDULE'])) : ?>
                                                    <li><div><span class="loc-img"><img src="<?php templateDir() ?>/img/listofclinic-page/time.png"></span><span><?php echo $pharmacy['SCHEDULE'] ?></span></div></li>
                                                <?php endif; ?>

                                                <?php if (!empty($pharmacy['ADDRESS'])) : ?>
                                                    <li><div><span class="loc-img"><img src="<?php templateDir() ?>/img/listofclinic-page/map.png"></span><span><?php echo $pharmacy['ADDRESS'] ?></span></div></li>
                                                <?php endif; ?>

                                                <?php if (!empty($pharmacy['NUMBER'])) : ?>
                                                    <?php foreach($pharmacy['NUMBER'] as $number) : ?>
                                                        <li><div><span class="loc-img"><img src="<?php templateDir() ?>/img/listofclinic-page/city-phone.png"></span><span><?php echo $number ?></span></div></li>
                                                    <?php endforeach; ?>                                                    
                                                <?php endif; ?>
                                                
                                                <?php if (!empty($pharmacy['MOBILE'])) : ?>
                                                    <?php foreach($pharmacy['MOBILE'] as $mobile) : ?>
                                                        <li><div><span class="loc-img"><img src="<?php templateDir() ?>/img/listofclinic-page/phone.png"></span><span><?php echo $mobile ?></span></div> </li>
                                                    <?php endforeach; ?>
                                                <?php endif; ?>
                                            </ul>
                                        </div>
                                    </div>
                                <?php endforeach ?>
                            </div>

                            <div class="clinics-map loc-clinics-map">
                                <div id="map" style="height:400px; width:100%"></div>
                            </div>
                        </div>


                        <!------------------------------------------------------------------------------------------------------------------------------------------->


                        <div id="clinicslist" class="tab-pane fade in">

                            <div class="panel-group loc-panel-group" id="accordion2">
                                <?php foreach ($clinics as $clinic) : ?>
                                    <div class="panel panel-default loc-panel" data-lng="<?php echo $clinic['LNG'] ?>" data-lat="<?php echo $clinic['LAT'] ?>">
                                        <div class="panel-heading loc-page-title">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion2" href="#collapse_<?php echo $clinic['ID']  ?>"><b><?php echo $clinic['NAME'] ?></b><span class="caret loc-panel-group"></span></a>
                                            </h4>
                                        </div>
                                        <div id="collapse_<?php echo $clinic['ID']  ?>" class="panel-collapse collapse loc-panel-collapse">
                                            <ul class="panel-body loc-panel-body">
                                        
                                                <?php if (!empty($clinic['SCHEDULE'])) : ?>
                                                    <li><div><span class="loc-img"><img src="<?php templateDir() ?>/img/listofclinic-page/time.png"></span><span><?php echo $clinic['SCHEDULE'] ?></span></div></li>
                                                <?php endif; ?>

                                                <?php if (!empty($clinic['ADDRESS'])) : ?>
                                                    <li><div><span class="loc-img"><img src="<?php templateDir() ?>/img/listofclinic-page/map.png"></span><span><?php echo $clinic['ADDRESS'] ?></span></div></li>
                                                <?php endif; ?>

                                                <?php if (!empty($clinic['NUMBER'])) : ?>
                                                    <?php foreach($clinic['NUMBER'] as $number) : ?>
                                                        <li><div><span class="loc-img"><img src="<?php templateDir() ?>/img/listofclinic-page/city-phone.png"></span><span><?php echo $number ?></span></div></li>
                                                    <?php endforeach; ?>                                                    
                                                <?php endif; ?>
                                                
                                                <?php if (!empty($clinic['MOBILE'])) : ?>
                                                    <?php foreach($clinic['MOBILE'] as $mobile) : ?>
                                                        <li><div><span class="loc-img"><img src="<?php templateDir() ?>/img/listofclinic-page/phone.png"></span><span><?php echo $mobile ?></span></div> </li>
                                                    <?php endforeach; ?>
                                                <?php endif; ?>
                                            </ul>
                                        </div>
                                    </div>
                                <?php endforeach ?>
                            </div>

                            <div class="clinics-map loc-clinics-map">
                                <div id="map-clinics" style="height:400px; width:100%"></div>
                            </div>
                        </div>


                        <!------------------------------------------------------------------------------------------------------------------------------------------->


                        <div id="opticianlist" class="tab-pane fade in">
                            
                                        <div class="panel-group loc-panel-group" id="accordion3">
                                                <?php foreach ($opticians as $optics) : ?>
                                                    <div class="panel panel-default loc-panel" data-lng="<?php echo $optics['LNG'] ?>" data-lat="<?php echo $optics['LAT'] ?>">
                                                        <div class="panel-heading loc-page-title">
                                                            <h4 class="panel-title">
                                                                <a data-toggle="collapse" data-parent="#accordion3" href="#collapse_<?php echo $optics['ID']  ?>"><b><?php echo $optics['NAME'] ?></b><span class="caret loc-panel-group"></span></a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapse_<?php echo $optics['ID']  ?>" class="panel-collapse collapse loc-panel-collapse">
                                                            <ul class="panel-body loc-panel-body">
                                                        
                                                                <?php if (!empty($optics['SCHEDULE'])) : ?>
                                                                    <li><div><span class="loc-img"><img src="<?php templateDir() ?>/img/listofclinic-page/time.png"></span><span><?php echo $optics['SCHEDULE'] ?></span></div></li>
                                                                <?php endif; ?>

                                                                <?php if (!empty($optics['ADDRESS'])) : ?>
                                                                    <li><div><span class="loc-img"><img src="<?php templateDir() ?>/img/listofclinic-page/map.png"></span><span><?php echo $optics['ADDRESS'] ?></span></div></li>
                                                                <?php endif; ?>

                                                                <?php if (!empty($optics['NUMBER'])) : ?>
                                                                    <?php foreach($optics['NUMBER'] as $number) : ?>
                                                                        <li><div><span class="loc-img"><img src="<?php templateDir() ?>/img/listofclinic-page/city-phone.png"></span><span><?php echo $number ?></span></div></li>
                                                                    <?php endforeach; ?>                                                    
                                                                <?php endif; ?>
                                                                
                                                                <?php if (!empty($optics['MOBILE'])) : ?>
                                                                    <?php foreach($optics['MOBILE'] as $mobile) : ?>
                                                                        <li><div><span class="loc-img"><img src="<?php templateDir() ?>/img/listofclinic-page/phone.png"></span><span><?php echo $mobile ?></span></div> </li>
                                                                    <?php endforeach; ?>
                                                                <?php endif; ?>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                <?php endforeach ?>
                                            </div>

                                            <div class="clinics-map loc-clinics-map">
                                                <div id="map-optics" style="height:400px; width:100%"></div>
                    
                                            </div>
                                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <?php get_footer(); ?>

</body>

</html>