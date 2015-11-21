<?php
function add_post_meta_page() {

    function default_page_detail () {
        ?>
        <h3>Title of article</h3>
        <input type="text" name = 'title_default' size="90" id = 'title_default' value="<?php echo get_post_meta(get_the_ID(),'title_default',true);?>">
<?php

    }
    add_meta_box('default_page','<b>Detail</b>','default_page_detail','page','normal');
}
add_action("add_meta_boxes", 'add_post_meta_page');

function save_page_meta_cb($pageID)
{
    $metas = array(
        'title_default',
    );
    foreach ($metas AS $meta) {
        if ($meta == 'video-bg') {
            delete_post_meta($pageID, $meta);
        }
        if (isset($_POST[$meta])) {
            delete_post_meta($pageID, $meta);
            add_post_meta($pageID, $meta, $_POST[$meta]);
        }
    }

}

add_action("save_post_page", 'save_page_meta_cb');
