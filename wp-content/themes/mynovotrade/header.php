<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MyNovoTrade
 */

?>





<!doctype html>
<html <?php language_attributes(); ?>>

<head>

    <meta charset="UTF-8">
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">


    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/container.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">

    <?php
    $home_page = 'Home page';
    $sing_up = 'Sing up';
    $sing_in = 'Sing in';

    if (get_the_title() === $home_page) { ?>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/mainPage.css">
    <?php } elseif (get_the_title() === $sing_up) { ?>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/signUp.css">
    <?php } elseif (get_the_title() === $sing_in) { ?>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/signIn.css">
    <?php } else { ?>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/secondaryPage.css">
    <?php } ?>




    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <title>Novo Trade Group </title>


    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header>


        <ul class="header__content">

            <li class="header-logo header-item">

                <a href="<?php echo home_url();  ?>" class="logo-item">
                    <img style="width: 100%; height: 100%" src="<?php the_field('header_logo', 'options'); ?>" />
                </a>
            </li>

            <li class="header-toggle-menu" id="toggle-menu">
                <div class="line-menu half start"></div>
                <div class="line-menu"></div>
                <div class="line-menu half end"></div>
            </li>

            <!--            ====================-->
            <?php
            $menu_name = 'menu_header';
            $locations = get_nav_menu_locations();
            $menu_items = wp_get_nav_menu_items($locations[$menu_name]);

            foreach ((array) $menu_items as $key => $menu_item) {

                if ($menu_item->menu_item_parent === '0') {

                    $items[] = $menu_item;
                } else {
                    $sub_items[] = $menu_item;
                }
            }

            foreach ($items as $item) : ?>
                <li class="header-item dropdown">
                    <a class="header-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">

                        <?php echo ($item->title); ?>

                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <?php foreach ($sub_items as $item_sub) : ?>

                            <?php if ($item_sub->menu_item_parent == $item->ID) : ?>

                                <li><a href=" <?php echo ($item_sub->url); ?>" class="dropdown-item" href="#"><?php echo ($item_sub->title); ?> </a></li>

                            <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>
                </li>
            <?php endforeach; ?>


            <li class="header-item btn-crt-acc">
                <a href="http://localhost:8888/sing-up/" class="header-link" href="#">Create Account</a>
            </li>
        </ul>

    </header>