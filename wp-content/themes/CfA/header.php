<?php
/**
 * The header for the theme
 *
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
	<!-- Google Analystics -->


	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<?php wp_head(); ?>

	<!-- Favicon -->
	<link rel="apple-touch-icon" sizes="57x57" href="/center-for-autisme/wp-content/themes/jespernpedersen/assets/images/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/center-for-autisme/wp-content/themes/jespernpedersen/assets/images/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/center-for-autisme/wp-content/themes/jespernpedersen/assets/images/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/center-for-autisme/wp-content/themes/jespernpedersen/assets/images/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/center-for-autisme/wp-content/themes/jespernpedersen/assets/images/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/center-for-autisme/wp-content/themes/jespernpedersen/assets/images/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/center-for-autisme/wp-content/themes/jespernpedersen/assets/images/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/center-for-autisme/wp-content/themes/jespernpedersen/assets/images/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="/center-for-autisme/wp-content/themes/jespernpedersen/assets/images/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/center-for-autisme/wp-content/themes/jespernpedersen/assets/images/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/center-for-autisme/wp-content/themes/jespernpedersen/assets/images/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/center-for-autisme/wp-content/themes/jespernpedersen/assets/images/favicon/favicon-16x16.png">
	<link rel="manifest" href="/center-for-autisme/wp-content/themes/jespernpedersen/assets/images/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#4d94bf">
	<meta name="msapplication-TileImage" content="/center-for-autisme/wp-content/themes/jespernpedersen/assets/images/favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#4d94bf">
</head>

<body class="not-active <?php 
	if (is_front_page()) { 
		echo 'home'; 
	} ?>">
	
<a class="screen-reader-text" href="#content">Skip to content</a>

<header class="site-header">
	<div class="container">
		<!-- TOP MENU -->

		<!-- LOGO -->
		<div class="logo-wrapper">
			<img src="" alt="Center for Autismes Logo" />
		</div>

		<!-- MAIN NAVIGATION -->
		<?php if ( !wp_is_mobile() ) {
		?>
		<nav class="main-navigation">
				<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
				?>
		</nav>
		<?php } ?>
		<!-- ADDITIONAL HEADER IMAGES --> 
	
		<!-- SEARCH -->
	</div>
</header>
	