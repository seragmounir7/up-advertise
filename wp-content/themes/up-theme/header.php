<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>u-advertise</title>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/style.css?ver=1.1">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/slick.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/slick-theme.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500;900&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <div class="container">
            <div class="display-flex justify-content-space-between align-items-center">
                <a href="<?php echo home_url(); ?>">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/logo.png" alt="">
                </a>
                <div id="responsive-navbar">
                    <div class="display-flex justify-content-flex-end">
                        <i class="fas fa-times"></i>
                    </div>
                    <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
                </div>
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </header>