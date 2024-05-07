<?php

/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Receitas
 */

get_header(); ?>
<!-- Inne Page Banner Area Start Here -->
<section class="inner-page-banner bg-common" data-bg-image="img/figure/inner-page-banner1.jpg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumbs-area">
                    <h1><?php the_title(); ?></h1>
                    <ul>
                        <li>
                            <a href="<?php echo home_url('/'); ?>">Home</a>
                        </li>
                        <li><?php the_title(); ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Inne Page Banner Area End Here -->

<!-- Recipe With Sidebar Area Start Here -->
<section class="all-recipes-page-wrap padding-top-80 padding-bottom-50">
    <div class="container">
        <div class="row gutters-60">
            <div class="col-lg-8">
            <?php if(have_posts()) : while(have_posts()) : the_post();  ?>
                <div class="about-box">
                    <div class="about-figure">
                    <?php the_post_thumbnail('pages-all'); ?>
                    </div>
                    <h2 class="about-title title-bar bar-center"><?php the_title(); ?></h2>
                    <p class="item-description"><?php the_content(); ?></p>
                    
                </div>
                <?php endwhile; endif; ?>
            </div>
            <div class="col-lg-4 sidebar-widget-area sidebar-break-md">               
                <!-- follow -->
                <?php get_template_part('template-parts/home/follow') ?>
                <!-- /follow -->
            </div>
        </div>
    </div>
</section>
<!-- Recipe With Sidebar Area End Here -->


</div <?php get_footer(); ?>