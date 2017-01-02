<?php
	function register_my_menu() {
	  register_nav_menu('header-menu',__( 'Header Menu' ));
	  register_nav_menu('footer-left',__( 'Footer Left '));
	  register_nav_menu('footer-right',__( 'Footer Right '));
	  register_nav_menu('footer-mid',__( 'Footer Middle '));

	}
	add_action( 'init', 'register_my_menu' );