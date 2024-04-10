<?php
/**
 * Template part for displaying the header branding
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>

<?php the_custom_logo(); ?>
<div class="site-branding">
	<?php
	if ( is_front_page() && is_home() ) {
		?>
		<p class="site-title">Special Note:Special Note:This website represents U3A Online exclusively, not a local U3A group where all activities are conducted online</p>
		<?php
	} else {
		?>
		<p class="site-title">Special Note:<br>This website represents U3A Online exclusively, not a local U3A group where all activities are conducted online</p>
		<?php
	}
	?>

</div><!-- .site-branding -->
