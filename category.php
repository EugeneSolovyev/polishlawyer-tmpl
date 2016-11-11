<?php get_header(); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="blog page-blog col-lg-12">
                <?php
                // The Loop
                while ( have_posts() ) : the_post(); ?>
                <div class="article">
                    <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                    <div class="postedby">
                        <?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?>
                    </div>
                    <?php the_content(); ?>
                    <p class="postmetadata">
                        <?php comments_popup_link( 'No comments yet', '1 comment', '% comments', 'comments-link', 'Comments closed');?>
                    </p>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
<?php get_footer(); ?>