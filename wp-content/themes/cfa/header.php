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

	<?php wp_head(); ?>

	    <!-- Basic Page Needs
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta charset="utf-8">
    <title>Kurser, uddannelse og rådgivning | Center for Autisme CfA</title>

    <!-- SEO 
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta name="description" content="Center for Autisme henvender sig til personer med neuroudviklingsforstyrrelser: Autismespektrumforstyrrelser, ADHD, Tourettes og udviklingshæmning.">
    <meta name="author" content="Center for Autisme">
    <meta robots="robots" content="noindex, nofollow">

    <!-- Mobile Scaling Metas
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- FONTS
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->

    <!-- FontAwesome Library -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- CSS
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="stylesheet" href="/wp-content/themes/cfa/assets/css/responsive.css">
    <link rel="stylesheet" href="/wp-content/themes/cfa/assets/css/animate.css">
    <?php 
    if (!is_front_page()) {
    ?>
    <link rel="stylesheet" href="/wp-content/themes/cfa/assets/css/page.css">
    <?php
    } 
    ?>

    <!-- Favicon
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="apple-touch-icon" sizes="57x57" href="images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
    <link rel="manifest" href="images/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#4d94bf">
    <meta name="msapplication-TileImage" content="images/favicon/ms-icon-144x144.png">

    <!-- To Devices, Theme Color 
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta name="theme-color" content="#4d94bf">
</head>

<body class="not-active <?php 
	if (is_front_page()) { 
		echo 'home'; 
	} ?> 
    <?php 
	if (!is_front_page() && !is_search()) { 
       echo get_field('category_color');
    }
    else if(is_search()) {
        echo 'search-results';
    }
    else {
        
    }
    ?>">
	<style>
		html {
			margin-top: 0 !important;
		}
	</style>
    <!-- Header -->
    <header id="site-header">
        <div class="container">
            <div id="logo-wrapper">
                <a href="/" id="logo" title="Klik her for at gå til forsiden"><img src="/wp-content/themes/cfa/assets/images/cfa-logo.png" alt="Center for Autisme"></a>
            </div>
            <aside>
                <?php wp_nav_menu( array( 'menu' => 'top-menu', 'container'=> false, 'menu_class'=> false, 'menu_id'=> 'top-menu' ) ); ?>
                <ul class="social-media">
                    <li>
                        <a href="https://www.facebook.com/CenterForAutisme" title="Følg med i Center for Autisme på Facebook"><img src="/wp-content/themes/cfa/assets/images/icon/facebook-icon.png" alt="Icon of Facebook Social Media"></a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/company/center-for-autisme" title="Se nærmere på institutionen af Center for Autisme på LinkedIn"><img src="/wp-content/themes/cfa/assets/images/icon/linkedin-icon.png" alt="Icon of LinkedIn Social Media"></a>
                    </li>
                </ul>
                <span class="search"><i class="fas fa-search"></i></span>
            </aside>
        </div>
        <div id="search-wrapper">
            <div class="container">
                <div id="search-inner">
                    <?php 
                        get_search_form();
                    ?>
                    <button type="submit" name="search-submit"><i class="fas fa-search"></i></button>

                    <span class="close-search">
                        <i class="fas fa-times"></i>
                    </span>
                </div>
            </div>
        </div>
    </header>
	