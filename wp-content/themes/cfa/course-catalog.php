<?php
/*Template Name: Kursus*/
get_header();
?>

<main id="course-catalog">
<?php 
	$category = get_field('category_color');
	if(!has_post_thumbnail()) {
		if($category == 'education-category') {
			$featured_image = '/wp-content/uploads/2019/06/youth-education.jpg';
		}
		else if ($category == 'network-category') {
			$featured_image = '/wp-content/uploads/2019/06/network-featured.jpg';
		}
		else if ($category == 'counsel-category') {
			$featured_image = '/wp-content/uploads/2019/06/counsel-featured.jpg';
		}  
		else if ($category == 'research-category') {
			$featured_image = '/wp-content/uploads/2019/06/research-featured.jpg';
        } 
        else {
            $featured_image = '/wp-content/uploads/2019/06/center-for-autisme.png';
        }
	}
	else {
		$featured_image = get_the_post_thumbnail_url();
	}
?>
<div id="featured-image" style="background-image: url('<?php echo $featured_image ?>');">
            <!-- Navigation -->
            <nav id="main-navigation" class="animated fadeIn delay-1s">
                <div class="container">
                    <ul>
                        <li><a href="#main-navigation" title="Her kan du læse mere om vores uddannelsesmuligheder med speciale i autisme" class="education-menu">Job og uddannelse</a></li>
                        <li><a href="#main-navigation" title="Her kan du læse mere om at skabe et netværk med andre med autisme" class="network-menu">Netværksafdelingen</a></li>
                        <li><a href="#main-navigation" title="Vi står til rådighed med behandling og kurser, du kan læse mere om her" class="counsel-menu">Rådgivning, behandling og kurser</a></li>
                        <li><a href="#main-navigation" title="Læs mere om hvordan vi forsker ydeligere for at skabe et bedre liv for folk med autisme" class="research-menu">Forskning og udvikling</a></li>
                    </ul>
                </div>
            </nav>
        </div>
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
			<?php
				if ( function_exists('yoast_breadcrumb') ) {
					?>
					<?php
					$over_category = get_field('over_category');
					if($category == 'education-category') {
						$breadcrumb = '<span><a href="/job-og-uddannelse/">Job og uddannelse</a></span>';
					}
					else if($category == 'network-category') {
						$breadcrumb = '<span><a href="/netvaerksafdelingen/">Netværksafdelingen</a></span>';
					}
					else if($category == 'counsel-category') {
						$breadcrumb = '<span><a href="/raadgivning-undersoegelser-og-kurser/">Rådgivning, behandling og kurser</a></span>';
					}
					else if($category == 'research-category') {
						$breadcrumb = '<span><a href="/forskning-udvikling/">Forskning og udvikling</a></span>';
					}
					else {
						$breacrumb = '';
					}
					?>
					<div id="pre-breadcrumb">
					<span><a href="/">Forside</a></span>
					<?php
					if($over_category != 1) {
						echo $breadcrumb;
					}
					?>
					</div>
					<?php
					yoast_breadcrumb( '<p id="breadcrumbs">
					','</p>' );
				}
				?>            
			</div>
		</div>
        <div id="subpage">
            <div class="container">
                <!-- Content -->
                <!-- Category Navigation -->
                <?php 
                if($category != 'no-category') {
                ?>
                <aside id="category-navigation">
                    <div class="category-inner">
					<?php 
							if($category == 'education-category') {
								$menu_object = wp_get_nav_menu_object("education-navigation" );
								// This h2 should be dynamic. But still finding ways of having a name for a menu without changing its slug
								?>
								<h2>Job og uddannelse</h2>
								<?php
								echo '<nav>' . $menu = wp_nav_menu( array( 'menu' => 'education-navigation', 'container'=> false, 'menu_class'=> false, 'menu_id'=> 'education-navigation' ) ) . '</nav>';
							}
							else if($category == 'network-category') {
								$menu_object = wp_get_nav_menu_object("network-navigation" );
								// This h2 should be dynamic. But still finding ways of having a name for a menu without changing its slug
								?>
								<h2>Netværksafdelingen</h2>
								<?php
								echo '<nav>' . $menu = wp_nav_menu( array( 'menu' => 'network-navigation', 'container'=> false, 'menu_class'=> false, 'menu_id'=> 'network-navigation' ) ) . '</nav>';
							}
							else if($category == 'counsel-category') {
								$menu_object = wp_get_nav_menu_object("counsel-navigation" );
								// This h2 should be dynamic. But still finding ways of having a name for a menu without changing its slug
								?>
								<h2>Rådgivning, behandling, undersøgelser, kurser</h2>
								<?php
								echo '<nav>' . $menu = wp_nav_menu( array( 'menu' => 'counsel-navigation', 'container'=> false, 'menu_class'=> false, 'menu_id'=> 'counsel-navigation' ) ) . '</nav>';
							}
							else if($category == 'research-category') {
								$menu_object = wp_get_nav_menu_object("research-navigation" );
								// This h2 should be dynamic. But still finding ways of having a name for a menu without changing its slug
								?>
								<h2>Forskning og Udvikling</h2>
								<?php
								echo '<nav>' . $menu = wp_nav_menu( array( 'menu' => 'research-navigation', 'container'=> false, 'menu_class'=> false, 'menu_id'=> 'research-navigation' ) ) . '</nav>';
							}
						?>
                    </div>
                </aside>
                <?php 
                }
                ?>
                <!-- Main Content -->
                <section id="content">
                <h1><?php echo get_the_title(); ?></h1>
                <?php the_content(); ?>  
                <?php           
                query_posts(array(
                    'post_type' => 'kursuskatalog'
                ));
                    while (have_posts()) : the_post(); 
                        $seats = get_field('seats');
                    ?>
                    <div class="course-item">
                        <div class="item-inner">
                            <span class="uncollapse">
                                <i class="fas fa-bars"></i>
                            </span>
                            <h2><?php the_title(); ?></h2>
                            <div class="cta-wrapper">
								<span class="seats">
									<span class="seats-number"><?php echo $seats; ?></span>
									<span class="seats-text">Pladser tilbage</span>
								</span>
                                <button class="btn" data-course-id="<?php the_ID(); ?>">Book nu</button>
                            </div>
                        </div>
                        <div class="additional-content">
                            <p><?php the_content(); ?></p>
                        </div>
                    </div>
                <?php 
                    endwhile; 
                ?>
				</section>
    </a></div></div>
<?php
get_sidebar();
get_footer();