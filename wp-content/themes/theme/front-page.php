<?php get_header() ?>  
  
  <!-- banner  -->

  <?php $hero = get_field('donate-link');
 
 
  ?>
    <section class="banner">
        <div class="left">
            <h1><?php 
                echo get_field("left-title"); ?></h1>
            <!-- <h1>hello, <br>world</h1> -->
            <p><?php echo get_field('first-p') ?></p>
            <p><?php echo get_field('second-p') ?></p>
            <p><?php echo get_field('third-p') ?></p>
        </div>
        <div class="right">
            <div class="text">
                <h2><?php echo get_field('right-title') ?></h2>
                <p><?php echo get_field('right-p') ?></p>
                <a href="<?php echo esc_url($hero['url']); ?> "><?php echo esc_html($hero['title']);  ?></a>
            </div>
            <img src="<?php bloginfo('template_directory'); ?>/images/new.webp" class="shapes" alt="">
            <img src="<?php bloginfo('template_directory'); ?>/images/comingsoon.webp" class="bg-right" alt="">
        </div>
    </section>

    <?php get_footer() ?>  