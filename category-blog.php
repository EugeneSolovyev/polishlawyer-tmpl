<?php get_header(); ?>
<div class="container-fluid">
    <div class="row">
        <div class="blog page-blog col-lg-12">
            <?php
            //$id=1; // ID заданной рубрики
            $recent = new WP_Query("cat=$id&showposts=$n");
            while($recent->have_posts()) : $recent->the_post();?>
            <div class="article">
                <h4><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h4>
                <div class="postedby"> Posted by <?php the_author_posts_link(); ?> on <?php the_time(); ?></div>
                <?php the_content(); ?>
            </div>
            <?php endwhile; ?>
            <?php if(function_exists('wp_paginate')) {
            wp_paginate();
            } ?>
        </div>
    </div>
<?php get_footer(); ?>