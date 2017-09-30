<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Magnus
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/style/likely.css">
    <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/likely.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
    <meta name="yandex-verification" content="a510a9527bb01422" />
    <?php wp_head(); ?><meta property="og:image" content="http://www.dalekoblog.com/wp-content/uploads/social_media/social_logo.png" />
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function (d, w, c) {
            (w[c] = w[c] || []).push(function() {
                try {
                    w.yaCounter45896190 = new Ya.Metrika({
                        id:45896190,
                        clickmap:true,
                        trackLinks:true,
                        accurateTrackBounce:true,
                        webvisor:true
                    });
                } catch(e) { }
            });
            
            var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
            s.type = "text/javascript";
            s.async = true;
            s.src = "https://mc.yandex.ru/metrika/watch.js";

            if (w.opera == "[object Opera]") {
                d.addEventListener("DOMContentLoaded", f, false);
            } else { f(); }
        })(document, window, "yandex_metrika_callbacks");
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/45896190" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
</head>

<body <?php body_class(); ?>>
    <div id="page" class="hfeed site">
        <a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'magnus' ); ?></a>

        <header id="masthead" class="site-header" role="banner">
            <div class="site-branding">
                <a class="site-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><span style="font-size: 4rem;" class="icon-logo"></span>
                </a>
                <!-- <?php bloginfo( 'name' ); ?> -->
                <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
            </div><!-- .site-branding -->

            <nav id="site-navigation" class="header-navigation" role="navigation">
                <div class="menu-header-container">

                    <?php wp_nav_menu(
                        array(
                            'theme_location' => 'secondary',
                            'container' => 'false',
                            'menu_id' => 'header-menu',
                            'fallback_cb' => 'false',
                            'depth' => '1'
                            ) ); ?>
                        </div>
                        <button class="sidebar-toggle" aria-controls="sidebar" aria-expanded="false">
                            <span class="sidebar-toggle-icon"><?php _e( 'Sidebar', 'magnus' ); ?></span>
                        </button>
                    </nav><!-- #site-navigation -->

                </header><!-- #masthead -->


                <?php if (is_home()) : ?>

                    <section id="content" class="blog-home-content">

                    <?php else : ?>
                        <section class="site-header-image">
        <?php // Check if this is a post or page, if it has a thumbnail, and if it's a big one
        if ( is_singular() && has_post_thumbnail(  get_the_ID() ) ) :
            // Houston, we have a new header image!
            //echo get_the_post_thumbnail( $post->ID, 'magnus-large' );

            $image_id = get_post_thumbnail_id();
            $url = wp_get_attachment_image_src( $image_id, 'magnus-large' ); ?>

            <div class="section-image" style="background-image: url(<?php echo esc_attr( $url[0] ); ?>);">
            </div><!-- .section-image -->

        <?php elseif ( get_header_image() ) : ?>
            <img src="<?php header_image(); ?>" width="<?php echo HEADER_IMAGE_WIDTH; ?>" height="<?php echo HEADER_IMAGE_HEIGHT; ?>" alt="" />
            <?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
        <?php endif; // end check for featured image or standard header ?>
    </section><!-- .site-header-image -->

    <section id="content" class="site-content">
    <?php endif; // end check for blog homepage ?>
