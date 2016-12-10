
	<footer>
		<div class="wrapper90 footer_container">
			<div class="footer_item">
				<h1>Stuff</h1>

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

				<h1>GET SOCIAL!</h1>
				

			</div>

			<div class="footer_item">
				<h1>Another stuff</h1>

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
	</body>
</html>
