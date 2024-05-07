<?php

/**
 * The template for displaying author pages
 *
 */
get_header(); ?>

<!-- Inne Page Banner Area Start Here -->
<section class="inner-page-banner bg-common" data-bg-image="img/figure/inner-page-banner1.jpg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumbs-area">
                    <h1>Editor(a) - Chef</h1>
                    <ul>
                        <li>
                            <a href="<?php echo home_url('/'); ?>">Home</a>
                        </li>
                        <li><?php the_author_posts_link(); ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Inne Page Banner Area End Here -->
<!-- Single Author Area Start Here -->
<section class="single-author-page-wrap padding-top-80 padding-bottom-50">
    <div class="container">
        <div class="row gutters-60">
            <div class="col-lg-8">
                <div class="author-info">
                    <div class="media media-none--xs">
                        <?php echo get_avatar(get_the_author_id(), '182', array('class' => 'rounded-circle media-img-auto')); ?>

                        <div class="media-body">
                            <h2 class="author-title"><?php the_author_posts_link(); ?></h2>
                            <div class="author-designation">Editor(a) / Chef </div>
                            <p><?php echo get_the_author_description(); ?></p>

                        </div>
                    </div>
                </div>
                <div class="section-heading heading-dark">
                    <h2 class="item-heading">MINHAS RECEITAS</h2>
                </div>
                <div class="row">
                    <?php
                    $args = array('post_type' => 'post', 'showposts' => 4);
                    $my_posts = get_posts($args);
                    if ($my_posts) : foreach ($my_posts as $post) : setup_postdata($post);
                    ?>
                            <div class="col-md-6 col-sm-6 col-12">
                                <div class="product-box-layout1">
                                    <figure class="item-figure"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('recipe-about'); ?></a></figure>
                                    <div class="item-content">
                                        <span class="sub-title"><?php the_category(); ?></span>
                                        <h3 class="item-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                        <!-- estrelas rating -->
                                        <?php get_template_part('template-parts/estrelas/rating'); ?>
                                        <!-- /estrelas rating -->

                                        <ul class="entry-meta">
                                            <li><i class="fas fa-user"></i> <span><?php the_author_posts_link(); ?></span></li>
                                            <li><i class="fas fa-clock"></i> <?php the_field('tempo') ?></li>
                                            <li><i class="fas fa-utensils"></i> <?php the_field('dificuldade') ?></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                    <?php endforeach;
                    endif; ?>
                </div>
                <!-- paginacao -->
                <?php get_template_part('template-parts/paginacao/paginacao-all') ?>
                <!-- /paginacao -->
            </div>
            <div class="col-lg-4 sidebar-widget-area sidebar-break-md">
                <!-- ads-two-home-widget -->
                <?php get_template_part('template-parts/ads/ads-two-home-widget') ?>
                <!-- /ads-two-home-widget -->
                <!-- follow -->
                <?php get_template_part('template-parts/home/follow') ?>
                <!-- /follow -->
            </div>
</section>
<!-- Single Author Area End Here -->

<?php get_footer();
