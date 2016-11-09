        <div class="row">
            <div class="contact col-lg-12" id="contact-us">
                <?php query_posts('page_id=115');
                if ( have_posts() ) : while ( have_posts() ) : the_post();?>
                <h2><?php the_title(); ?></h2><?php the_content('Read the rest of this entry &raquo;'); ?>
                <div class="row">
                    <div class="contact-info col-lg-6 col-md-12">
                        <?php
                        $id=42; // ID заданной рубрики
                        $n=1;   // количество выводимых записей
                        $recent = new WP_Query("cat=$id&showposts=$n");
                        while($recent->have_posts()) : $recent->the_post();?>
                        <h4><?php the_title(); ?></h4>
                        <?php the_content(); ?>
                        <?php endwhile; ?>
                    </div>
                    <div class="contact-info col-lg-6 col-md-12">
                        <?php
                        $id=40; // ID заданной рубрики
                        $n=1;   // количество выводимых записей
                        $recent = new WP_Query("cat=$id&showposts=$n");
                        while($recent->have_posts()) : $recent->the_post();?>
                        <h4><?php the_title(); ?></h4>
                        <?php the_content(); ?>
                        <?php endwhile; ?>
                    </div>
                </div>
                <?php endwhile; endif; wp_reset_query(); ?>
                <p class="form-button" data-toggle="modal" data-target="#feedback">Also you can use our contact form</p>
            </div>
        </div>
    </div>
    <div class="modal fade" id="feedback">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title" id="myModalLabel">Contact us</h4>
          </div>
          <div class="modal-body">
            <form id="formMain">
                <div class="form-group">
                    <label for="userName">Full Name:</label>
                    <input type="text" name="name" id="userName" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="userEmail">E-mail:</label>
                    <input type="email" name="email" id="userEmail" class="form-control">
                </div>
                <div class="form-group">
                   <label for="subjectField">Subject:</label>
                   <textarea name="subjectField" id="subjectField" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" value="Send" class="btn btn-submit">
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" integrity="sha384-3ceskX3iaEnIogmQchP8opvBy3Mi7Ce34nWjpBIwVTHfGYWQS9jwHDVRnpKKHJg7" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js"></script>
    <?php wp_footer(); ?>
</body>
</html>