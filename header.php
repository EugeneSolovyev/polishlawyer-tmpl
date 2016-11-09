<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="design" content="sisyrinchium02@gmail.com">
    <meta name="frontend" content="eugenesolovyev92@gmail.com">
    <meta name="backend" content="">
    <title>
        <?php bloginfo('name'); ?>
    </title>
    <meta name="generator" content="Polishlawyer" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>        
   </head>
   <body>
        <div class="navbar navbar-fixed-top">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar" aria-controls="exCollapsingNavbar" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars" aria-hidden="true"></i></button>
            <div class="collapse" id="exCollapsingNavbar">
                <div class="bg-inverse text-muted p-1">
                    <?php wp_nav_menu( array('menu' => 'Main', 'container' => 'nav' )); ?>
                </div>
            </div>
            <?php wp_nav_menu( array('menu' => 'Main', 'container' => 'nav' )); ?>
        </div>