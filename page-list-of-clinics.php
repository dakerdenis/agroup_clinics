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
        <div class="container container23">
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
                    </ul>




                    <div class="tab-content loc-tab-content">
                        <div id="pharmacylist" class="tab-pane fade in active">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus accusantium quia ipsa officia iusto maxime recusandae! Magni in quos blanditiis sunt incidunt voluptatibus natus, voluptates totam reiciendis doloribus tenetur enim?
                        </div>


                        <!------------------------------------------------------------------------------------------------------------------------------------------->


                        <div id="clinicslist" class="tab-pane fade in">
                                test
                        </div>


                        <!------------------------------------------------------------------------------------------------------------------------------------------->
>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <?php get_footer(); ?>
    <style>
        .container{
            width: auto;
            visibility: hidden;
        }
        .container23{
            visibility:visible;
        }
        .footer{
            display: none;
            visibility: hidden;
        }
        .navbar {
            display: none;
            visibility: hidden;
        }
        .main-cover{
            display: none;
            visibility: hidden;
        }
    </style>
</body>

</html>