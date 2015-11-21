<?php

function ___register_product_post_type()
{
    $args = array(
        'labels' => array(
            'name' => 'Products',
            'singular_name' => 'Product',
            'add_new' => 'Add a Product',
            'add_new_item' => 'Add a new Product',
            'edit_item' => 'Edit Product',
            'new_item' => 'New Product',
            'all_items' => 'All Products',
            'view_item' => 'View Product',
            'search_items' => 'Search Products',
            'not_found' => 'There is no product matched the query',
            'not_found_in_trash' => 'There is no product in the trash',
            'parent_item_colon' => '',
            'menu_name' => 'Products',
        ),
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'product'),
        'capability_type' => 'post',
        'has_archive' => false,
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'register_meta_box_cb' => '___product_meta_cb',
    );
    register_post_type('product', $args);
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
    register_taxonomy('product-type', 'product', $args);

    // flush rewrite rules
    flush_rewrite_rules(true);

}

add_action('init', '___register_product_post_type');

function ___product_meta_cb()
{
    function __product_detail()
    {
        ?>
        <h3><b>Display title</b></h3>
        <?php
        $settings = array(
            'textarea_name' => '__wysiwyg_title',
            'tinymce' => true,
            'editor_css' => '<style>#wp-__wysiwyg_title-editor-container .wp-editor-area{height:225px; width:100%;}</style>'
        );
        $the__wysiwyg_title = get_post_meta(get_the_ID(), '__wysiwyg_title', true);
        $the__wysiwyg_title = $the__wysiwyg_title ? $the__wysiwyg_title : get_the_title();
        wp_editor(htmlspecialchars_decode($the__wysiwyg_title), '__wysiwyg_title', $settings);
        ?>
        <h3><b>Product Code </b></h3>
        <input type="text" name="product_code" size="100"
                value="<?php echo get_post_meta(get_the_ID(), 'product_code', true) ?>"/><br/>
        <h3><b>Price</b></h3>
        <input type="text" name="price" size="100"
               value="<?php echo get_post_meta(get_the_ID(), 'price', true) ?>"/><br/>
        <h3><b>Feature</b></h3>
        <input type="text" name="feature_product" size="100"
               value="<?php echo get_post_meta(get_the_ID(), 'feature_product', true) ?>"/><br/>
        <h3><b>size</b></h3>
        <input type="text" name="product_size" size="100"
               value="<?php echo get_post_meta(get_the_ID(), 'product_size', true) ?>"/> <br/>
        <h3><b>Ship Cost</b></h3>
        <input type="text" name="ship_cost" size="100"
               value="<?php echo get_post_meta(get_the_ID(), 'ship_cost', true) ?>"/><br/>
        <h3><b>Status of product </b></h3>
        <input type="text" name="product_status" size="100"
               value="<?php echo get_post_meta(get_the_ID(), 'product_status', true) ?>"/>
        <h3>Add a image for sign up section: </h3>
        <?php $pic = get_post_meta(get_the_ID(), 'upload-img', true); ?>
        <div class="img-chosen">
            <p data-id="<?php echo $pic ?> " class="col-md-8" id="selected-img">
                <?php if ($pic) {
                    echo wp_get_attachment_image($pic, "landscape-1-2", false, array(
                        'id' => 'img-preview'
                    ));
                } else {
                    ?>
                    <img src="" id="img-preview" width="696px" height="406px"/>
                    <?php
                }
                ?>
                <input type="hidden" name="upload-img" id="img-data" value="<?php echo $pic ?>"/>
                <br/>
                <a href="#" class="remove button">Remove</a>
            </p>
        </div>
        <div class="clear"></div>
        <br/>
        <a href="#" class="button click-to-add">Add Images</a>
        <script>
            jQuery(function ($) {
//                $("#postdivrich").remove();
                $("body").on('click', 'div.img-chosen a.remove', function (e) {
                    e.preventDefault();
                    $(this).hide();
                    $("#img-data").val('');
                    $("#img-preview").hide();
                });
                $('.click-to-add').click(function (e) {
                    e.preventDefault();
                    var product_custom_uploader = wp.media.frames.file_frame = wp.media({
                            title: "Select Images",
                            button: {text: "Insert"},
                            multiple: false
                        }
                    );
                    product_custom_uploader.on('select', function () {
                        var attachment = product_custom_uploader.state().get('selection').first().toJSON();
                        console.log(attachment);
                        $("#img-data").val(attachment.id);
                        $("#img-preview").attr("src", attachment.url);
                        $("div.img-chosen a.remove").show();
                        $("#img-preview").show();
                    });
                    product_custom_uploader.open();
                });
            });
        </script>
        <?php
    }


    add_meta_box('product-detail', 'Product Detail', '__product_detail', 'product');
}

function __product_save_meta_cb($traderID)
{
    $metas = array(
        '__wysiwyg_title',
        'product_code',
        'price',
        'feature_product',
        'product_size',
        'ship_cost',
        'product_status',
        'upload-img',
    );

    foreach ($metas AS $meta) {
        if (isset($_POST[$meta])) {
            delete_post_meta($traderID, $meta);
            add_post_meta($traderID, $meta, $_POST[$meta]);
        }
    }
}

add_action('save_post_product', '__product_save_meta_cb');

function product_category_query($product)
{
    $imgID = ($imgID = get_option('__image_' . $product->term_id)) ? $imgID : '';
    $imgSrc = wp_get_attachment_image_src($imgID, 'full');
    ?>
    <table class="form-table">
        <tr class="form-field form-required term-name-wrap">
            <th scope="row">
                <label>Category Image</label>
            </th>
            <td>
                <p><img src="<?php echo $imgSrc[0] ?>" id="__image_preview" width="696px" height="406px"/></p>
                <input type="hidden" name="__image_<?php echo $product->term_id ?>" id="__image"
                       value="<?php echo $imgID ?>"/>
                <a href="#" class="button set-img" data-target="__image">Set Image</a>
            </td>
        </tr>
        <tr>
            <th>Content</th>
            <td>
                <h3><b>Display title</b></h3>
                <?php
                $settings = array(
                    'textarea_name' => '__wysiwyg_content',
                    'tinymce' => true,
                    'editor_css' => '<style>#wp-__wysiwyg_title-editor-container .wp-editor-area{height:225px; width:100%;}</style>'
                );
                $the__wysiwyg_title = get_option( '__wysiwyg_content');
                $the__wysiwyg_title = $the__wysiwyg_title ? $the__wysiwyg_title : get_the_title();
                wp_editor(htmlspecialchars_decode($the__wysiwyg_title), '__wysiwyg_content', $settings);
                ?>
            </td>
        </tr>
    </table>

    <?php
}

add_action('product-type_edit_form', 'product_category_query');

function __update_product_category($productID)
{
    delete_option('__image_' . $productID);
    delete_option('__wysiwyg_content');

    add_option('__image_' . $productID, $_POST['__image_' . $productID] != '' ? $_POST['__image_' . $productID] : '');
    add_option('__wysiwyg_content', $_POST['__wysiwyg_content'] != '' ? $_POST['__wysiwyg_content'] : '');
}

add_action('edit_product-type', '__update_product_category');