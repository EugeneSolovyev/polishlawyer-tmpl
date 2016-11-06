<!DOCTYPE>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
    <title><?php bloginfo('name'); ?></title>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php wp_head(); ?>
</head>
<body>
    <div class="navbar navbar-fixed-top">
        <?php wp_nav_menu( array('menu' => 'Main', 'container' => 'nav' )); ?>
<!--
                <a href="#">Home</a>
                <a href="#">About Us</a>
                <a href="#">Our Service</a>
                <a href="#">The Team</a>
                <a href="#">Blog</a>
                <a href="#">Case Studies</a>
                <a href="#">Contact Us</a>
                <a href="#">Language</a>
-->
    </div>