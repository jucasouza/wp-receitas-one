<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Receitas
 */

get_header();
?>
<section class="inner-page-banner bg-common" data-bg-image="<?php bloginfo('template_url'); ?>/assets/img/figure/inner-page-banner1.jpg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumbs-area">
                <h2>Todas as Receitas</h2>
                    
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

<!-- Blog Grid Area Start Here -->
<section class="blog-grid-page-wrap padding-top-80 padding-bottom-50">
    <div class="container">
        <div class="row gutters-60">
            <div class="col-lg-8">
                <div class="row">
                <?php 
            $args = array('post_type'=>'post', 'showposts'=>10, 'order'	=> 'Desc');
            $my_posts = get_posts( $args );
            if($my_posts) : foreach($my_posts as $post) : setup_postdata( $post );
        ?>
                    <div class="col-sm-6 col-12" id="<?php the_title(); ?>" <?php post_class(); ?>>
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
                    <?php endforeach; endif; ?>
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