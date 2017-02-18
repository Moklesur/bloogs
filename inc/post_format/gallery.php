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
    <div id="blog-slider-<?php the_ID(); ?>" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <?php the_content(); ?>
            <!-- Controls -->
            <div class="blog-slider-arrow">
                <a href="#blog-slider-<?php the_ID(); ?>" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a href="#blog-slider-<?php the_ID(); ?>" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
            </div>
        </div>
    </div>
</div><!-- .entry-content -->
<script>
    jQuery(document).ready(function () {
        if(jQuery('#blog-slider-<?php the_ID(); ?>').length){
            jQuery('#blog-slider-<?php the_ID(); ?>').find('li').addClass('item');
            jQuery('#blog-slider-<?php the_ID(); ?>').find('li').first().addClass('active');
        }
    });
</script>