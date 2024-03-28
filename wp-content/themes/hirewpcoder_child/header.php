<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <div class="container">
            <div class="headerContent">
                <div class="logo">
                    <a href="#">
                        <img src="http://localhost/hirewpcoder/wp-content/uploads/2024/03/WordPress-logotype-wmark-white.png" alt="">
                        <p>HirewpCoders</p>
                    </a>
                </div>
                <div class="navContent">
                    <button class="hamburger">&#9776;</button>
                    <nav>
                        <ul>
                            <?php
                            $menu_name = 'Header Menu'; // Replace 'your_menu_slug' with the slug of your menu
                            $menu_items = wp_get_nav_menu_items($menu_name);
                            
                            if ($menu_items) {
                                foreach ($menu_items as $menu_item) {
                                    // Do something with each menu item, like display its title or link
                                    echo '<li><a href="' . $menu_item->url . '">' . $menu_item->title . '</a></li>';
                                }
                            }
                            
                            ?>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>