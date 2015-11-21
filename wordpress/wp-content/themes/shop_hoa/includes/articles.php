<?php

function ___register_articles_post_type()
{
    $args = array(
        'labels' => array(
            'name' => 'Articles',
            'singular_name' => 'Article',
            'add_new' => 'Add a Article',
            'add_new_item' => 'Add a new Article',
            'edit_item' => 'Edit Article',
            'new_item' => 'New Article',
            'all_items' => 'All Articles',
            'view_item' => 'View Article',
            'search_items' => 'Search Articles',
            'not_found' => 'There is no Article matched the query',
            'not_found_in_trash' => 'There is no Article in the trash',
            'parent_item_colon' => '',
            'menu_name' => 'Articles',
        ),
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'article'),
        'capability_type' => 'post',
        'has_archive' => false,
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
//        'register_meta_box_cb' => '___article_meta_cb',
    );
    register_post_type('article', $args);
    $args = array(
        'hierarchical' => true,
        'labels' => array(
            'name' => 'Categories',
            'singular_name' => 'Category',
            'search_items' => 'Search Categories',
            'popular_items' => 'Popular Categories',
            'all_items' => 'All Categories',
            'edit_item' => 'Edit Category',
            'update_item' => 'Update Category',
            'add_new_item' => 'Add new Category',
            'new_item_name' => 'New Category',
            'add_or_remove_items' => __('Add or remove Categories'),
            'not_found' => __('No Categories found.'),
            'menu_name' => __('Categories'),
        ),
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => false,
    );
    register_taxonomy('article-type', 'article', $args);

    // flush rewrite rules
    flush_rewrite_rules(true);

}

add_action('init', '___register_articles_post_type');

function ___article_meta_cb()
{
    function __article_detail()
    {
        ?>

        <?php
    }

    add_meta_box('article-detail', 'article Detail', '__article_detail', 'article');
}

function __article_save_meta_cb($traderID)
{
    $metas = array(

    );

    foreach ($metas AS $meta) {
        if (isset($_POST[$meta])) {
            delete_post_meta($traderID, $meta);
            add_post_meta($traderID, $meta, $_POST[$meta]);
        }
    }
}

add_action('save_post_article', '__article_save_meta_cb');


