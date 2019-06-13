<?php 
/*
Template Name: Frontpage Layout
Template Post Type: post, page, event
*/


get_header();
?>

<body>
    <!-- Page Specific Content -->
    <main>
        <!-- Frontpage Hero Section -->
        <div id="hero-frontpage">
            <!-- Frontpage Navigation -->
            <nav id="main-navigation" class="animated fadeIn delay-1s">
                <div class="container">
                    <ul>
                        <li><a href="#main-navigation" title="Her kan du læse mere om vores uddannelsesmuligheder med speciale i autisme" class="education-menu">Job og uddannelse</a></li>
                        <li><a href="#main-navigation" title="Her kan du læse mere om at skabe et netværk med andre med autisme" class="network-menu">Netværksafdelingen</a></li>
                        <li><a href="#main-navigation" title="Vi står til rådighed med behandling og kurser, du kan læse mere om her" class="counsel-menu">Rådgivning, behandling og kurser</a></li>
                        <li><a href="#main-navigation" title="Læs mere om hvordan vi forsker ydeligere for at skabe et bedre liv for folk med autisme" class="research-menu">Forskning og Udvikling</a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="hero-row animated slideInUp delay-1s">
            <div class="navigation-wrapper">
                <div class="container">
                    <nav class="expanded-navigation">
                        <span class="close-menu">
                            <i class="fas fa-times"></i>
                        </span>
                        <?php wp_nav_menu( array( 'menu' => 'education-navigation', 'container'=> false, 'menu_class'=> false, 'menu_id'=> 'education-navigation' ) ); ?>
                        <?php wp_nav_menu( array( 'menu' => 'network-navigation', 'container'=> false, 'menu_class'=> false, 'menu_id'=> 'network-navigation' ) ); ?>
                        <?php wp_nav_menu( array( 'menu' => 'counsel-navigation', 'container'=> false, 'menu_class'=> false, 'menu_id'=> 'counsel-navigation' ) ); ?>
                        <?php wp_nav_menu( array( 'menu' => 'research-navigation', 'container'=> false, 'menu_class'=> false, 'menu_id'=> 'research-navigation' ) ); ?>
                    </nav>
                </div>
            </div>
            <div class="education">
                <div class="container shaded">
                    <header class="row heading">
                        <h1><?php echo get_the_title(); ?></h1>
                    </header>
                    <div class="row two-column">
                        <article class="counsel">
                            <?php the_field('introduction_left'); ?>
                        </article>
                        <article class="education">
                            <?php the_field('introduction_right'); ?>
                        </article>
                    </div>
                </div>
            </div>

            <section class="call-to-action">
                <div class="container">
                    <article>
                            <?php the_field('call_to_action_readmore'); ?>
                    </article>
                    <?php 
                        $link = get_field('call_to_action_read_more_link');
	                    $link_url = $link['url'];
                    ?>
                    <a href="<?php echo esc_url($link_url); ?>" class="btn">Læs mere her</a>
                </div>
            </section>

            <div class="row colored counsel">
                <div class="container">
                    <div class="row counsel-primary">
                        <article>
                            <?php the_field('counsel_left'); ?>
                        </article>
                        <figure>
                            <?php $image = get_field('counsel_image'); 
                            if( !empty($image) ): ?>
	                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>" />
                            <?php endif; ?>
                        </figure>
                        <span class="ribbon-shadow animation"><span class="ribbon"></span>
                    </div>
                    <div class="row services">
                        <h2><?php the_field('courses_title'); ?></h2>
                        <section>
                            <article>
                                <?php the_field('courses_left'); ?>
                            </article>
                            <article>
                                <?php the_field('courses_right'); ?>
                            </article>
                        </section>
                    </div>
                </div>
            </div>

            <div class="row research">
                <div class="container">
                    <h2><?php the_field('blog_title'); ?></h2>
                    <section>
                        <article>
                            <?php the_field("blog_post_1"); ?>
                        </article>
                        <article>
                            <?php the_field("blog_post_2"); ?>
                        </article>
                        <article>
                            <?php the_field("blog_post_3"); ?>
                        </article>
                    </section>
                </div>
            </div>
        </div>
<?php
get_footer();