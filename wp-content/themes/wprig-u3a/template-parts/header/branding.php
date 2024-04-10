<?php
/**
 * Template part for displaying the header branding
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>
<<<<<<< HEAD
=======
<?php the_custom_logo(); ?>
>>>>>>> 2aead48e3d76e37b16a7bd88de885a83ffd7bdc7
<div class="site-branding">
	<?php
	if ( is_front_page() && is_home() ) {
		?>
<<<<<<< HEAD
		<p class="site-title">Special Note:Special Note:This website represents U3A Online exclusively, not a local U3A group where all activities are conducted online</p>
		<?php
	} else {
		?>
		<p class="site-title">Special Note:<br>This website represents U3A Online exclusively, not a local U3A group where all activities are conducted online</p>
=======
		<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
		<?php
	} else {
		?>
		<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
>>>>>>> 2aead48e3d76e37b16a7bd88de885a83ffd7bdc7
		<?php
	}
	?>

<<<<<<< HEAD
=======
	<?php
	$wp_rig_description = get_bloginfo( 'description', 'display' );
	if ( $wp_rig_description || is_customize_preview() ) {
		?>
		<p class="site-description">
			<?php echo $wp_rig_description; /* phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped */ ?>
		</p>
		<?php
	}
	?>
>>>>>>> 2aead48e3d76e37b16a7bd88de885a83ffd7bdc7
</div><!-- .site-branding -->
