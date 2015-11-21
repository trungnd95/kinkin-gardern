<?php
/*
 * Template name: Homepage News
 */

?>
<section class="homepage-news" style="margin-top: 50px">
<!--    <div class="container">-->
        <div class="row">
            <div class="col-sm-12 td-pb-span12 wpb_column vc_column_container ">
                <div class="wpb_wrapper">
                    <div class="td_block_wrap td_block_5 td_block_id_3305044820 td_uid_1_564c9106ea4b5_rand td_with_ajax_pagination td-pb-border-top">
                        <h4 class="block-title"><span>TIN TUC</span></h4>

                        <div class="td_block_inner" id="td_uid_1_564c9106ea4b5">
                            <div class="td-block-row row">
                                <ul id="paginationList1 ">
                                    <?php
                                    $allArticles = get_posts(array(
                                        'post_type' => 'article',
                                        'posts_per_page' => -1,
                                        'post_parent' => 0,
                                        'post_status' => 'publish',
                                    ));
                                    foreach ($allArticles as $article) {
                                        ?>
                                        <li class="col-sm-12 col-md-4 list-pagination">

                                            <div itemtype="http://schema.org/Article" itemscope=""
                                                 class="td_module_3 td_module_wrap td-animation-stack">
                                                <div class="td-module-image">
                                                    <div class="td-module-thumb"><a
                                                            title="<?php echo $article->post_title; ?>" rel="bookmark"
                                                            href="<?php echo get_the_permalink($article->ID); ?>"><?php echo get_the_post_thumbnail($article->ID, 'full'); ?></a>
                                                    </div>
                                                </div>
                                                <h3 class="entry-title td-module-title" itemprop="name"><a
                                                        title="<?php echo $article->post_title; ?>" rel="bookmark"
                                                        href="<?php echo get_the_permalink($article->ID); ?>"
                                                        itemprop="url"><?php echo $article->post_title; ?></a></h3>

                                                <div class="td-module-meta-info">
                                                    <div class="td-post-author-name"><?php echo get_the_author_link();?>
                                                        <span>-</span></div>
                                                    <div class="td-post-date">
                                                        <?php echo get_the_date('F j, Y');?>
                                                        <meta content="UserComments:0" itemprop="interactionCount">
                                                    </div>
                                                    <div class="td-module-comments"><?php comments_popup_link('0', '1', '%', 'comment'); ?></div>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- ./td-block-span4 -->

                                    <?php } ?>
                                </ul>
                                <div class="col-sm-12 text-center">
                                    <div class="pager" id="pager">
                                        <a href="javascript:void(0);" target="_parent" title="Previous">
                                            <img src="<?php bloginfo('template_url')?>/css/images/pager-left.png">
                                        </a>
                                        <a href="javascript:void(0);" target="_parent" title="Next">
                                            <img src="<?php bloginfo('template_url') ?>/css/images/pager-right.png">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ./block -->
                </div>
            </div>
        </div>
<!--    </div>-->
</section>

