        <!-- Editor’s Choice Start Here -->
        <section class="padding-bottom-45">
            <div class="container">
                <div class="section-heading heading-dark">
                    <h2 class="item-heading">AS MAIS QUERIDAS</h2>
                </div>
                <div class="row">
                    <?php
                    $args = array(
                        'post-type' => 'post',
                        'post_per_page' => 3,
                        'meta_key'      => 'post_views_count',
                        'orderby'       => 'meta_value_num',
                        'order'         => 'DESC'
                    );
                    $my_posts = get_posts($args);
                    if ($my_posts) : foreach ($my_posts as $post) : setup_postdata($post); ?>
                            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                <div class="product-box-layout2">
                                    <figure class="item-figure"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('bloghomeone'); ?></a></figure>
                                    <div class="item-content">
                                        <span class="sub-title"></span>
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
                    endif;
                    ?>
                </div>
            </div>
        </section>
        <!-- Editor’s Choice End Here -->