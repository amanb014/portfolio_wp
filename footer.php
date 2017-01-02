
	<footer class="site-footer">
		<div class="wrapper90 footer_container">
			<div class="footer_item">
				<h1><?php echo get_option('footer_left'); ?></h1>

				<?php 
					wp_nav_menu( 
						array( 
							'theme_location' => 'footer-left',
							'menu_class'     => 'footer-menu'
							) 
					); 
				?>
			</div>


			<div class="footer_item">

				<h1><?php echo get_option('footer_middle'); ?></h1>
				<?php
					wp_nav_menu( 
						array( 
							'theme_location' => 'footer-mid',
							'menu_class'     => 'footer-menu'
							) 
					); 
				?>
				
			</div>

			<div class="footer_item">
				<h1><?php echo get_option('footer_right'); ?></h1>

				<?php 
					wp_nav_menu( 
						array( 
							'theme_location' => 'footer-right',
							'menu_class'     => 'footer-menu'
							) 
					); 
				?>
			</div>

		</div>


	</footer>

	<?php wp_footer(); ?> 
	</div>
	</body>
</html>
