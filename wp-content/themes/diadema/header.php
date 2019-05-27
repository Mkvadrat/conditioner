<?php
/*
Theme Name: Diadema
Theme URI: https://mkvadrat.com/
Author: mkvadrat
Author URI: https://mkvadrat.com/
Description: Тема Diadema
Version: 1.0
*/
?>
    
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo diadema_wp_title('','|', true, 'right'); ?></title>

    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/animate.min.css">
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/responsive.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/owl.carousel.min.js"></script>

    <?php wp_head(); ?>
</head>
<body>

<header>
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-6 col-lg-3 logo">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <img
                        src="<?php header_image(); ?>"
                        height="<?php echo get_custom_header()->height; ?>"
                        width="<?php echo get_custom_header()->width; ?>"
                        alt="diadema"
                    />
                    <div class="podpis"><?php echo get_field('text_logo_a_header_main_page', 10); ?></div>
                </a>
                <i><?php echo get_field('text_logo_b_header_main_page', 10); ?></i>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="address">
                   <?php echo get_field('address_header_main_page', 10); ?>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="phones">
                    <?php echo get_field('phones_header_main_page', 10); ?>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
                <?php echo get_field('callback_text_header_main_page', 10); ?>
            </div>
            <div class="popover-custom">
                <div class="popover-inner"><p> <?php echo get_field('text_header_main_page', 10); ?></p></div>
            </div>
        </div>
    </div>
</header>

