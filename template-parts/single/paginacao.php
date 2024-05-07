<div class="next-prev-post">
    <div class="prev-post">
    <?php $args = array( 'post_type' => 'post', 'posts_per_page'   => 1, 'order' => 'random');
            $blog_posts = new WP_Query($args);

            if ($blog_posts->have_posts()) :
                while ($blog_posts->have_posts()) : $blog_posts->the_post();
            ?>
        <a href="<?php the_permalink(); ?>">

            <?php if (has_post_thumbnail()) : ?>

                <?php the_post_thumbnail('preview-pgncao', array('class' => 'item-figure')); ?>

            <?php else : ?>

                <img alt="<?php the_title(); ?>" src="<?php bloginfo('template_directory'); ?>/assets/images/it_service/nophoto.jpg" />

            <?php endif; ?>
            </a>
        <div class="item-content">
            <p>VEJA A RECEITA</p>
            <h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        </div>
        <?php
                endwhile;
                wp_reset_postdata();
            else :
                ?>
                <P>Nenhum post foi encontrado</P>
            <?php
            endif;
            ?>
    </div>
    <div class="next-post">
    <?php $args = array( 'post_type' => 'post', 'posts_per_page'   => 1, 'order' => 'ASC');
            $blog_posts = new WP_Query($args);

            if ($blog_posts->have_posts()) :
                while ($blog_posts->have_posts()) : $blog_posts->the_post();
            ?>
        <div class="item-content">
            <p>+ RECEITAS</p>
            <h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        </div>
        <a href="<?php the_permalink(); ?>">

<?php if (has_post_thumbnail()) : ?>

    <?php the_post_thumbnail('preview-pgncao', array('class' => 'item-figure')); ?>

<?php else : ?>

    <img alt="<?php the_title(); ?>" src="<?php bloginfo('template_directory'); ?>/assets/images/it_service/nophoto.jpg" />

<?php endif; ?>
</a>
    </div>
    <?php
                endwhile;
                wp_reset_postdata();
            else :
                ?>
                <P>Nenhum post foi encontrado</P>
            <?php
            endif;
            ?>
</div>