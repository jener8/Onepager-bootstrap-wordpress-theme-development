<?php
/*
Template Name: Ueberuns Page
*/
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <section id="nmgtech">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-1 text-left col-nmgtech">
                    <p class="nmg-title"><?php echo carbon_get_post_meta(get_the_ID(), 'crb_ueberuns_title') ?></p>
                    <p class=""><?php echo carbon_get_post_meta(get_the_ID(), 'crb_ueberuns_text_01') ?></p>
                    <p class=""><?php echo carbon_get_post_meta(get_the_ID(), 'crb_ueberuns_text_02') ?></p>
                </div>
            </div>
        </div>

    </section>
 <?php endwhile; endif; ?>

