<?php
/**
 * Template part for displaying the custom header media
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

if ( ! has_header_image() ) {
	return;
}

?>
<figure class="header-image">
	<?php the_header_image_tag(); ?>
	<figcaption class="header-text"><?php esc_html_e( '(◠‿◠) This is not your local U3A website;
	rather, it is the website of U3A Online,
	a virtual U3A Group where everything is conducted online.', 'wp-rig' ); ?>
</figcaption>
</figure><!-- .header-image -->
