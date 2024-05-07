<?php
// Register Custom Post Type
/*function sts_receitas() {
    $labels = array(
		'name'                  => _x( 'Receitas', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Receita', 'Post Type Singular Name', 'text_domain' ),
        'add_new'               => __( 'Add Nova Receitas', 'text_domain' ),
        'add_new_item'          => __( 'Add Nova Receitas', 'text_domain' ),
        'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
        'view_item'             => __( 'View Item', 'text_domain' ),
        'search_items'          => __( 'Search Item', 'text_domain' ),
        'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Receita', 'sts' ),
        'public'                => true,
        'publicly_queryable'    => true,
        'show_ui'               => true,
		'query_ver'             => true,
        'rewrite'               => true,
        'has_archive'           => true,
        'menu_icon'             => 'dashicons-food',
        'capability_type'       => 'post',
        'hierarchical'          => false,
        'menu_position'         => 6,
        'supports'               => array('title', 'editor', 'thumbnail', 'excerpt' ),

	);
	register_post_type( 'receitas', $args );

}
add_action( 'init', 'sts_receitas', 0 );

// Register Custom Taxonomy
function sts_category() {

	$labels = array(
		'name'                       => _x( 'Categorias das Receitas', 'Categoria General Name', 'text_domain' ),
		'singular_name'              => _x( 'Categoria', 'Categoria Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Categorias', 'text_domain' ),
		'all_items'                  => __( 'All Items', 'text_domain' ),
		'parent_item'                => __( 'Parent Item', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
		'new_item_name'              => __( 'New Item Name', 'text_domain' ),
		'add_new_item'               => __( 'Adicionar nova categoria da receitas', 'text_domain' ),
		'edit_item'                  => __( 'Edit Item', 'text_domain' ),
		'update_item'                => __( 'Update Item', 'text_domain' ),
		'view_item'                  => __( 'View Item', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Items', 'text_domain' ),
		'search_items'               => __( 'Search Items', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No items', 'text_domain' ),
		'items_list'                 => __( 'Items list', 'text_domain' ),
		'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'categoria', array( 'receitas' ), $args );

}
add_action( 'init', 'sts_category', 0 );

// Register Custom Tags
function sts_tags() {

	$labels = array(
		'name'                       => _x( 'Tags das Receitas', 'Tag General Name', 'text_domain' ),
		'singular_name'              => _x( 'Tag', 'Tag Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Tags', 'text_domain' ),
		'all_items'                  => __( 'All Items', 'text_domain' ),
		'parent_item'                => __( 'Parent Item', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
		'new_item_name'              => __( 'New Item Name', 'text_domain' ),
		'add_new_item'               => __( 'Adicionar nova Tag da receitas', 'text_domain' ),
		'edit_item'                  => __( 'Edit Item', 'text_domain' ),
		'update_item'                => __( 'Update Item', 'text_domain' ),
		'view_item'                  => __( 'View Item', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Items', 'text_domain' ),
		'search_items'               => __( 'Search Items', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No items', 'text_domain' ),
		'items_list'                 => __( 'Items list', 'text_domain' ),
		'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'tag', array( 'receitas' ), $args );

}
add_action( 'init', 'sts_tags', 0 );*/

//Meta Box

/*add_filter( 'rwmb_meta_boxes', 'post' );

function receitas( $meta_boxes ) {
    $prefix = 'stsafc_';

    $meta_boxes[] = [
        'title'    => esc_html__( 'Meta Receitas ACF', 'online-generator' ),
        'post_types' => array( 'post' ),
        'id'       => 'afc',
        'context'  => 'normal',
        'autosave' => true,
        'fields'   => [  
            [
                'type'        => 'text',
                'name'        => esc_html__( 'Tempo', 'online-generator' ),
                'id'          => $prefix . 'tempo',
                'desc'        => esc_html__( 'Tempo de preparo', 'online-generator' ),
                'placeholder' => esc_html__( 'Tempo de preparo', 'online-generator' ),
            ],
            [
                'type'        => 'text',
                'name'        => esc_html__( 'Rendimento', 'online-generator' ),
                'id'          => $prefix . 'rendimento',
                'desc'        => esc_html__( 'Rendimento da receita', 'online-generator' ),
                'placeholder' => esc_html__( 'Rendimento', 'online-generator' ),
            ],
            [
                'type'        => 'select',
                'name'        => esc_html__( 'Dificuldade da receita', 'online-generator' ),
                'id'          => $prefix . 'dificuldade_da_receita',
                'desc'        => esc_html__( 'Dificuldade da receita', 'online-generator' ),
                'options'     => [
                    'Fácil'  => esc_html__( 'Fácil', 'online-generator' ),
                    'Médio'  => esc_html__( 'Médio', 'online-generator' ),
                    'Dificil' => esc_html__( 'Dificil', 'online-generator' ),
                ],
                'placeholder' => esc_html__( 'Dificuldade da receita', 'online-generator' ),
            ],
           
        ],
    ];

    return $meta_boxes;
}*/