<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bloogs
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="preloader animsition">
	<header class="header">
		<!--------------- Header Top ---------------->
		<section class="header-top position-relative">
			<div class="top">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-12 info">
							<p><i class="fa fa-map-marker"></i> 54 west coloni, BG road, IK</p>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12 header-social">
							<?php do_action('themetim_header_social'); ?>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12 padding-null">
						<!--------------- Primary Menu ---------------->
						<nav class="navbar navbar-default text-uppercase primary-menu">
							<div class="navbar-header">
								<button type="button" data-toggle="collapse" data-target="#navbar-collapse" class="navbar-toggle">
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>
							<div id="navbar-collapse" class="navbar-collapse collapse">
								<?php
								if ( has_nav_menu( 'primary' ) ) :
									wp_nav_menu( array('menu' => 'primary', 'theme_location' => 'primary', 'depth' => 5, 'container' => '', 'menu_id' => 'primary-menu', 'container_class' => 'collapse navbar-collapse', 'container_id' => 'bs-example-navbar-collapse-1', 'menu_class' => 'nav navbar-nav', 'fallback_cb' => 'wp_bootstrap_navwalker::fallback', 'walker' => new wp_bootstrap_navwalker()));
								else: echo '<p class="margin-top-10 pull-left text-capitalize">Please select <a href="/wp-admin/nav-menus.php" class="text-muted">Primary Menu</a> </p>';
								endif; ?>
								<?php if (get_theme_mod('bottom_header_search','1')) : ?>
									<!--------------- Search ---------------->
									<form role="search" method="get" class="navbar-form navbar-right header-search position-relative" action="<?php echo home_url( '/' ); ?>">
										<input type="search" class="search-field form-control" placeholder="<?php esc_html_e( 'Search...', 'bloogs' ) ?>" value="<?php echo get_search_query() ?>" name="s" />
										<button type="submit" class="btn"><i class="fa fa-search"></i></button>
									</form>
								<?php endif ?>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</section>
		<!--------------- Header Bottom ---------------->
		<section class="header-bottom">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12 logo text-center">
						<?php
						if (get_theme_mod('site_logo') != '') : ?>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_theme_mod('site_logo'); ?>" class="img-responsive center-block" alt="" /></a>
						<?php else : ?>
							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
							<?php if(!empty( get_bloginfo('description') )) : ?>
								<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'description' ); ?></a></p>
							<?php endif ?>
						<?php endif ?>
					</div>
				</div>
			</div>
		</section>
	</header>
	<?php if ( !is_front_page() ) { ?>
	<!--------------- Breadcrumb ---------------->
	<section class="breadcrumb-wrap">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<?php bloogs_breadcrumbs(); ?>
				</div>
			</div>
		</div>
	</section>
<?php } ?>