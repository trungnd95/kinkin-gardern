<?php get_header(); ?>
<?php
$term_slug = get_query_var('term');
$taxonomyName = get_query_var('taxonomy');
$current_term = get_term_by('slug', $term_slug, $taxonomyName);
//var_dump($current_term);die;
?>
<div class="main-content taxonomy-product">
<!--    <div class="container">-->
        <div class="row">
            <div class="col-sm-12 col-md-8 right-content">
                <div class="img-head">
                    <?php
                    $imgID = ($imgID = get_option('__image_' . $current_term->term_id)) ? $imgID : '';
                    echo wp_get_attachment_image($imgID, 'full');

                    ?>
                </div>
                <div class="des-cat">
                    <div class="row">
                        <div class="col-sm-12">
                            <?php echo nl2br(get_option('__wysiwyg_content')); ?>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="post-in-cat">
                    <div class="row">
                        <ul class="paginationList" style="margin-top: 50px">
                            <?php
                            $allProduct = get_posts(
                                array(
                                    'post_type' => 'product',
                                    'post_per_page' => -1,
                                    'post_status' => 'publish',
                                    'tax_query' => array(
                                        array(
                                            'taxonomy' => 'product-type',
                                            'terms' => $current_term->term_id,
                                        )
                                    ),
                                )
                            );
                            foreach ($allProduct as $product):
                                ?>
                                <li class="col-sm-12 col-md-6 list-pagination" >
                                    <div class="wpb_wrapper">
                                        <div class="wpb_text_column wpb_content_element  vc_custom_1445655291910">
                                            <div class="wpb_wrapper" style="background-color: #006505">
                                                <p><span style="font-size: 12pt;"><span style="color: #800000;"><a
                                                                target="_blank"
                                                                href="<?php echo get_the_permalink($product->ID); ?>"
                                                                style="color: #800000;"><?php echo get_the_post_thumbnail($product->ID, 'full'); ?></a></span><span
                                                            style="color: #ffffff;"><strong><?php echo $product->post_title; ?>&ndash; <?php echo get_post_meta($product->ID, 'product_code', true); ?></strong></span></span>
                                                </p>

                                                <p style="text-align: right;"><span
                                                        style="color: #ffffff; font-size: 12pt;"><em><a target="_blank"
                                                                                                        href="<?php echo get_the_permalink($product->ID); ?>"
                                                                                                        style="color: #ffffff;">
                                                                &gt;&gt;&gt;&gt;Xem chi tiet</a></em></span></p>

                                            </div>
                                        </div>
                                    </div>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                        <div class="col-sm-12 text-center">
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
            <div class="col-sm-12 col-md-4">
                <div class="vc_row wpb_row vc_inner td-pb-row">
                    <div class="wpb_column vc_column_container td-pb-span12">
                        <div class="wpb_wrapper">
                            <div class="vc_message_box vc_message_box-solid vc_message_box-square vc_color-pink">
                                <div class="vc_message_box-icon"><i class="fa fa-bars"></i>
                                </div>
                                <p><span style="font-size: 14pt;"><strong>SAN PHAM LOAI KHAC</strong></span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="paginationList">
                    <?php
                    $productOfOtherCat = get_posts(array(
                        'post_type' => 'product',
                        'post_per_page' => -1,
                        'post_parent' => 0,
                        'orderby' => 'rand',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'product-type',
                                'exclude' => $current_term->term_id,
                            )
                        ),
                        'post__not_in' => $allProduct,
                    ));

                    foreach ($productOfOtherCat as $otherProduct):
                        ?>
                        <li class="vc_row wpb_row vc_inner td-pb-row list-pagination">
                            <div class="wpb_column vc_column_container td-pb-span12">
                                <div class="wpb_wrapper">
                                    <div class="wpb_text_column wpb_content_element  vc_custom_1445656547712">
                                        <div class="wpb_wrapper">
                                            <p><span style="color: #ffffff; font-size: 12pt;"><a target="_blank"
                                                                                                 href="<?php echo get_the_permalink($otherProduct->ID); ?>"
                                                                                                 style="color: #ffffff;">
                                                        <?php echo get_the_post_thumbnail($otherProduct->ID, 'square-1-3'); ?>
                                                    </a><strong><?php echo $otherProduct->post_title; ?>:
                                                        <?php echo get_post_meta($otherProduct->ID, 'price', true); ?></strong></span><br>
                                        <span style="font-size: 12pt; color: #ffffff;"> <strong> Mã
                                                s?: <?php echo get_post_meta($otherProduct->ID, 'product_code', true); ?></strong></span><br>
                                        <span style="font-size: 12pt; color: #ffffff;"> <em><a target="_blank"
                                                                                               href="<?php echo get_the_permalink($otherProduct->ID); ?>"
                                                                                               style="color: #ffffff;">
                                                    &gt;&gt;&gt;&gt;Xem Chi Tiet….</a></em></span></p>

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
                            <img src="<?php bloginfo('template_url')?>/css/images/pager-left.png">
                        </a>
                        <a href="javascript:void(0);" target="_parent" title="Next">
                            <img src="<?php bloginfo('template_url')?>/css/images/pager-right.png">
                        </a>
                    </div>
                </div>
            </div>
        </div>
<!--    </div>-->
</div>

<?php get_footer(); ?>
