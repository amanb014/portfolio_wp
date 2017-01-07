<div class="blog-post">
	<p class="project-summary"><span class="project-type">Personal</span> Project in <span class="study-field">Computer Science</span></p>

	<p class="project-dates">
	<?php
		$start_date = new DateTime(get_post_meta(get_the_ID(), 'start_date', true));
		echo $start_date->format('F Y');

	?> - 

	<?php
		$end_date = new DateTime(get_post_meta(get_the_ID(), 'end_date', true));
		echo $end_date->format('F Y');

	?>

	<p class="skills-used">
		<h2>Skills Used</h2>
			<?php 
				$i = 0;
				$skills = wp_get_post_terms(get_the_ID(), 'skill',
					array(
						'orderby' => 'name',
						'order' => 'ASC',
						'fields' => 'all'
					));

				foreach($skills as $s) {
					echo $s->name;

					if($i < count($skills)-1) {
						echo ', ';
					}
					$i++;
				};
			?>
	</p>

	<div id="blog-post-text" class="blog-post-text">
		<h2>Project Description</h2>
		<?php the_content(); ?>
	</div>

	<p class="blog-post-meta"></p>

	<p class="projects-link"><a href="<?php echo esc_attr(get_option('projects_link'));?>"> <<- View All Projects</a></p>

</div>


