<?php get_header(); ?>
<div class="container-fluid">
    <div class="row">
        <div class="about-us col-lg-12" id="about-us">
                <?php if (is_home()) { tha_content_top(); } ?>
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <h2><?php the_title(); ?></h2>
                <?php the_content(); ?>
                <?php endwhile; else : ?>
                <p><?php _e( '<h4>Sorry...</h4><p>There is no post.</p>' ); ?></p>
                <?php endif; ?>
                <div><p><?php posts_nav_link(); ?></p></div>
                <?php if (is_home()) { tha_content_bottom(); } ?>
        </div>
    </div>
<?php get_footer(); ?>