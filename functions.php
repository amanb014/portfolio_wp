<?php
	function register_my_menu() {
	  register_nav_menu('header-menu',__( 'Header Menu' ));
	  register_nav_menu('footer-left',__( 'Footer Left '));
	  register_nav_menu('footer-right',__( 'Footer Right '));

	}
	add_action( 'init', 'register_my_menu' );

//********************************************
// ADDING LIMITS TO EXCERPTS AND CONTENTS
//********************************************
	function excerpt($limit) {
	  $excerpt = explode(' ', get_the_excerpt(), $limit);
	  if (count($excerpt)>=$limit) {
	    array_pop($excerpt);
	    $excerpt = implode(" ",$excerpt).'...';
	  } else {
	    $excerpt = implode(" ",$excerpt);
	  }	
	  $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
	  return $excerpt;
	}
	 
	function content($limit) {
	  $content = explode(' ', get_the_content(), $limit);
	  if (count($content)>=$limit) {
	    array_pop($content);
	    $content = implode(" ",$content).'...';
	  } else {
	    $content = implode(" ",$content);
	  }	
	  $content = preg_replace('/[.+]/','', $content);
	  $content = apply_filters('the_content', $content); 
	  $content = str_replace(']]>', ']]&gt;', $content);
	  return $content;
	}
?>

