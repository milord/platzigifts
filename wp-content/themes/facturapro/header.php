<!DOCTYPE HTML>
<!--
	Arcana by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo("charset") ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<?php wp_head(); ?>
        
	</head>
	<body class="is-preload">
        <?php wp_body_open(); ?>
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header">

					<!-- Logo -->
						<h1><a href="<?php echo home_url(); ?>" id="logo"><?php the_custom_logo(); ?></em></a></h1>

					<!-- Nav -->
						<nav id="nav">
							<?php wp_nav_menu(
								array(
									"menu" => 'menu-principal',
									"menu_id" => '',
									"container" => 'false',
									/*"items_wrap" => '<ul><li class="current"></li></ul>'*/
								)
							); ?>
						</nav>

				</div>