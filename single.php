<?php get_header(); ?>
<div class="container-fluid">
    <div class="row">
        <div class="blog page-blog col-lg-12">
            <?php if (is_home()) { tha_content_top(); } ?>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <h4><?php the_title(); ?></h4>
            <div class="postedby"> Posted by <?php the_author_posts_link(); ?> on <?php the_time(); ?></div>
            <?php the_content(); ?>
            <div class="pagenavi"><?php previous_post_link(); ?> | <?php next_post_link(); ?></div>
            <?php endwhile; else : ?>
            <p><?php _e( '<h4>Sorry...</h4><p>There is no post.</p>' ); ?></p>
            <?php endif; ?>
            <div><p><?php posts_nav_link(); ?></p></div>
            <?php if (is_home()) { tha_content_bottom(); } ?>
        </div>
    </div>
<?php get_footer(); ?>