<?php
/**
 * Service widget.
 *
 * @package bloogs
 */

class bloogs_Service_Widget extends SiteOrigin_Widget {

	function __construct() {

		parent::__construct(
			'bloogs-service-widget',
			__( 'bloogs Service Widget', 'bloogs' ),
			array(
				'description' => __( 'Service Widget', 'bloogs' ),
			),
			array(),

			array(
				'heading_alignment' => array(
					'type' => 'select',
					'label' => __( 'Text Alignment', 'bloogs' ),
					'default' => 'text-center',
					'options' => array(
						'text-left' => __( 'Text Left', 'bloogs' ),
						'text-center' => __( 'Text Center', 'bloogs' ),
						'text-right' => __( 'Text Right', 'bloogs' ),
					)
				),
				'icon' => array(
					'type' => 'icon',
					'label' => __('Select an icon', 'bloogs'),
				),
				'icon_size' => array(
					'type' => 'number',
					'label' => __( 'Icon Size', 'bloogs' ),
					'default' => '40'
				),
				'icon_color' => array(
					'type' => 'color',
					'label' => __( 'Icon Color', 'bloogs' ),
					'default' => '#c09f5a'
				),
				'title' => array(
					'type'  => 'text',
					'label' => __( 'Heading', 'bloogs' ),
				),
				'texteditor' => array(
					'type' => 'tinymce',
					'label' => __( '', 'bloogs' ),
					'default' => '',
					'rows' => 7,
					'default_editor' => 'html',
					'button_filters' => array(
						'mce_buttons' => array( $this, 'filter_mce_buttons' ),
						'mce_buttons_2' => array( $this, 'filter_mce_buttons_2' ),
						'mce_buttons_3' => array( $this, 'filter_mce_buttons_3' ),
						'mce_buttons_4' => array( $this, 'filter_mce_buttons_5' ),
						'quicktags_settings' => array( $this, 'filter_quicktags_settings' ),
					),
				),
				'url' => array(
					'type'  => 'link',
					'label' => __( 'URL', 'bloogs' ),
				),
			)

		);
	}

	function get_template_name( $instance ) {
		return 'default';
	}
}

siteorigin_widget_register( 'bloogs-service-widget', __FILE__, 'bloogs_Service_Widget' );
