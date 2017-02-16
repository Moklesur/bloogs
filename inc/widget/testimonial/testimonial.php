<?php
/**
 * Testimonial widget.
 *
 * @package bloogs
 */

class bloogs_Testimonial_Widget extends SiteOrigin_Widget {

	function __construct() {

		parent::__construct(
			'bloogs-testimonial-widget',
			__( 'bloogs Testimonial Widget', 'bloogs' ),
			array(
				'description' => __( 'Testimonial Widget', 'bloogs' ),
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
				'title' => array(
					'type'  => 'text',
					'label' => __( 'Title', 'bloogs' ),
				),

				'testimonial' => array(
					'type'       => 'repeater',
					'label'      => __( 'Testimonial', 'bloogs' ),
					'item_name'  => __( 'Item', 'bloogs' ),
					'item_label' => array(
						'selector'     => "[id*='prefix-bloogs-testimonial-']",
						'update_event' => 'change',
						'value_method' => 'val',
					),
					'fields' => array(
						'testimonial_name' => array(
							'type'  => 'text',
							'label' => __( 'Name', 'bloogs' ),
						),
						'testimonial_texteditor' => array(
							'type' => 'tinymce',
							'label' => __( '', 'bloogs' ),
							'default' => '',
							'rows' => 10,
							'default_editor' => 'html',
							'button_filters' => array(
								'mce_buttons' => array( $this, 'filter_mce_buttons' ),
								'mce_buttons_2' => array( $this, 'filter_mce_buttons_2' ),
								'mce_buttons_3' => array( $this, 'filter_mce_buttons_3' ),
								'mce_buttons_4' => array( $this, 'filter_mce_buttons_5' ),
								'quicktags_settings' => array( $this, 'filter_quicktags_settings' ),
							),
						),
						'testimonial_profile_picture' => array(
							'type'     => 'media',
							'library'  => 'image',
							'label'    => __( 'Image', 'bloogs' ),
							'fallback' => true,
						),
					),
				),
			)
		);
	}

	function get_template_name( $instance ) {
		return 'default';
	}
}

siteorigin_widget_register( 'bloogs-testimonial-widget', __FILE__, 'bloogs_Testimonial_Widget' );
