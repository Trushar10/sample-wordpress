//header template to show header on each password_get_info

//use header-name.php to create other hearders and use get_header('name') to call template

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <?php wp_head(); ?>
</head>

<body>
    <div id="page">
        <header>
            <nav>
                <div class="navbar">
                    <div class="site-identity">
                        <a href="<?php echo get_home_url(); ?>"><img src="<?php header_image(); ?>" alt="" /></a>
                        <div>
                            <a href="<?php echo get_home_url(); ?>">
                                <h2><?php echo get_bloginfo( 'name' ); ?></h2>
                            </a>
                            <a href="<?php echo get_home_url(); ?>">
                                <h5>
                                    <?php echo get_bloginfo( 'description' ); ?>
                                </h5>
                            </a>
                        </div>
                    </div>
                    <div id="nav-button">
                        <div class="icon">
                            <span class="line top"></span>
                            <span class="line middle"></span>
                            <span class="line bottom"></span>
                        </div>
                    </div>
                    <div class="right">
                        <?php

                        if( has_nav_menu( 'primary' ) ){
                            wp_nav_menu([
                                'theme_location' => 'primary',
                                'container' => false,
                                'menu_class' => 'menu hide',
                                'fallback_cb' => false,
                                'depth' => 2
                            ]);
                        }

                        ?>
                        <div class="cart">
                            <a href="<?php echo wc_get_cart_url() ?>"><img src="" alt="" srcset=""></a>
                            <div class="bag-count">
                                <small class="count"><?php echo WC()->cart->get_cart_contents_count(); ?></small>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>