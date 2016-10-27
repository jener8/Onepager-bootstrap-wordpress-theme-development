<?php
/*
Template Name: Front Page
*/
?>

<?php get_header(); ?>
</head>

<div id="site-wrapper">
<div class="bg"></div>
<header class="bg-greytransparent">

        <div id="introimg" width="100%">
            <div class="container" id="welcome">
                <row>
            <div  class="intro-text  col-xs-2 col-sm-1 text-right">
                        <img src="<?php echo get_template_directory_uri() ?>/img/patrick_logo_ICON.svg"   alt="intro" >
                    </div>
                    <div class="lead-txt  col-xs-10  col-sm-11">

                        <h1 class="txt" ><strong>N</strong><span>ETZWERKTECHNIK</span> <strong>M</strong><span>EDIENTECHNIK</span>  <strong>G</strong><span>EBÄUDETECHNIK</span></h1>


                    </div>


                </row>
                <div align="center" class="small-text">

                    <p class="welcome-paragraph-small text-center"><strong><span><?php echo substr(sanitize_text_field( get_theme_mod( 'section_header_maintitle' )), 0, 51); ?></span></strong>
                    </p>




                </div>

            </div>


        </div>

        <div class="main-image">
            <div class="welcome-paragraph text-center">
            <h3 class=""><?php echo substr(sanitize_text_field( get_theme_mod( 'section_header_maintitle' )), 0, 51); ?></h3><p class=" text-center"><strong>
                <?php echo substr(sanitize_text_field( get_theme_mod( 'section_header_smalltitle' )), 0, 77); ?>
            </strong></p>

            </div>


        </div>


    </header>

    
    <section class="termin call-to-action">
        <div class="container " id="termin">
            <div class="row">
                <div class="col-lg-12 lead-col termin-col text-center">

                    <div class="row">




                    <a href="#contact" class="btn btn-warning btn-xl wow tada"><?php echo substr(sanitize_text_field( get_theme_mod( 'section_header_button_name' )), 0, 21); ?></a>

                    <h4 class="bottom-space-1em" style="color:#fff"><?php echo substr(sanitize_text_field( get_theme_mod( 'section_header_button_text' )), 0, 51); ?></h4>

                </div>

            </div>
        </div>
        </div>
    </section>



    <section class="bg-white" id="welcome-services">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 text-center ">
                    <div class="service-box service-box01">
                        <i class="fa fa-4x fa-puzzle-piece wow bounceIn text-primary" aria-hidden="true"></i>
                        <h3><?php echo substr(sanitize_text_field( get_theme_mod( 'section_wa_title01' )), 0, 48); ?></h3>
                        <p class=""><?php echo substr(sanitize_text_field( get_theme_mod( 'section_wa_txt01' )), 0, 48); ?>
                            <br><?php echo substr(sanitize_text_field( get_theme_mod( 'section_wa_txt02' )), 0, 48); ?></p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6  text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-lock wow bounceIn text-primary" data-wow-delay=".1s"></i>
                        <h3><?php echo substr(sanitize_text_field( get_theme_mod( 'section_wb_title01' )), 0, 48); ?></h3>
                        <p class=""><?php echo substr(sanitize_text_field( get_theme_mod( 'section_wb_txt01' )), 0, 48); ?>
                            <br><?php echo substr(sanitize_text_field( get_theme_mod( 'section_wb_txt02' )), 0, 48); ?></p>


                    </div>
                </div>
                <div class="col-lg-6 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-graduation-cap wow bounceIn text-primary" data-wow-delay=".2s"></i>
                        <h3><?php echo substr(sanitize_text_field( get_theme_mod( 'section_wc_title01' )), 0, 48); ?></h3>
                        <p class=""><?php echo substr(sanitize_text_field( get_theme_mod( 'section_wc_txt01' )), 0, 48); ?>
                            <br><?php echo substr(sanitize_text_field( get_theme_mod( 'section_wc_txt02' )), 0, 48); ?></p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-server wow bounceIn text-primary" data-wow-delay=".3s"></i>
                        <h3><?php echo substr(sanitize_text_field( get_theme_mod( 'section_wd_title01' )), 0, 48); ?></h3>
                        <p class=""><?php echo substr(sanitize_text_field( get_theme_mod( 'section_wd_txt01' )), 0, 48); ?>
                            <br><?php echo substr(sanitize_text_field( get_theme_mod( 'section_wd_txt02' )), 0, 48); ?></p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="bg-dark" id="services">
        <div class="container">
            <div class="row ">

                <div class="col-lg-6 col-md-6 text-center boxOne">
                    <div class="service-box">
                        <i class="fa fa-4x fa-plug wow bounceIn text-primary" data-wow-delay=".1s"></i>
                        <h3><?php echo substr(sanitize_text_field( get_theme_mod( 'section_ba_title01' )), 0, 48); ?></h3>
                        <p class="text-muted"><?php echo substr(sanitize_text_field( get_theme_mod( 'section_ba_txt01' )), 0, 48); ?>
                            <br><?php echo substr(sanitize_text_field( get_theme_mod( 'section_ba_txt02' )), 0, 48); ?></p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 text-center boxOne">
                    <div class="service-box">
                        <i class="fa fa-4x fa-cubes wow bounceIn text-primary" data-wow-delay=".2s"></i>
                       <h3><?php echo substr(sanitize_text_field( get_theme_mod( 'section_bb_title01' )), 0, 48); ?></h3>
                        <p class="text-muted"><?php echo substr(sanitize_text_field( get_theme_mod( 'section_bb_txt01' )), 0, 48); ?>
                            <br><?php echo substr(sanitize_text_field( get_theme_mod( 'section_bb_txt02' )), 0, 48); ?></p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 text-center ">
                    <div class="service-box">
                        <i class="fa fa-4x fa-sitemap wow bounceIn text-primary" data-wow-delay=".3s"></i>
                        <h3><?php echo substr(sanitize_text_field( get_theme_mod( 'section_bc_title01' )), 0, 48); ?></h3>
                        <p class="text-muted"><?php echo substr(sanitize_text_field( get_theme_mod( 'section_bc_txt01' )), 0, 48); ?>
                            <br><?php echo substr(sanitize_text_field( get_theme_mod( 'section_bc_txt02' )), 0, 48); ?></p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 text-center ">
                    <div class="service-box">
                        <i class="fa fa-4x fa-life-ring wow bounceIn text-primary" data-wow-delay=".3s"></i>
                      <h3><?php echo substr(sanitize_text_field( get_theme_mod( 'section_bd_title01' )), 0, 48); ?></h3>
                        <p class="text-muted"><?php echo substr(sanitize_text_field( get_theme_mod( 'section_bd_txt01' )), 0, 48); ?>
                            <br><?php echo substr(sanitize_text_field( get_theme_mod( 'section_bd_txt02' )), 0, 48); ?></p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 text-center boxTwo">
                    <div class="service-box">
                        <i class="fa fa-4x fa-cloud-upload wow bounceIn text-primary" data-wow-delay=".3s"></i>
                        <h3><?php echo substr(sanitize_text_field( get_theme_mod( 'section_be_title01' )), 0, 48); ?></h3>
                        <p class="text-muted"><?php echo substr(sanitize_text_field( get_theme_mod( 'section_be_txt01' )), 0, 48); ?>
                            <br><?php echo substr(sanitize_text_field( get_theme_mod( 'section_be_txt02' )), 0, 48); ?></p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 text-center boxTwo">
                    <div class="service-box">
                        <i class="fa fa-4x fa-link wow bounceIn text-primary" data-wow-delay=".3s"></i>
                       <h3><?php echo substr(sanitize_text_field( get_theme_mod( 'section_ba_title01' )), 0, 48); ?></h3>
                        <p class="text-muted"><?php echo substr(sanitize_text_field( get_theme_mod( 'section_ba_txt01' )), 0, 48); ?>
                            <br><?php echo substr(sanitize_text_field( get_theme_mod( 'section_ba_txt02' )), 0, 48); ?></p>
                    </div>
                </div>
            </div>
        </div>


    </section>
<!--    <div class="divider"></div>-->
<img src="<?php echo get_template_directory_uri() ?>/img/logoline1.jpg" width="100%" alt="logos" id="ueberuns">


    <section id="nmgtech">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-1 text-left col-nmgtech">
                    <p class="nmg-title"><?php the_field('nmg_title', 21); ?></p>
                    <p class=""><?php the_field('nmg_text01', 21); ?></p>
                    <p class=""><?php the_field('nmg_text02', 21); ?></p>
                </div>
            </div>
        </div>

    </section>
 



    <img src="<?php echo get_template_directory_uri() ?>/img/logoline2.jpg" width="100%" alt="logos">



    <section class="bg-dark" id="fullservice">
        <div class="container text-center fullservice-container">
                <h4 class="lead"><?php the_field('fullservice_subtext', 21); ?></h4>
                <h1 class="largetxt"><?php the_field('fullservice_starktext', 21); ?></h1>
        </div>
    </section>




    <section class="no-padding bg-white" id="profile">
        <div class="container profile-container clearfix">
            <div class="row">

                <div class="col-lg-6 col-md-6 col-sm-12  col-lg-push-6 col-md-push-6  profile-col text-left">

                    <div class="text-center profil-title"> <b><?php the_field('profil_title', 37); ?></b></div>

                    <div>

                        <p class="text-muted first"><?php the_field('profil_text01', 37); ?><span style="white-space: nowrap"><a href="http://www.it-service-net.de/index.php?id=home">IT-Service-Net</a></span> , eines deutschlandweiten Verbundes von IT Spezialisten mit dem Charakter eines Systemhauses. Dies steigert die Leistungsfähigkeit des Unternehmens.</p>

                    <p class="text-muted second"><?php the_field('profil_text02', 37); ?></p>

                    <p class="text-muted third"><?php the_field('profil_text03', 37); ?></p>
                    </div>

                    <div class=" col-two-profile col-lg-12 col-md-12  col-sm-12  text-center">
<!--                        <h2><b>Einsam aber nicht Alleine</b></h2>-->
                        <a href="http://www.it-service-net.de/index.php?id=home" class="wow tada"><img src="<?php echo get_template_directory_uri() ?>/img/itnetlogo.png" alt="itlogo"></a>
                    </div>
                </div>



            </div>
        </div>
        <img src="<?php echo get_template_directory_uri() ?>/img/profile.jpg" class="profile-img" width="100%" alt="alt">


    </section>



    <section id="statement" class="txtColor-white">
        <div class="container text-center">
                <h1 id="dienst-h1"><?php the_field('loesung_haupttext', 37); ?></h1>
                <p class="bottom-space-1em loesunsp"><?php the_field('loesung_kleintext', 37); ?></p>
        </div>
        <div class="statement-pic"></div>
    </section>




    <section id="contact" class="bg-white ">
        <div class="container contact-container bg-dark">



                <div class="row">
                    <div class="col-md-4 text-center kontakt-col bg-dark">
                        <div class="result container text-center">
                            <h1 id="dienst-h1"><?php echo substr(sanitize_text_field( get_theme_mod( 'kontakt_txt_01' )), 0, 20); ?></h1>
                            <p class="bottom-space-4em loesunsp"><?php echo substr(sanitize_text_field( get_theme_mod( 'kontakt_txt_02' )), 0, 50); ?></p>
                        </div>
                        <div class="statement-pic"></div>

                        <a href="tel:<?php 
                        $arr = array("+" => "00", "(" => "", ")" => "", " "=> "");
                        echo strtr(( get_theme_mod( 'kontakt_tel' )),$arr); 
                        
                        ?>">

                            <i class="fa fa-phone fa-3x wow bounceIn kontakt-info" aria-hidden="true"></i>
                            <br><?php echo (sanitize_text_field( get_theme_mod( 'kontakt_tel' ))); ?><br>
                         </a>
                        <a href="tel:<?php 
                        $arr = array("+" => "00", "(" => "", ")" => "", " "=> "");
                        echo strtr(( get_theme_mod( 'kontakt_mob' )),$arr); 
                        
                        ?>">">
                            <i class="fa fa-mobile fa-3x wow bounceIn kontakt-info" aria-hidden="true" ></i>
                            <br><?php echo (sanitize_text_field( get_theme_mod( 'kontakt_mob' ))); ?><br>
                        </a>


                    </div>

                    <div class="col-md-8 bg-gray">
                        <div class="">
                            
                <?php echo do_shortcode( '[contact-form-7 id="59" title="Kontakt NMG-Tech"]' ); ?>
                             
      
                        </div>
                    </div>
                </div>


        </div>
    </section>
</div>
<?php get_footer(); ?>