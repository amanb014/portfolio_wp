<?php 
if ( is_front_page() ) :
    get_header( 'index' );
else:
    get_header();
endif;
?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				if(is_front_page()) {
					get_template_part( 'contents/content', 'frontpage' );
				}
				elseif(is_page('portfolio')) {
					get_template_part( 'contents/content', 'portfolio' );
				} 
				elseif(is_page('work-experience')) {
					get_template_part( 'contents/content', 'portfolio' );
				}
				else {
					get_template_part('contents/content', 'page');
				}
				

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer(); ?>