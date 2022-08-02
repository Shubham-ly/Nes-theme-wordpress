<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <?php wp_head(); ?>
</head>

<body>
    <header>
        <nav class="navbar">
            <input class="checkbox" type="checkbox" name="" id="ham-button" />
            <div class="hamburger-lines">
                <span class="line line1"></span>
                <span class="line line2"></span>
                <span class="line line3"></span>
            </div>  
            <div class="brand-logo">
                <?php 
                    if (function_exists('the_custom_logo')) {
                        $custom_logo_id = get_theme_mod('custom_logo');
                        $logo = wp_get_attachment_image_src($custom_logo_id);
                    }
                ?>
                <img src="<?php echo $logo[0] ?>" alt="logo"> <?php echo get_bloginfo('name') ?>
            </div>
            <div class="ham-menu">
                <?php 
                    wp_nav_menu(
                        array(
                            'menu' => 'primary',
                            'container' => '',
                            'theme_location' => 'primary',
                        )
                    );
                ?>
            </div>
        </nav>


    </header>