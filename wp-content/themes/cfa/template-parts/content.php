<?php
/**
 * Template part for displaying posts
 */

?>

<?php 
	$category = get_field('category_color');
	if(is_home()) {
		echo "Home";
	}
?>
<article id="post-<?php the_ID(); ?>" class="entry <?php echo $category ?>">
	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

	<div class="entry-content">
		<?php the_excerpt(); ?>
	</div>
	<a href="<?php the_permalink(); ?>" class="btn">Læs mere</a>
</article>