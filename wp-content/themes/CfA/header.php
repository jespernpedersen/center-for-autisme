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
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/animate.css">

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
	} ?>">
	<style>
		html {
			margin-top: 0 !important;
		}
	</style>

	
    <!-- Header -->
    <header id="site-header">
        <div class="container">
            <div id="logo-wrapper">
                <a href="/center-for-autisme" id="logo" title="Klik her for at gå til forsiden"><img src="/center-for-autisme/wp-content/themes/cfa/assets/images/cfa-logo.png" alt="Center for Autisme"></a>
            </div>
            <aside>
                <ul id="contact-info">
                    <li><a href="callto:+4544982355" title="Du kan ringe til os hvis du er i tvivl om noget"><strong>Ring til os</strong><span>+45 44 98 23 55</span><i class="fas fa-phone"></i></a></li>
                    <li><a href="mailto:info@centerforautisme.dk" title="Du kan skrive en mail til os ved at klikke her"><strong>Skriv til os</strong><span>info@centerforautisme.dk</span><i class="far fa-envelope"></i></a></li>
                </ul>
                <ul class="social-media">
                    <li>
                        <a href="https://www.facebook.com/CenterForAutisme" title="Følg med i Center for Autisme på Facebook"><img src="/center-for-autisme/wp-content/themes/cfa/assets/images/icon/facebook-icon.png" alt="Icon of Facebook Social Media"></a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/company/center-for-autisme" title="Se nærmere på institutionen af Center for Autisme på LinkedIn"><img src="/center-for-autisme/wp-content/themes/cfa/assets/images/icon/linkedin-icon.png" alt="Icon of LinkedIn Social Media"></a>
                    </li>
                </ul>
                <span class="search"><i class="fas fa-search"></i></span>
            </aside>
        </div>
        <div id="search-wrapper">
            <div class="container">
                <div id="search-inner">
                    <input type="text" required name="search" id="search-field" placeholder="Søg på emner eller termer" />
                    <button type="submit" name="search-submit"><i class="fas fa-search"></i></button>

                    <span class="close-search">
                        <i class="fas fa-times"></i>
                    </span>
                </div>
            </div>
        </div>
    </header>
	