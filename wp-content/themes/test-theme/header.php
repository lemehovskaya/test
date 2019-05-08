<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/imgs/favicon.png" type="image/png"/>

    <!--[if lte IE 9 ]>
    <script>
        alert('Browser version is too old and site will not be displayed correctly. Please, upgrade your browser.');
    </script>
    <![endif]-->

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="site">
    <header class="header">
        <div class="container">
            <div class="header-menu">

                <div class="navbar-head">
                    <a class="logo" href="/">
                        <strong>Krip</strong>dom
                    </a>
                </div>

                <div class="wrap-right-side">
                    <div class="menu menu-type">

                        <?php
                        wp_nav_menu(array(
                                'menu' => 'Main menu',
                                'container' => '',
                                'menu_class' => 'nav navbar-nav'
                            )
                        );
                        ?>
                    </div>

                    <a class="orange-btn client-area-btn" href="/partner-with-us">Client Area</a>

                    <div id="menu-trigger" class="menu-trigger">
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div id="content" class="site-content">