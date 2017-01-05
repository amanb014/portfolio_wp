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
				} else {
					get_template_part('contents/content', 'page');
				}

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->


<?php get_footer(); ?>