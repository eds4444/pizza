<?php

remove_action( 'wp_head', 'print_emoji_detection_script');
remove_action( 'admin_print_scripts', 'print_emoji_detection_script');
remove_action( 'wp_print_styles', 'print_emoji_styles');
remove_action( 'admin_print_styles', 'print_emoji_styles');

remove_action( 'wp_head', 'wp_resource_hints', 2);
remove_action( 'wp_head', 'wp_generator');
remove_action( 'wp_head', 'wlwmanifest_link');
remove_action( 'wp_head', 'rsd_link');
remove_action( 'wp_head', 'rest_output_link_wp_head');
remove_action( 'wp_head', 'rel_canonical');
remove_action( 'wp_head', 'wp_shortlink_wp_head', 10);
remove_action( 'wp_head', 'wp_oembed_add_discovery_links');

add_action('wp_enqueue_scripts', 'site_scripts');

function site_scripts(){
    $version = '0.0.0.0';
    wp_dequeue_style( 'wp-block-library');
    wp_deregister_script( 'wp-embed' );

    wp_enqueue_style('google-fons', 'https://fonts.googleapis.com/css?family=Montserrat:900%7CRoboto:300&display=swap&subset=cyrillic', [], $version);
    wp_enqueue_style('maine-style', get_stylesheet_uri( ), [], $version);

    wp_enqueue_script('focus-visible', 'https://unpkg.com/focus-visible@5.0.2/dist/focus-visible.js', [], $version, true);
    
}

