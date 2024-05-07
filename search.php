<?php

/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Receita
 */

get_header(); ?>
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
                    <h3>Resultado: <?php echo get_search_query(); ?></h3>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Blog Grid Area Start Here -->
<section class="blog-grid-page-wrap padding-top-80 padding-bottom-50">
    <div class="container">
        <div class="row gutters-60">
            <div class="col-lg-8">
                <div class="row">
                <?php if(have_posts()) : while(have_posts()) : the_post();  ?>
                    <div class="col-sm-6 col-12" id="<?php the_title(); ?>" <?php post_class(); ?>>
                    <?php if( 'post' == get_post_type() ): ?>
                        <div class="blog-box-layout1">
                            <div class="item-figure">
                                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('bloghomeone'); ?></a>
                            </div>
                            <div class="item-content">
                                <ul class="entry-meta">
                                    <li><?php the_category(); ?></li>
                                    <li><i class="fas fa-clock"></i> <?php echo get_the_date(); ?></li>
                                    <li><i class="fas fa-user"></i> <span><?php the_author_posts_link(); ?></span></li>
                                    
                                </ul>
                                <h3 class="item-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>                                
                                <a href="<?php the_permalink(); ?>" class="item-btn">Veja a receita<i class="flaticon-next"></i></a>
                            </div>
                        </div>
                    </div>
                    <?php endif; 
              endwhile;
            else:
                ?>
                <h4>Não existe resultado para sua pesquisa!</h4>
                <?php
            endif;
            ?>
                </div>
                <!-- paginacao-all -->
                <?php get_template_part('template-parts/paginacao/paginacao-all') ?>
                <!-- /paginacao-all -->
            </div>
            <div class="col-lg-4 sidebar-widget-area sidebar-break-md">              
             
                <!-- ads-350x250 -->
                <?php get_template_part('template-parts/ads/ads-350x250') ?>
                <!-- /ads-350x250 -->

            </div>
        </div>
    </div>
</section>
<!-- Blog Grid Area End Here -->
<?php get_footer(); ?>