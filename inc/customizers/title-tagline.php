<?php
/* ADD A LOGO FOR MENU LAYOUT 4
***************************************************/
zoa_Kirki::add_field( 'zoa', array(
	'type'        => 'image',
	'settings'    => 'retina_logo',
	'label'       => esc_attr__( 'Retina Logo', 'zoa' ),
	'section'     => 'title_tagline',
	'default'     => '',
	'priority'    => '8',
) );

zoa_Kirki::add_field( 'zoa', array(
	'type'        => 'image',
	'settings'    => 'secondary_logo',
	'label'       => esc_attr__( 'Secondary Logo', 'zoa' ),
	'description' => esc_attr__( 'Upload a logo for transparent menu with dark hero image', 'zoa' ),
	'section'     => 'title_tagline',
	'default'     => '',
	'priority'    => '8',
) );
