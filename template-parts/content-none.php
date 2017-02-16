<?php
/**
 * Template part for displaying a message that posts cannot be found.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bloogs
 */

?>

<div class="no-results not-found">
	<header>
		<h3 class="page-title page-header"><?php esc_html_e( 'Nothing Found', 'bloogs' ); ?></h3>
	</header><!-- .page-header -->
	<div class="page-content">
		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
			<p><?php printf( wp_kses( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'bloogs' ), array( 'a' => array( 'href' => array() ) ) ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>
		<?php elseif ( is_search() ) : ?>
			<p><?php __( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'bloogs' ); ?></p>
			<form role="search" method="get" class="search-form form-inline margin-top-20" action="<?php echo home_url( '/' ); ?>">
				<input type="search" class="search-field form-control" placeholder="<?php esc_attr_x( 'Search ...', '', 'bloogs' ) ?>" value="<?php echo get_search_query() ?>" name="s" />
				<input type="submit" class="search-submit btn btn-default" value="<?php esc_attr__( 'Search', 'bloogs' ) ?>" />
			</form>
			<?php
		else : ?>
			<p><?php __( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'bloogs' ); ?></p>
			<form role="search" method="get" class="search-form form-inline margin-top-20" action="<?php echo home_url( '/' ); ?>">
				<input type="search" class="search-field form-control" placeholder="<?php esc_attr_x( 'Search ...', '', 'bloogs' ) ?>" value="<?php echo get_search_query() ?>" name="s" />
				<input type="submit" class="search-submit btn btn-default" value="<?php esc_attr__( 'Search', 'bloogs' ) ?>" />
			</form>
			<?php
		endif; ?>
	</div><!-- .page-content -->
</div><!-- .no-results -->
