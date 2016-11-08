<?php get_header(); ?>
<div class="container-fluid">
        <div class="row">
            <div class="header col-lg-12">
                <div class="greetings">
                    <h1><?php bloginfo('name'); ?></h1>
                    <p><?php bloginfo('description'); ?></p>
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
                    $id=8; // ID заданной рубрики
                    $n=1;   // количество выводимых записей
                    $recent = new WP_Query("cat=$id&showposts=$n");
                    while($recent->have_posts()) : $recent->the_post();?>
                    <h4><?php the_title(); ?></h4>
                    <?php the_content(); ?>
                    <?php endwhile; ?>
                </div>
                <div class="expertise">
                    <?php
                    $id=7; // ID заданной рубрики
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
                <h2>The team</h2>
                <h4>We are regarded as industry leaders in stunning diabetessite solutions, focused on delivering unsurpassed user experiences. Lorem ipsum dolor sit amet.</h4>
                <div class="row">
                    <div class="team-member col-lg-6 col-sm-12">
                        <div class="team-member-card">
                            <img src="http://localhost/nproject/wp-content/uploads/2016/11/Magda-Rostek_cr1.jpg" alt="" class="img-fluid">
                            <div class="email"><i class="fa fa-paper-plane" aria-hidden="true"></i></div>
                        </div>
                        <p>Magdalena Rostek graduated from University of Warsaw, School of Law in Poland. She is employed as a research and immigration specialist at Immigration Law Office of Y. Ziankovich, P.C. Mrs. Rostek is a member of American Society of International Law. She is fluent in Polish and English.</p>
                    </div>
                    <div class="team-member col-lg-6 col-sm-12">
                        <div class="team-member-card">
                            <img src="http://localhost/nproject/wp-content/uploads/2016/11/polishlawyer_slider01-220x218.jpg" alt="" class="img-fluid">
                            <div class="email"><i class="fa fa-paper-plane" aria-hidden="true"></i></div>
                        </div>
                        <p>Youras Ziankovich is a lawyer with practice in US immigration law, as well as in business and corporate matters. He graduated from the Ukrainian Academy of Banking and Fordham University School of Law. He speaks in English, Polish, Belarusian, Ukrainian and Russian languages.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="blog col-lg-12">
                <h2>Blog</h2>
<!--
                <div id="blog-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
-->
                            <?php
                            $id=1; // ID заданной рубрики
                            $n=3;   // количество выводимых записей
                            $recent = new WP_Query("cat=$id&showposts=$n");
                            while($recent->have_posts()) : $recent->the_post();?>
                            <h4><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h4>
                            <div class="postedby"> Posted by <?php the_author_posts_link(); ?> on <?php the_time(); ?></div>
                            <?php the_content(); ?>
                            <?php endwhile; ?>
                            
<!--
                        </div>
                    </div>
                    <a class="left carousel-control" href="#blog-carousel" role="button" data-slide="prev">
                        <span class="icon-prev" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="right carousel-control" href="#blog-carousel" role="button" data-slide="next">
                        <span class="icon-next" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                </div>
-->
            </div>
        </div>
        <div class="row">
            <div class="case-studies col-lg-12">
               <h2>Case studies</h2>
                <ul>
                    <li><a href="#">All</a></li>
                    <li><a href="#">Civil</a></li>
                    <li><a href="#">Criminal</a></li>
                    <li><a href="#">Public</a></li>
                </ul>
                <div class="case-studies-post col-lg-12">
                    <div class="post">
                        <div class="post-content col-lg-12">
                            <?php
                            $id=4; // ID заданной рубрики
                            $n=3;   // количество выводимых записей
                            $recent = new WP_Query("cat=$id&showposts=$n");
                            while($recent->have_posts()) : $recent->the_post();?>
                            <h4><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h4>
                            <div class="postedby"> Posted by <?php the_author_posts_link(); ?> on <?php the_time(); ?></div>
                            <?php the_content(); ?>
                            <?php endwhile; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php get_footer(); ?>