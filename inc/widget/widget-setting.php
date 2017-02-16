<?php

/**
 * Load SiteOrigin Widgets.
 */
if ( class_exists( 'SiteOrigin_Widget' ) ) {
    require get_template_directory() . '/inc/widget/testimonial/testimonial.php';
    require get_template_directory() . '/inc/widget/portfolio/portfolio.php';
    require get_template_directory() . '/inc/widget/service/service.php';
    require get_template_directory() . '/inc/widget/editor/editor.php';
    require get_template_directory() . '/inc/widget/recent-blog/recent-blog.php';
}