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
<<<<<<< HEAD
?>
<figure class="header-image">
    <div class="logo-container">
        <?php the_custom_logo(); ?>
		<P class="site-discribe">A Virtual University of the Third Age</P>
    </div>
</div>
    <?php the_header_image_tag( array( 'class' => 'background-darken' ) ); ?>
    <figcaption class="overlay">
        <div class=header-text-top><?php esc_html_e( 'Welcome to U3A Online' ); ?></div>
        <div class="header-text-down"><?php esc_html_e( 'U3A Online is the world-first virtual University of the Third Age delivering online learning via the Internet. ', 'wp-rig' ); ?></div>
		<div class="cta-button-container">
            <a href="#" class="cta-button"><p>Learn More</p></a>
        </div>
    </figcaption>
</figure><!-- .header-image -->


=======

?>
<figure class="header-image">
	<?php the_header_image_tag(); ?>
	<figcaption class="header-text"><?php esc_html_e( 'U3A Online is the world-first
	virtual University of the Third
	Age delivering online learning via the Internet. ', 'wp-rig' ); ?>
</figcaption>
</figure><!-- .header-image -->

>>>>>>> 2aead48e3d76e37b16a7bd88de885a83ffd7bdc7
