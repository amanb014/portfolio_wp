
	<footer class="site-footer">
		<div class="wrapper90 footer_container">
			<div class="footer_item">
			</div>

			<div class="footer_item">
			</div>

			<div class="footer_item">

			<div class="footer-flex-container">

				<?php
					$echo_me = "";

					$facebook_url = get_option('facebook_url');
					$linkedin_url = get_option('linkedin_url');
					$twitter_url = get_option('twitter_url');
					$github_url = get_option('github_url');
					$instagram_url = get_option('instagram_url');
					$youtube_url = get_option('youtube_url');

					if($facebook_url != "") {
						$echo_me .= '<div class="footer-flex-item"><a target="_blank" href="' . $facebook_url . '"><img src="' . get_template_directory_uri() . '/img/social/facebook.png' . '" \></a></div>';
					}
					if($linkedin_url != "") {
						$echo_me .= '<div class="footer-flex-item"><a target="_blank" href="' . $linkedin_url . '"><img src="' . get_template_directory_uri() . '/img/social/linkedin.png' . '" \></a></div>';
					}
					if($twitter_url != "") {
						$echo_me .= '<div class="footer-flex-item"><a target="_blank" href="' . $twitter_url . '"><img src="' . get_template_directory_uri() . '/img/social/twitter.png' . '" \></a></div>';
					}
					if($github_url != "") {
						$echo_me .= '<div class="footer-flex-item"><a target="_blank" href="' . $github_url . '"><img src="' . get_template_directory_uri() . '/img/social/github.png' . '" \></a></div>';
					}
					if($instagram_url != "") {
						$echo_me .= '<div class="footer-flex-item"><a target="_blank" href="' . $instagram_url . '"><img src="' . get_template_directory_uri() . '/img/social/instagram.png' . '" \></a></div>';
					}
					if($youtube_url != "") {
						$echo_me .= '<div class="footer-flex-item"><a target="_blank" href="' . $youtube_url . '"><img src="' . get_template_directory_uri() . '/img/social/youtube.png' . '" \></a></div>';
					}
					echo $echo_me;
				?>
			</div>

		</div>

		<div id="copyright_info">
			<?php 
				$userInput = esc_attr(get_option('copyright_info'));
				$year = date("Y");

				echo 'Copyright © ' . $year . ' ' . $userInput;

			?>
		</div>
	</footer>

	<?php wp_footer(); ?> 
	</div>
	</body>
</html>
