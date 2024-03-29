<?php get_header(); ?>
<div class="container-fluid">
        <div class="row">
            <div class="header col-lg-12">
                <div class="greetings">
                    <h1><?php bloginfo('name'); ?></h1>
                    <p><?php bloginfo('description'); ?></p>
                    <a href="#about-us" class="link-down"><i class="fa fa-chevron-down fa-3x" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="about-us col-lg-12" id="about-us">
                <?php query_posts('page_id=104');
                if ( have_posts() ) : while ( have_posts() ) : the_post();?>
                <h2><?php the_title(); ?></h2>
                <?php the_content('Read the rest of this entry &raquo;'); ?>
                <div class="history">
                    <?php
                    $id=32; // ID заданной рубрики
                    $n=1;   // количество выводимых записей
                    $recent = new WP_Query("cat=$id&showposts=$n");
                    while($recent->have_posts()) : $recent->the_post();?>
                    <h4><?php the_title(); ?></h4>
                    <?php the_content(); ?>
                    <?php endwhile; ?>
                </div>
                <div class="expertise">
                    <?php
                    $id=44; // ID заданной рубрики
                    $n=1;   // количество выводимых записей
                    $recent = new WP_Query("cat=$id&showposts=$n");
                    while($recent->have_posts()) : $recent->the_post();?>
                    <h4><?php the_title(); ?></h4>
                    <?php the_content(); ?>
                    <?php endwhile; ?>
                </div>
                <?php endwhile; endif; wp_reset_query(); ?>
            </div>
        </div>
        <div class="row">
            <div class="our-services col-lg-12" id="our-services">
                <?php query_posts('page_id=111');
                if ( have_posts() ) : while ( have_posts() ) : the_post();?>
                <h2><?php the_title(); ?></h2><?php the_content('Read the rest of this entry &raquo;'); ?>
                <?php endwhile; endif; wp_reset_query(); ?>
            </div>
        </div>
        <div class="row">
            <div class="the-team col-lg-12" id="the-team">
                <?php query_posts('page_id=134');
                if ( have_posts() ) : while ( have_posts() ) : the_post();?>
                <h2><?php the_title(); ?></h2><?php the_content('Read the rest of this entry &raquo;'); ?>
                <?php endwhile; endif; wp_reset_query(); ?>
                <div class="row">
                    <?php
                    $id=36; // ID заданной рубрики
                    $recent = new WP_Query("cat=$id&orderby=date&order=ASC");
                    while($recent->have_posts()) : $recent->the_post();?>
                    <div class="team-member col-lg-6 col-sm-12">
                        <?php the_content(); ?>
                    </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
        <?php query_posts('page_id=230');
        if ( have_posts() ) : while ( have_posts() ) : the_post();?>
        <div class="row">
            <div class="blog col-lg-12">
                <h2><?php the_title(); ?></h2><?php the_content('Read the rest of this entry &raquo;'); ?>
                <?php endwhile; endif; wp_reset_query(); ?>
                <?php
                $id=1; // ID заданной рубрики
                $n=3;   // количество выводимых записей
                $recent = new WP_Query("cat=$id&showposts=$n");
                while($recent->have_posts()) : $recent->the_post();?>
                <h4><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h4>
                <div class="postedby"> Posted by <?php the_author_posts_link(); ?> on <?php the_time(); ?></div>
                <?php the_content(); ?>
            </div>
        </div>
        <?php endwhile; ?>    
        <div class="row">
            <div class="case-studies col-lg-12">
                <?php query_posts('page_id=234');
                if ( have_posts() ) : while ( have_posts() ) : the_post();?>
                <h2><?php the_title(); ?></h2><?php the_content('Read the rest of this entry &raquo;'); ?>
                <?php endwhile; endif; wp_reset_query(); ?>
                <div class="case-studies-post col-lg-12">
                    <div class="post">
                            <?php
                            $id=46; // ID заданной рубрики
                            $n=3;   // количество выводимых записей
                            $recent = new WP_Query("cat=$id&showposts=$n");
                            while($recent->have_posts()) : $recent->the_post();?>
                            <div class="post-content col-lg-12">
                                <h4><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h4>
                                <div class="postedby"> Posted by <?php the_author_posts_link(); ?> on <?php the_time(); ?></div>
                                <?php the_content(); ?>
                            </div>
                            <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
<?php get_footer(); ?>