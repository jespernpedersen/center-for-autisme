<?php
/**
 * The template for displaying search results pages
 *
 */

get_header();
?>

<main class="search-results">
            <!-- Navigation -->
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
        <!-- Expanded Navigation -->
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
        </div>
        <!-- Breadcrumb -->
        <div id="breadcrumb">
            <div class="container">
				
			<div id="pre-breadcrumb">
				<span><a href="/">Forside</a></span>
					</div>
			<?php
				if ( function_exists('yoast_breadcrumb') ) {
					yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
				}
				?>            
			</div>
        </div>
        <div id="subpage">
            <div class="container">
                <!-- Content -->
                <!-- Main Content -->
                <section id="content" class="">
					<?php 
					if ( have_posts() ) : ?>

						<header class="page-header">
							<h1>Søgeresultater på: <?php echo get_search_query(); ?></h1>
						</header>
						<div id="search-results">
						<?php
						while ( have_posts() ) : the_post();

							get_template_part( 'template-parts/content', 'search' );

						endwhile;
					
					else: ?>

						<p>Sorry, but nothing matched your search terms.</p>
						
						</div>
					
					<?php
					endif;
					?>
				</section>
    </a></div></div>
<?php
get_sidebar();
get_footer();


