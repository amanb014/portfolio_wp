<?php get_header(); ?>
	
<div class="wrapper80 max800">
	<?php 
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post();
				echo "<a href=\"" . get_permalink() . "\">";
				get_template_part( 'content-excerpt', get_post_format() );
				echo "</a>";
			
			} // end while
		} // end if
	?>

	<?php the_posts_pagination( 
		array(
		    'type' => 'list',
		    'prev_text' => '<< Previous',
		    'next_text' => 'Next >>'
			) 
		); 
	?>
</div>
	
<?php get_footer(); ?>