<?php
/**
 * Recent Blog Widget.
 *
 * @package bloogs
 */

class bloogs_Recent_Blog_Widget extends SiteOrigin_Widget {

	function __construct() {

		parent::__construct(
			'bloogs-recent-blog-widget',
			__( 'bloogs Recent Blog Widget', 'bloogs' ),
			array(
				'description' => __( 'bloogs Recent Blog', 'bloogs' ),
			),
			array(),

			array(
				'heading_alignment' => array(
					'type' => 'select',
					'label' => __( 'Text Alignment', 'bloogs' ),
					'default' => 'text-left',
					'options' => array(
						'text-left' => __( 'Text Left', 'bloogs' ),
						'text-center' => __( 'Text Center', 'bloogs' ),
						'text-right' => __( 'Text Right', 'bloogs' ),
					)
				),
				'title' => array(
					'type'  => 'text',
					'label' => __( 'Heading', 'bloogs' ),
				),
				'post_limit' => array(
					'type' => 'number',
					'label' => __( 'Post Limit', 'bloogs' ),
                    'default' => '2'
				),
			)

		);
	}

	function get_template_name( $instance ) {
		return 'default';
	}
}

siteorigin_widget_register( 'bloogs-recent-blog-widget', __FILE__, 'bloogs_Recent_Blog_Widget' );
