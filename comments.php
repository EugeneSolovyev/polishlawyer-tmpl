<?php

	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if ( post_password_required() ) { ?>
		This post is password protected. Enter the password to view comments.
	<?php
		return;
	}
?>

<?php if ( have_comments() ) : ?>
	
	<h4 class="dotted_line comment_head" id="comments"> <?php comments_number('Comment :0', 'Comment : 1', 'Comments :%' );?></h4>
	<div class="navigation">
		<div class="next-posts"><?php previous_comments_link() ?></div>
		<div class="prev-posts"><?php next_comments_link() ?></div>
	</div>
<div class="row comment_row">
	<div class="col1-1">
				<ol class="commentlist">
				<?php wp_list_comments(); ?>
				</ol>
	</div>
</div>
	<div class="navigation">
		<div class="next-posts"><?php previous_comments_link() ?></div>
		<div class="prev-posts"><?php next_comments_link() ?></div>
	</div>
	
 <?php else : // this is displayed if there are no comments so far ?>

	<?php if ( comments_open() ) : ?>
		<!-- If comments are open, but there are no comments. -->

	 <?php else : // comments are closed ?>
		<p>Comments are closed.</p>

	<?php endif; ?>
	
<?php endif; ?>

<?php if ( comments_open() ) : ?>
<div id="respond" class="row comment_section col2-3">
	<div class="headline margin-top">
		<h4 class="comment_title"><?php comment_form_title( 'Leave a Comment', 'Leave a comment to %s' ); ?></h4>
	</div>
	<p class="fieldmark">Fields marked with * are required fields.</p>

	<div class="cancel-comment-reply reply">
		<?php cancel_comment_reply_link(); ?>
	</div>


	<?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
		<p>You must be <a href="<?php echo wp_login_url( get_permalink() ); ?>">logged in</a> to post a comment.</p>
	<?php else : ?>
	<div class="contact form-group">
	<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

		<?php if ( is_user_logged_in() ) : ?>

			<p class="login">Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log out of this account">Log out &raquo;</a></p>

		<?php else : ?>
		

				<input type="text" name="author" id="name" size="30" class="form-control name_box" placeholder="Name *"<?php if ($req) echo "aria-required='true'"; ?> />



 
				<input type="text" name="email" id="email" class="form-control name_box" placeholder="Email *" size="30" <?php if ($req) echo "aria-required='true'"; ?> />



				<input type="text" name="phone" id="phone" class="form-control name_box third" placeholder="Phone *" size="30" <?php if ($req) echo "aria-required='true'"; ?> />



			<?php endif; ?>

			<!--<p>You can use these tags: <code><?php echo allowed_tags(); ?></code></p>-->

				<textarea name="comment" id="comments" style="height: 113px;" class="form-control comment_box" cols="40" rows="3" placeholder="COMMENT *"></textarea>



			<input type="submit" class="submit" id="submit" value="Submit" />

				<?php comment_id_fields(); ?>

		

		<?php do_action('comment_form', $post->ID); ?>

	</form>
		</div>

	<?php endif; // If registration required and not logged in ?>
	
</div>
<?php endif; ?>
		<div class="col1-3 margintag">
          <?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('Blog Single') ) : else : ?>
		  <?php endif; ?>
        </div>
