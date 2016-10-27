<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nmgtech
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<title>nmg-tech</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>  id="page-top">
    <div id="page-top"></div>

<nav id="mainNav" class="navbar  navbar-default navbar-fixed-top">
        <div class="container-fluid">
<!--             Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll"  rel="m_PageScroll2id" href="<?php bloginfo('url') ?>/#page-top">
                    <div class="nmg">
                        <h4  class="nmglogo">NMG-TECH</h4>
                      
                    </div>
                    <div class="patrick">
                    <img src="<?php echo get_template_directory_uri() ?>/img/patrick_logo_ICON.svg" class="logo" alt="">
                    <img src="<?php echo get_template_directory_uri() ?>/img/patrick_logo_NAME.svg" class="logoname" alt="">
                    </div>
                </a>

            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
           
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                
                <?php
                $args = array(
                    'menu' => 'primary',
                    'container' 		    => 'div',
  	'container_class' 	=> 'collapse navbar-collapse',
  	'container_id'    	=> 'main-navbar-collapse',
  	'menu_class'      	=> 'nav navbar-nav navbar-right',
  	'menu_id'         	=> '',
  	'echo'            	=> true,
  	'fallback_cb'     	=> 'wp_page_menu',
  	'before'          	=> '',
  	'after'           	=> '',
  	'link_before'     	=> '',
  	'link_after'      	=> '',
  	'items_wrap'      	=> '<ul id="%1$s" class="%2$s">%3$s</ul>',
  	'depth'           	=> 0,
  	'walker'          	=> ''
                );
                wp_nav_menu( $args );
                ?>
<!--                <ul class="nav navbar-nav navbar-right">

     
                    <li>
                        <a class="page-scroll" href="#ueberuns">Über Uns</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#profile">Profil</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Dienstleistung</a>
                    </li>

                    <li>
                        <a class="page-scroll" href="#contact">Kontakt</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="http://www.it-service-net.de/index.php?id=home">IT-Service-Net</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="impressum.html">Impressum</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="intern.html">Intern</a>
                    </li>
                </ul>-->
            </div>
            <!-- /.navbar-collapse -->

        </div>
        <!-- /.container-fluid -->
    </nav>