<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bloogs
 */

if(is_single()){
	$margin[] = 'padding-gap-6';
}else{
	$margin[] = 'padding-gap-6 col-md-6 col-sm-6 col-xs-12';
}

?>

<article id="post-<?php the_ID(); ?>" <?php post_class($margin); ?>>
	<div class="article-post">
		<?php
		if ( has_post_format( 'link' )) {
			require get_template_directory() . '/inc/post_format/link.php';
		}elseif( has_post_format( 'gallery' )){
			require get_template_directory() . '/inc/post_format/gallery.php';
		}elseif( has_post_format( 'video' )){
			require get_template_directory() . '/inc/post_format/video.php';
		}elseif( has_post_format( 'quote' )){
			require get_template_directory() . '/inc/post_format/quote.php';
		}elseif( has_post_format( 'aside ' )){
			require get_template_directory() . '/inc/post_format/aside .php';
		}else { ?>
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
				<?php

				if(has_post_thumbnail()):
					if(is_single()) { ?>
						<img src="<?php echo $post_thumbnail_id = get_the_post_thumbnail_url(); ?>"
							 class="img-responsive margin-top-20 margin-bottom-20" alt=""/>
					<?php } else { ?>
						<a href="<?php the_permalink(); ?>"><img
								src="<?php echo $post_thumbnail_id = get_the_post_thumbnail_url(); ?>"
								class="img-responsive margin-top-20 margin-bottom-20" alt=""/></a>
						<?php
					}
				endif;

				if(is_single()) :
					the_content();
				else:
					$excerpt = get_theme_mod('excerpt_lenght', '55');
					//return $excerpt;
					the_excerpt();
				endif;

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
					<div class="pull-right margin-top-10 social-sharing-fix">
						<?php themetim_social_sharing(); ?>
					</div>
				<?php endif; ?>
			</footer><!-- .entry-footer -->
		<?php } ?>
	</div>
</article><!-- #post-## -->
