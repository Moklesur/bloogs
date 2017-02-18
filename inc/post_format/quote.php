<header class="entry-header margin-bottom-20">
    <?php
    if ( is_single() ) {
        the_title( '<h3 class="entry-title text-capitalize margin-null">', '</h3>' );
    } else {
        the_title( '<h3 class="entry-title margin-null text-capitalize"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
    }

    if ( 'post' === get_post_type() ) : ?>
        <div class="entry-meta  margin-top-10">
            <?php themetim_posted_on(); ?>
        </div><!-- .entry-meta -->
        <?php
    endif; ?>
</header><!-- .entry-header -->
<div class="entry-content">
    <blockquote><?php if(is_single()) :
        the_content();
    else:
        $excerpt = get_theme_mod('excerpt_lenght', '55');
        //return $excerpt;
        the_excerpt();
    endif;?></blockquote><?php

    wp_link_pages( array(
        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'bloogs' ),
        'after'  => '</div>',
    ) );
    ?>
</div><!-- .entry-content -->
<footer class="entry-footer overflow">
    <?php if(!is_single()) : ?>
        <div class="pull-left margin-top-20">
            <a href="<?php the_permalink(); ?>" class="read-more">Continue Reading</a>
        </div>
    <?php endif; ?>
    <?php if (get_theme_mod('blog_social_sharing_enable', '1')) : ?>
        <div class="pull-right margin-top-10">
            <?php themetim_social_sharing(); ?>
        </div>
    <?php endif; ?>
</footer><!-- .entry-footer -->