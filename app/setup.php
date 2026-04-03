<?php

namespace SagePress;

/**
 * Theme setup.
 */
add_action('after_setup_theme', function () {
    /**
     * Register navigation menus.
     */
    register_nav_menus([
        'primary_navigation' => __('Primary Navigation', 'sagepress'),
        'footer_navigation' => __('Footer Navigation', 'sagepress'),
    ]);

    /**
     * Register sidebars.
     */
    register_sidebar([
        'name' => __('Primary Sidebar', 'sagepress'),
        'id' => 'sidebar-primary',
        'before_widget' => '<section class="widget %1$s %2$s mb-12 p-6 bg-white rounded-2xl border border-gray-100 shadow-sm">',
        'after_widget' => '</section>',
        'before_title' => '<h3 class="text-xs font-black uppercase tracking-widest text-brand-primary mb-6">',
        'after_title' => '</h3>',
    ]);

    /**
     * Enable theme supports.
     */
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('responsive-embeds');
    add_theme_support('customize-selective-refresh-widgets');
    add_theme_support('html5', ['caption', 'comment-form', 'comment-list', 'gallery', 'search-form', 'style', 'script']);
    add_theme_support('custom-logo');
}, 20);

/**
 * Register theme assets.
 */
add_action('wp_enqueue_scripts', function () {
    // Assets are handled via @vite in Blade templates.
}, 100);
