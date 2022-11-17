<?php

add_action( 'wp_enqueue_scripts', 'tt_child_enqueue_parent_styles' );

function tt_child_enqueue_parent_styles() {

wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );

}

add_action('init', function() {
  register_post_type('furniture bin',
  [
      'public' => true,
      'labels' => [
      'name' => 'Furniture bins',
      'singular_name' => 'Furniture bin',
      'add_new_item' => 'Add New Furniture bin',
      'edit_item' => 'Edit Furniture bin',
      'new_item' => 'New Furniture bin',
      'view_item' => 'View Furniture bin',
      'view_items' => 'View Furniture bins',
      'search_items' => 'Search Furniture bins'
  ],
      'show_in_graphql' => true,
      'graphql_single_name' => 'furniture bin',
      'graphql_plural_name' => 'furniture bins',
  ]);
});

add_action('init', function() {
    register_taxonomy( 'financial solution', 'meubelbak',
    [
        'public' => true,
        'labels' => [
        'name' => _x( 'Financial solution', 'taxonomy general name' ),
        'singular_name' => _x( 'Financial solution', 'taxonomy singular name' ),
        'search_items' => __( 'Search Financial solutions' ),
        'popular_items' => __( 'Popular Financial solutions' ),
        'all_items' => __( 'All Financial solutions' ),
        'parent_item' => null,
        'parent_item_colon' => null,
        'edit_item' => __( 'Edit Financial solution' ),
        'update_item' => __( 'Update fFinancial solution' ),
        'add_new_item' => __( 'Add New Financial solution' ),
        'new_item_name' => __( 'New Financial solution Name' ),
        'separate_items_with_commas' => __( 'Separate financial solutions with commas' ),
        'add_or_remove_items' => __( 'Add or remove financial solutions' ),
        'choose_from_most_used' => __( 'Choose from the most used financial solutions' ),
        'menu_name' => __( 'Financial solutions' ),
    ],
        'show_in_graphql' => true,
        'show_admin_column' => true,
        'graphql_single_name' => 'financial solution',
        'graphql_plural_name' => 'financial solutions',
    ]);
});
?>