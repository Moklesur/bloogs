<div class="entry-content">
    <h2>
        <?php
        if(is_single()) :
            the_content();
        else:
            $excerpt = get_theme_mod('excerpt_lenght', '55');
            //return $excerpt;
            the_excerpt();
        endif;
        ?>
    </h2>
</div><!-- .entry-content -->