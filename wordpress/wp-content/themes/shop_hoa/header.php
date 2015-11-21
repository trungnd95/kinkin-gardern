<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package We Can
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/parallax.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.parallax-scroll.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/paginate.js"></script>
    <?php wp_head(); ?>
    <meta charset="UTF-8"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="pingback" href="http://hoachaudalat.net/xmlrpc.php"/>
    <link rel="alternate" type="application/rss+xml" title="Hoa ch?u &raquo; Feed"
          href="http://hoachaudalat.net/feed/"/>
    <link rel="alternate" type="application/rss+xml" title="Hoa ch?u &raquo; Comments Feed"
          href="http://hoachaudalat.net/comments/feed/"/>
    <script type="text/javascript">
        window._wpemojiSettings = {
            "baseUrl": "http:\/\/s.w.org\/images\/core\/emoji\/72x72\/",
            "ext": ".png",
            "source": {"concatemoji": "http:\/\/hoachaudalat.net\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.3.1"}
        };
        !function (a, b, c) {
            function d(a) {
                var c = b.createElement("canvas"), d = c.getContext && c.getContext("2d");
                return d && d.fillText ? (d.textBaseline = "top", d.font = "600 32px Arial", "flag" === a ? (d.fillText(String.fromCharCode(55356, 56812, 55356, 56807), 0, 0), c.toDataURL().length > 3e3) : (d.fillText(String.fromCharCode(55357, 56835), 0, 0), 0 !== d.getImageData(16, 16, 1, 1).data[0])) : !1
            }

            function e(a) {
                var c = b.createElement("script");
                c.src = a, c.type = "text/javascript", b.getElementsByTagName("head")[0].appendChild(c)
            }

            var f, g;
            c.supports = {simple: d("simple"), flag: d("flag")}, c.DOMReady = !1, c.readyCallback = function () {
                c.DOMReady = !0
            }, c.supports.simple && c.supports.flag || (g = function () {
                c.readyCallback()
            }, b.addEventListener ? (b.addEventListener("DOMContentLoaded", g, !1), a.addEventListener("load", g, !1)) : (a.attachEvent("onload", g), b.attachEvent("onreadystatechange", function () {
                "complete" === b.readyState && c.readyCallback()
            })), f = c.source || {}, f.concatemoji ? e(f.concatemoji) : f.wpemoji && f.twemoji && (e(f.twemoji), e(f.wpemoji)))
        }(window, document, window._wpemojiSettings);
    </script>
    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel='stylesheet' id='rs-plugin-settings-css'
          href='http://hoachaudalat.net/wp-content/plugins/revslider/rs-plugin/css/settings.css?ver=4.6.93'
          type='text/css' media='all'/>
    <style id='rs-plugin-settings-inline-css' type='text/css'>
        .tp-caption a {
            color: #ff7302;
            text-shadow: none;
            -webkit-transition: all 0.2s ease-out;
            -moz-transition: all 0.2s ease-out;
            -o-transition: all 0.2s ease-out;
            -ms-transition: all 0.2s ease-out
        }

        .tp-caption a:hover {
            color: #ffa902
        }
    </style>
    <link rel='stylesheet' id='owl.carousel.css-css'
          href='http://hoachaudalat.net/wp-content/plugins/showcase-visual-composer-addon/assets/css/owl.carousel.min.css?ver=1.3.3'
          type='text/css' media=''/>
    <link rel='stylesheet' id='owl.theme.css-css'
          href='http://hoachaudalat.net/wp-content/plugins/showcase-visual-composer-addon/assets/css/owl.theme.min.css?ver=1.3.3'
          type='text/css' media=''/>
    <link rel='stylesheet' id='sc.vc.addon.style-css'
          href='http://hoachaudalat.net/wp-content/plugins/showcase-visual-composer-addon/assets/css/style.min.css?ver=1.0.4'
          type='text/css' media=''/>
    <link rel='stylesheet' id='google_font_open_sans-css'
          href='http://fonts.googleapis.com/css?family=Open+Sans%3A300italic%2C400italic%2C600italic%2C400%2C600%2C700&#038;ver=4.3.1'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='google_font_roboto-css'
          href='http://fonts.googleapis.com/css?family=Roboto%3A500%2C400italic%2C700%2C500italic%2C400&#038;ver=4.3.1'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='js_composer_front-css'
          href='http://hoachaudalat.net/wp-content/plugins/js_composer/assets/css/js_composer.css?ver=4.6.2'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='td-theme-css'
          href='http://hoachaudalat.net/wp-content/themes/Newspaper/style.css?ver=6.3' type='text/css' media='all'/>
    <script type='text/javascript' src='http://hoachaudalat.net/wp-includes/js/jquery/jquery.js?ver=1.11.3'></script>
    <script type='text/javascript'
            src='http://hoachaudalat.net/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.2.1'></script>
    <script type='text/javascript'
            src='http://hoachaudalat.net/wp-content/plugins/revslider/rs-plugin/js/jquery.themepunch.tools.min.js?ver=4.6.93'></script>
    <script type='text/javascript'
            src='http://hoachaudalat.net/wp-content/plugins/revslider/rs-plugin/js/jquery.themepunch.revolution.min.js?ver=4.6.93'></script>
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://hoachaudalat.net/xmlrpc.php?rsd"/>
    <link rel="wlwmanifest" type="application/wlwmanifest+xml"
          href="http://hoachaudalat.net/wp-includes/wlwmanifest.xml"/>
    <meta name="generator" content="WordPress 4.3.1"/>
    <link rel='canonical' href='http://hoachaudalat.net/'/>
    <link rel='shortlink' href='http://hoachaudalat.net/'/>
    <script type="text/javascript">
        jQuery(document).ready(function () {
            // CUSTOM AJAX CONTENT LOADING FUNCTION
            var ajaxRevslider = function (obj) {

                // obj.type : Post Type
                // obj.id : ID of Content to Load
                // obj.aspectratio : The Aspect Ratio of the Container / Media
                // obj.selector : The Container Selector where the Content of Ajax will be injected. It is done via the Essential Grid on Return of Content

                var content = "";

                data = {};

                data.action = 'revslider_ajax_call_front';
                data.client_action = 'get_slider_html';
                data.token = 'acd9b37e1f';
                data.type = obj.type;
                data.id = obj.id;
                data.aspectratio = obj.aspectratio;

                // SYNC AJAX REQUEST
                jQuery.ajax({
                    type: "post",
                    url: "http://hoachaudalat.net/wp-admin/admin-ajax.php",
                    dataType: 'json',
                    data: data,
                    async: false,
                    success: function (ret, textStatus, XMLHttpRequest) {
                        if (ret.success == true)
                            content = ret.data;
                    },
                    error: function (e) {
                        console.log(e);
                    }
                });

                // FIRST RETURN THE CONTENT WHEN IT IS LOADED !!
                return content;
            };

            // CUSTOM AJAX FUNCTION TO REMOVE THE SLIDER
            var ajaxRemoveRevslider = function (obj) {
                return jQuery(obj.selector + " .rev_slider").revkill();
            };

            // EXTEND THE AJAX CONTENT LOADING TYPES WITH TYPE AND FUNCTION
            var extendessential = setInterval(function () {
                if (jQuery.fn.tpessential != undefined) {
                    clearInterval(extendessential);
                    if (typeof(jQuery.fn.tpessential.defaults) !== 'undefined') {
                        jQuery.fn.tpessential.defaults.ajaxTypes.push({
                            type: "revslider",
                            func: ajaxRevslider,
                            killfunc: ajaxRemoveRevslider,
                            openAnimationSpeed: 0.3
                        });
                        // type:  Name of the Post to load via Ajax into the Essential Grid Ajax Container
                        // func: the Function Name which is Called once the Item with the Post Type has been clicked
                        // killfunc: function to kill in case the Ajax Window going to be removed (before Remove function !
                        // openAnimationSpeed: how quick the Ajax Content window should be animated (default is 0.3)
                    }
                }
            }, 30);
        });
    </script>
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <meta name="generator" content="Powered by Visual Composer - drag and drop page builder for WordPress."/>
    <!--[if IE 8]>
    <link rel="stylesheet" type="text/css"
          href="http://hoachaudalat.net/wp-content/plugins/js_composer/assets/css/vc-ie8.css" media="screen">
    <![endif]-->
    <!-- JS generated by theme -->

    <script>


        var td_blocks = []; //here we store all the items for the current page

        //td_block class - each ajax block uses a object of this class for requests
        function td_block() {
            this.id = '';
            this.block_type = 1; //block type id (1-234 etc)
            this.atts = '';
            this.td_column_number = '';
            this.td_current_page = 1; //
            this.post_count = 0; //from wp
            this.found_posts = 0; //from wp
            this.max_num_pages = 0; //from wp
            this.td_filter_value = ''; //current live filter value
            this.td_filter_ui_uid = ''; //used to select a item from the drop down filter
            this.is_ajax_running = false;
            this.td_user_action = ''; // load more or infinite loader (used by the animation)
            this.header_color = '';
            this.ajax_pagination_infinite_stop = ''; //show load more at page x
        }


        // td_js_generator - mini detector
        (function () {
            var html_tag = document.getElementsByTagName("html")[0];

            if (navigator.userAgent.indexOf("MSIE 10.0") > -1) {
                html_tag.className += ' ie10';
            }

            if (!!navigator.userAgent.match(/Trident.*rv\:11\./)) {
                html_tag.className += ' ie11';
            }

            if (/(iPad|iPhone|iPod)/g.test(navigator.userAgent)) {
                html_tag.className += ' td-md-is-ios';
            }

            var user_agent = navigator.userAgent.toLowerCase();
            if (user_agent.indexOf("android") > -1) {
                html_tag.className += ' td-md-is-android';
            }

            if (navigator.userAgent.indexOf('Mac OS X') != -1) {
                html_tag.className += ' td-md-is-os-x';
            }

            if (/chrom(e|ium)/.test(navigator.userAgent.toLowerCase())) {
                html_tag.className += ' td-md-is-chrome';
            }

            if (navigator.userAgent.indexOf('Firefox') != -1) {
                html_tag.className += ' td-md-is-firefox';
            }

            if (navigator.userAgent.indexOf('Safari') != -1 && navigator.userAgent.indexOf('Chrome') == -1) {
                html_tag.className += ' td-md-is-safari';
            }

        })();


        var td_viewport_interval_list = [{"limit_bottom": 767, "sidebar_width": 228}, {
            "limit_bottom": 1018,
            "sidebar_width": 300
        }, {"limit_bottom": 1140, "sidebar_width": 324}];
        var td_animation_stack_effect = "type0";
        var tds_animation_stack = true;
        var td_animation_stack_specific_selectors = ".entry-thumb, img";
        var td_animation_stack_general_selectors = ".td-animation-stack img, .post img";
        var td_ajax_url = "http:\/\/hoachaudalat.net\/wp-admin\/admin-ajax.php?td_theme_name=Newspaper&v=6.3";
        var td_get_template_directory_uri = "http:\/\/hoachaudalat.net\/wp-content\/themes\/Newspaper";
        var tds_snap_menu = "snap";
        var tds_logo_on_sticky = "";
        var tds_header_style = "7";
        var td_please_wait = "Please wait...";
        var td_email_user_pass_incorrect = "User or password incorrect!";
        var td_email_user_incorrect = "Email or username incorrect!";
        var td_email_incorrect = "Email incorrect!";
        var tds_more_articles_on_post_enable = "";
        var tds_more_articles_on_post_time_to_wait = "";
        var tds_more_articles_on_post_pages_distance_from_top = 0;
        var tds_theme_color_site_wide = "#4db2ec";
        var tds_smart_sidebar = "";
        var td_theme_v = "Ni4z";
        var td_theme_n = "TmV3c3BhcGVy";
        var td_magnific_popup_translation_tPrev = "Previous (Left arrow key)";
        var td_magnific_popup_translation_tNext = "Next (Right arrow key)";
        var td_magnific_popup_translation_tCounter = "%curr% of %total%";
        var td_magnific_popup_translation_ajax_tError = "The content from %url% could not be loaded.";
        var td_magnific_popup_translation_image_tError = "The image #%curr% could not be loaded.";
        var td_ad_background_click_link = "";
        var td_ad_background_click_target = "";
    </script>


    <!-- Header style compiled by theme -->

    <style>


        body {
            background-color: #606060;
        }

        .sf-menu ul .td-menu-item > a:hover,
        .sf-menu ul .sfHover > a,
        .sf-menu ul .current-menu-ancestor > a,
        .sf-menu ul .current-category-ancestor > a,
        .sf-menu ul .current-menu-item > a,
        .sf-menu > .current-menu-item > a:after,
        .sf-menu > .current-menu-ancestor > a:after,
        .sf-menu > .current-category-ancestor > a:after,
        .sf-menu > li:hover > a:after,
        .sf-menu > .sfHover > a:after,
        .td_block_mega_menu .td-next-prev-wrap a:hover,
        .td-mega-span .td-post-category:hover,
        .td-header-wrap .black-menu .sf-menu > li > a:hover,
        .td-header-wrap .black-menu .sf-menu > .current-menu-ancestor > a,
        .td-header-wrap .black-menu .sf-menu > .sfHover > a,
        .header-search-wrap .td-drop-down-search:after,
        .header-search-wrap .td-drop-down-search .btn:hover,
        .td-header-wrap .black-menu .sf-menu > .current-menu-item > a,
        .td-header-wrap .black-menu .sf-menu > .current-menu-ancestor > a,
        .td-header-wrap .black-menu .sf-menu > .current-category-ancestor > a,
        .td-mobile-close a {
            background-color: #1a682c;
        }

        .td_block_mega_menu .td-next-prev-wrap a:hover {
            border-color: #1a682c;
        }

        .header-search-wrap .td-drop-down-search:before {
            border-color: transparent transparent #1a682c transparent;
        }

        .td_mega_menu_sub_cats .cur-sub-cat,
        .td_mod_mega_menu:hover .entry-title a,
        .td-mobile-content li a:hover {
            color: #1a682c;
        }

        .td-header-wrap .td-header-menu-wrap .sf-menu > li > a,
        .td-header-wrap .header-search-wrap .td-icon-search {
            color: #1a682c;
        }
    </style>

    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-69204592-1', 'auto');
        ga('send', 'pageview');

    </script>
    <style id="tt-easy-google-font-styles" type="text/css">

        p {
        }

        h1 {
        }

        h2 {
        }

        h3 {
        }

        h4 {
        }

        h5 {
        }

        h6 {
        }

        {
        }


    </style>
    <style type="text/css" data-type="vc_shortcodes-custom-css">.vc_custom_1445514939617 {
            background-color: #1a682c !important;
        }

        .vc_custom_1445566018434 {
            background-color: #1a682c !important;
        }

        .vc_custom_1445513360925 {
            margin-top: 1px !important;
            margin-bottom: 1px !important;
            border-top-width: 1px !important;
            border-bottom-width: 1px !important;
            padding-top: 1px !important;
            padding-bottom: 1px !important;
        }

        .vc_custom_1445650861307 {
            border-top-width: 1px !important;
            border-right-width: 1px !important;
            border-bottom-width: 1px !important;
            border-left-width: 1px !important;
            background-color: #1a682c !important;
            border-left-color: #dddddd !important;
            border-left-style: solid !important;
            border-right-color: #dddddd !important;
            border-right-style: solid !important;
            border-top-color: #dddddd !important;
            border-top-style: solid !important;
            border-bottom-color: #dddddd !important;
            border-bottom-style: solid !important;
        }

        .vc_custom_1445650873266 {
            border-top-width: 1px !important;
            border-right-width: 1px !important;
            border-bottom-width: 1px !important;
            border-left-width: 1px !important;
            background-color: #1a682c !important;
            border-left-color: #dddddd !important;
            border-left-style: solid !important;
            border-right-color: #dddddd !important;
            border-right-style: solid !important;
            border-top-color: #dddddd !important;
            border-top-style: solid !important;
            border-bottom-color: #dddddd !important;
            border-bottom-style: solid !important;
        }

        .vc_custom_1445674858013 {
            border-top-width: 1px !important;
            border-right-width: 1px !important;
            border-bottom-width: 1px !important;
            border-left-width: 1px !important;
            background-color: #1a682c !important;
            border-left-color: #dddddd !important;
            border-left-style: solid !important;
            border-right-color: #dddddd !important;
            border-right-style: solid !important;
            border-top-color: #dddddd !important;
            border-top-style: solid !important;
            border-bottom-color: #dddddd !important;
            border-bottom-style: solid !important;
        }

        .vc_custom_1445650903604 {
            border-top-width: 1px !important;
            border-right-width: 1px !important;
            border-bottom-width: 1px !important;
            border-left-width: 1px !important;
            background-color: #1a682c !important;
            border-left-color: #dddddd !important;
            border-left-style: solid !important;
            border-right-color: #dddddd !important;
            border-right-style: solid !important;
            border-top-color: #dddddd !important;
            border-top-style: solid !important;
            border-bottom-color: #dddddd !important;
            border-bottom-style: solid !important;
        }

        .vc_custom_1445650890529 {
            border-top-width: 1px !important;
            border-right-width: 1px !important;
            border-bottom-width: 1px !important;
            border-left-width: 1px !important;
            background-color: #1a682c !important;
            border-left-color: #dddddd !important;
            border-left-style: solid !important;
            border-right-color: #dddddd !important;
            border-right-style: solid !important;
            border-top-color: #dddddd !important;
            border-top-style: solid !important;
            border-bottom-color: #dddddd !important;
            border-bottom-style: solid !important;
        }

        .vc_custom_1445830956874 {
            border-top-width: 1px !important;
            border-right-width: 1px !important;
            border-bottom-width: 1px !important;
            border-left-width: 1px !important;
            background-color: #1a682c !important;
            border-left-color: #dddddd !important;
            border-left-style: solid !important;
            border-right-color: #dddddd !important;
            border-right-style: solid !important;
            border-top-color: #dddddd !important;
            border-top-style: solid !important;
            border-bottom-color: #dddddd !important;
            border-bottom-style: solid !important;
        }

        .vc_custom_1445565700613 {
            background-color: #1a682c !important;
        }

        .vc_custom_1445513373222 {
            background-color: #f4f4f4 !important;
        }

        .vc_custom_1445514211216 {
            border-top-width: 1px !important;
            border-right-width: 1px !important;
            border-bottom-width: 1px !important;
            border-left-width: 1px !important;
            background-color: #ededed !important;
            border-left-color: #c1c1c1 !important;
            border-left-style: solid !important;
            border-right-color: #c1c1c1 !important;
            border-right-style: solid !important;
            border-top-color: #c1c1c1 !important;
            border-top-style: solid !important;
            border-bottom-color: #c1c1c1 !important;
            border-bottom-style: solid !important;
        }</style>
    <noscript>
        <style> .wpb_animate_when_almost_visible {
                opacity: 1;
            }</style>
    </noscript>
    <!-- Facebook Pixel Code -->
    <script>
        !function (f, b, e, v, n, t, s) {
            if (f.fbq)return;
            n = f.fbq = function () {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq)f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window,
            document, 'script', '//connect.facebook.net/en_US/fbevents.js');

        fbq('init', '1623965214536259');
        fbq('track', "PageView");</script>
    <noscript><img height="1" width="1" style="display:none"
                   src="https://www.facebook.com/tr?id=1623965214536259&ev=PageView&noscript=1"
            /></noscript>
    <!-- End Facebook Pixel Code -->
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site container">
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'we-can'); ?></a>
    <header id="masthead" class="site-header" role="banner">
<!--        <div class="container">-->
            <div class="first-menu">
                <nav class="navbar navbar-default" role="navigation">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse"
                                    data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand"
                               href="<?php echo home_url(); ?>"><?php echo get_bloginfo('name'); ?></a>
                        </div>

                        <?php
                        wp_nav_menu(array(
                                'menu' => 'primary',
                                'theme_location' => 'primary',
                                'depth' => 2,
                                'container' => 'div',
                                'container_class' => 'collapse navbar-collapse',
                                'container_id' => 'bs-example-navbar-collapse-1',
                                'menu_class' => 'nav navbar-nav wc-nav-s1',
                                'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                                'walker' => new wp_bootstrap_navwalker())
                        );
                        ?>
                    </div>
                </nav>
            </div>
<!--        </div>-->

        <!--        --><?php //if (!is_front_page()): ?>
        <!--            <div class="banner">-->
        <!--            </div>-->
        <!--            --><?php //bloglow_get_breadcrumb_navigation(); ?>
        <!--        --><?php //endif; ?>

    </header>
    <!-- #masthead -->

    <div id="content" class="site-content">
