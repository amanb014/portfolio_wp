<?php get_header(); ?>
<?php get_header(); ?>

<div class="wrapper80 max800">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		// Start the loop.
			while ( have_posts() ) : the_post();

				/*
				 * Include the post format-specific template for the content. If you want to
				 * use this in a child theme, then include a file called called content-___.php
				 * (where ___ is the post format) and that will be used instead.
				 */
				get_template_part( 'post-content/content', get_post_type() );

				// If comments are open or we have at least one comment, load up the comment template.
				// if ( comments_open() || get_comments_number() ) :
				// 	comments_template();
				// endif;

				// Previous/next post navigation.
				the_post_navigation( array(
					'type' => 'list',
					'next_text' => 'Next',
					'prev_text' => 'Previous'
				) );

			// End the loop.
			endwhile;
		?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->
</div>

<?php get_footer(); ?>