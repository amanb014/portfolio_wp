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
</div>

<?php the_posts_pagination( array(
    'mid_size'  => 2,
    'prev_text' => __( '<< Previous', 'textdomain' ),
    'next_text' => __( 'Next >>', 'textdomain' ),
) ); ?>
	
<?php get_footer(); ?>