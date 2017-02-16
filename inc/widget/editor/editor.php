<?php
/**
 * Editor Widget.
 *
 * @package bloogs
 */

class bloogs_Editor_Widget extends SiteOrigin_Widget {

	function __construct() {

		parent::__construct(
			'bloogs-editor-widget',
			__( 'bloogs Editor Widget', 'bloogs' ),
			array(
				'description' => __( 'bloogs Editor Widget', 'bloogs' ),
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
				'icon' => array(
					'type' => 'icon',
					'label' => __('Select an icon', 'bloogs'),
				),
				'icon_size' => array(
					'type' => 'number',
					'label' => __( 'Icon Size', 'bloogs' ),
					'default' => '14'
				),
				'icon_color' => array(
					'type' => 'color',
					'label' => __( 'Icon Color', 'bloogs' ),
					'default' => '#000'
				),
				'title' => array(
					'type'  => 'text',
					'label' => __( 'Heading', 'bloogs' ),
				),
				'sub_title' => array(
					'type' => 'text',
					'label' => __( 'Sub Heading', 'bloogs' ),
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
				'button_text' => array(
					'type' => 'text',
					'label' => __('Button Title', 'bloogs'),
					'default' => ''
				),
				'button_style' => array(
					'type' => 'select',
					'label' => __( 'Button Style', 'bloogs' ),
					'default' => 'btn-default',
					'options' => array(
						'btn-default' => __( 'Default', 'bloogs' ),
						'btn-primary' => __( 'Primary', 'bloogs' ),
						'btn-success' => __( 'Success', 'bloogs' ),
					)
				),
				'button_url' => array(
					'type' => 'link',
					'label' => __('Button URL', 'bloogs'),
					'default' => ''
				),
			)

		);
	}

	function get_template_name( $instance ) {
		return 'default';
	}
}

siteorigin_widget_register( 'bloogs-editor-widget', __FILE__, 'bloogs_Editor_Widget' );
