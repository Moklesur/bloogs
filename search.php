<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package bloogs
 */

get_header(); ?>

	<main id="main" class="search-page woocommerce" role="main">
		<section>
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<header class="page-header margin-null  padding-gap-1">
							<h2 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'bloogs' ), '<span>' . get_search_query() . '</span>' ); ?></h2>
						</header><!-- .page-header -->
					</div>
					<div class="col-md-9 col-sm-12 col-xs-12 padding-gap-1 padding-gap-4">
						<?php
						if ( have_posts() ) : ?>
							<?php
							/* Start the Loop */
							while ( have_posts() ) : the_post();

								/**
								 * Run the loop for the search to output the results.
								 * If you want to overload this in a child theme then include a file
								 * called content-search.php and that will be used instead.
								 */
								get_template_part( 'template-parts/content', 'search' );

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

						endif; ?>
					</div>
					<?php get_sidebar(); ?>
				</div>
			</div>
		</section>



	</main><!-- #main -->

<?php

get_footer();
