<?php
/**
 * Template part for displaying the footer info
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>

<div class="site-info">
<div class="footer-menu-container">
    <?php
    wp_nav_menu( array(
        'theme_location' => 'footer',
        'menu_id'        => 'footer-menu'
    ) );
    ?>
</div>

		<?php
		/* translators: %s: CMS name, i.e. WordPress. */
		printf("© 2024 U3A Online. All rights reserved.| Powered by Team 5 JCU IT students
		");
		?>
</div><!-- .site-info -->
