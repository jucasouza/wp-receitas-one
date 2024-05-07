        <!-- Random Recipe Start Here -->
        <section class="padding-bottom-18">
            <div class="container">
                <div class="row">
                <?php
                $args = array('post_type' => 'post', 'showposts' => 6);
                $my_posts = get_posts($args);
                if ($my_posts) : foreach ($my_posts as $post) : setup_postdata($post);
                ?>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="product-box-layout1">
                        <figure class="item-figure"><a href="<?php the_permalink(); ?>">
                                            <?php if (has_post_thumbnail()) : ?>

                                            <?php the_post_thumbnail('bloghomeone'); ?>

                                            <?php else : ?>

                                            <img alt="<?php the_title(); ?>"
                                                src="<?php bloginfo('template_directory'); ?>/assets/images/no-photo.jpg" />

                                            <?php endif; ?>

                                        </a></figure>
                            <div class="item-content">
                                <h3 class="item-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <ul class="item-rating">
                                    <li class="star-fill"><i class="fas fa-star"></i></li>
                                    <li class="star-fill"><i class="fas fa-star"></i></li>
                                    <li class="star-fill"><i class="fas fa-star"></i></li>
                                    <li class="star-fill"><i class="fas fa-star"></i></li>
                                    <li class="star-empty"><i class="fas fa-star"></i></li>
                                    <li><span>9<span> / 10</span></span> </li>
                                </ul>
                                <ul class="entry-meta">
                                    <li><a href="#"><i class="fas fa-clock"></i>15 Mins</a></li>
                                    <li><a href="#"><i class="fas fa-user"></i>by <span>John Martin</span></a></li>
                                    <li><a href="#"><i class="fas fa-heart"></i><span>02</span> Likes</a></li>
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
        <!-- Random Recipe End Here -->