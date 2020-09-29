<?php defined( 'ABSPATH' ) OR die( 'This script cannot be accessed directly.' );

global $cl_uri;

return array(
	'cl-flipbox' => array(
		'title' => __( 'FlipBox', 'codelights-shortcodes-and-widgets' ),
		'description' => __( 'Two-sided content element, flipping on hover', 'codelights-shortcodes-and-widgets' ),
		'category' => 'CodeLights',
		'icon' => $cl_uri . '/admin/img/cl-flipbox.png',
		'widget_php_class' => 'CL_Widget_Flipbox',
		'params' => array(
			/**
			 * General
			 */
			'link_type' => array(
				'title' => __( 'Link', 'codelights-shortcodes-and-widgets' ),
				'type' => 'select',
				'options' => array(
					'none' => __( 'None', 'codelights-shortcodes-and-widgets' ),
					'container' => __( 'Add link to the whole FlipBox', 'codelights-shortcodes-and-widgets' ),
					'btn' => __( 'Add link as a button on the Back Side', 'codelights-shortcodes-and-widgets' ),
				),
				'std' => 'none',
			),
			'link' => array(
				'title' => __( 'Link URL', 'codelights-shortcodes-and-widgets' ),
				'type' => 'link',
				'show_if' => array( 'link_type', 'in', array( 'container', 'btn' ) ),
			),
			'back_btn_label' => array(
				'title' => __( 'Button Label', 'codelights-shortcodes-and-widgets' ),
				'type' => 'textfield',
				'std' => 'READ MORE', // Not translatable
				'show_if' => array( 'link_type', '=', 'btn' ),
			),
			'back_btn_bgcolor' => array(
				'title' => __( 'Button Background Color', 'codelights-shortcodes-and-widgets' ),
				'type' => 'color',
				'classes' => 'cl_col-sm-6 cl_column',
				'show_if' => array( 'link_type', '=', 'btn' ),
			),
			'back_btn_color' => array(
				'title' => __( 'Button Text Color', 'codelights-shortcodes-and-widgets' ),
				'type' => 'color',
				'classes' => 'cl_col-sm-6 cl_column',
				'show_if' => array( 'link_type', '=', 'btn' ),
			),
			'animation' => array(
				'title' => __( 'Animation Type', 'codelights-shortcodes-and-widgets' ),
				'type' => 'select',
				'options' => array(
					'cardflip' => __( 'Card Flip', 'codelights-shortcodes-and-widgets' ),
					'cubetilt' => __( 'Cube Tilt', 'codelights-shortcodes-and-widgets' ),
					'cubeflip' => __( 'Cube Flip', 'codelights-shortcodes-and-widgets' ),
					'coveropen' => __( 'Cover Open', 'codelights-shortcodes-and-widgets' ),
				),
				'classes' => 'cl_col-sm-6 cl_column',
			),
			'direction' => array(
				'title' => __( 'Animation Direction', 'codelights-shortcodes-and-widgets' ),
				'type' => 'select',
				'options' => array(
					'n' => __( 'Up', 'codelights-shortcodes-and-widgets' ),
					'ne' => __( 'Up-Right', 'codelights-shortcodes-and-widgets' ),
					'e' => __( 'Right', 'codelights-shortcodes-and-widgets' ),
					'se' => __( 'Down-Right', 'codelights-shortcodes-and-widgets' ),
					's' => __( 'Down', 'codelights-shortcodes-and-widgets' ),
					'sw' => __( 'Down-Left', 'codelights-shortcodes-and-widgets' ),
					'w' => __( 'Left', 'codelights-shortcodes-and-widgets' ),
					'nw' => __( 'Up-Left', 'codelights-shortcodes-and-widgets' ),
				),
				'std' => 'w',
				'classes' => 'cl_col-sm-6 cl_column',
			),
			'duration' => array(
				'title' => __( 'Animation Duration', 'codelights-shortcodes-and-widgets' ),
				'description' => __( 'In milliseconds', 'codelights-shortcodes-and-widgets' ),
				'type' => 'textfield',
				'std' => '500',
				'classes' => 'cl_col-sm-6 cl_column',
			),
			'easing' => array(
				'title' => __( 'Animation Easing', 'codelights-shortcodes-and-widgets' ),
				'type' => 'select',
				'options' => array(
					'ease' => 'ease',
					'easeInOutExpo' => 'easeInOutExpo',
					'easeInOutCirc' => 'easeInOutCirc',
					'easeOutBack' => 'easeOutBack',
				),
				'std' => 'easeInOutSine',
				'classes' => 'cl_col-sm-6 cl_column',
			),
			/**
			 * Front Side
			 */
			'front_icon_type' => array(
				'title' => __( 'Icon', 'codelights-shortcodes-and-widgets' ),
				'type' => 'select',
				'options' => array(
					'none' => __( 'None', 'codelights-shortcodes-and-widgets' ),
					'font' => sprintf( __( '%s icon', 'codelights-shortcodes-and-widgets' ), 'Font Awesome' ),
					'image' => __( 'Custom Image', 'codelights-shortcodes-and-widgets' ),
				),
				'group' => __( 'Front Side', 'codelights-shortcodes-and-widgets' ),
			),
			'front_icon_name' => array(
				'title' => __( 'Icon Name', 'codelights-shortcodes-and-widgets' ),
				'description' => sprintf( __( '%s icon', 'codelights-shortcodes-and-widgets' ), '<a href="http://fontawesome.io/icons/" target="_blank">Font Awesome</a>' ),
				'type' => 'textfield',
				'group' => __( 'Front Side', 'codelights-shortcodes-and-widgets' ),
				'show_if' => array( 'front_icon_type', '=', 'font' ),
			),
			'front_icon_size' => array(
				'title' => __( 'Icon Size', 'codelights-shortcodes-and-widgets' ),
				'type' => 'textfield',
				'std' => '35',
				'classes' => 'cl_col-sm-6 cl_column',
				'group' => __( 'Front Side', 'codelights-shortcodes-and-widgets' ),
				'show_if' => array( 'front_icon_type', '=', 'font' ),
			),
			'front_icon_style' => array(
				'title' => __( 'Icon Style', 'codelights-shortcodes-and-widgets' ),
				'type' => 'select',
				'options' => array(
					'default' => __( 'Simple', 'codelights-shortcodes-and-widgets' ),
					'circle' => __( 'Circle Background', 'codelights-shortcodes-and-widgets' ),
					'square' => __( 'Square Background', 'codelights-shortcodes-and-widgets' ),
				),
				'classes' => 'cl_col-sm-6 cl_column',
				'group' => __( 'Front Side', 'codelights-shortcodes-and-widgets' ),
				'show_if' => array( 'front_icon_type', '=', 'font' ),
			),
			'front_icon_color' => array(
				'title' => __( 'Icon Color', 'codelights-shortcodes-and-widgets' ),
				'type' => 'color',
				'classes' => 'cl_col-sm-6 cl_column',
				'group' => __( 'Front Side', 'codelights-shortcodes-and-widgets' ),
				'show_if' => array( 'front_icon_type', '=', 'font' ),
			),
			'front_icon_bgcolor' => array(
				'title' => __( 'Icon Background Color', 'codelights-shortcodes-and-widgets' ),
				'type' => 'color',
				'classes' => 'cl_col-sm-6 cl_column',
				'group' => __( 'Front Side', 'codelights-shortcodes-and-widgets' ),
				'show_if' => array( 'front_icon_type', '=', 'font' ),
			),
			'front_icon_image' => array(
				'title' => __( 'Image', 'codelights-shortcodes-and-widgets' ),
				'type' => 'image',
				'classes' => 'cl_col-sm-6 cl_column',
				'group' => __( 'Front Side', 'codelights-shortcodes-and-widgets' ),
				'show_if' => array( 'front_icon_type', '=', 'image' ),
			),
			'front_icon_image_width' => array(
				'title' => __( 'Image Width', 'codelights-shortcodes-and-widgets' ),
				'description' => __( 'In pixels or percents', 'codelights-shortcodes-and-widgets' ),
				'type' => 'textfield',
				'std' => '32px',
				'classes' => 'cl_col-sm-6 cl_column',
				'group' => __( 'Front Side', 'codelights-shortcodes-and-widgets' ),
				'show_if' => array( 'front_icon_type', '=', 'image' ),
			),
			'front_title' => array(
				'title' => __( 'Title', 'codelights-shortcodes-and-widgets' ),
				'type' => 'textfield',
				'std' => 'FlipBox Title', // Not translatable
				'admin_label' => TRUE,
				'classes' => 'cl_col-sm-6 cl_column',
				'group' => __( 'Front Side', 'codelights-shortcodes-and-widgets' ),
			),
			'front_title_size' => array(
				'title' => __( 'Title Size', 'codelights-shortcodes-and-widgets' ),
				'type' => 'textfield',
				'std' => '',
				'classes' => 'cl_col-sm-6 cl_column',
				'group' => __( 'Front Side', 'codelights-shortcodes-and-widgets' ),
			),
			'front_desc' => array(
				'title' => __( 'Description', 'codelights-shortcodes-and-widgets' ),
				'type' => 'textarea',
				'group' => __( 'Front Side', 'codelights-shortcodes-and-widgets' ),
			),
			'front_elmorder' => array(
				'title' => __( 'Elements Order', 'codelights-shortcodes-and-widgets' ),
				'type' => 'select',
				'options' => array(
					'itd' => __( 'Icon', 'codelights-shortcodes-and-widgets' ) . ', ' . __( 'Title', 'codelights-shortcodes-and-widgets' ) . ', ' . __( 'Description', 'codelights-shortcodes-and-widgets' ),
					'tid' => __( 'Title', 'codelights-shortcodes-and-widgets' ) . ', ' . __( 'Icon', 'codelights-shortcodes-and-widgets' ) . ', ' . __( 'Description', 'codelights-shortcodes-and-widgets' ),
					'tdi' => __( 'Title', 'codelights-shortcodes-and-widgets' ) . ', ' . __( 'Description', 'codelights-shortcodes-and-widgets' ) . ', ' . __( 'Icon', 'codelights-shortcodes-and-widgets' ),
				),
				'group' => __( 'Front Side', 'codelights-shortcodes-and-widgets' ),
			),
			'front_bgcolor' => array(
				'title' => __( 'Background Color', 'codelights-shortcodes-and-widgets' ),
				'type' => 'color',
				'group' => __( 'Front Side', 'codelights-shortcodes-and-widgets' ),
			),
			'front_textcolor' => array(
				'title' => __( 'Text Color', 'codelights-shortcodes-and-widgets' ),
				'type' => 'color',
				'group' => __( 'Front Side', 'codelights-shortcodes-and-widgets' ),
			),
			'front_bgimage' => array(
				'title' => __( 'Background Image', 'codelights-shortcodes-and-widgets' ),
				'type' => 'image',
				'classes' => 'cl_col-sm-6 cl_column',
				'group' => __( 'Front Side', 'codelights-shortcodes-and-widgets' ),
			),
			'front_bgimage_size' => array(
				'title' => __( 'Image Size', 'codelights-shortcodes-and-widgets' ),
				'type' => 'select',
				'options' => cl_image_sizes_select_values(),
				'std' => 'full',
				'classes' => 'cl_col-sm-6 cl_column',
				'group' => __( 'Front Side', 'codelights-shortcodes-and-widgets' ),
			),
			/**
			 * Back Side
			 */
			'back_title' => array(
				'title' => __( 'Title', 'codelights-shortcodes-and-widgets' ),
				'type' => 'textfield',
				'std' => 'FlipBox Title', // Not translatable
				'classes' => 'cl_col-sm-6 cl_column',
				'group' => __( 'Back Side', 'codelights-shortcodes-and-widgets' ),
			),
			'back_title_size' => array(
				'title' => __( 'Title Size', 'codelights-shortcodes-and-widgets' ),
				'type' => 'textfield',
				'std' => '',
				'classes' => 'cl_col-sm-6 cl_column',
				'group' => __( 'Back Side', 'codelights-shortcodes-and-widgets' ),
			),
			'back_desc' => array(
				'title' => __( 'Description', 'codelights-shortcodes-and-widgets' ),
				'type' => 'textarea',
				'group' => __( 'Back Side', 'codelights-shortcodes-and-widgets' ),
			),
			'back_elmorder' => array(
				'title' => __( 'Elements Order', 'codelights-shortcodes-and-widgets' ),
				'type' => 'select',
				'options' => array(
					'tdb' => __( 'Title', 'codelights-shortcodes-and-widgets' ) . ', ' . __( 'Description', 'codelights-shortcodes-and-widgets' ) . ', ' . __( 'Button (if set)', 'codelights-shortcodes-and-widgets' ),
					'tbd' => __( 'Title', 'codelights-shortcodes-and-widgets' ) . ', ' . __( 'Button (if set)', 'codelights-shortcodes-and-widgets' ) . ', ' . __( 'Description', 'codelights-shortcodes-and-widgets' ),
					'btd' => __( 'Button (if set)', 'codelights-shortcodes-and-widgets' ) . ', ' . __( 'Title', 'codelights-shortcodes-and-widgets' ) . ', ' . __( 'Description', 'codelights-shortcodes-and-widgets' ),
				),
				'group' => __( 'Back Side', 'codelights-shortcodes-and-widgets' ),
			),
			'back_bgcolor' => array(
				'title' => __( 'Background Color', 'codelights-shortcodes-and-widgets' ),
				'type' => 'color',
				'group' => __( 'Back Side', 'codelights-shortcodes-and-widgets' ),
			),
			'back_textcolor' => array(
				'title' => __( 'Text Color', 'codelights-shortcodes-and-widgets' ),
				'type' => 'color',
				'group' => __( 'Back Side', 'codelights-shortcodes-and-widgets' ),
			),
			'back_bgimage' => array(
				'title' => __( 'Background Image', 'codelights-shortcodes-and-widgets' ),
				'type' => 'image',
				'classes' => 'cl_col-sm-6 cl_column',
				'group' => __( 'Back Side', 'codelights-shortcodes-and-widgets' ),
			),
			'back_bgimage_size' => array(
				'title' => __( 'Image Size', 'codelights-shortcodes-and-widgets' ),
				'type' => 'select',
				'options' => cl_image_sizes_select_values(),
				'std' => 'full',
				'classes' => 'cl_col-sm-6 cl_column',
				'group' => __( 'Back Side', 'codelights-shortcodes-and-widgets' ),
			),
			/**
			 * Style
			 */
			'width' => array(
				'title' => __( 'Width', 'codelights-shortcodes-and-widgets' ),
				'description' => __( 'In pixels or percents', 'codelights-shortcodes-and-widgets' ),
				'type' => 'textfield',
				'std' => '100%',
				'classes' => 'cl_col-sm-6 cl_column',
				'group' => __( 'Style', 'codelights-shortcodes-and-widgets' ),
			),
			'height' => array(
				'title' => __( 'Height', 'codelights-shortcodes-and-widgets' ),
				'description' => __( 'Leave blank to use front height', 'codelights-shortcodes-and-widgets' ),
				'type' => 'textfield',
				'std' => '',
				'classes' => 'cl_col-sm-6 cl_column',
				'group' => __( 'Style', 'codelights-shortcodes-and-widgets' ),
			),
			'valign' => array(
				'type' => 'checkboxes',
				'options' => array(
					'center' => __( 'Center the content vertically', 'codelights-shortcodes-and-widgets' ),
				),
				'std' => 'top',
				'group' => __( 'Style', 'codelights-shortcodes-and-widgets' ),
			),
			'border_radius' => array(
				'title' => __( 'Corners Radius', 'codelights-shortcodes-and-widgets' ),
				'type' => 'textfield',
				'std' => '0',
				'classes' => 'cl_col-sm-6 cl_column',
				'group' => __( 'Style', 'codelights-shortcodes-and-widgets' ),
			),
			'border_size' => array(
				'title' => __( 'Border Width', 'codelights-shortcodes-and-widgets' ),
				'type' => 'textfield',
				'std' => '0',
				'classes' => 'cl_col-sm-6 cl_column',
				'group' => __( 'Style', 'codelights-shortcodes-and-widgets' ),
			),
			'border_color' => array(
				'title' => __( 'Border Color', 'codelights-shortcodes-and-widgets' ),
				'type' => 'color',
				'classes' => 'cl_col-sm-6 cl_column',
				'group' => __( 'Style', 'codelights-shortcodes-and-widgets' ),
			),
			'padding' => array(
				'title' => __( 'Padding', 'codelights-shortcodes-and-widgets' ),
				'description' => __( 'In pixels or percents', 'codelights-shortcodes-and-widgets' ),
				'type' => 'textfield',
				'std' => '15%',
				'classes' => 'cl_col-sm-6 cl_column',
				'group' => __( 'Style', 'codelights-shortcodes-and-widgets' ),
			),
			'el_class' => array(
				'title' => __( 'Extra CSS class', 'codelights-shortcodes-and-widgets' ),
				'type' => 'textfield',
				'group' => __( 'Style', 'codelights-shortcodes-and-widgets' ),
			),
		),
	),
	'cl-itext' => array(
		'title' => __( 'Interactive Text', 'codelights-shortcodes-and-widgets' ),
		'description' => __( 'Text with some dynamicatlly changing part', 'codelighs-shortcodes-and-widgets' ),
		'category' => 'CodeLights',
		'icon' => $cl_uri . '/admin/img/cl-itext.png',
		'widget_php_class' => 'CL_Widget_Itext',
		'params' => array(
			/**
			 * General
			 */
			'texts' => array(
				'title' => __( 'Text States', 'codelights-shortcodes-and-widgets' ),
				'description' => __( 'Each state from a new line', 'codelights-shortcodes-and-widgets' ),
				'type' => 'textarea',
				'std' => 'We create great design' . "\n" . 'We create great websites' . "\n" . 'We create great code',
			),
			'dynamic_bold' => array(
				'title' => '',
				'type' => 'checkboxes',
				'options' => array(
					TRUE => __( 'Bold Dynamic Text', 'codelights-shortcodes-and-widgets' ),
				),
				'std' => TRUE,
			),
			'animation_type' => array(
				'title' => __( 'Animation Type', 'codelights-shortcodes-and-widgets' ),
				'type' => 'select',
				'options' => array(
					'fadeIn' => __( 'Fade in the whole part', 'codelights-shortcodes-and-widgets' ),
					'flipInX' => __( 'Flip the whole part', 'codelights-shortcodes-and-widgets' ),
					'flipInXChars' => __( 'Flip character by character', 'codelights-shortcodes-and-widgets' ),
					'zoomIn' => __( 'Zoom in the whole part', 'codelights-shortcodes-and-widgets' ),
					'zoomInChars' => __( 'Zoom in character by character', 'codelights-shortcodes-and-widgets' ),
				),
				'std' => 'fadeIn',
			),
			'duration' => array(
				'title' => __( 'Animation Duration', 'codelights-shortcodes-and-widgets' ),
				'description' => __( 'In milliseconds', 'codelights-shortcodes-and-widgets' ),
				'type' => 'textfield',
				'std' => '300',
				'classes' => 'cl_col-sm-6 cl_column',
			),
			'delay' => array(
				'title' => __( 'Animation Delay', 'codelights-shortcodes-and-widgets' ),
				'description' => __( 'In seconds', 'codelights-shortcodes-and-widgets' ),
				'type' => 'textfield',
				'std' => '5',
				'classes' => 'cl_col-sm-6 cl_column',
			),
			/**
			 * Style
			 */
			'font_size' => array(
				'title' => __( 'Text Size', 'codelights-shortcodes-and-widgets' ),
				'type' => 'textfield',
				'std' => '50px',
				'classes' => 'cl_col-sm-6 cl_column',
				'group' => __( 'Style', 'codelights-shortcodes-and-widgets' ),
			),
			'font_size_mobile' => array(
				'title' => __( 'Text Size for Mobiles', 'codelights-shortcodes-and-widgets' ),
				'description' => __( 'Applied when the screen width is less than 600px', 'codelights-shortcodes-and-widgets' ),
				'type' => 'textfield',
				'std' => '30px',
				'classes' => 'cl_col-sm-6 cl_column',
				'group' => __( 'Style', 'codelights-shortcodes-and-widgets' ),
			),
			'color' => array(
				'title' => __( 'Basic Text Color', 'codelights-shortcodes-and-widgets' ),
				'type' => 'color',
				'classes' => 'cl_col-sm-6 cl_column',
				'group' => __( 'Style', 'codelights-shortcodes-and-widgets' ),
			),
			'dynamic_color' => array(
				'title' => __( 'Dynamic Text Color', 'codelights-shortcodes-and-widgets' ),
				'type' => 'color',
				'classes' => 'cl_col-sm-6 cl_column',
				'group' => __( 'Style', 'codelights-shortcodes-and-widgets' ),
			),
			'align' => array(
				'title' => __( 'Alignment', 'codelights-shortcodes-and-widgets' ),
				'type' => 'select',
				'options' => array(
					'left' => __( 'Left', 'codelights-shortcodes-and-widgets' ),
					'center' => __( 'Center', 'codelights-shortcodes-and-widgets' ),
					'right' => __( 'Right', 'codelights-shortcodes-and-widgets' ),
				),
				'std' => 'center',
				'classes' => 'cl_col-sm-6 cl_column',
				'group' => __( 'Style', 'codelights-shortcodes-and-widgets' ),
			),
			'tag' => array(
				'title' => __( 'Tag Name', 'codelights-shortcodes-and-widgets' ),
				'type' => 'select',
				'options' => array(
					'div' => 'div',
					'h1' => 'h1',
					'h2' => 'h2',
					'h3' => 'h3',
					'h4' => 'h4',
					'h5' => 'h5',
					'h6' => 'h6',
					'p' => 'p',
				),
				'std' => 'h2',
				'classes' => 'cl_col-sm-6 cl_column',
				'group' => __( 'Style', 'codelights-shortcodes-and-widgets' ),
			),
			'el_class' => array(
				'title' => __( 'Extra CSS class', 'codelights-shortcodes-and-widgets' ),
				'type' => 'textfield',
				'group' => __( 'Style', 'codelights-shortcodes-and-widgets' ),
			),
		),
	)
);
