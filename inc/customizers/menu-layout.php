<?php

/* ADD MENU LAYOUT PANEL
***************************************************/
zoa_Kirki::add_panel(
	'menu_panel', array(
		'title'    => esc_attr__( 'Menu Layout', 'zoa' ),
		'priority' => 1,
	)
);

/* ADD MENU LAYOUT 1 SECTION
***************************************************/
zoa_Kirki::add_section(
	'header_1', array(
		'title' => esc_attr__( 'Layout 1', 'zoa' ),
		'panel' => 'menu_panel',
	)
);

/* ADD MENU LAYOUT 2 SECTION
***************************************************/
zoa_Kirki::add_section(
	'header_2', array(
		'title' => esc_attr__( 'Layout 2', 'zoa' ),
		'panel' => 'menu_panel',
	)
);

/* ADD MENU LAYOUT 3 SECTION
***************************************************/
zoa_Kirki::add_section(
	'header_3', array(
		'title' => esc_attr__( 'Layout 3', 'zoa' ),
		'panel' => 'menu_panel',
	)
);


/* ADD MENU LAYOUT 4 SECTION
***************************************************/
zoa_Kirki::add_section(
	'header_4', array(
		'title' => esc_attr__( 'Layout 4', 'zoa' ),
		'panel' => 'menu_panel',
	)
);

/* ADD MENU LAYOUT 5 SECTION
***************************************************/
zoa_Kirki::add_section(
	'header_5', array(
		'title' => esc_attr__( 'Layout 5', 'zoa' ),
		'panel' => 'menu_panel',
	)
);

/* MENU LAYOUT 1
***************************************************/

/*GENERAL SETTING*/
zoa_Kirki::add_field(
	'zoa', array(
		'type'     => 'custom',
		'settings' => 'label_hd1_general',
		'default'  => zoa_label( esc_attr__( 'General', 'zoa' ) ),
		'section'  => 'header_1',
	)
);

/*background menu*/
zoa_Kirki::add_field(
	'zoa', array(
		'type'      => 'color',
		'settings'  => 'c_menu_bg',
		'section'   => 'header_1',
		'label'     => esc_attr__( 'Menu background', 'zoa' ),
		'transport' => 'auto',
		'default'   => '#fff',
		'choices'   => array(
			'alpha' => true,
		),
		'output' => array(
			array(
				'element'  => '.menu-layout-1',
				'property' => 'background-color',
				'media_query' => '@media ( min-width: 992px )',
			),
		),
	)
);


/*highlight menu*/
zoa_Kirki::add_field(
	'zoa', array(
		'type'      => 'color',
		'settings'  => 'hd1_menu_highlight',
		'label'     => esc_attr__( 'Highlight menu color', 'zoa' ),
		'section'   => 'header_1',
		'transport' => 'auto',
		'default'   => '#ec5849',
		'output'    => array(
			array(
				'element' => array(
					'.menu-layout-1 .theme-primary-menu li.current-menu-item > a',
					'.menu-layout-1 .theme-primary-menu > li.current-menu-ancestor > a',
					'.menu-layout-1 .theme-primary-menu > li.current-menu-parent > a',
					'.menu-layout-1 .theme-primary-menu > li.current_page_parent > a',
					'.menu-layout-1 .theme-primary-menu > li.current_page_ancestor > a',
					'.menu-layout-1 .theme-primary-menu > li > a:hover',
					'.menu-layout-1 .theme-primary-menu > li:hover > a',
					'.menu-layout-1 .theme-primary-menu li ul a:hover',
					'.menu-layout-1 .theme-primary-menu > li:not(.menu-item-has-mega-menu) ul a:hover',
					'.menu-layout-1 .theme-primary-menu .mega-menu-row .sub-menu a:hover',
				),
				'property' => 'color',
			),
		),
	)
);

/*label*/
zoa_Kirki::add_field(
	'zoa', array(
		'type'     => 'custom',
		'settings' => 'label_hd1_menu',
		'default'  => zoa_label( esc_attr__( 'Menu font', 'zoa' ) ),
		'section'  => 'header_1',
	)
);

/*parent-menu*/
zoa_Kirki::add_field(
	'zoa', array(
		'type'      => 'typography',
		'settings'  => 'hd1_parent_menu',
		'label'     => esc_attr__( 'Parent menu', 'zoa' ),
		'section'   => 'header_1',
		'transport' => 'auto',
		'default'   => array(
			'font-family'    => 'Montserrat',
			'variant'        => 'regular',
			'font-size'      => '14px',
			'letter-spacing' => '0',
			'text-transform' => 'none',
			'color'          => '#333',
		),
		'output'      => array(
			array(
				'element' => array(
					'.menu-layout-1 .theme-primary-menu > li > a',
				),
				'media_query' => '@media ( min-width: 992px )',
			),
		),
	)
);

/*sub-menu*/
zoa_Kirki::add_field(
	'zoa', array(
		'type'      => 'typography',
		'settings'  => 'hd1_submenu',
		'label'     => esc_attr__( 'Submenu', 'zoa' ),
		'section'   => 'header_1',
		'transport' => 'auto',
		'default'   => array(
			'font-family'    => 'Montserrat',
			'variant'        => 'regular',
			'font-size'      => '13px',
			'letter-spacing' => '0',
			'text-transform' => 'none',
			'color'          => '#333',
		),
		'output'      => array(
			array(
				'element' => array(
					'.menu-layout-1 .theme-primary-menu .sub-menu a',
				),
				'media_query' => '@media ( min-width: 992px )',
			),
		),
	)
);


/* HEADER LAYOUT 2
***************************************************/

/*GENERAL SETTING*/
zoa_Kirki::add_field(
	'zoa', array(
		'type'     => 'custom',
		'settings' => 'label_hd2_general',
		'default'  => zoa_label( esc_attr__( 'General', 'zoa' ) ),
		'section'  => 'header_2',
	)
);

/*background menu*/
zoa_Kirki::add_field(
	'zoa', array(
		'type'      => 'color',
		'settings'  => 'c_menu2_bg',
		'section'   => 'header_2',
		'label'     => esc_attr__( 'Menu background', 'zoa' ),
		'transport' => 'auto',
		'default'   => 'rgba(255, 255, 255, 0)',
		'choices'   => array(
			'alpha' => true,
		),
		'output' => array(
			array(
				'element'  => '.menu-layout-2',
				'property' => 'background-color',
				'media_query' => '@media ( min-width: 992px )',
			),
		),
	)
);

/*highlight menu*/
zoa_Kirki::add_field(
	'zoa', array(
		'type'      => 'color',
		'settings'  => 'hd2_menu_highlight',
		'label'     => esc_attr__( 'Highlight color', 'zoa' ),
		'section'   => 'header_2',
		'transport' => 'auto',
		'default'   => '#ec5849',
		'output'    => array(
			array(
				'element' => array(
					'.menu-layout-2 .theme-primary-menu li.current-menu-item > a',
					'.menu-layout-2 .theme-primary-menu > li.current-menu-ancestor > a',
					'.menu-layout-2 .theme-primary-menu > li.current-menu-parent > a',
					'.menu-layout-2 .theme-primary-menu > li.current_page_parent > a',
					'.menu-layout-2 .theme-primary-menu > li.current_page_ancestor > a',
					'.menu-layout-2 .theme-primary-menu > li > a:hover',
					'.menu-layout-2 .theme-primary-menu > li:hover > a',
					'.menu-layout-2 .theme-primary-menu li ul a:hover',
					'.menu-layout-2 .theme-primary-menu > li:not(.menu-item-has-mega-menu) ul a:hover',
					'.menu-layout-2 .theme-primary-menu .mega-menu-row .sub-menu a:hover',
				),
				'property'    => 'color',
			),
		),
	)
);

/*label*/
zoa_Kirki::add_field(
	'zoa', array(
		'type'     => 'custom',
		'settings' => 'label_hd2_menu',
		'default'  => zoa_label( esc_attr__( 'Menu font', 'zoa' ) ),
		'section'  => 'header_2',
	)
);

/*parent-menu*/
zoa_Kirki::add_field(
	'zoa', array(
		'type'      => 'typography',
		'settings'  => 'hd2_parent_menu',
		'label'     => esc_attr__( 'Parent menu', 'zoa' ),
		'section'   => 'header_2',
		'transport' => 'auto',
		'default'   => array(
			'font-family'    => 'Montserrat',
			'variant'        => 'regular',
			'font-size'      => '14px',
			'letter-spacing' => '0',
			'text-transform' => 'none',
			'color'          => '#333',
		),
		'output'      => array(
			array(
				'element' => array(
					'.menu-layout-2 .theme-primary-menu > li > a',
				),
				'media_query' => '@media ( min-width: 992px )',
			),
		),
	)
);

/*sub-menu*/
zoa_Kirki::add_field(
	'zoa', array(
		'type'      => 'typography',
		'settings'  => 'hd2_submenu',
		'label'     => esc_attr__( 'Submenu', 'zoa' ),
		'section'   => 'header_2',
		'transport' => 'auto',
		'default'   => array(
			'font-family'    => 'Montserrat',
			'variant'        => 'regular',
			'font-size'      => '13px',
			'letter-spacing' => '0',
			'text-transform' => 'none',
			'color'          => '#333',
		),
		'output'      => array(
			array(
				'element' => array(
					'.menu-layout-2 .theme-primary-menu .sub-menu a',
				),
				'media_query' => '@media ( min-width: 992px )',
			),
		),
	)
);

/* HEADER LAYOUT 3
***************************************************/

/* wp_nav_menu data */
$nav_menu = get_terms( 'nav_menu' );
$menu_id = array( 'default' => esc_attr__( 'Default', 'zoa' ) );

foreach ( $nav_menu as $k ) {
	$menu_id[ $k->term_id ] = $k->name;
}

/*GENERAL SETTING*/
zoa_Kirki::add_field(
	'zoa', array(
		'type'     => 'custom',
		'settings' => 'label_hd3_general',
		'default'  => zoa_label( esc_attr__( 'General', 'zoa' ) ),
		'section'  => 'header_3',
	)
);

/*background menu*/
zoa_Kirki::add_field(
	'zoa', array(
		'type'      => 'color',
		'settings'  => 'c_menu3_bg',
		'section'   => 'header_3',
		'label'     => esc_attr__( 'Menu background', 'zoa' ),
		'transport' => 'auto',
		'default'   => 'transparent',
		'choices'   => array(
			'alpha' => true,
		),
		'output' => array(
			array(
				'element'     => '.menu-layout-3',
				'property'    => 'background-color',
				'media_query' => '@media ( min-width: 992px )',
			),
		),
	)
);

/*highlight color*/
zoa_Kirki::add_field(
	'zoa', array(
		'type'      => 'color',
		'settings'  => 'hd3_highlight',
		'label'     => esc_attr__( 'Hightlight menu color', 'zoa' ),
		'section'   => 'header_3',
		'default'   => '#ec5849',
		'transport' => 'auto',
		'output'    => array(
			array(
				'element' => array(
					'.menu-layout-3 .theme-primary-menu li.current-menu-item > a',
					'.menu-layout-3 .theme-primary-menu > li.current-menu-ancestor > a',
					'.menu-layout-3 .theme-primary-menu > li.current-menu-parent > a',
					'.menu-layout-3 .theme-primary-menu > li.current_page_parent > a',
					'.menu-layout-3 .theme-primary-menu > li.current_page_ancestor > a',
					'.menu-layout-3 .theme-primary-menu > li > a:hover',
					'.menu-layout-3 .theme-primary-menu > li:hover > a',
					'.menu-layout-3 .theme-primary-menu li ul a:hover',
					'.menu-layout-3 .theme-primary-menu > li:not(.menu-item-has-mega-menu) ul a:hover',
					'.menu-layout-3 .theme-primary-menu .mega-menu-row .sub-menu a:hover',
				),
				'property' => 'color',
			),
		),
	)
);

/*custom menu for header layout 3*/
zoa_Kirki::add_field(
	'zoa', array(
		'type'     => 'select',
		'settings' => 'hd3_menu_id',
		'label'    => esc_attr__( 'Nav menu', 'zoa' ),
		'section'  => 'header_3',
		'default'  => 'default',
		'choices'  => $menu_id,
	)
);

/*label*/
zoa_Kirki::add_field(
	'zoa', array(
		'type'     => 'custom',
		'settings' => 'label_hd3_menu',
		'default'  => zoa_label( esc_attr__( 'Menu font', 'zoa' ) ),
		'section'  => 'header_3',
	)
);

/*parent-menu*/
zoa_Kirki::add_field(
	'zoa', array(
		'type'      => 'typography',
		'settings'  => 'hd3_parent_menu',
		'label'     => esc_attr__( 'Parent menu', 'zoa' ),
		'section'   => 'header_3',
		'transport' => 'auto',
		'default'   => array(
			'font-family'    => 'Montserrat',
			'variant'        => 600,
			'font-size'      => '14px',
			'letter-spacing' => '0',
			'text-transform' => 'none',
			'color'          => '#333',
		),
		'output'      => array(
			array(
				'element' => array(
					'.menu-layout-3 .theme-primary-menu > li > a',
					'.menu-layout-3 .search-btn',
					'.menu-layout-3 .tel-number',
				),
				'media_query' => '@media ( min-width: 992px )',
			),
		),
	)
);

/*sub-menu*/
zoa_Kirki::add_field(
	'zoa', array(
		'type'      => 'typography',
		'settings'  => 'hd3_submenu',
		'label'     => esc_attr__( 'Submenu', 'zoa' ),
		'section'   => 'header_3',
		'transport' => 'auto',
		'default'   => array(
			'font-family'    => 'Montserrat',
			'variant'        => 600,
			'font-size'      => '13px',
			'letter-spacing' => '0',
			'text-transform' => 'none',
			'color'          => '#8f8f8f',
		),
		'output'      => array(
			array(
				'element' => array(
					'.menu-layout-3 .theme-primary-menu .sub-menu a',
				),
				'media_query' => '@media ( min-width: 992px )',
			),
		),
	)
);

/* HEADER LAYOUT 4
***************************************************/

/*GENERAL SETTING*/
zoa_Kirki::add_field(
	'zoa', array(
		'type'     => 'custom',
		'settings' => 'label_hd4_general',
		'default'  => zoa_label( esc_attr__( 'General', 'zoa' ) ),
		'section'  => 'header_4',
	)
);

/*highlight menu*/
zoa_Kirki::add_field(
	'zoa', array(
		'type'      => 'color',
		'settings'  => 'hd4_menu_highlight',
		'label'     => esc_attr__( 'Highlight color', 'zoa' ),
		'section'   => 'header_4',
		'transport' => 'auto',
		'default'   => '#ec5849',
		'output'    => array(
			array(
				'element' => array(
					'.menu-layout-4 .theme-primary-menu li.current-menu-item > a',
					'.menu-layout-4 .theme-primary-menu > li.current-menu-ancestor > a',
					'.menu-layout-4 .theme-primary-menu > li.current-menu-parent > a',
					'.menu-layout-4 .theme-primary-menu > li.current_page_parent > a',
					'.menu-layout-4 .theme-primary-menu > li.current_page_ancestor > a',
					'.menu-layout-4 .theme-primary-menu > li > a:hover',
					'.menu-layout-4 .theme-primary-menu > li:hover > a',
					'.menu-layout-4 .theme-primary-menu li ul a:hover',
					'.menu-layout-4 .theme-primary-menu > li:not(.menu-item-has-mega-menu) ul a:hover',
					'.menu-layout-4 .theme-primary-menu .mega-menu-row .sub-menu a:hover',
				),
				'property'    => 'color',
			),
		),
	)
);

/*label*/
zoa_Kirki::add_field(
	'zoa', array(
		'type'     => 'custom',
		'settings' => 'label_hd4_menu',
		'default'  => zoa_label( esc_attr__( 'Menu font', 'zoa' ) ),
		'section'  => 'header_4',
	)
);

/*parent-menu*/
zoa_Kirki::add_field(
	'zoa', array(
		'type'      => 'typography',
		'settings'  => 'hd4_parent_menu',
		'label'     => esc_attr__( 'Parent menu', 'zoa' ),
		'section'   => 'header_4',
		'transport' => 'auto',
		'default'   => array(
			'font-family'    => 'Montserrat',
			'variant'        => 'regular',
			'font-size'      => '14px',
			'letter-spacing' => '0',
			'text-transform' => 'none',
			'color'          => '#fff',
		),
		'output'      => array(
			array(
				'element' => array(
					'.menu-layout-4 .theme-primary-menu > li > a',
				),
				'media_query' => '@media ( min-width: 992px )',
			),
		),
	)
);

/*sub-menu*/
zoa_Kirki::add_field(
	'zoa', array(
		'type'      => 'typography',
		'settings'  => 'hd4_submenu',
		'label'     => esc_attr__( 'Submenu', 'zoa' ),
		'section'   => 'header_4',
		'transport' => 'auto',
		'default'   => array(
			'font-family'    => 'Montserrat',
			'variant'        => 'regular',
			'font-size'      => '13px',
			'letter-spacing' => '0',
			'text-transform' => 'none',
			'color'          => '#333',
		),
		'output'      => array(
			array(
				'element' => array(
					'.menu-layout-4 .theme-primary-menu .sub-menu a',
				),
				'media_query' => '@media ( min-width: 992px )',
			),
		),
	)
);

/* MENU LAYOUT 5
***************************************************/
zoa_Kirki::add_field(
	'zoa', array(
		'type'     => 'textarea',
		'settings' => 'sidebar_menu_links',
		'label'    => esc_attr__( 'Sidebar Menu Links', 'zoa' ),
		'section'  => 'header_5',
		'default'  => '<ul class="sidebar-menu-links">
<li><a href="#">About us</a></li>
<li><a href="#">Order & shipping</a></li>
<li><a href="#">FAQs</a></li>
</ul>',
	)
);

zoa_Kirki::add_field(
	'zoa', array(
		'type'     => 'textarea',
		'settings' => 'sidebar_menu_social',
		'label'    => esc_attr__( 'Sidebar Menu Social', 'zoa' ),
		'section'  => 'header_5',
		'default'  => '<ul class="sidebar-menu-social">
<li><a href="//facebook.com/zoa"></a></li>
<li><a href="//twitter.com/zoa"></a></li>
<li><a href="//instagram.com/zoa"></a></li>
</ul>',
	)
);

zoa_Kirki::add_field(
	'zoa', array(
		'type'      => 'textarea',
		'settings'  => 'sidebar_menu_copyright',
		'label'     => esc_attr__( 'Sidebar Menu Copyright', 'zoa' ),
		'section'   => 'header_5',
		'default'   => '<div class="sidebar-menu-copyright">&copy; 2018 <a href="#"><strong>Zoa</strong></a>. All Rights Reserved.</div>',
	)
);
