<?php

/**
 * The template for displaying category pages
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Receita
 */

get_header();
?>
<!-- Inne Page Banner Area Start Here -->
<section class="inner-page-banner bg-common" data-bg-image="<?php bloginfo('template_url'); ?>/assets/img/figure/inner-page-banner1.jpg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumbs-area">
                    
                    <ul>
                        <li>
                            <a href="<?php echo home_url('/'); ?>">Home</a>
                        </li>
                        <li>Pesquisa</li>
                    </ul>
                    <h3>Resultado: <?php the_title(); ?></h3>
                </div>
            </div>
        </div>
    </div>
</section>
        <!-- Category Area Start Here -->
        <section class="category-page-wrap padding-top-80 padding-bottom-50">
            <div class="container">
                <div class="row"> 
                <?php if(have_posts()) : while(have_posts()) : the_post();  ?>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="category-box-layout1">
                            <figure class="item-figure"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('bloghomeone'); ?></a></figure>
                            <div class="item-content">
                                <h3 class="item-title"><a href="<?php the_permalink(); ?>"></a></h3>
                                <span class="sub-title"> <?php the_category(', ') ?></span>
                            </div>
                        </div>
                    </div>
                    <?php
				    	endwhile;
				    	endif;
			     	?>
                </div>
            </div>
        </section>
        <!-- Category Area End Here -->
<?php get_footer(); ?>