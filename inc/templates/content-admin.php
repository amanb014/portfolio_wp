<h1>Content Settings</h1>
<form action="options.php" method="post">
	<?php
		settings_fields('aman_content_settings_group');
		do_settings_sections('content_settings_page');
		submit_button();
	?>
</form>