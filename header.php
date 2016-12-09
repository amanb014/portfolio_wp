<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="Aman Bhimani is a Software Engineering and Computer Science student based in Atlanta, Georgia looking for job opportunities around the country. View my portfolio and contact me here!">
		<meta name="author" content="Aman Bhimani">

		<link rel="shortcut icon" type="image/png" href="img/favicon.png"/>

		<title><?php echo get_bloginfo( 'name' ); ?></title>
		
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/css/reset.css">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/css/non-frontpage.css">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/css/common-to-all.css">

		<link href="https://fonts.googleapis.com/css?family=Arima+Madurai:100,300,500" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Roboto:700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Teko:300" rel="stylesheet">
		
		<?php wp_head();?>
	</head>
	<body>
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
					<h1><?php wp_title();?>
					</h1>
				</div>
			</section>

		</header>