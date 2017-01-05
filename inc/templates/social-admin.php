<h1>Social Settings</h1>
<form action="options.php" method="post">
	<?php
		settings_fields('social_settings_group');
		do_settings_sections('social_settings_page');
		submit_button();
	?>
</form>