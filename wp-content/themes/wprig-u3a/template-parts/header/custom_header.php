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
	<figcaption class="header-text"><?php esc_html_e( 'U3A Online is the world-first
	virtual University of the Third
	Age delivering online learning via the Internet. ', 'wp-rig' ); ?>
</figcaption>
</figure><!-- .header-image -->

