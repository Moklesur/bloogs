<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package bloogs
 */

get_header(); ?>
	<main id="main" class="site-main" role="main">
		<section class="error-404 not-found padding-gap-1 padding-gap-2">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<header>
							<h1 class="page-header margin-null"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'bloogs' ); ?></h1>
						</header><!-- .page-header -->

						<div class="page-content padding-gap-3">
							<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'bloogs' ); ?></p>
							<form role="search" method="get" id="searchform" class="searchform form-inline margin-top-20 margin-null" action="<?php echo esc_url( home_url( '/' ) ); ?>">
								<div class="">
									<input type="text" class="form-control" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="Search" />
									<button type="submit" class="btn btn-default text-uppercase"><?php esc_html_e( 'Search', 'bloogs' ); ?></button>
								</div>
							</form>
						</div><!-- .page-content -->
					</div>
				</div>
			</div>
		</section><!-- .error-404 -->
	</main><!-- #main -->
<?php
get_footer();
