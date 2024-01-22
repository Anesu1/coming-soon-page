<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   

    <?php wp_head() ?>
</head>

<body>
    <!-- header  -->
    <header>
        <a href="">
            <img src="<?php bloginfo('template_directory'); ?>/images/logo.webp" alt="">
        </a>
        <div class="hamburger">
            <span></span>
        </div>
        <div class="drop">
            <p>Explore our old site:</p>
            <?php wp_nav_menu(
                array(
                    'theme_location'=> 'main-menu',
                    'container'=> "ul"
                )
            ) ?>
          
        </div>
    </header>