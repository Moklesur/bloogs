<?php
/**
 * bloogs Customizer.
 *
 * @package bloogs
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function bloogs_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	$wp_customize->get_section( 'title_tagline' )->title = __('Header', 'bloogs');
	$wp_customize->remove_section( 'background_image' );

	/**
	 * Class bloogs Divider
	 */
	class bloogs_divider extends WP_Customize_Control {
		public $type = 'divider';
		public $label = '';
		public function render_content() { ?>
			<h3 style="margin-top:15px; margin-bottom:0;background:#2cde9a;padding:9px 5px;color:#fff;text-transform:uppercase; text-align: center;letter-spacing: 2px;"><?php echo esc_html( $this->label ); ?></h3>
			<?php
		}
	}

	/*********************************************
	 * General
	 *********************************************/

	/*********************************************
	 * Social Links
	 *********************************************/
	$wp_customize->add_section( 'social_settings', array(
		'title' => __( 'Social Media', 'bloogs' ),
		'priority' => 60,
	) );
	/**
	 * bloogs Divider
	 */
	$wp_customize->add_setting('themetim_options[divider]', array(
			'type'              => 'divider_control',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'esc_attr',
		)
	);
	$wp_customize->add_control( new bloogs_divider( $wp_customize, 'header_social', array(
			'label' => __('Header Social', 'bloogs'),
			'description'   => __('', 'bloogs'),
			'section' => 'social_settings',
			'settings' => 'themetim_options[divider]'
		) )
	);
	/********************* Header Social ************************/
	$wp_customize->add_setting( 'header_fb', array(
		'default'           => 'https://www.facebook.com/',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( 'header_fb', array(
		'label' => __( 'Facebook', 'bloogs' ),
		'type' => 'text',
		'description'   => __('', 'bloogs'),
		'section' => 'social_settings',
		'settings' => 'header_fb'
	) );
	$wp_customize->add_setting( 'header_tw', array(
		'default'           => 'https://twitter.com',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( 'header_tw', array(
		'label' => __( 'Twitter', 'bloogs' ),
		'type' => 'text',
		'description'   => __('', 'bloogs'),
		'section' => 'social_settings',
		'settings' => 'header_tw'
	) );
	$wp_customize->add_setting( 'header_li', array(
		'default'           => 'https://linkedin.com',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( 'header_li', array(
		'label' => __( 'Linkedin', 'bloogs' ),
		'type' => 'text',
		'description'   => __('', 'bloogs'),
		'section' => 'social_settings',
		'settings' => 'header_li'
	) );
	$wp_customize->add_setting( 'header_pint', array(
		'default'           => 'https://pinterest.com',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( 'header_pint', array(
		'label' => __( 'Pinterest', 'bloogs' ),
		'type' => 'text',
		'description'   => __('', 'bloogs'),
		'section' => 'social_settings',
		'settings' => 'header_pint'
	) );
	$wp_customize->add_setting( 'header_ins', array(
		'default'           => 'https://instagram.com',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( 'header_ins', array(
		'label' => __( 'Instagram', 'bloogs' ),
		'type' => 'text',
		'description'   => __('', 'bloogs'),
		'section' => 'social_settings',
		'settings' => 'header_ins'
	) );
	$wp_customize->add_setting( 'header_dri', array(
		'default'           => 'https://dribbble.com',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( 'header_dri', array(
		'label' => __( 'Dribbble', 'bloogs' ),
		'type' => 'text',
		'description'   => __('', 'bloogs'),
		'section' => 'social_settings',
		'settings' => 'header_dri'
	) );
	$wp_customize->add_setting( 'header_plus', array(
		'default'           => 'https://plus.google.com',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( 'header_plus', array(
		'label' => __( 'Plus Google', 'bloogs' ),
		'type' => 'text',
		'description'   => __('', 'bloogs'),
		'section' => 'social_settings',
		'settings' => 'header_plus'
	) );
	$wp_customize->add_setting( 'header_you', array(
		'default'           => 'https://youtube.com',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( 'header_you', array(
		'label' => __( 'YouTube', 'bloogs' ),
		'type' => 'text',
		'description'   => __('', 'bloogs'),
		'section' => 'social_settings',
		'settings' => 'header_you'
	) );

	/**
	 * bloogs Divider
	 */
	$wp_customize->add_setting('themetim_options[divider]', array(
			'type'              => 'divider_control',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'esc_attr',
		)
	);
	$wp_customize->add_control( new bloogs_divider( $wp_customize, 'footer_social', array(
			'label' => __('Footer Social', 'bloogs'),
			'section' => 'social_settings',
			'settings' => 'themetim_options[divider]'
		) )
	);
	/********************* Footer Social ************************/
	$wp_customize->add_setting( 'social_footer_enable', array(
		'default'           => '1',
		'sanitize_callback' => 'bloogs_sanitize_checkbox',
	) );
	$wp_customize->add_control( 'social_footer_enable', array(
		'label' => __( 'Enable Footer Social', 'bloogs' ),
		'type' => 'checkbox',
		'description'   => __('', 'bloogs'),
		'section' => 'social_settings',
		'settings' => 'social_footer_enable'
	) );

	$wp_customize->add_setting( 'footer_fb', array(
		'default'           => 'https://www.facebook.com/',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( 'footer_fb', array(
		'label' => __( 'Facebook', 'bloogs' ),
		'type' => 'text',
		'description'   => __('', 'bloogs'),
		'section' => 'social_settings',
		'settings' => 'footer_fb'
	) );
	$wp_customize->add_setting( 'footer_tw', array(
		'default'           => 'https://twitter.com',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( 'footer_tw', array(
		'label' => __( 'Twitter', 'bloogs' ),
		'type' => 'text',
		'description'   => __('', 'bloogs'),
		'section' => 'social_settings',
		'settings' => 'footer_tw'
	) );
	$wp_customize->add_setting( 'footer_li', array(
		'default'           => 'https://linkedin.com',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( 'footer_li', array(
		'label' => __( 'Linkedin', 'bloogs' ),
		'type' => 'text',
		'description'   => __('', 'bloogs'),
		'section' => 'social_settings',
		'settings' => 'footer_li'
	) );
	$wp_customize->add_setting( 'footer_pint', array(
		'default'           => 'https://pinterest.com',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( 'footer_pint', array(
		'label' => __( 'Pinterest', 'bloogs' ),
		'type' => 'text',
		'description'   => __('', 'bloogs'),
		'section' => 'social_settings',
		'settings' => 'footer_pint'
	) );
	$wp_customize->add_setting( 'footer_ins', array(
		'default'           => 'https://instagram.com',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( 'footer_ins', array(
		'label' => __( 'Instagram', 'bloogs' ),
		'type' => 'text',
		'description'   => __('', 'bloogs'),
		'section' => 'social_settings',
		'settings' => 'footer_ins'
	) );
	$wp_customize->add_setting( 'footer_dri', array(
		'default'           => 'https://dribbble.com',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( 'footer_dri', array(
		'label' => __( 'Dribbble', 'bloogs' ),
		'type' => 'text',
		'description'   => __('', 'bloogs'),
		'section' => 'social_settings',
		'settings' => 'footer_dri'
	) );
	$wp_customize->add_setting( 'footer_plus', array(
		'default'           => 'https://plus.google.com',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( 'footer_plus', array(
		'label' => __( 'Plus Google', 'bloogs' ),
		'type' => 'text',
		'description'   => __('', 'bloogs'),
		'section' => 'social_settings',
		'settings' => 'footer_plus'
	) );
	$wp_customize->add_setting( 'footer_you', array(
		'default'           => 'https://youtube.com',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( 'footer_you', array(
		'label' => __( 'YouTube', 'bloogs' ),
		'type' => 'text',
		'description'   => __('', 'bloogs'),
		'section' => 'social_settings',
		'settings' => 'footer_you'
	) );

	/*********************************************
	 * Header
	 *********************************************/
	/**
	 * bloogs Divider
	 */
	$wp_customize->add_setting('themetim_options[divider]', array(
			'type'              => 'divider_control',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'esc_attr',
		)
	);
	$wp_customize->add_control( new bloogs_divider( $wp_customize, 'header_logo', array(
			'label' => __('Logo', 'bloogs'),
			'description'   => __('', 'bloogs'),
			'section' => 'title_tagline',
			'settings' => 'themetim_options[divider]'
		) )
	);
	/********************* Logo ************************/
	$wp_customize->add_setting(
		'site_logo',
		array(
			'default-image' => '',
			'sanitize_callback' => 'esc_url_raw',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'site_logo',
			array(
				'label'          => __( '', 'bloogs' ),
				'type'           => 'image',
				'description'   => __('', 'bloogs'),
				'section'        => 'title_tagline',
			)
		)
	);
	/**
	 * bloogs Divider
	 */
	$wp_customize->add_setting('themetim_options[divider]', array(
			'type'              => 'divider_control',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'esc_attr',
		)
	);
	$wp_customize->add_control( new bloogs_divider( $wp_customize, 'header_top', array(
			'label' => __('Header Top', 'bloogs'),
			'section' => 'title_tagline',
			'description'   => __('', 'bloogs'),
			'settings' => 'themetim_options[divider]'
		) )
	);
	/********************* Top Header ************************/
	$wp_customize->add_setting( 'social_header_enable', array(
		'default'           => '1',
		'sanitize_callback' => 'bloogs_sanitize_checkbox',
	) );
	$wp_customize->add_control( 'social_header_enable', array(
		'label' => __( 'Enable Header Social', 'bloogs' ),
		'type' => 'checkbox',
		'description'   => __('## Please Go Back To Social Media Settings For Social Links ##', 'bloogs'),
		'section' => 'title_tagline',
		'settings' => 'social_header_enable'
	) );

	$wp_customize->add_setting( 'bottom_header_search', array(
		'default'           => '1',
		'sanitize_callback' => 'bloogs_sanitize_checkbox',
	) );
	$wp_customize->add_control( 'bottom_header_search', array(
		'label' => __( 'Enable Search', 'bloogs' ),
		'type' => 'checkbox',
		'description'   => __('', 'bloogs'),
		'section' => 'title_tagline',
		'settings' => 'bottom_header_search'
	) );
	/**
	 * bloogs Divider
	 */
	$wp_customize->add_setting('themetim_options[divider]', array(
			'type'              => 'divider_control',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'esc_attr',
		)
	);
	$wp_customize->add_control( new bloogs_divider( $wp_customize, 'header_favicon', array(
			'label' => __('Favicon', 'bloogs'),
			'section' => 'title_tagline',
			'description'   => __('', 'bloogs'),
			'settings' => 'themetim_options[divider]'
		) )
	);
	/*********************************************
	 * Footer
	 *********************************************/
	$wp_customize->add_section( 'footer_settings', array(
		'title' => __( 'Footer', 'bloogs' ),
		'description' => '',
		'priority' => 20,
	) );
	/**
	 * bloogs Divider
	 */
	$wp_customize->add_setting('themetim_options[divider]', array(
			'type'              => 'divider_control',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'esc_attr',
		)
	);
	$wp_customize->add_control( new bloogs_divider( $wp_customize, 'footer_top', array(
			'label' => __('Top Footer', 'bloogs'),
			'description'   => __('', 'bloogs'),
			'section' => 'footer_settings',
			'settings' => 'themetim_options[divider]'
		) )
	);
	/********************* Top Footer ************************/
	$wp_customize->add_setting( 'social_footer_enable', array(
		'default'           => '1',
		'sanitize_callback' => 'bloogs_sanitize_checkbox',
	) );
	$wp_customize->add_control( 'social_footer_enable', array(
		'label' => __( 'Enable Footer Social', 'bloogs' ),
		'type' => 'checkbox',
		'description'   => __('## Please Go Back To Social Media Settings For Social Links ##', 'bloogs'),
		'section' => 'footer_settings',
		'settings' => 'social_footer_enable'
	) );

	$wp_customize->add_setting( 'newsletter_footer_enable', array(
		'default'           => '1',
		'sanitize_callback' => 'bloogs_sanitize_checkbox',
	) );
	$wp_customize->add_control( 'newsletter_footer_enable', array(
		'label' => __( 'Enable Footer Newsletter', 'bloogs' ),
		'type' => 'checkbox',
		'description'   => __('', 'bloogs'),
		'section' => 'footer_settings',
		'settings' => 'newsletter_footer_enable'
	) );
	$wp_customize->add_setting( 'top_footer_newsletter_title', array(
		'default'           => 'Follow Us',
		'sanitize_callback' => 'bloogs_sanitize_text',
	) );
	$wp_customize->add_control( 'top_footer_newsletter_title', array(
		'label' => __( 'Heading', 'bloogs' ),
		'type' => 'text',
		'section' => 'footer_settings',
		'settings' => 'top_footer_newsletter_title',
		'description'   => __('', 'bloogs')
	) );
	$wp_customize->add_setting( 'top_footer_newsletter_text', array(
		'default'           => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s',
		'sanitize_callback' => 'bloogs_sanitize_text',
	) );
	$wp_customize->add_control( 'top_footer_newsletter_text', array(
		'label' => __( 'Description', 'bloogs' ),
		'type' => 'textarea',
		'section' => 'footer_settings',
		'settings' => 'top_footer_newsletter_text',
		'description'   => __('', 'bloogs')
	) );
	$wp_customize->add_setting( 'top_footer_newsletter_url', array(
		'default'           => 'https://www.yourmailchimpurl.com',
		'sanitize_callback' => 'bloogs_sanitize_text',
	) );
	$wp_customize->add_control( 'top_footer_newsletter_url', array(
		'label' => __( 'Mail Chimp URL', 'bloogs' ),
		'type' => 'textarea',
		'section' => 'footer_settings',
		'settings' => 'top_footer_newsletter_url',
		'description'   => __('', 'bloogs')
	) );

	$wp_customize->add_setting( 'middle_footer_text_enable', array(
		'default'           => '1',
		'sanitize_callback' => 'bloogs_sanitize_checkbox',
	) );
	$wp_customize->add_control( 'middle_footer_text_enable', array(
		'label' => __( 'Enable Description', 'bloogs' ),
		'type' => 'checkbox',
		'description'   => __('', 'bloogs'),
		'section' => 'footer_settings',
		'settings' => 'middle_footer_text_enable'
	) );

	$wp_customize->add_setting( 'middle_footer_text_heading', array(
		'default'           => 'BLOOGS',
		'sanitize_callback' => 'bloogs_sanitize_text',
	) );
	$wp_customize->add_control( 'middle_footer_text_heading', array(
		'label' => __( 'Text', 'bloogs' ),
		'type' => 'text',
		'section' => 'footer_settings',
		'settings' => 'middle_footer_text_heading',
		'description'   => __('', 'bloogs')
	) );
	$wp_customize->add_setting( 'middle_footer_nav_1_enable', array(
		'default'           => '1',
		'sanitize_callback' => 'bloogs_sanitize_checkbox',
	) );
	$wp_customize->add_control( 'middle_footer_nav_1_enable', array(
		'label' => __( 'Enable Nav 1', 'bloogs' ),
		'type' => 'checkbox',
		'description'   => __('', 'bloogs'),
		'section' => 'footer_settings',
		'settings' => 'middle_footer_nav_1_enable'
	) );

	/**
	 * bloogs Divider
	 */
	$wp_customize->add_setting('themetim_options[divider]', array(
			'type'              => 'divider_control',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'esc_attr',
		)
	);
	$wp_customize->add_control( new bloogs_divider( $wp_customize, 'footer_bottom', array(
			'label' => __('Bottom Footer', 'bloogs'),
			'description'   => __('', 'bloogs'),
			'section' => 'footer_settings',
			'settings' => 'themetim_options[divider]'
		) )
	);
	/********************* Bottom Footer ************************/
	$wp_customize->add_setting( 'bottom_footer_copyright_enable', array(
		'default'           => '1',
		'sanitize_callback' => 'bloogs_sanitize_checkbox',
	) );
	$wp_customize->add_control( 'bottom_footer_copyright_enable', array(
		'label' => __( 'Enable Copyright', 'bloogs' ),
		'type' => 'checkbox',
		'description'   => __('', 'bloogs'),
		'section' => 'footer_settings',
		'settings' => 'bottom_footer_copyright_enable'
	) );
	$wp_customize->add_setting( 'bottom_footer_copyright', array(
		'default'           => 'Proudly powered by WordPress',
		'sanitize_callback' => 'bloogs_sanitize_text',
	) );
	$wp_customize->add_control( 'bottom_footer_copyright', array(
		'label' => __( 'Text', 'bloogs' ),
		'type' => 'text',
		'section' => 'footer_settings',
		'settings' => 'bottom_footer_copyright',
		'description'   => __('', 'bloogs')
	) );
	/*********************************************
	 * Blog
	 *********************************************/
	$wp_customize->add_section( 'blog_settings', array(
		'title' => __( 'Blog', 'bloogs' ),
		'description' => '',
		'priority' => 81,
	) );
	/**
	 * bloogs Divider
	 */
	$wp_customize->add_setting('themetim_options[divider]', array(
			'type'              => 'divider_control',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'esc_attr',
		)
	);
	$wp_customize->add_control( new bloogs_divider( $wp_customize, 'blog', array(
			'label' => __('Blog Section', 'bloogs'),
			'description'   => __('', 'bloogs'),
			'section' => 'blog_settings',
			'settings' => 'themetim_options[divider]'
		) )
	);
	$wp_customize->add_setting( 'blog_sidebar_enable', array(
		'default'           => '1',
		'sanitize_callback' => 'bloogs_sanitize_checkbox',
	) );
	$wp_customize->add_control( 'blog_sidebar_enable', array(
		'label' => __( 'Enable Sidebar', 'bloogs' ),
		'type' => 'checkbox',
		'description'   => __('', 'bloogs'),
		'section' => 'blog_settings',
		'settings' => 'blog_sidebar_enable'
	) );
	$wp_customize->add_setting( 'excerpt_lenght', array(
		'default'           => '18',
		'sanitize_callback' => 'absint',
	) );
	$wp_customize->add_control( 'excerpt_lenght', array(
		'type'        => 'number',
		'section'     => 'blog_settings',
		'settings' => 'excerpt_lenght',
		'label'       => __('Excerpt length', 'bloogs'),
		'description' => __('Excerpt length Default: 60 words', 'bloogs'),
		'input_attrs' => array(
			'min'   => 10,
			'max'   => 200,
			'step'  => 5,
		),
	) );
	$wp_customize->add_setting( 'blog_social_sharing_enable', array(
		'default'           => '1',
		'sanitize_callback' => 'bloogs_sanitize_checkbox',
	) );
	$wp_customize->add_control( 'blog_social_sharing_enable', array(
		'label' => __( 'Enable Social Sharing', 'bloogs' ),
		'type' => 'checkbox',
		'description'   => __('', 'bloogs'),
		'section' => 'blog_settings',
		'settings' => 'blog_social_sharing_enable'
	) );

	/*********************************************
	 * Shop
	 *********************************************/
	$wp_customize->add_section( 'shop_settings', array(
		'title' => __( 'Shop', 'bloogs' ),
		'description' => '',
		'priority' => 82,
	) );
	/**
	 * bloogs Divider
	 */
	$wp_customize->add_setting('themetim_options[divider]', array(
			'type'              => 'divider_control',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'esc_attr',
		)
	);
	$wp_customize->add_control( new bloogs_divider( $wp_customize, 'shop', array(
			'label' => __('Widget', 'bloogs'),
			'description'   => __('', 'bloogs'),
			'section' => 'shop_settings',
			'settings' => 'themetim_options[divider]'
		) )
	);

	$wp_customize->add_setting( 'shop_sidebar_enable', array(
		'default'           => '1',
		'sanitize_callback' => 'bloogs_sanitize_checkbox',
	) );
	$wp_customize->add_control( 'shop_sidebar_enable', array(
		'label' => __( 'Enable Widget', 'bloogs' ),
		'type' => 'checkbox',
		'description'   => __('', 'bloogs'),
		'section' => 'shop_settings',
		'settings' => 'shop_sidebar_enable'
	) );


	/*********************************************
	 * Color
	 *********************************************/
	$wp_customize->add_setting(
		'bg_text_color',
		array(
			'default'           => '#000',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'bg_text_color',
			array(
				'label'         => __('Body Text Color', 'bloogs'),
				'description'   => __('', 'bloogs'),
				'section'       => 'colors',
				'settings'      => 'bg_text_color'
			)
		)
	);
	$wp_customize->add_setting(
		'heading_color',
		array(
			'default'           => '#000',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'heading_color',
			array(
				'label'         => __('Heading Color', 'bloogs'),
				'description'   => __('', 'bloogs'),
				'section'       => 'colors',
				'settings'      => 'heading_color'
			)
		)
	);
	$wp_customize->add_setting(
		'link_color',
		array(
			'default'           => '#000',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'link_color',
			array(
				'label'         => __('Link Color', 'bloogs'),
				'description'   => __('', 'bloogs'),
				'section'       => 'colors',
				'settings'      => 'link_color'
			)
		)
	);
	$wp_customize->add_setting(
		'link_hover_color',
		array(
			'default'           => '#c09f5a',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'link_hover_color',
			array(
				'label'         => __('Link Hover Color', 'bloogs'),
				'description'   => __('', 'bloogs'),
				'section'       => 'colors',
				'settings'      => 'link_hover_color'
			)
		)
	);
	/**
	 * bloogs Divider
	 */
	$wp_customize->add_setting('themetim_options[divider]', array(
			'type'              => 'divider_control',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'esc_attr',
		)
	);
	$wp_customize->add_control( new bloogs_divider( $wp_customize, 'header_color', array(
			'label' => __('Header Color', 'bloogs'),
			'description'   => __('', 'bloogs'),
			'section' => 'colors',
			'settings' => 'themetim_options[divider]'
		) )
	);

	$wp_customize->add_setting(
		'header_bg_color',
		array(
			'default'           => '#fff',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'header_bg_color',
			array(
				'label'         => __('Header Background', 'bloogs'),
				'description'   => __('', 'bloogs'),
				'section'       => 'colors',
				'settings'      => 'header_bg_color'
			)
		)
	);
	$wp_customize->add_setting(
		'header_text_color',
		array(
			'default'           => '#000',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'header_text_color',
			array(
				'label'         => __('Header Text Color', 'bloogs'),
				'description'   => __('', 'bloogs'),
				'section'       => 'colors',
				'settings'      => 'header_text_color'
			)
		)
	);

	/**
	 * bloogs Divider
	 */
	$wp_customize->add_setting('themetim_options[divider]', array(
			'type'              => 'divider_control',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'esc_attr',
		)
	);
	$wp_customize->add_control( new bloogs_divider( $wp_customize, 'footer_color', array(
			'label' => __('Footer Color', 'bloogs'),
			'description'   => __('', 'bloogs'),
			'section' => 'colors',
			'settings' => 'themetim_options[divider]'
		) )
	);

	$wp_customize->add_setting(
		'footer_bg_color',
		array(
			'default'           => '#fff',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'footer_bg_color',
			array(
				'label'         => __('Footer Background', 'bloogs'),
				'description'   => __('', 'bloogs'),
				'section'       => 'colors',
				'settings'      => 'footer_bg_color'
			)
		)
	);
	$wp_customize->add_setting(
		'footer_text_color',
		array(
			'default'           => '#000',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'footer_text_color',
			array(
				'label'         => __('Footer Text Color', 'bloogs'),
				'description'   => __('', 'bloogs'),
				'section'       => 'colors',
				'settings'      => 'footer_text_color'
			)
		)
	);
	/**
	 * bloogs Divider
	 */
	$wp_customize->add_setting('themetim_options[divider]', array(
			'type'              => 'divider_control',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'esc_attr',
		)
	);
	$wp_customize->add_control( new bloogs_divider( $wp_customize, 'default', array(
			'label' => __('Default Button', 'bloogs'),
			'description'   => __('', 'bloogs'),
			'section' => 'colors',
			'settings' => 'themetim_options[divider]'
		) )
	);

	$wp_customize->add_setting(
		'btn_default_bg',
		array(
			'default'           => '#f93759',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'btn_default_bg',
			array(
				'label'         => __('Default BG Color', 'bloogs'),
				'description'   => __('', 'bloogs'),
				'section'       => 'colors',
				'settings'      => 'btn_default_bg'
			)
		)
	);

	$wp_customize->add_setting(
		'btn_default_text',
		array(
			'default'           => '#fff',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'btn_default_text',
			array(
				'label'         => __('Default Text Color', 'bloogs'),
				'description'   => __('', 'bloogs'),
				'section'       => 'colors',
				'settings'      => 'btn_default_text'
			)
		)
	);
	$wp_customize->add_setting(
		'btn_default_border',
		array(
			'default'           => '#f93759',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'btn_default_border',
			array(
				'label'         => __('Default Border Color', 'bloogs'),
				'description'   => __('', 'bloogs'),
				'section'       => 'colors',
				'settings'      => 'btn_default_border'
			)
		)
	);

	$wp_customize->add_setting(
		'btn_default_bg_hover',
		array(
			'default'           => '#000',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'btn_default_bg_hover',
			array(
				'label'         => __('Default BG Hover Color', 'bloogs'),
				'description'   => __('', 'bloogs'),
				'section'       => 'colors',
				'settings'      => 'btn_default_bg_hover'
			)
		)
	);
	$wp_customize->add_setting(
		'btn_default_text_hover',
		array(
			'default'           => '#fff',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'btn_default_text_hover',
			array(
				'label'         => __('Default Text Hover Color', 'bloogs'),
				'description'   => __('', 'bloogs'),
				'section'       => 'colors',
				'settings'      => 'btn_default_text_hover'
			)
		)
	);
	$wp_customize->add_setting(
		'btn_default_border_hover',
		array(
			'default'           => '#000',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'btn_default_border_hover',
			array(
				'label'         => __('Default Border Hover Color', 'bloogs'),
				'description'   => __('', 'bloogs'),
				'section'       => 'colors',
				'settings'      => 'btn_default_border_hover'
			)
		)
	);
	/**
	 * bloogs Divider
	 */
	$wp_customize->add_setting('themetim_options[divider]', array(
			'type'              => 'divider_control',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'esc_attr',
		)
	);
	$wp_customize->add_control( new bloogs_divider( $wp_customize, 'primary', array(
			'label' => __('Primary Button', 'bloogs'),
			'description'   => __('', 'bloogs'),
			'section' => 'colors',
			'settings' => 'themetim_options[divider]'
		) )
	);

	$wp_customize->add_setting(
		'btn_primary_bg',
		array(
			'default'           => '#000',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'btn_primary_bg',
			array(
				'label'         => __('Primary BG Color', 'bloogs'),
				'description'   => __('', 'bloogs'),
				'section'       => 'colors',
				'settings'      => 'btn_primary_bg'
			)
		)
	);
	$wp_customize->add_setting(
		'btn_primary_text',
		array(
			'default'           => '#fff',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'btn_primary_text',
			array(
				'label'         => __('Primary Text Color', 'bloogs'),
				'description'   => __('', 'bloogs'),
				'section'       => 'colors',
				'settings'      => 'btn_primary_text'
			)
		)
	);
	$wp_customize->add_setting(
		'btn_primary_border',
		array(
			'default'           => '#000',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'btn_primary_border',
			array(
				'label'         => __('Primary Border Color', 'bloogs'),
				'description'   => __('', 'bloogs'),
				'section'       => 'colors',
				'settings'      => 'btn_primary_border'
			)
		)
	);
	$wp_customize->add_setting(
		'btn_primary_bg_hover',
		array(
			'default'           => '#f93759',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'btn_primary_bg_hover',
			array(
				'label'         => __('Primary BG Hover Color', 'bloogs'),
				'description'   => __('', 'bloogs'),
				'section'       => 'colors',
				'settings'      => 'btn_primary_bg_hover'
			)
		)
	);
	$wp_customize->add_setting(
		'btn_primary_text_hover',
		array(
			'default'           => '#fff',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'btn_primary_text_hover',
			array(
				'label'         => __('Primary Text Hover Color', 'bloogs'),
				'description'   => __('', 'bloogs'),
				'section'       => 'colors',
				'settings'      => 'btn_primary_text_hover'
			)
		)
	);
	$wp_customize->add_setting(
		'btn_primary_border_hover',
		array(
			'default'           => '#f93759',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'btn_primary_border_hover',
			array(
				'label'         => __('Primary Border Hover Color', 'bloogs'),
				'description'   => __('', 'bloogs'),
				'section'       => 'colors',
				'settings'      => 'btn_primary_border_hover'
			)
		)
	);
	/**
	 * bloogs Divider
	 */
	$wp_customize->add_setting('themetim_options[divider]', array(
			'type'              => 'divider_control',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'esc_attr',
		)
	);
	$wp_customize->add_control( new bloogs_divider( $wp_customize, 'success', array(
			'label' => __('Primary Button', 'bloogs'),
			'description'   => __('', 'bloogs'),
			'section' => 'colors',
			'settings' => 'themetim_options[divider]'
		) )
	);

	$wp_customize->add_setting(
		'btn_success_bg',
		array(
			'default'           => '#fff',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'btn_success_bg',
			array(
				'label'         => __('Success BG Color', 'bloogs'),
				'description'   => __('', 'bloogs'),
				'section'       => 'colors',
				'settings'      => 'btn_success_bg'
			)
		)
	);
	$wp_customize->add_setting(
		'btn_success_text',
		array(
			'default'           => '#000',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'btn_success_text',
			array(
				'label'         => __('Success Text Color', 'bloogs'),
				'description'   => __('', 'bloogs'),
				'section'       => 'colors',
				'settings'      => 'btn_success_text'
			)
		)
	);
	$wp_customize->add_setting(
		'btn_success_border',
		array(
			'default'           => '#fff',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'btn_success_border',
			array(
				'label'         => __('Success Border Color', 'bloogs'),
				'description'   => __('', 'bloogs'),
				'section'       => 'colors',
				'settings'      => 'btn_success_border'
			)
		)
	);
	$wp_customize->add_setting(
		'btn_success_bg_hover',
		array(
			'default'           => '#f93759',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'btn_success_bg_hover',
			array(
				'label'         => __('Success BG Hover Color', 'bloogs'),
				'description'   => __('', 'bloogs'),
				'section'       => 'colors',
				'settings'      => 'btn_success_bg_hover'
			)
		)
	);
	$wp_customize->add_setting(
		'btn_success_text_hover',
		array(
			'default'           => '#fff',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'btn_success_text_hover',
			array(
				'label'         => __('Success Text Hover Color', 'bloogs'),
				'description'   => __('', 'bloogs'),
				'section'       => 'colors',
				'settings'      => 'btn_success_text_hover'
			)
		)
	);
	$wp_customize->add_setting(
		'btn_success_border_hover',
		array(
			'default'           => '#f93759',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'btn_success_border_hover',
			array(
				'label'         => __('Success Border Hover Color', 'bloogs'),
				'description'   => __('', 'bloogs'),
				'section'       => 'colors',
				'settings'      => 'btn_success_border_hover'
			)
		)
	);

	/**
	 * bloogs Divider
	 */
	$wp_customize->add_setting('themetim_options[divider]', array(
			'type'              => 'divider_control',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'esc_attr',
		)
	);
	$wp_customize->add_control( new bloogs_divider( $wp_customize, 'extracolor', array(
			'label' => __('Extra Color', 'bloogs'),
			'description'   => __('', 'bloogs'),
			'section' => 'colors',
			'settings' => 'themetim_options[divider]'
		) )
	);
	$wp_customize->add_setting(
		'text_color_1',
		array(
			'default'           => '#000',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'text_color_1',
			array(
				'label'         => __('Text Color 1', 'bloogs'),
				'description'   => __('', 'bloogs'),
				'section'       => 'colors',
				'settings'      => 'text_color_1'
			)
		)
	);
	$wp_customize->add_setting(
		'text_color_2',
		array(
			'default'           => '#ccc',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'text_color_2',
			array(
				'label'         => __('Text Color 2', 'bloogs'),
				'description'   => __('', 'bloogs'),
				'section'       => 'colors',
				'settings'      => 'text_color_2'
			)
		)
	);
	/**
	 * bloogs Divider
	 */
	$wp_customize->add_setting('themetim_options[divider]', array(
			'type'              => 'divider_control',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'esc_attr',
		)
	);
	$wp_customize->add_control( new bloogs_divider( $wp_customize, 'extrabg', array(
			'label' => __('Extra BG', 'bloogs'),
			'description'   => __('', 'bloogs'),
			'section' => 'colors',
			'settings' => 'themetim_options[divider]'
		) )
	);
	$wp_customize->add_setting(
		'bg_color_1',
		array(
			'default'           => '#fff',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'bg_color_1',
			array(
				'label'         => __('BG Color 1', 'bloogs'),
				'description'   => __('', 'bloogs'),
				'section'       => 'colors',
				'settings'      => 'bg_color_1'
			)
		)
	);
	$wp_customize->add_setting(
		'bg_color_2',
		array(
			'default'           => '#ccc',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'bg_color_2',
			array(
				'label'         => __('BG Color 2', 'bloogs'),
				'description'   => __('', 'bloogs'),
				'section'       => 'colors',
				'settings'      => 'bg_color_2'
			)
		)
	);

	/*********************************************
	 * Typography
	 *********************************************/
	$wp_customize->add_section( 'typography', array(
		'title' => __( 'Typography', 'bloogs' ),
		'description' => '',
		'priority' => 40,
	) );

	$wp_customize->add_setting(
		'body_font_family',
		array(
			'default' => 'PT+Sans',
			'sanitize_callback'     => 'bloogs_sanitize_choices',
		)
	);
	$wp_customize->add_control(
		'body_font_family',
		array(
			'type' => 'select',
			'label' => __('Body Font', 'bloogs'),
			'description'   => __('', 'bloogs'),
			'section' => 'typography',
			'choices' => array(
				'Open+Sans' => 'Open Sans',
				'Source+Sans+Pro' => 'Source Sans Pro',
				'Abel' => 'Abel',
				'Roboto' => 'Roboto',
				'Cormorant+Garamond' => 'Cormorant Garamond',
				'Lato' => 'Lato',
				'Raleway' => 'Raleway',
				'Oswald' => 'Oswald',
				'Josefin+Slab' => 'Josefin Slab',
				'Dosis' => 'Dosis',
				'Josefin+Sans' => 'Josefin Sans',
				'Tangerine' => 'Tangerine',
				'Gidugu' => 'Gidugu',
				'PT+Sans' => 'PT Sans',
				'PT+Serif' => 'PT Serif',
				'Droid+Sans' => 'Droid Sans',
				'Droid+Serif' => 'Droid Serif',
				'Titillium+Web' => 'Titillium Web',
				'Hind' => 'Hind',
				'Bree+Serif' => 'Bree Serif',
				'Exo' => 'Exo',
				'Exo+2' => 'Exo 2',
				'Play' => 'Play',
			),
		)
	);
	$wp_customize->add_setting( 'body_font_size', array(
		'default'           => '15',
		'sanitize_callback' => 'absint',
	) );
	$wp_customize->add_control( 'body_font_size', array(
		'label' => __( 'Font Size', 'bloogs' ),
		'type' => 'number',
		'section' => 'typography',
		'settings' => 'body_font_size',
		'description'   => __('', 'bloogs')
	) );
	$wp_customize->add_setting( 'body_font_weight', array(
		'default'           => '400',
		'sanitize_callback' => 'absint',
	) );
	$wp_customize->add_control( 'body_font_weight', array(
		'label' => __( 'Font Weight', 'bloogs' ),
		'type' => 'text',
		'section' => 'typography',
		'settings' => 'body_font_weight',
		'description'   => __('', 'bloogs')
	) );
	$wp_customize->add_setting('heading_font_family', array(
		'default'        => 'PT+Sans',
		'sanitize_callback'     => 'bloogs_sanitize_choices',
	));
	$wp_customize->add_control( 'heading_font_family', array(
		'label'   => __('Heading Font', 'bloogs'),
		'description'   => __('', 'bloogs'),
		'section' => 'typography',
		'type'    => 'select',
		'choices' => array(
			'Open+Sans' => 'Open Sans',
			'Source+Sans+Pro' => 'Source Sans Pro',
			'Abel' => 'Abel',
			'Roboto' => 'Roboto',
			'Cormorant+Garamond' => 'Cormorant Garamond',
			'Lato' => 'Lato',
			'Raleway' => 'Raleway',
			'Oswald' => 'Oswald',
			'Josefin+Slab' => 'Josefin Slab',
			'Dosis' => 'Dosis',
			'Josefin+Sans' => 'Josefin Sans',
			'Tangerine' => 'Tangerine',
			'Gidugu' => 'Gidugu',
			'PT+Sans' => 'PT Sans',
			'PT+Serif' => 'PT Serif',
			'Droid+Sans' => 'Droid Sans',
			'Droid+Serif' => 'Droid Serif',
			'Titillium+Web' => 'Titillium Web',
			'Hind' => 'Hind',
			'Bree+Serif' => 'Bree Serif',
			'Exo' => 'Exo',
			'Exo+2' => 'Exo 2',
			'Play' => 'Play',
		),
	));
	$wp_customize->add_setting( 'heading_font_weight', array(
		'default'           => '700',
		'sanitize_callback' => 'absint',
	) );
	$wp_customize->add_control( 'heading_font_weight', array(
		'label' => __( 'Font Weight', 'bloogs' ),
		'type' => 'text',
		'section' => 'typography',
		'settings' => 'heading_font_weight',
		'description'   => __('', 'bloogs')
	) );
}
add_action( 'customize_register', 'bloogs_customize_register' );

/**
 * Choices ( Fonts Family )
 * @param $input
 * @return string
 */
function bloogs_sanitize_choices( $input ) {
	$valid = array(
		'Poppins' => 'Poppins',
		'Source+Sans+Pro' => 'Source Sans Pro',
		'Open+Sans' => 'Open Sans',
		'Abel' => 'Abel',
		'Roboto' => 'Roboto',
		'Cormorant+Garamond' => 'Cormorant Garamond',
		'Lato' => 'Lato',
		'Raleway' => 'Raleway',
		'Oswald' => 'Oswald',
		'Josefin+Slab' => 'Josefin Slab',
		'Dosis' => 'Dosis',
		'Josefin+Sans' => 'Josefin Sans',
		'Tangerine' => 'Tangerine',
		'Gidugu' => 'Gidugu',
		'PT+Sans' => 'PT Sans',
		'PT+Serif' => 'PT Serif',
		'Droid+Sans' => 'Droid Sans',
		'Droid+Serif' => 'Droid Serif',
		'Titillium+Web' => 'Titillium Web',
		'Hind' => 'Hind',
		'Bree+Serif' => 'Bree Serif',
		'Exo' => 'Exo',
		'Exo+2' => 'Exo 2',
		'Play' => 'Play',
	);
	if ( array_key_exists( $input, $valid ) ) {
		return $input;
	} else {
		return '';
	}
}

/**
 * Text
 * @param $input
 * @return string
 */

function bloogs_sanitize_text( $input ) {
	return wp_kses_post( force_balance_tags( $input ) );
}

/**
 * Checkbox
 * @param $input
 * @return int|string
 */
function bloogs_sanitize_checkbox( $input ) {
	if ( $input == 1 ) {
		return 1;
	} else {
		return '';
	}
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function bloogs_customize_preview_js() {
	wp_enqueue_script( 'bloogs_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'bloogs_customize_preview_js' );


