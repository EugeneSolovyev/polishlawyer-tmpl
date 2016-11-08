        <div class="row">
            <div class="contact col-lg-12" id="contact-us">
                <?php query_posts('page_id=115');
                if ( have_posts() ) : while ( have_posts() ) : the_post();?>
                <h2><?php the_title(); ?></h2><?php the_content('Read the rest of this entry &raquo;'); ?>
                <div class="row">
                    <div class="contact-info col-lg-6 col-md-12">
                        <?php
                        $id=9; // ID заданной рубрики
                        $n=1;   // количество выводимых записей
                        $recent = new WP_Query("cat=$id&showposts=$n");
                        while($recent->have_posts()) : $recent->the_post();?>
                        <h4><?php the_title(); ?></h4>
                        <?php the_content(); ?>
                        <?php endwhile; ?>
                    </div>
                    <div class="contact-info col-lg-6 col-md-12">
                        <?php
                        $id=10; // ID заданной рубрики
                        $n=1;   // количество выводимых записей
                        $recent = new WP_Query("cat=$id&showposts=$n");
                        while($recent->have_posts()) : $recent->the_post();?>
                        <h4><?php the_title(); ?></h4>
                        <?php the_content(); ?>
                        <?php endwhile; ?>
                    </div>
                </div>
                <?php endwhile; endif; wp_reset_query(); ?>
            </div>
        </div>
    </div>
    <?php wp_footer(); ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" integrity="sha384-3ceskX3iaEnIogmQchP8opvBy3Mi7Ce34nWjpBIwVTHfGYWQS9jwHDVRnpKKHJg7" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js"></script>
    <script>
//        $('.menu-item').on('click',function() {
//            $('.collapse.in').slideUp();
//        });
    </script>
</body>
</html>