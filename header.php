<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>
        <?php bloginfo('name'); ?>
    </title>
    <meta name="generator" content="Polishlawyer" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!&#x2013;[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]&#x2013;>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>        
   </head>
   <body>
        <div class="navbar navbar-fixed-top">
            <?php wp_nav_menu( array('menu' => 'Main', 'container' => 'nav' )); ?>
        </div>