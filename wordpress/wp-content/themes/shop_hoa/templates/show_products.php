<?php
/*
 * Template name: Homepage show products
 */
?>
<div class="clearfix"></div>
<div class="content" style="margin-top: 50px">
<!--    <div class="container">-->
        <div class="row">
            <section class="products col-md-8">
                <div class="row">
                    <ul id="paginationList">
                        <?php
                        $allProducts = get_posts(array(
                            'post_type' => 'product',
                            'posts_per_page' => -1,
                            'post_parent' => 0,
                            'post_status' => 'publish',
                        ));
                        foreach ($allProducts as $product) {
                            ?>
                            <li class="col-sm-12 col-md-6 product list-pagination">
                                <div class="wpb_wrapper">
                                    <div class="wpb_text_column wpb_content_element  vc_custom_1445650890529">
                                        <div class="wpb_wrapper">
                                            <p><span style="color: #ffffff;"><a target="_blank"
                                                                                href="<?php echo get_the_permalink($product->ID); ?>"
                                                                                style="color: rgb(255, 255, 255);">
                                                        <?php echo get_the_post_thumbnail($product->ID, 'full'); ?>
                                                    </a><span
                                                        style="font-size: 12pt;"><strong><?php echo $product->post_title; ?>
                                                            Ma:&nbsp;<?php echo get_post_meta($product->ID, 'product_code')[0]; ?></strong></span></span>
                                            </p>

                                            <p style="text-align: right;"><span style="color: #ffffff;"><em><span
                                                            style="font-size: 12pt;"><a target="_blank"
                                                                                        href="<?php echo get_the_permalink($product->ID); ?>"
                                                                                        style="color: #ffffff;">&gt;&gt;&gt;&gt;Xem
                                                                chi tiet ...</a></span></em></span></p>

                                        </div>
                                    </div>
                                </div>
                            </li>
                            <?php
                        }
                        ?>
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
            </section>


