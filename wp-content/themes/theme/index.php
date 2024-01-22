<?php get_header() ?>  
  
  <!-- banner  -->

  <?php $hero = get_field('hero');
    var_dump(get_field('field_65ad04fbc4853'));
  ?>
    <section class="banner">
        <div class="left">
            <h1><?php if(!(get_field('field_65ad4da9e2418'))){
                echo "hello there";
            } ?></h1>
            <h1>hello, <br>world</h1>
            <p>We can’t wait to unveil the new <span>uncommon</span> branding and messaging.</p>
            <p>We’re going bigger and better than ever before.</p>
            <p>Coming soon.</p>
        </div>
        <div class="right">
            <div class="text">
                <h2>Uncommon stories start <br>
                with people like you.</h2>
                <p>Join The Community Of Uncommon Donors.</p>
                <button>Donate Today</button>
            </div>
            <img src="<?php bloginfo('template_directory'); ?>/images/new.webp" class="shapes" alt="">
            <img src="<?php bloginfo('template_directory'); ?>/images/comingsoon.webp" class="bg-right" alt="">
        </div>
    </section>

    <?php get_footer() ?>  