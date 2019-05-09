<?php
/**
 * The header for the theme
 *
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-131042303-1"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'UA-131042303-1');
	</script>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
	<?php wp_head(); ?>
	<link rel="apple-touch-icon" sizes="57x57" href="/wp-freelance/wp-content/themes/jespernpedersen/assets/images/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/wp-freelance/wp-content/themes/jespernpedersen/assets/images/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/wp-freelance/wp-content/themes/jespernpedersen/assets/images/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/wp-freelance/wp-content/themes/jespernpedersen/assets/images/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/wp-freelance/wp-content/themes/jespernpedersen/assets/images/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/wp-freelance/wp-content/themes/jespernpedersen/assets/images/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/wp-freelance/wp-content/themes/jespernpedersen/assets/images/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/wp-freelance/wp-content/themes/jespernpedersen/assets/images/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="/wp-freelance/wp-content/themes/jespernpedersen/assets/images/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/wp-freelance/wp-content/themes/jespernpedersen/assets/images/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/wp-freelance/wp-content/themes/jespernpedersen/assets/images/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/wp-freelance/wp-content/themes/jespernpedersen/assets/images/favicon/favicon-16x16.png">
	<link rel="manifest" href="/wp-freelance/wp-content/themes/jespernpedersen/assets/images/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#4d94bf">
	<meta name="msapplication-TileImage" content="/wp-freelance/wp-content/themes/jespernpedersen/assets/images/favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#4d94bf">
	<link href="https://fonts.googleapis.com/css?family=Lato|Varela+Round" rel="stylesheet">
	<link rel="stylesheet" href="https://indestructibletype.com/fonts/Jost.css" type="text/css" charset="utf-8" />
</head>

<body class="not-active <?php 
	if (is_front_page()) { 
		echo 'home'; 
	} ?>">
	
<a class="screen-reader-text" href="#content">Skip to content</a>

<header class="site-header">
	<div class="logo-wrapper">
		<img src="" alt="Center for Autismes Logo" />
	</div>
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
</header>
	