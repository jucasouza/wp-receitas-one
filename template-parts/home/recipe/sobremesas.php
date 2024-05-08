<div class="widget">
    <div class="section-heading heading-dark">
        <h3 class="item-heading">SOBREMESAS</h3>
    </div>
    <div class="widget-latest">
        <ul class="block-list">
            <?php
            $args = array(
                'post_type' => 'post',
                'showposts' => 7,
                'cat' => 'doces-e-sobremesas',
                'order' => 'random'
            );
            $my_posts = get_posts($args);
            if ($my_posts) : foreach ($my_posts as $post) : setup_postdata($post);
            ?>
                    <li class="single-item">
                        <div class="item-img">
                            <a href="<?php the_permalink(); ?>">
                                <?php if (has_post_thumbnail()) : ?>

                                    <?php the_post_thumbnail('latest', array('class' => 'img-responsive')); ?>

                                <?php else : ?>

                                    <img alt="<?php the_title(); ?>" src="<?php bloginfo('template_directory'); ?>/assets/images/no-photo.jpg" />

                                <?php endif; ?>

                            </a>
                        </div>
                        <div class="item-content">
                            <h4 class="item-title"><a href="<?php the_permalink(); ?>">S<?php the_title(); ?></a></h4>

                        </div>
                    </li>
            <?php
                endforeach;
            endif;
            ?>
        </ul><br>
    </div>
</div>