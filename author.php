<?php get_header(); ?>

<div class="container-fluid">
    <div class="row">
        <div class="blog col-lg-12">
            <h2>Posts by <?php echo $curauth->nickname; ?>:</h2>
            <ul>
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <li>
                    <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>">
                    <?php the_title(); ?></a>,
                    <?php the_time('d M Y'); ?> in <?php the_category('&');?>
                </li>
                <?php endwhile; else: ?>
                    <p><?php _e('No posts by this author.'); ?></p>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</div>
<?php get_footer(); ?>