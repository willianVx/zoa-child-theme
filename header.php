<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head itemscope="itemscope" itemtype="https://schema.org/WebSite">
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php zoa_preloader(); //inicia modal para formulario newsletter
    modal_form(); ?>
    
    <div id="theme-container">
        <?php zoa_before_content(); ?>

        <div id="theme-menu-layout">
            <?php zoa_menu_layout(); ?>
        </div>

        <div id="theme-page-header">
            <?php zoa_page_header(); ?>
        </div>

