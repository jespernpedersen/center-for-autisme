<?php
/**
 * Template for displaying search forms in CfA
 *
 * @package cfa
 */
?>
	<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<input type="text" class="field" name="s" id="s" placeholder="Søg på emner eller termer" />
        <button type="submit" class="submit" name="submit" id="searchsubmit" value="<?php esc_attr_e( 'Search', 'twentyeleven' ); ?>"><i class="fas fa-search"></i></button>
	</form>