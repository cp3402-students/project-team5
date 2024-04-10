<?php
/**
 * Template part for displaying a post's title
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

if ( is_singular( get_post_type() ) ) {
<<<<<<< HEAD
=======
	the_title( '<h1 class="entry-title entry-title-singular">', '</h1>' );
} else {
>>>>>>> 2aead48e3d76e37b16a7bd88de885a83ffd7bdc7
	the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
}
