<?php
/**
 * Portfolio widget.
 *
 * @package bloogs
 */

class bloogs_Portfolio_Widget extends SiteOrigin_Widget {

	function __construct() {

		parent::__construct(
			'bloogs-portfolio-widget',
			__( 'bloogs Portfolio Widget', 'bloogs' ),
			array(
				'description' => __( 'Displays Portfolio Widget', 'bloogs' ),
			),
			array(),
			array(
				'title' => array(
					'type'  => 'text',
					'label' => __( 'Title', 'bloogs' ),
				),
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
				'portfolio' => array(
					'type'       => 'repeater',
					'label'      => __( 'Portfolio', 'bloogs' ),
					'item_name'  => __( 'Item', 'bloogs' ),
					'item_label' => array(
						'selector'     => "[id*='prefix-bloogs-portfolio-']",
						'update_event' => 'change',
						'value_method' => 'val',
					),
					'fields' => array(
						'profile_picture' => array(
							'type'     => 'media',
							'library'  => 'image',
							'label'    => __( 'Image', 'bloogs' ),
							'fallback' => true,
						),
						'menu_title' => array(
							'type'  => 'text',
							'label' => __( 'Title', 'bloogs' ),
						),
						'button_url' => array(
							'type' => 'link',
							'label' => __('Button URL', 'bloogs'),
							'default' => ''
						),
					),
				),
				'per_row' => array(
					'type'    => 'select',
					'label'   => __( 'Menus per row', 'bloogs' ),
					'default' => 4,
					'options' => array(
						'12' => 1,
						'6' => 2,
						'4' => 3,
						'3' => 4,
					),
				),
			)
		);
	}

	function get_template_name( $instance ) {
		return 'default';
	}
}

siteorigin_widget_register( 'bloogs-portfolio-widget', __FILE__, 'bloogs_Portfolio_Widget' );
