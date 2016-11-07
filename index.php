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
                <h2>About Us</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim dolores sint, maxime doloremque totam sit, recusandae consectetur natus porro in sapiente, nostrum ea molestias itaque accusantium sunt cupiditate debitis eius.</p>
                <div class="history">
                    <h3>History</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure, vero temporibus, rem ratione hic perspiciatis aut perferendis accusamus consequatur nesciunt officiis repellat magni non dolores. Dolor, blanditiis laudantium quidem enim.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus ea commodi nostrum laborum a animi iusto ipsum, expedita esse! Atque, quidem recusandae commodi! Sit, eligendi, voluptatem aperiam et ducimus nihil.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus ullam quo ad soluta laudantium tempore perferendis necessitatibus odio ea ex inventore neque commodi totam, voluptas, officia temporibus, nesciunt, ratione quisquam?</p>
                </div>
                <div class="expertise">
                    <h3>Expertise</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure, vero temporibus, rem ratione hic perspiciatis aut perferendis accusamus consequatur nesciunt officiis repellat magni non dolores. Dolor, blanditiis laudantium quidem enim.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus ea commodi nostrum laborum a animi iusto ipsum, expedita esse! Atque, quidem recusandae commodi! Sit, eligendi, voluptatem aperiam et ducimus nihil.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus ullam quo ad soluta laudantium tempore perferendis necessitatibus odio ea ex inventore neque commodi totam, voluptas, officia temporibus, nesciunt, ratione quisquam?</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="our-services col-lg-12" id="our-services">
                <h2>Our Services</h2>
                <h4>We are spezializing in criminal justice. If you need further information, please dont hesitate to contact us.</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic quas officiis ipsa architecto quam optio maxime, reiciendis, reprehenderit autem sed, ullam eos, doloribus aut consequuntur quos. Fugiat rerum ex, tempore.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur est quidem, ab sunt, voluptates maiores? Officiis maxime placeat consectetur velit assumenda esse nulla vitae repellat, aut saepe cumque deleniti reiciendis.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel pariatur quis, ex, labore adipisci animi molestiae quam doloremque expedita dolore officia culpa saepe alias minima consequuntur soluta fugiat quia sed?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur reiciendis, molestias sunt, porro labore odit nihil facere adipisci alias impedit veritatis voluptate ad modi autem maiores architecto veniam tempore culpa.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit officia a odio ipsa nesciunt veniam sunt illo quos nisi culpa quia omnis nulla atque porro, doloremque enim sed nostrum ducimus!</p>
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