        <!-- Trending Recipe Start Here -->
        <section class="padding-bottom-45">
            <div class="container">
                <div class="row gutters-60">
                    <div class="col-lg-8">
                        <div class="section-heading heading-dark">
                            <h2 class="item-heading">TOP RECEITAS</h2>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <?php
                                $args = array(
                                    'post-type'     => 'post',
                                    'post_per_page' => 1,
                                    'category_in'   => array(63, 1086, 324),
                                    'meta_key'      => 'post_views_count',
                                    'orderby'       => 'meta_value_num',
                                    'order'         => 'DESC'
                                );
                                $my_posts = get_posts($args);
                                if ($my_posts) : foreach ($my_posts as $post) : setup_postdata($post);
                                ?>
                                        <div class="product-box-layout1">
                                            <figure class="item-figure"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('pages-all-two'); ?></a></figure>
                                            <div class="item-content">
                                                <span class="sub-title"><?php the_category(); ?></span>
                                                <h2 class="item-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
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
                                <?php
                                    endforeach;
                                    wp_reset_postdata();
                                else:?>
                                <p>Nenhuma receita encontrada!</p>
                                <?php
                                endif;
                                ?>
                            </div>
                            <?php
                            $args = array(
                                'post-type' => 'post',
                                'post_per_page' => 6,
                                'category_in' => array(292, 26, 53, 319, 18, 695),
                                'orderby' => 'rand'
                            );
                            $postlist = get_posts($args);
                            if ($postlist) : foreach ($postlist as $post) : setup_postdata($post); ?>
                                    <div class="col-md-6 col-sm-6 col-12">
                                        <div class="product-box-layout1">
                                            <figure class="item-figure"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('pages-all-tree'); ?></a></figure>
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
                                    <?php
                                    endforeach;
                                    wp_reset_postdata();
                                else:?>
                                <p>Nenhuma receita encontrada!</p>
                                <?php
                                endif;
                                ?>

                        </div>
                        <!-- Ads Home One -->
                        <?php get_template_part('template-parts/ads/ads-one-home'); ?>
                        <!-- /Ads Home One -->
                    </div>
                    <div class="col-lg-4 sidebar-widget-area sidebar-break-md">
                        <!-- sobre -->
                        <!--<?php get_template_part('template-parts/home/sobre'); ?>-->
                        <!-- /sobre -->
                        <!-- sopas -->
                        <?php get_template_part('template-parts/home/recipe/sobremesas'); ?>
                        <!-- /sopas -->
                        <!-- ads-two-home-widget -->
                        <?php get_template_part('template-parts/ads/ads-two-home-widget'); ?>
                        <!-- /ads-two-home-widget -->
                        <!-- categorias -->
                        <?php get_template_part('template-parts/home/categorias'); ?>
                        <!-- /categorias -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Trending Recipe End Here -->