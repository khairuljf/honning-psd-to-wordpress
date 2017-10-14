<?php 






function coint() {
	$prefix = 'clean_';

	/**
	 * Sample metabox to demonstrate each field type included
	 */
	$cmb_demo = new_cmb2_box( array(
		'id'            => $prefix . 'moneda',
		'title'         => esc_html__( 'Moneda / Price ', 'cmb2' ),
		'object_types' => array( 'aparment', ), // post type
		// 'show_on_cb' => 'yourprefix_show_if_front_page', // function should return a bool value
		// 'context'    => 'normal',
		// 'priority'   => 'high',
		// 'show_names' => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // true to keep the metabox closed by default
		// 'classes'    => 'extra-class', // Extra cmb2-wrap classes
		// 'classes_cb' => 'yourprefix_add_some_classes', // Add classes through a callback.
	) );


	



		$cmb_demo->add_field( array(
				'name'       => esc_html__( 'Company Name ', 'cmb2' ),

				'id'         => $prefix . 'company_name',
				'type' => 'text',
				'show_on_cb' => 'yourprefix_hide_if_no_cats', // function should return a bool value
				// 'sanitization_cb' => 'my_custom_sanitization', // custom sanitization callback parameter
				// 'escape_cb'       => 'my_custom_escaping',  // custom escaping callback parameter
				// 'on_front'        => false, // Optionally designate a field to wp-admin only
				// 'repeatable'      => true,
				// 'column'          => true, // Display field value in the admin post-listing columns
			) );
		$cmb_demo->add_field( array(
				'name'       => esc_html__( 'Company Logo ', 'cmb2' ),

				'id'         => $prefix . 'company_logo',
				'type' => 'file',
				'show_on_cb' => 'yourprefix_hide_if_no_cats', // function should return a bool value
				// 'sanitization_cb' => 'my_custom_sanitization', // custom sanitization callback parameter
				// 'escape_cb'       => 'my_custom_escaping',  // custom escaping callback parameter
				// 'on_front'        => false, // Optionally designate a field to wp-admin only
				// 'repeatable'      => true,
				// 'column'          => true, // Display field value in the admin post-listing columns
			) );

	
		$cmb_demo->add_field( array(
		'name'       => esc_html__( 'US ', 'cmb2' ),

		'id'         => $prefix . 'price1',
		'type' => 'text',
		'show_on_cb' => 'yourprefix_hide_if_no_cats', // function should return a bool value
		// 'sanitization_cb' => 'my_custom_sanitization', // custom sanitization callback parameter
		// 'escape_cb'       => 'my_custom_escaping',  // custom escaping callback parameter
		// 'on_front'        => false, // Optionally designate a field to wp-admin only
		// 'repeatable'      => true,
		// 'column'          => true, // Display field value in the admin post-listing columns
	) );
		$cmb_demo->add_field( array(
		'name'       => esc_html__( 'RD', 'cmb2' ),

		'id'         => $prefix . 'rd',
		'type' => 'text_money',
		'show_on_cb' => 'yourprefix_hide_if_no_cats', // function should return a bool value
		// 'sanitization_cb' => 'my_custom_sanitization', // custom sanitization callback parameter
		// 'escape_cb'       => 'my_custom_escaping',  // custom escaping callback parameter
		// 'on_front'        => false, // Optionally designate a field to wp-admin only
		// 'repeatable'      => true,
		// 'column'          => true, // Display field value in the admin post-listing columns
	) );
		$cmb_demo->add_field( array(
		'name'       => esc_html__( 'Habitaciones / bedroom', 'cmb2' ),

		'id'         => $prefix . 'bedroom',
		'type' => 'text_small',
		'show_on_cb' => 'yourprefix_hide_if_no_cats', // function should return a bool value
		// 'sanitization_cb' => 'my_custom_sanitization', // custom sanitization callback parameter
		// 'escape_cb'       => 'my_custom_escaping',  // custom escaping callback parameter
		// 'on_front'        => false, // Optionally designate a field to wp-admin only
		// 'repeatable'      => true,
		// 'column'          => true, // Display field value in the admin post-listing columns
	) );

	$cmb_demo->add_field( array(
		'name'       => esc_html__( 'Baños / Bathrooms', 'cmb2' ),

		'id'         => $prefix . 'bathroom',
		'type' => 'text_small',
		'show_on_cb' => 'yourprefix_hide_if_no_cats', // function should return a bool value
		// 'sanitization_cb' => 'my_custom_sanitization', // custom sanitization callback parameter
		// 'escape_cb'       => 'my_custom_escaping',  // custom escaping callback parameter
		// 'on_front'        => false, // Optionally designate a field to wp-admin only
		// 'repeatable'      => true,
		// 'column'          => true, // Display field value in the admin post-listing columns
	) );

	$cmb_demo->add_field( array(
		'name'       => esc_html__( 'Parqueos / Business', 'cmb2' ),

		'id'         => $prefix . 'business',
		'type' => 'text_small',
		'show_on_cb' => 'yourprefix_hide_if_no_cats', // function should return a bool value
		// 'sanitization_cb' => 'my_custom_sanitization', // custom sanitization callback parameter
		// 'escape_cb'       => 'my_custom_escaping',  // custom escaping callback parameter
		// 'on_front'        => false, // Optionally designate a field to wp-admin only
		// 'repeatable'      => true,
		// 'column'          => true, // Display field value in the admin post-listing columns
	) );

	$cmb_demo->add_field( array(
		'name'       => esc_html__( 'Condición / Condition', 'cmb2' ),

		'id'         => $prefix . 'ss',
		'type' => 'text_small',
		'show_on_cb' => 'yourprefix_hide_if_no_cats', // function should return a bool value
		// 'sanitization_cb' => 'my_custom_sanitization', // custom sanitization callback parameter
		// 'escape_cb'       => 'my_custom_escaping',  // custom escaping callback parameter
		// 'on_front'        => false, // Optionally designate a field to wp-admin only
		// 'repeatable'      => true,
		// 'column'          => true, // Display field value in the admin post-listing columns
	) );

	

	
	$cmb_demo->add_field( array(
		'name'       => esc_html__( 'Product Image', 'cmb2' ),

		'id'         => $prefix . 'product_image',
		'type' => 'file',
		'show_on_cb' => 'yourprefix_hide_if_no_cats', // function should return a bool value
		// 'sanitization_cb' => 'my_custom_sanitization', // custom sanitization callback parameter
		// 'escape_cb'       => 'my_custom_escaping',  // custom escaping callback parameter
		// 'on_front'        => false, // Optionally designate a field to wp-admin only
		// 'repeatable'      => true,
		// 'column'          => true, // Display field value in the admin post-listing columns
	) );

	$cmb_demo->add_field( array(
		'name'       => esc_html__( 'Construcción / Building ', 'cmb2' ),

		'id'         => $prefix . 'aparntmet_size',
		'type' => 'text',
		'show_on_cb' => 'yourprefix_hide_if_no_cats', // function should return a bool value
		// 'sanitization_cb' => 'my_custom_sanitization', // custom sanitization callback parameter
		// 'escape_cb'       => 'my_custom_escaping',  // custom escaping callback parameter
		// 'on_front'        => false, // Optionally designate a field to wp-admin only
		// 'repeatable'      => true,
		// 'column'          => true, // Display field value in the admin post-listing columns
	) );
              
              
                






}

add_action( 'cmb2_admin_init', 'coint' );



/**
 * Hook in and add a metabox to demonstrate repeatable grouped fields
 */
function yourprefix_register_repeatable_group_field_metabox() {
	$prefix = 'clean_';

	/**
	 * Repeatable Field Groups
	 */
	$cmb = new_cmb2_box( array(
		'id'           => $prefix . 'metabox',
		'title'        => esc_html__( 'Repeating Field Group', 'cmb2' ),
		'object_types' => array( 'aparment', ),
	) );

$group_field_id = $cmb->add_field( array(
		'id'          => $prefix .'my_group',
		'type'        => 'group',
		'description' => 'You Can add multiple type apartment & Button',
		'options'     => array(
			'group_title'   => 'Apartamentos / Apartments {#}', 
			'add_button'    => 'Add Another Entry', 
			'remove_button' => 'Remove Entry', 
			'sortable'      => true, // beta
			// 'closed'     => true, // true to have the groups closed by default
		),
	) );

$cmb->add_group_field( $group_field_id, array(
	'name' => 'Button name with MTS',
	'id'   => 'aptbtn',
	'type' => 'text',
) );



$cmb->add_group_field( $group_field_id, array(
	'name' => 'Upload Apartment Image',
	'id'   => 'aimg',
	'type' => 'file',
) );



$cmb->add_group_field( $group_field_id, array(
	'name' => 'Target link',
	'id'   => 'link',
	'type' => 'text',
) );


	

	
}

add_action( 'cmb2_admin_init', 'yourprefix_register_repeatable_group_field_metabox' );


function slider() {
	$prefix = 'clean_';

	/**
	 * Sample metabox to demonstrate each field type included
	 */
	$cmb_demo = new_cmb2_box( array(
		'id'            => $prefix . 'slider',
		'title'         => esc_html__( 'Slider Content Section ', 'cmb2' ),
		'object_types' => array( 'slider', ), // post type
		// 'show_on_cb' => 'yourprefix_show_if_front_page', // function should return a bool value
		// 'context'    => 'normal',
		// 'priority'   => 'high',
		// 'show_names' => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // true to keep the metabox closed by default
		// 'classes'    => 'extra-class', // Extra cmb2-wrap classes
		// 'classes_cb' => 'yourprefix_add_some_classes', // Add classes through a callback.
	) );

	$cmb_demo->add_field( array(
		'name'       => esc_html__( 'Button Name ', 'cmb2' ),

		'id'         => $prefix . 'button',
		'type' => 'text',
		'show_on_cb' => 'yourprefix_hide_if_no_cats', // function should return a bool value
		// 'sanitization_cb' => 'my_custom_sanitization', // custom sanitization callback parameter
		// 'escape_cb'       => 'my_custom_escaping',  // custom escaping callback parameter
		// 'on_front'        => false, // Optionally designate a field to wp-admin only
		// 'repeatable'      => true,
		// 'column'          => true, // Display field value in the admin post-listing columns
	) );

	$cmb_demo->add_field( array(
		'name'       => esc_html__( 'Target Link ', 'cmb2' ),

		'id'         => $prefix . 'link',
		'type' => 'text',
		'show_on_cb' => 'yourprefix_hide_if_no_cats', // function should return a bool value
		// 'sanitization_cb' => 'my_custom_sanitization', // custom sanitization callback parameter
		// 'escape_cb'       => 'my_custom_escaping',  // custom escaping callback parameter
		// 'on_front'        => false, // Optionally designate a field to wp-admin only
		// 'repeatable'      => true,
		// 'column'          => true, // Display field value in the admin post-listing columns
	) );
}

add_action( 'cmb2_admin_init', 'slider' );


