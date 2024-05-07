<?php

/**
 * The template for displaying all single posts and attachments
 *
 * @package Receitas
 */
get_header(); ?>

<!-- breadcrumbs -->
<?php get_template_part('template-parts/single/breadcrumbs'); ?>
<!-- /breadcrumbs -->
<?php
if (have_posts()) : while (have_posts()) : the_post();
?>
        <!-- Single Recipe Main Banner Area Start Here -->
        <section class="single-recipe-main-banner">
            <div class="rc-carousel nav-control-layout4" data-loop="true" data-items="5" data-margin="5" data-autoplay="true" data-autoplay-timeout="5000" data-smart-speed="700" data-dots="false" data-nav="true" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="true" data-r-x-small-dots="false" data-r-x-medium="1" data-r-x-medium-nav="true" data-r-x-medium-dots="false" data-r-small="1" data-r-small-nav="true" data-r-small-dots="false" data-r-medium="1" data-r-medium-nav="true" data-r-medium-dots="false" data-r-large="1" data-r-large-nav="true" data-r-large-dots="false" data-r-extra-large="1" data-r-extra-large-nav="true" data-r-extra-large-dots="false">
                <div class="item-figure">
                    <!-- ads-header-post -->
                    <?php get_template_part('template-parts/ads/ads-header-post'); ?>
                    <!-- /ads-header-post -->
                </div>
            </div>
        </section>
        <!-- Single Recipe Main Banner Area End Here -->
        <!-- Single Recipe Without Sidebar Area Start Here -->
        <section class="single-recipe-wrap-layout2 padding-bottom-80">
            <div class="container">
                <div class="single-recipe-layout2" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <div class="ctg-name"><?php the_category(); ?></div>
                    <h1 class="item-title"><?php the_title(); ?></h1>
                    <?php the_post_thumbnail('blog-single', array('class' => 'img-fluid')); ?>
                    <div class="d-flex align-items-center justify-content-between flex-wrap mb-5">
                        <ul class="entry-meta">
                            <li class="single-meta"><i class="far fa-calendar-alt"></i> <?php echo get_the_date(); ?></li>
                            <li class="single-meta"><i class="fas fa-user"></i> <span><?php the_author_posts_link(); ?></span></li>
                            <li class="single-meta">
                                <ul class="item-rating">
                                    <li class="star-fill"><i class="fas fa-star"></i></li>
                                    <li class="star-fill"><i class="fas fa-star"></i></li>
                                    <li class="star-fill"><i class="fas fa-star"></i></li>
                                    <li class="star-fill"><i class="fas fa-star"></i></li>
                                    <li class="star-empty"><i class="fas fa-star"></i></li>
                                    <li><span>9<span> / 10</span></span> </li>
                                </ul>
                            </li>                           
                        </ul>
                        <ul class="action-item">
                            <li class="action-share-hover"><button><i class="fas fa-share-alt"></i></button>
                                <div class="action-share-wrap">
                                    <a href="https://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>" title="facebook"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://twitter.com/intent/tweet?text=<?php the_permalink(); ?>" title="twitter"><i class="fab fa-twitter"></i></a>
                                    <a href="https://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>" title="pinterest"><i class="fab fa-pinterest-p"></i></a>
                                    <a href="https://api.whatsapp.com/send?text=<?php the_permalink(); ?>" title="wahtasapp"><i class="fab fa-whatsapp"></i></a>
                                </div>
                            </li>
                            
                            <li><button><!--<i class="fas fa-print"></i>--></button></li>
                            <li><button><!--<i class="fas fa-expand-arrows-alt"></i>--></button></li>
                        </ul>
                    </div>
                    <div class="item-feature">
                        <ul>
                            <li>
                                <div class="feature-wrap">
                                    <div class="media">
                                        <div class="feature-icon">
                                            <i class="far fa-clock"></i>
                                        </div>
                                        <div class="media-body space-sm">
                                            <div class="feature-title">TEMPO</div>
                                            <div class="feature-sub-title"><?php the_field('tempo') ?></div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="feature-wrap">
                                    <div class="media">
                                        <div class="feature-icon">
                                            <i class="fas fa-utensils"></i>
                                        </div>
                                        <div class="media-body space-sm">
                                            <div class="feature-title">DIFICULDADE</div>
                                            <div class="feature-sub-title"><?php the_field('dificuldade') ?></div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="feature-wrap">
                                    <div class="media">
                                        <div class="feature-icon">
                                            <i class="fas fa-users"></i>
                                        </div>
                                        <div class="media-body space-sm">
                                            <div class="feature-title">RENDIMENTO</div>
                                            <div class="feature-sub-title"><?php the_field('rendimento') ?></div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="feature-wrap">
                                    <div class="media">
                                        <div class="feature-icon">
                                            <i class="far fa-eye"></i>
                                        </div>
                                        <div class="media-body space-sm">
                                            <div class="feature-title">VIEWS</div>
                                            <div class="feature-sub-title"><?php echo do_shortcode('[post-views]'); ?></div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <p class="item-description"><?php the_content(); ?></p>
                    <!--<div class="making-elements-wrap">
                        <div class="row">
                            
                        </div>
                    </div>-->

                    <div class="tag-share">
                        <ul>
                            <li>
                                <ul class="inner-tag">
                                    <?php the_tags('<li><strong>Tag:</strong></li> ', ', ', '<br />'); ?>
                                </ul>
                            </li>

                        </ul>
                    </div>
                    <!-- paginacao -->
                    <?php get_template_part('template-parts/single/paginacao'); ?>
                    <!-- paginacao -->
                    <!-- avaliacao -->
                    <!--<?php get_template_part('template-parts/single/avaliacao'); ?>-->
                    <!-- avaliacao -->
                    <!-- comentario -->
                    <!--<?php get_template_part('template-parts/single/comentario'); ?>-->
                    <!-- comentario-->

                </div>
            </div>
            </div>
        </section>
    <?php
    endwhile;
else :
    ?>

    <p>Nenhuma Receita Encontrada!</p>
<?php
endif;
?>
<!-- Single Recipe Without Sidebar Area End Here -->

<?php get_footer(); ?>