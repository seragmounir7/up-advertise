<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>u-advertise</title>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/style.css?ver=1.1">
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <div class="container">
            <div class="display-flex justify-content-space-between align-items-center">
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/logo.png" alt="">
                <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
            </div>
        </div>
    </header>