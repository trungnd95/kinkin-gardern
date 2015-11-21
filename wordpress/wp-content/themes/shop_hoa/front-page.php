<?php
/*
 * Template name: Homepage Template
 */
get_header();
?>
    <main>
        <?php
        global $wp_query;
        $tempQuery = $wp_query;
        $wp_query = new WP_Query(array(
            'post_type' => 'page',
            'post_parent' => get_the_ID(),
            'orderby' => 'menu_order',
            'order' => 'ASC',
            'posts_per_page' => -1
        ));
        while (have_posts()) {
            the_post();
            $templateToRequire = get_page_template_slug();
            $templateToRequire = 'templates/' . basename($templateToRequire, '.php');
            get_template_part($templateToRequire);
        }
        wp_reset_query();
        ?>
    </main>
<?php
get_footer();
?>