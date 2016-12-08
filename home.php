<?php get_header(); ?>
	
<div class="wrapper80 max800">
	<?php 
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post(); 
				get_template_part( 'content-excerpt', get_post_format() );
			
			} // end while
		} // end if
	?>
</div>
	
<?php get_footer(); ?>