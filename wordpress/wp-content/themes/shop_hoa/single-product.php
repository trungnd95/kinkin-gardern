<?php get_header(); ?>
<?php
if (have_posts()):
    the_post();
    ?>
    <div class="main-content-single-product">
        <!--        <div class="container " style="background-color: #fff">-->
        <div class="row">
            <div class=" col-sm-12 col-md-8">
                <div class="wpb_wrapper">
                    <div class="vc_row wpb_row vc_inner td-pb-row">
                        <p><?php echo wp_get_attachment_image(get_post_meta(get_the_ID(), 'upload-img', true), 'full'); ?></p>
                    </div>
                    <div class="vc_row wpb_row vc_inner td-pb-row">
                        <div class="wpb_column vc_column_container td-pb-span12">
                            <div class="wpb_wrapper">
                                <div class="wpb_text_column wpb_content_element  vc_custom_1445648306894">
                                    <div class="wpb_wrapper">
                                        <h3><span style="color: #ffffff;"><strong>Product Info</strong></span></h3>
                                        <table style="background-color: #006505">
                                            <tbody>
                                            <tr>
                                                <td><span style="color: #ffffff; font-size: 12pt;">San Pham</span>
                                                </td>
                                                <td><span
                                                        style="color: #ffffff; font-size: 12pt;"><strong><?php echo nl2br(get_post_meta(get_the_ID(), '__wysiwyg_title', true)); ?></strong></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><span style="color: #ffffff; font-size: 12pt;">Ma So</span></td>
                                                <td><span
                                                        style="color: #ffffff; font-size: 12pt;"><strong><?php echo get_post_meta(get_the_ID(), 'product_code', true); ?></strong></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><span style="color: #ffffff; font-size: 12pt;">Gia</span></td>
                                                <td><span
                                                        style="color: #ffffff; font-size: 12pt;"><?php echo get_post_meta(get_the_ID(), 'price', true); ?></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><span style="color: #ffffff; font-size: 12pt;">Dac diem</span>
                                                </td>
                                                <td><span
                                                        style="color: #ffffff; font-size: 12pt;"><?php echo get_post_meta(get_the_ID(), 'feature_product', true); ?></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><span style="color: #ffffff; font-size: 12pt;">Kich thuoc</span>
                                                </td>
                                                <td><span
                                                        style="color: #ffffff; font-size: 12pt;"><?php echo get_post_meta(get_the_ID(), 'product_size', true); ?></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><span style="color: #ffffff; font-size: 12pt;">Ship</span></td>
                                                <td><span
                                                        style="color: #ffffff; font-size: 12pt;"><?php echo get_post_meta(get_the_ID(), 'ship_cost', true); ?></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><span style="color: #ffffff; font-size: 12pt;">Tinh trang</span>
                                                </td>
                                                <td><span
                                                        style="color: #ffffff; font-size: 12pt;"><strong><?php echo get_post_meta(get_the_ID(), 'product_status', true); ?></strong></span>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <p><span style="color: #ffffff;"><a target="_blank"
                                                                            href="http://goo.gl/forms/YWKUAOqt5O"
                                                                            style="color: #ffffff;"><img width="207"
                                                                                                         height="56"
                                                                                                         alt="mua-ngay"
                                                                                                         src="http://hoachaudalat.net/wp-content/uploads/2015/10/mua-ngay-300x81.png"
                                                                                                         class="aligncenter wp-image-147"></a></span>
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="vc_row wpb_row vc_inner td-pb-row">
                        <div class="wpb_column vc_column_container td-pb-span12">
                            <div class="wpb_wrapper">
                                <div style="height: 30px" class="vc_empty_space"><span
                                        class="vc_empty_space_inner"></span></div>

                            </div>
                        </div>
                    </div>
                    <div class="vc_row wpb_row vc_inner td-pb-row">
                        <div class="wpb_column vc_column_container td-pb-span12">
                            <div class="wpb_wrapper">
                                <div class="wpb_text_column wpb_content_element ">
                                    <div class="wpb_wrapper" id="content-single-product">
                                        <?php echo nl2br(get_the_content()); ?>
                                    </div>
                                </div>
                                <div style="height: 5px" class="vc_empty_space"><span
                                        class="vc_empty_space_inner"></span></div>

                            </div>
                        </div>
                    </div>
                    <?php include dirname(__FILE__) . '/inc/mua_hang.php'; ?>
                    <div class="vc_row wpb_row vc_inner td-pb-row">
                        <div class="wpb_column vc_column_container td-pb-span12">
                            <div class="wpb_wrapper">
                                <div style="height: 25px" class="vc_empty_space"><span
                                        class="vc_empty_space_inner"></span></div>
                            </div>
                        </div>
                    </div>
                    <div class="vc_row wpb_row vc_inner td-pb-row">
                        <div class="wpb_column vc_column_container td-pb-span12">
                            <div class="wpb_wrapper">
                                <div class="wpb_text_column wpb_content_element  vc_custom_1445648322735">
                                    <div class="wpb_wrapper">
                                        <p><a target="_blank" href="http://goo.gl/forms/YWKUAOqt5O"><img width="233"
                                                                                                         height="63"
                                                                                                         alt="mua-ngay"
                                                                                                         src="http://hoachaudalat.net/wp-content/uploads/2015/10/mua-ngay-300x81.png"
                                                                                                         class="aligncenter wp-image-147 "></a>
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--  Side bar  -->
            <div class="col-sm-12 col-md-4 wrapper-single-sidebar-product" >
                <div class="wpb_wrapper">
                    <div class="vc_row wpb_row vc_inner td-pb-row">
                        <div class="wpb_column vc_column_container td-pb-span12">
                            <div class="wpb_wrapper">
                                <div
                                    class="vc_message_box vc_message_box-solid vc_message_box-square vc_color-juicy_pink">
                                    <div class="vc_message_box-icon"><i class="fa fa-bars"></i>
                                    </div>
                                    <p><strong><span style="font-size: 14pt;">Related Product</span></strong></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul id="paginationList">
                        <?php
                        $relatedProducts = get_posts(array(
                            'post_type' => 'product',
                            'post_per_page' => -1,
                            'orderby' => 'rand',
                            'exclude' => get_the_ID(),
                            'post_parent' => 0,

                        ));
                        foreach ($relatedProducts as $related) {

                            ?>
                            <li class="vc_row wpb_row vc_inner td-pb-row list-pagination" id="side-bar-single-product">
                                <div class="wpb_column vc_column_container td-pb-span12">
                                    <div class="wpb_wrapper">
                                        <div class="wpb_text_column wpb_content_element  vc_custom_1445648376068">
                                            <div class="wpb_wrapper" style="background-color: #006505">
                                                <p><a target="_blank"
                                                      href="<?php echo get_the_permalink($related->ID); ?>">
                                                        <?php echo get_the_post_thumbnail($related->ID); ?>
                                                    </a><br>
                                                    <span style="color: #ffffff;"><strong><span
                                                                style="font-size: 12pt;"><?php echo $related->post_title; ?>
                                                                :<?php echo get_post_meta($related->ID, 'price', true); ?></span></strong></span><br>
                                                    <span style="color: #ffffff;"> <strong><span
                                                                style="font-size: 12pt;"> Mã s?: <?php echo get_post_meta($related->ID, 'product_code', true); ?></span></strong></span><br>
                                                    <em><strong><span style="font-size: 12pt;"> <a target="_blank"
                                                                                                   href="<?php echo get_the_permalink($related->ID); ?>">
                                                                    &gt;&gt;&gt;&gt;Xem Chi
                                                                    Tiet</a></span></strong></em>
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
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
                    <div class="vc_row wpb_row vc_inner td-pb-row">
                        <div class="wpb_column vc_column_container td-pb-span12">
                            <div class="wpb_wrapper"><br>
                            </div>
                        </div>
                    </div>
                    <div class="vc_row wpb_row vc_inner td-pb-row">
                        <div class="wpb_column vc_column_container td-pb-span12">
                            <div class="wpb_wrapper"><br>
                            </div>
                        </div>
                    </div>
                    <div class="vc_row wpb_row vc_inner td-pb-row">
                        <div class="wpb_column vc_column_container td-pb-span12">
                            <div class="wpb_wrapper"><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--        </div>-->

    </div>
<?php endif; ?>


<?php get_footer(); ?>
