<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <header>
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Receitas
 */
?>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Descomplicando receitas - Aqui você cria momentos deliciosos com nossas receitas. Mary Rodrigues">
    <meta name="keywords" content="Receitas, Culinária, Gastronomia, Ingredientes, Cozinha, Pratos, Receitas fáceis, Receitas rápidas, Receitas saudáveis, Chef, Comida caseira, Sobremesas, Receitas tradicionais, Receitas internacionais, Dicas de culinária">
    <meta name="author" content="Mary Rodrigues">
    <meta name="tags" content="Descomplicando Receitas, Receitas, Culinária, Gastronomia, Ingredientes, Cozinha, Pratos, Receitas fáceis, Receitas rápidas, Receitas saudáveis, Chef, Comida caseira, Sobremesas, Receitas tradicionais, Receitas internacionais, Dicas de culinária">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <!-- ScrollUp Start Here -->
    <a href="#wrapper" data-type="section-switch" class="scrollup">
        <i class="fas fa-angle-double-up"></i>
    </a>
    <!-- ScrollUp End Here -->
    <div id="wrapper" class="wrapper">
        <!-- Header Area Start Here -->
        <header class="header-one">
            <!-- logo-social -->
            <?php get_template_part('template-parts/header/logo-social') ?>
            <!-- /logo-social -->
            <!-- Menu -->
            <?php get_template_part('template-parts/header/header-main-menu') ?>
            <!-- /Menu -->
            
        </header>
        <!-- Header Area End Here -->