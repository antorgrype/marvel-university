<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?= bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="site-header">
        <div class="container">
            <h1 class="school-logo-text float-left">
                <a href="<?= site_url() ?>"><strong>Marvel</strong> University</a>
            </h1>
            <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search"
                    aria-hidden="true"></i></span>
            <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
            <div class="site-header__menu group">
                <nav class="main-navigation">
                    <ul>
                        <?php
                            $aboutPageId = get_page_by_path('about-us')->ID;
                            $aboutUsClass = (is_page('about-us') || wp_get_post_parent_id(get_the_ID()) == $aboutPageId) ? 'current-menu-item' : '';
                        ?>
                        <li class="<?= $aboutUsClass ?>"><a href="<?= site_url('/about-us') ?>">About Us</a></li>
                        <li><a href="#">Programs</a></li>
                        <li><a href="#">Events</a></li>
                        <li><a href="#">Campuses</a></li>
                        <li <?php if(get_post_type() == 'post') echo 'class="current-menu-item"' ?>><a href="<?= site_url('/blog')?>">Blog</a></li>
                    </ul>
                    <!-- <?php
                        wp_nav_menu([
                            'theme_location' => 'header-menu',
                        ])
                    ?> -->
                </nav>
                <div class="site-header__util">
                    <a href="#" class="btn btn--small btn--orange float-left push-right">Login</a>
                    <a href="#" class="btn btn--small btn--dark-orange float-left">Sign Up</a>
                    <span class="search-trigger js-search-trigger"><i class="fa fa-search"
                            aria-hidden="true"></i></span>
                </div>
            </div>
        </div>
    </header>