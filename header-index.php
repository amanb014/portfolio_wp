<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="Aman Bhimani is a Software Engineering and Computer Science student based in Atlanta, Georgia looking for job opportunities around the country. View my portfolio and contact me here!">
		<meta name="author" content="Aman Bhimani">

		<link rel="shortcut icon" type="image/png" href="img/favicon.png"/>

		<title><?php echo get_bloginfo( 'name' ); ?>, <?php echo get_bloginfo( 'description' ); ?></title>
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/css/reset.css">
		<link href="<?php bloginfo('template_directory');?>/css/common-to-all.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/css/frontpage.css">

		<link href="https://fonts.googleapis.com/css?family=Arima+Madurai:100,300,500" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Roboto:700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Teko:300" rel="stylesheet">

	</head>
	<body>
	<div id="main-wrap">
		<header>

			<section id="nav">
				<div class="wrapper90">
					<div id="logo"><img src="<?php bloginfo('template_directory');?>/img/logo.png"\></div>
					
					<div id="navigation">
						<?php 
							wp_nav_menu( 
								array( 
									'theme_location' => 'header-menu',
									'menu_class'     => 'primary-menu'
									) 
							); 
						?>
					</div>
				</div>
			</section>


			<section id="intro">
				<div id="circleBg">
					<div id="circleImage"></div>
				</div>

				<div id="nameTitle">
					<h1>Aman Bhimani</h1>
					<h2>Software Developer</h2>
				</div>

			</section>
		</header>

		<section class="wrapper100 wrapperAddition"> 
			<div class="section group">
				<div class="col span_1_of_3">
					<h1><?php echo get_option('left_line_one'); ?></h1>
					<h2><?php echo get_option('left_line_two'); ?></h2>
					<h1><?php echo get_option('left_line_three'); ?></h1>
				</div>
				<div class="col span_1_of_3">
					<h1><?php echo get_option('mid_line_one'); ?></h1>
					<h2><?php echo get_option('mid_line_two'); ?></h2>
					<h1><?php echo get_option('mid_line_three'); ?></h1>
				</div>
				<div class="col span_1_of_3">
					<h1><?php echo get_option('right_line_one'); ?></h1>
					<h2><?php echo get_option('right_line_two'); ?></h2>
					<h1><?php echo get_option('right_line_three'); ?></h1>
				</div>
			</div>
		</section>
