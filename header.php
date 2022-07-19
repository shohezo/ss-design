<!DOCTYPE html>
<html lang="jp">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo wp_get_document_title();?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>" />
    <!-- OGP -->
    <meta property="og:url" content="https://ss-design1104.com/" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="ss-design" />
    <meta property="og:description" content="Webデザイナー齊藤翔平のポートフォリオサイトです。" />
    <meta property="og:site_name" content="ss-design" />
    <meta property="og:image" content="https://ss-design1104.com/wp-content/themes/ss-design/img/ss_logo.png" />
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/reset.css" />
    <link rel="icon" type="image/x-icon" href="<?php bloginfo('template_url');?>/img/favicon (1).ico" />
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/style.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/responsive.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css"
        integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous" />
    <!-- Adobe fontsの読み込み -->
    <script>
    (function(d) {
        var config = {
                kitId: 'ded2wsw',
                scriptTimeout: 3000,
                async: true
            },
            h = d.documentElement,
            t = setTimeout(function() {
                h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
            }, config.scriptTimeout),
            tk = d.createElement("script"),
            f = false,
            s = d.getElementsByTagName("script")[0],
            a;
        h.className += " wf-loading";
        tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
        tk.async = true;
        tk.onload = tk.onreadystatechange = function() {
            a = this.readyState;
            if (f || a && a != "complete" && a != "loaded") return;
            f = true;
            clearTimeout(t);
            try {
                Typekit.load(config)
            } catch (e) {}
        };
        s.parentNode.insertBefore(tk, s)
    })(document);
    </script>
    <!-- マウスストーカー用・TweenMax -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
    <!-- パララックス用CDN -->
    <script src="https://cdn.jsdelivr.net/npm/simple-parallax-js@5.1.0/dist/simpleParallax.min.js"></script>
    <!-- Ptengine Tag -->
    <script src="https://js.ptengine.jp/6fqnu7bc.js"></script>
    <!-- End Ptengine Tag -->
</head>

<body>
    <!-- マウスストーカー -->
    <div class="cursor"></div>
    <div class="follower"></div>
    <header class="ly_header">
        <div class="ly_inner">
            <a class="el_logo" href="<?php bloginfo('url');?>">
                <img src="<?php bloginfo('template_url');?>/img/ss_logo.png" alt="ロゴマーク" />
                <h1 class="el_logoType">ss design</h1>
            </a>
            <nav class="bl_headerNav">
                <ul class="bl_headerNav_item">
                    <li class="bl_headerNav_list"><a href="<?php bloginfo('url');?>/about">About</a></li>
                    <li class="bl_headerNav_list"><a href="<?php bloginfo('url');?>/works">Works</a></li>
                    <li class="bl_headerNav_list"><a href="<?php bloginfo('url');?>/blog">Blog</a></li>
                    <li class="bl_headerNav_list"><a href="<?php bloginfo('url');?>/contact">Contact</a></li>
                </ul>
            </nav>
        </div>
        <?php wp_head(); ?>
    </header>
    <!-- ファーストビュー -->