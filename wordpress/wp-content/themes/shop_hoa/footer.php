<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package shop_hoa
 */

?>

<script>
    jQuery(function() {
        var paginate = $.fn.paginate({

            // list items per page
            perPage  : 4,

            // pagination ul Id
            pageId    : "paginationList",

            // pager Id
            pager    : "pager",

            // pagination images
            leftImgSrc  : "<?php bloginfo('template_url') ?>/css/images/pager-left.png",
            rightImgSrc  : "<?php bloginfo('template_url') ?>/css/images/pager-right.png",
            leftImgActiveSrc : "<?php bloginfo('template_url') ?>/css/images/pager-left-active.png",
            rightImgActiveSrc : "<?php bloginfo('template_url') ?>/css/images/pager-right-active.png",
        });
        var paginate = $.fn.paginate({

            // list items per page
            perPage  : 6,

            // pagination ul Id
            pageId    : "paginationList1",

            // pager Id
            pager    : "pager",

            // pagination images
            leftImgSrc  : "<?php bloginfo('template_url') ?>/css/images/pager-left.png",
            rightImgSrc  : "<?php bloginfo('template_url') ?>/css/images/pager-right.png",
            leftImgActiveSrc : "<?php bloginfo('template_url') ?>/css/images/pager-left-active.png",
            rightImgActiveSrc : "<?php bloginfo('template_url') ?>/css/images/pager-right-active.png",
        });
    })
</script>
</div><!-- #content -->


<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="td-footer-wrapper">
        <div class="td-container">
            <div class="td-pb-row">
                <div class="td-pb-span12">
                </div>
            </div>

            <div class="td-pb-row">

                <div class="td-pb-span12">
                </div>
            </div>
        </div>

        <div class="td-footer-bottom-full">
            <div class="td-container">
                <div class="td-pb-row">
                    <div class="td-pb-span3">
                        <aside class="footer-logo-wrap">
                            <a href="javascript:void(0);">Kinkin Garden</a>
                        </aside>
                    </div>
                    <div class="td-pb-span5">
                        <aside class="footer-text-wrap">
                            <div class="block-title"><span><a href="http://localhost/ShopHoa/wordpress/about-us/ ?">About Us</a></span></div>
                            Shop Hoa Tran Cung
                            <div class="footer-email-wrap">Contact us: <a href="mailto:tamadavietnam@gmail.com">tamadavietnam@gmail.com</a>
                            </div>
                        </aside>
                    </div>
                    <div class="td-pb-span4">
                        <aside class="footer-social-wrap td-social-style-2">
                            <div class="block-title"><span><a href="https://www.facebook.com/KinkinGarden/?fref=ts">Follow Us</a></span></div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
