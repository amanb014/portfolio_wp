<h1>Portfolio Theme Options</h1>
<form method="post" action="options.php">
        <?php 
            settings_fields( 'aman_settings_group' ); 
            do_settings_sections( 'aman_settings_page' );
            submit_button();
        ?>
</form>