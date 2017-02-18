<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bloogs
 */

get_header(); ?>

	<main class="home-page">
		<section>
			<!--------------- Blog Slider ---------------->
			<div class="blog-slider">
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12 text-center">
							<div id="blog-slider" class="carousel slide" data-ride="carousel">
								<!-- Wrapper for slides -->
								<div class="carousel-inner" role="listbox">
									<?php
									$home_slider_blog = new WP_Query( array(
										'post_status'         => 'publish',
										'posts_per_page'	  => 4
									) );
									if ($home_slider_blog->have_posts()) :
										while ( $home_slider_blog->have_posts() ) : $home_slider_blog->the_post(); ?>
											<div class="item">
												<?php the_title( sprintf( '<h3 class="entry-title text-capitalize margin-null"><a href="%s">', esc_url( get_permalink() ) ), '</a></h3>' );
												if ( 'post' === get_post_type() ) : ?>
													<div class="entry-meta margin-bottom-20 margin-top-10">
														<?php themetim_posted_on(); ?>
													</div><!-- .entry-meta -->
												<?php endif; ?>
												<div class="entry-summary"><?php the_excerpt(); ?></div>
												<?php if(!is_single()) : ?>
													<div class="margin-top-20">
														<a href="<?php the_permalink(); ?>" class="read-more">Read More</a>
													</div>
												<?php endif;  ?>
											</div>
										<?php endwhile; wp_reset_postdata(); endif; ?>
								</div>

								<!-- Controls -->
								<div class="blog-slider-arrow">
									<a href="#blog-slider" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
									<a href="#blog-slider" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<script>
				jQuery(document).ready(function () {
					if(jQuery('.blog-slider').length){
						jQuery('.blog-slider').find('.item').first().addClass('active');
					}
				});
			</script>
			<div class="container ">
				<div class="row">
					<?php if (get_theme_mod('blog_sidebar_enable','1') ) : ?>
					<div class="col-md-9 col-sm-12 col-xs-12 padding-gap-1 padding-gap-4 padding-null">
						<?php else: ?>
						<div class="col-md-12 col-sm-12 col-xs-12 padding-gap-1 padding-gap-4 padding-null">
							<?php endif; ?>
							<?php
							if ( have_posts() ) :
								if ( is_home() && ! is_front_page() ) : ?>
									<header>
										<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
									</header>
									<?php
								endif;

								/* Start the Loop */
								while ( have_posts() ) : the_post();

									/*
                                     * Include the Post-Format-specific template for the content.
                                     * If you want to override this in a child theme, then include a file
                                     * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                                     */
									get_template_part( 'template-parts/content', get_post_format() );

								endwhile;
								?><div class="pagination-wrap col-md-12 col-sm-12 col-xs-12"><?php
								the_posts_pagination( array(
									'screen_reader_text' => ' ',
									'mid_size' => 5,
									'prev_text' => __( '<i class="fa fa-angle-left"></i>', 'bloogs' ),
									'next_text' => __( '<i class="fa fa-angle-right"></i>', 'bloogs' ),
								) );
								?></div><?php
							else :

								get_template_part( 'template-parts/content', 'none' );
							endif;

							?>
						</div>
						<?php
						if (get_theme_mod('blog_sidebar_enable','1') ) :
							get_sidebar();
						endif;
						?>
					</div>
				</div>
		</section>
	</main><!-- #main -->

<?php
get_footer();