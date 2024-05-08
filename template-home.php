<?php
/*
Template Name: Home Page
*/
get_header();
?>
<!-- publi home -->
<?php get_template_part('template-parts/home/busca-home'); ?>
<!-- end publi home -->
<!-- Recipe Home -->
<?php get_template_part('template-parts/home/recipe-home'); ?>
<!-- Recipe Home -->
<!-- Trending recipe -->
<?php get_template_part('template-parts/home/trending-recipe'); ?>
<!-- Trending recipe -->
<!-- Recipe Home2 -->
<?php get_template_part('template-parts/home/recipe-home-2'); ?>
<!-- Recipe Home2 -->
<?php get_footer(); ?>