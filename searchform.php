<!-- Search Box Start Here -->
<div id="search" class="search-wrap">
    <button type="button" class="close">×</button>
    <form class="search-form" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
        <input type="search" id="ooooo <?php echo $unique_id; ?>" placeholder="<?php echo esc_attr_x('Pesquise sua receita aqui&hellip;', 'placeholder', 'twentysixteen'); ?>" value="<?php echo get_search_query(); ?>" name="s"  />
        <button type="submit" class="search-btn" value="<?php echo esc_attr_x( 'Search', 'submit button'); ?>><i class="flaticon-search"></i></button>
    </form>
</div>
<!-- Search Box End Here -->