<?php

/* ADD SHOP SINGLE SECTION
***************************************************/
zoa_Kirki::add_section(
	'shop_single', array(
		'title'    => esc_attr__( 'Shop single', 'zoa' ),
		'priority' => 1,
	)
);


/*GALLERY LAYOUT*/
zoa_Kirki::add_field(
	'zoa', array(
		'type'     => 'select',
		'label'    => esc_html__( 'Layout', 'zoa' ),
		'settings' => 'shop_gallery_layout',
		'section'  => 'shop_single',
		'default'  => 'vertical',
		'choices'  => array(
			'list'       => esc_attr__( 'List', 'zoa' ),
			'grid'       => esc_attr__( 'Grid', 'zoa' ),
			'vertical'   => esc_attr__( 'Vertical carousel', 'zoa' ),
			'horizontal' => esc_attr__( 'Horizontal carousel', 'zoa' ),
		),
	)
);

/*RELATED PRODUCT*/
zoa_Kirki::add_field(
	'zoa', array(
		'type'     => 'number',
		'label'    => esc_html__( 'Related product', 'zoa' ),
		'settings' => 'related_product_item',
		'section'  => 'shop_single',
		'default'  => 5,
		'choices'     => array(
			'min'  => 0,
			'max'  => 20,
			'step' => 1,
		),
	)
);

/* RELATED COLUMNS */
zoa_Kirki::add_field(
	'zoa', array(
		'type'     => 'number',
		'label'    => esc_html__( 'Related columns', 'zoa' ),
		'settings' => 'related_column',
		'section'  => 'shop_single',
		'default'  => 5,
		'choices'     => array(
			'min'  => 1,
			'max'  => 6,
			'step' => 1,
		),
	)
);

/*AJAX SINGLE ADD TO CART*/
zoa_Kirki::add_field(
	'zoa', array(
		'type'     => 'switch',
		'label'    => esc_html__( 'Ajax single add to cart', 'zoa' ),
		'settings' => 'ajax_single_atc',
		'section'  => 'shop_single',
		'default'  => 1,
		'choices'  => array(
			'on'  => esc_attr__( 'Yes', 'zoa' ),
			'off' => esc_attr__( 'No', 'zoa' ),
		),
	)
);
