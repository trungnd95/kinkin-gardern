<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package shop_hoa
 */

get_header();
if (have_posts()):
    the_post();
    ?>
    <div class="main-content">
        <!--        <div class="container">-->
        <div class="row">
            <div class=" col-sm-12 col-md-8">
                <div class="wpb_wrapper">
                    <div class="wpb_wrapper" style="margin-bottom: 30px">
                        <h1 class="text-center"><span
                                style="font-size: 24pt; color: #1a682c; "><?php echo get_post_meta(get_the_ID(), 'title_default', true); ?></span>
                        </h1>
                    </div>
                    <div class="vc_row wpb_row vc_inner td-pb-row">
                        <div class="wpb_column vc_column_container td-pb-span12">
                            <div class="wpb_wrapper">
                                <div class="wpb_single_image wpb_content_element vc_align_center">
                                    <div class="wpb_wrapper">
                                        <div class="vc_single_image-wrapper   vc_box_border_grey">
                                            <?php echo get_the_post_thumbnail(get_the_ID(), 'landscape-1-2') ?>
                                        </div>
                                    </div>
                                </div>
                                <div style="height: 20px" class="vc_empty_space"><span
                                        class="vc_empty_space_inner"></span></div>

                            </div>
                        </div>
                    </div>
                    <div class="vc_row wpb_row vc_inner td-pb-row">
                        <div class="wpb_column vc_column_container td-pb-span12">
                            <div class="wpb_wrapper">
                                <div class="wpb_text_column wpb_content_element ">
                                    <div class="wpb_wrapper default-page-content">
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <style scoped="">
                .td_uid_1_564d9c915aed2_rand .td_module_wrap:hover .entry-title a,
                .td_uid_1_564d9c915aed2_rand a.td-pulldown-filter-link:hover,
                .td_uid_1_564d9c915aed2_rand .td-subcat-item a:hover,
                .td_uid_1_564d9c915aed2_rand .td-subcat-item .td-cur-simple-item,
                .td_uid_1_564d9c915aed2_rand .td_quote_on_blocks {
                    color: #1a682c;
                }

                .td_uid_1_564d9c915aed2_rand .td-next-prev-wrap a:hover,
                .td_uid_1_564d9c915aed2_rand .td-load-more-wrap a:hover {
                    background-color: #1a682c;
                    border-color: #1a682c;
                }

                .td_uid_1_564d9c915aed2_rand .td-subcat-dropdown:hover .td-subcat-more,
                .td_uid_1_564d9c915aed2_rand .td-post-category:hover {
                    background-color: #1a682c;
                }

                .td_uid_1_564d9c915aed2_rand .block-title span,
                .td_uid_1_564d9c915aed2_rand .td-trending-now-title,
                .td_uid_1_564d9c915aed2_rand .block-title a,
                .td_uid_1_564d9c915aed2_rand .td-read-more a {
                    background-color: #1a682c;
                }

                .td_uid_1_564d9c915aed2_rand .block-title {
                    border-color: #1a682c;
                }

                .td_uid_1_564d9c915aed2_rand .block-title span,
                .td_uid_1_564d9c915aed2_rand .td-trending-now-title,
                .td_uid_1_564d9c915aed2_rand .block-title a {
                    color: #ffffff;
                }
            </style>
            <div class="col-sm-12 col-md-4 sidebar-default-page">
                <div class="wpb_wrapper">
                    <div class="row">
                        <h4 class="block-title"><span>BAI VIET LIEN QUAN</span></h4>

                        <div class="td_block_inner" id="td_uid_1_564d9c915aed2">
                            <ul id="paginationList">
                                <?php $allArticles = get_posts(array(
                                    'post_type' => 'article',
                                    'post_per_page' => -1,
                                    'post_parent' => 0,
                                    'orderby' => 'rand',

                                ));
                                foreach ($allArticles as $article) {

                                    ?>
                                    <li class="td-block-span12 list-pagination">

                                        <div itemtype="http://schema.org/Article" itemscope=""
                                             class="td_module_3 td_module_wrap td-animation-stack">
                                            <div class="td-module-image">
                                                <div class="td-module-thumb"><a
                                                        title="<?php echo $article->post_title; ?>"
                                                        rel="bookmark"
                                                        href="<?php echo get_the_permalink($article->ID); ?>">
                                                        <?php echo get_the_post_thumbnail($article->ID, 'full'); ?>
                                                    </a>
                                                </div>
                                            </div>
                                            <h3 class="entry-title td-module-title" itemprop="name"><a
                                                    title="K? thu?t tr?ng và ch?m sóc cây kim ngân" rel="bookmark"
                                                    href="<?php echo get_the_permalink($article->ID); ?>"
                                                    itemprop="url"><?php echo $article->post_title; ?></a></h3>

                                            <div class="td-module-meta-info">
                                                <div class="td-post-author-name"><?php echo get_the_author_link(); ?>
                                                    <span>-</span>
                                                </div>
                                                <div class="td-post-date">
                                                    <?php echo get_the_date('F j, Y'); ?>
                                                </div>
                                                <div class="td-module-comments">
                                                    <?php comments_popup_link('0', '1', '%', 'comment'); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- ./td-block-span12 -->
                                <?php } ?>
                            </ul>
                            <div class="text-center">
                                <div class="pager" id="pager">
                                    <a href="javascript:void(0);" target="_parent" title="Previous">
                                        <img src="<?php bloginfo('template_url') ?>/css/images/pager-left.png">
                                    </a>
                                    <a href="javascript:void(0);" target="_parent" title="Next">
                                        <img src="<?php bloginfo('template_url') ?>/css/images/pager-right.png">
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- ./block -->
                </div>
            </div>

        </div>
        <!--        </div>-->
    </div>
<?php endif; ?>
<?php get_footer(); ?>
