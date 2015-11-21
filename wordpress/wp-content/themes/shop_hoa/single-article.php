<?php get_header(); ?>
<?php
$post_thumbnail_id = get_post_thumbnail_id(get_the_ID());
$post_thumbnail_url = wp_get_attachment_url($post_thumbnail_id);
if (have_posts()):
    the_post();
    ?>
    <div class="main-content single-article">
        <!--    <div class="container">-->
        <div class="row">
            <div class="col-sm-12 head-single-art">
                <div class="breadcrumb">
                    <?php include dirname(__FILE__) . '/inc/breadcrumb/bread-single-article.php'; ?>
                </div>

                <div id="pic1" class="bg-holder" data-width="1024" data-height="768"
                     style="background-image: url(<?php echo $post_thumbnail_url; ?>);height: 500px;"></div>

                <div class="article-info">
                    <header class="td-post-title">
                        <h1 class="entry-title" itemprop="name" style="color: #fff"><?php the_title(); ?></h1>


                        <div class="td-module-meta-info">
                            <div class="td-post-author-name" style="color:#fff;">
                                By <?php echo get_the_author_link(); ?></a> -
                            </div>
                            <div class="td-post-date" style="color: #fff">
                                <?php echo get_the_date('F j, Y'); ?>
                            </div>

                        </div>

                    </header>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-sm-12 col-md-8 ">
                <div class="row">
                    <div class="icon-share">
                        <a onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;"
                           href="http://www.facebook.com/sharer.php?u=<?php print(urlencode(the_permalink())) ?>&title=<?php print(urlencode(the_title())); ?>"
                           class="td-social-sharing-buttons td-social-facebook"><i class="fa fa-facebook"></i>

                            <div class="td-social-but-text hidden-sm hidden-xs">Share on Facebook</div>
                        </a>
                        <a href="https://twitter.com/intent/tweet?status=<?php print(urlencode(the_title())); ?>+<?php print(urlencode(get_permalink())); ?>"
                           class="td-social-sharing-buttons td-social-twitter"><i class="fa fa-twitter"></i>

                            <div class="td-social-but-text hidden-sm hidden-xs">Tweet on Twitter</div>
                        </a>
                        <a onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;"
                           href="http://plus.google.com/share?url=<?php print(urlencode(the_permalink())); ?>"
                           class="td-social-sharing-buttons td-social-google"><i class="fa fa-google-plus"></i>
                        </a>
                        <a onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;"
                           href="http://pinterest.com/pin/create/button/?url=<?php print(urlencode(the_permalink())); ?>"
                           class="td-social-sharing-buttons td-social-pinterest"><i class="fa fa-pinterest-p"></i>
                        </a>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="content-art">
                    <div class="row">
                        <p>
                            <?php nl2br(the_content()); ?>
                        </p>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="author-box-wrap"><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"
                                                itemprop="author"><?php echo get_avatar(get_the_author_meta('ID'), '48'); ?></a>

                    <div class="desc">
                        <div class="td-author-name vcard author"><span class="fn"><a
                                    href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"
                                    itemprop="author"><?php echo get_the_author_meta('nickname') ?></a></span></div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4">
                <div class="row">
                    <h4 class="block-title col-sm-12"><span>Related Article</span></h4>
                    <ul id="paginationList">
                        <?php
                        $allRelated = get_posts(array(
                            'post_type' => 'article',
                            'post_per_page' => -1,
                            'post_parent' => 0,
                            'status' => 'publish',
                            'exclude' => get_the_ID(),
                            'orderby' => 'rand',
                        ));
                        foreach ($allRelated as $related):
                            ?>
                            <li class="list-related col-sm-12 list-pagination">
                                <div class="td-block-span12">
                                    <div itemtype="http://schema.org/Article" itemscope=""
                                         class="td_module_3 td_module_wrap td-animation-stack">
                                        <div class="td-module-image">
                                            <div class="td-module-thumb"><a title="<?php echo $related->post_title; ?>"
                                                                            rel="bookmark"
                                                                            href="<?php echo get_the_permalink($related->ID); ?>">
                                                    <?php echo get_the_post_thumbnail($related->ID, 'square-1-3'); ?>
                                                </a></div>
                                        </div>
                                        <h3 class="entry-title td-module-title" itemprop="name"><a
                                                title="L?a ch?n cây bóng mát tr?ng sân v??n" rel="bookmark"
                                                href="<?php echo get_the_permalink($related->ID); ?>"
                                                itemprop="url"><?php echo $related->post_title; ?></a></h3>

                                        <div class="td-module-meta-info">
                                            <div class="td-post-author-name"><a
                                                    href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"
                                                    itemprop="author"><?php get_the_author_meta('nickname') ?></a>
                                                <span>-</span></div>
                                            <div class="td-post-date">
                                                <?php echo the_date('F j, Y'); ?>
                                            </div>
                                            <div class="td-module-comments">
                                                <?php comments_popup_link('0', '1', '%', 'comment'); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        <?php endforeach; ?>
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
        </div>
        <!--    </div>-->
    </div>
<?php endif; ?>
<script>
    $('.bg-holder').parallaxScroll({
        friction: 0.5
    });
</script>

<?php get_footer(); ?>
