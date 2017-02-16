<?php

/********************************************************
 * Header
 ********************************************************/
/**
 *  Header Social
 */
function header_social() {

    if(get_theme_mod('social_header_enable','1')) :
        ?>
        <ul class="list-inline text-right">
            <?php
            if(get_theme_mod('header_fb', 'https://www.facebook.com/') ) {
                echo '<li><a href="'.get_theme_mod('header_fb').'"  target="_blank"><i class="fa fa-facebook"></i></a></li>';
            }
            if(get_theme_mod('header_tw', '1')) {
                echo '<li><a href="'.get_theme_mod('header_tw', 'https://twitter.com ').'" target="_blank"><i class="fa fa-twitter"></i></a></li>';
            }
            if(get_theme_mod('header_li', '1')) {
                echo '<li><a href="'.get_theme_mod('header_li', 'https://linkedin.com').'" target="_blank"><i class="fa fa-linkedin"></i></a></li>';
            }
            if(get_theme_mod('header_pint', '1')) {
                echo '<li><a href="'.get_theme_mod('header_pint', 'https://pinterest.com').'" target="_blank"><i class="fa fa-pinterest"></i></a></li>';
            }
            if(get_theme_mod('header_ins', '1')) {
                echo '<li><a href="'.get_theme_mod('header_ins', 'https://instagram.com').'" target="_blank"><i class="fa fa-linkedin"></i></a></li>';
            }
            if(get_theme_mod('header_dri', '1')) {
                echo '<li><a href="'.get_theme_mod('header_dri', 'https://dribbble.com').'" target="_blank"><i class="fa fa-dribbble"></i></a></li>';
            }
            if(get_theme_mod('header_plus', '1')) {
                echo '<li><a href="'.get_theme_mod('header_plus', 'https://plus.google.com').'" target="_blank"><i class="fa fa-google-plus"></i></a></li>';
            }
            if(get_theme_mod('header_you', '1')) {
                echo '<li><a href="'.get_theme_mod('header_you', 'https://youtube.com').'" target="_blank"><i class="fa fa-youtube"></i></a></li>';
            }
            ?>
        </ul>
        <?php
    endif;
}
add_action( 'themetim_header_social', 'header_social' );

/********************************************************
 * Footer
 ********************************************************/
/**
 * Footer Social
 */
function footer_social() {
    if(get_theme_mod('social_footer_enable','1')) : ?>
        <div class="footer-social margin-top-20">
            <ul class="list-inline margin-bottom-0">
                <?php
                if(get_theme_mod('footer_fb','1')) {
                    echo '<li><a href="'.get_theme_mod('footer_fb','https://www.facebook.com/ ').'"  target="_blank"><i class="fa fa-facebook"></i></a></li>';
                }
                if(get_theme_mod('footer_tw','1')) {
                    echo '<li><a href="'.get_theme_mod('footer_tw','https://twitter.com').'" target="_blank"><i class="fa fa-twitter"></i></a></li>';
                }
                if(get_theme_mod('footer_li','1')) {
                    echo '<li><a href="'.get_theme_mod('footer_li','https://linkedin.com').'" target="_blank"><i class="fa fa-linkedin"></i></a></li>';
                }
                if(get_theme_mod('footer_pint','1')) {
                    echo '<li><a href="'.get_theme_mod('footer_pint','https://pinterest.com').'" target="_blank"><i class="fa fa-pinterest"></i></a></li>';
                }
                if(get_theme_mod('footer_ins','1')) {
                    echo '<li><a href="'.get_theme_mod('footer_ins','https://instagram.com').'" target="_blank"><i class="fa fa-linkedin"></i></a></li>';
                }
                if(get_theme_mod('footer_dri','1')) {
                    echo '<li><a href="'.get_theme_mod('footer_dri','https://dribbble.com').'" target="_blank"><i class="fa fa-dribbble"></i></a></li>';
                }
                if(get_theme_mod('footer_plus','1')) {
                    echo '<li><a href="'.get_theme_mod('footer_plus','https://plus.google.com').'" target="_blank"><i class="fa fa-google-plus"></i></a></li>';
                }
                if(get_theme_mod('footer_you','1')) {
                    echo '<li><a href="'.get_theme_mod('footer_you','https://youtube.com').'" target="_blank"><i class="fa fa-youtube"></i></a></li>';
                }
                ?>
            </ul>
        </div>
    <?php endif;
}
add_action( 'themetim_footer_social', 'footer_social' );
/**
 * Footer Newsletter
 */
function footer_newsletter(){
    if(get_theme_mod('newsletter_footer_enable','1')){ ?>
        <h4><?php echo get_theme_mod('top_footer_newsletter_title','Follow Us'); ?></h4>
        <form class="position-relative" action="<?php echo get_theme_mod('top_footer_newsletter_url','https://www.yourmailchimpurl.com'); ?>" method="post" target="_blank">
            <input type="email" class="form-control" name="newsletter-email" id="newsletter-email" placeholder="info@yoursite.com" required="">
            <button type="submit" class="btn btn-success"><i class="fa fa-envelope"></i></button>
        </form>
    <?php }
}
add_action( 'themetim_footer_newsletter', 'footer_newsletter' );

/**
 * Middle Footer Description
 */
function middle_footer_description(){
    ?>
    <div class="col-md-4 col-sm-6 col-xs-12 footer-contact">
        <h4><?php echo get_theme_mod('middle_footer_text_heading','Get In Touch'); ?></h4>
        <p><?php echo get_theme_mod('middle_footer_text','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.'); ?></p>
    </div>
    <?php
}
add_action( 'themetim_middle_footer_description', 'middle_footer_description' );

/**
 * Middle Footer Nav 1
 */
function middle_footer_nav_1(){
    ?>
    <div class="col-md-3 col-sm-6 col-xs-12 footer-menu">
        <h4><?php echo get_theme_mod('middle_footer_nav_heading_1','Information'); ?></h4>
        <?php
        if ( has_nav_menu( 'footer-1' ) ) :
            wp_nav_menu( array( 'theme_location' => 'footer-1', 'menu_class' => 'list-unstyled text-capitalize', 'menu_id' => 'primary-menu','container' => '' ) );
        else: echo '<p class="text-capitalize">Please select <a href="/wp-admin/nav-menus.php" class="text-muted">Footer Nav 1</a> </p>';
        endif;
        ?>
    </div>
    <?php
}
add_action( 'themetim_middle_footer_nav_1', 'middle_footer_nav_1' );

/**
 * Bottom Footer Copyright
 */
function bottom_footer_copyright(){
    ?>
    <div class="col-md-12 col-sm-12 col-xs-12 site-info text-center">
        <p><a href="https://wordpress.org"><?php echo get_theme_mod('bottom_footer_copyright','Proudly powered by WordPress'); ?></a> | <a href="http://themetim.com">bloogs By ThemeTim</a></p>
    </div>
    <?php
}
add_action( 'themetim_bottom_footer_copyright', 'bottom_footer_copyright' );

/**
 * Social Sharing
 */
function themetim_social_sharing(){
    ?>
    <ul class="list-inline">
        <li class="margin-top-10"><a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
        <li class="margin-top-10"><a href="https://twitter.com/home?status=<?php the_permalink(); ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
        <li class="margin-top-10"><a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" target="_blank"><i class="fa fa-google-plus"></i></a></li>
        <li class="margin-top-10"><a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>&summary=&source=<?php the_permalink(); ?>" target="_blank"><i class="fa fa-linkedin"></i></a></li>
        <li class="margin-top-10"><a href="https://pinterest.com/pin/create/button/?url=&media=&description=<?php the_permalink(); ?>" target="_blank"><i class="fa fa-pinterest"></i></a></li>
    </ul>
    <?php
}